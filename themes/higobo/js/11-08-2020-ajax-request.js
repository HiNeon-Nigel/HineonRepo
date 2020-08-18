jQuery(document).ready(function ($) {

    $(document).on('click', '.installation_post_item img, .installation_post_item .img-title', function () {

        var postid = $(this).data('postid');

        $('#installation_detail').html('<h1>Loading...</h1>');

        $("html, body").animate({

                scrollTop: $("#installation_detail").offset().top -300

            },

            500,

            'linear');

        console.log(jsobject.ajax_url);

        $.ajax({

            type: "post",

            url : jsobject.ajax_url,

            data : {

                action: "get_post_installation",

                postId: postid

            },

            success: function(response) {

                $('#installation_detail').html(response);

            },

            error: function (e) {

                console.log("ERROR : ", e);

                $('#installation_detail').html('<h1>Something going wrong please try again</h1>');

            }

        });

    });

    var cat = GetURLParameter('cat');
    setTimeout( function(){
        if(cat!='' && cat != undefined){
        //console.log(cat);
        var postid = cat;//$(this).data('postid');
        $('#installation_detail').html('<h1>Loading...</h1>');
       $("html, body").animate({
               scrollTop: $("#installation_detail").offset().top -300
           },
           500,
           'linear');
        $.ajax({
            type : "POST",
            url : jsobject.ajax_url,
            data : {
                action: "get_post_installation",
                postId: cat.toString()
            },
            success: function(response) {
                $('#installation_detail').html(response);
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $('#installation_detail').html('<h1>Something going wrong please try again</h1>');
            }
        });
    }

    }, 1000);


    $(document).on('click', '.product-sub-category-container .category' ,function(){
      var id = jQuery(this).data('id');
      $.ajax({
          type : "POST",
          url : jsobject.ajax_url,
          data : {
              action: "get_category_products",
              cat_id: id
          },
          context : this,
          success: function(response) {
            jQuery('.product-sub-category-container .category').removeClass('active')
            jQuery(this).addClass('active')
            jQuery(this).closest('.container').find('ul.products').html(response)
          },
          error: function (e) {
              console.log("ERROR : ", e);
          }
      });
    })

    jQuery(document).ready(function ($) {
       if($('.wpgis-slider-for').length){
        //var vert  = $('.wpgis-slider-for').slick('slickSetOption','verticalSwiping',false,true);
       }
       $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).on('click', 'button.load_more' ,function(){
      var offset = $(this).attr('data-offset')
      $.ajax({
          type : "POST",
          url : jsobject.ajax_url,
          dataType: 'json',
          data : {
              action: "get_custom_neon_signs_products",
              offset: offset,
			  page_id:jsobject.post_id
          },
          context : this,
          success: function(response) {
            $('.custom-neon-signs-products .products').append(response.data)
            if(!response.next){
              $(this).hide();
			  $(this).parent().addClass('disable');
            }else{
              $(this).attr('data-offset', parseInt(offset)+1)
            }
          },
          error: function (e) {
              console.log("ERROR : ", e);
          }
      });
    })
    $(document).on('input', '.custom-neon-signs-products .has-search input[type="text"]' ,function(){
      var search = $(this).val()
        $.ajax({
            type : "POST",
            url : jsobject.ajax_url,
            dataType: 'json',
            data : {
                action: "get_custom_neon_signs_filter_products",
                search: search
            },
            context : this,
            success: function(response) {
              $('.custom-neon-signs-products .products').html(response.data)
              if(!search.length){
                $('.custom-neon-signs-products button.load_more').show()
                $('.custom-neon-signs-products button.load_more').attr('data-offset', 1)
              }else{
                $('.custom-neon-signs-products button.load_more').hide()
              }
            },
            error: function (e) {
                console.log("ERROR : ", e);
            }
        });
    })

})
