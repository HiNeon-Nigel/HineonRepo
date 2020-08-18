function checkOffset() {
    if ($(window).width() > 835) {
        var images_sec = jQuery('.product .images');
        //alert(jQuery('.woocommerce-tabs').offset().top);
        if (images_sec.length) {
            if (jQuery('.woocommerce-tabs').length) {
                if (jQuery('.product .images').offset().top + jQuery('.product .images').height() >= jQuery('.woocommerce-tabs').offset().top - 20)
                    jQuery('.product .images').css('position', 'unset');
                if (jQuery(document).scrollTop() + window.innerHeight < jQuery('.woocommerce-tabs').offset().top) {
                    jQuery('.product .images').css('position', 'sticky');
                    jQuery('.product .images').css('top', 160);
                }
            }
        }
    }
}
jQuery(document).ready(function($) {
    $(document).scroll(function() {
        checkOffset();
    });
    //added by farooq to hide secondary nav on mobile once clicked sub nav items
    $.fn.carousel.Constructor.TRANSITION_DURATION = 2000 // 2 seconds
    $('div#secondaryNav>ul>li>a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
        // $('.navbar-collapse').removeClass('show');
        // alert('test');
        //return false;
    });

    //added by farooq

    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
    //$('.nav-link').click(function(){
    //    var divId = $(this).attr('href');
    //    //alert($(divId).offset().top);
    //     $('html, body').animate({
    //      scrollTop: $(divId).offset().top - 54
    //    }, 100);
    //  });
    if ($('.wmc-currency-redirect').data('currency') != undefined && $('.wmc-currency-redirect').data('currency') != '') {
        var currency = $('.wmc-currency-redirect').data('currency');
        if (currency == 'CAD') {

            //CAD means USD is selected these links for usa currency
            $('a[id="create_yours"]').attr('href', 'https://' + document.location.host + '/design-your-custom-led-neon-sign-in-usa/');
            $('#create_yours_contact').attr('href', 'https://' + document.location.host + '/custom-neon-design-contact-us-usa/');
            $('a[id="create_yours_contact_bottom"], .create_yours_contact_bottom').attr('href', 'https://' + document.location.host + '/custom-neon-design-contact-us-usa/');
        }
        if (currency == 'USD') {

            //USD means CAD is selected these links for canada currency
            $('a[id="create_yours"]').attr('href', 'https://' + document.location.host + '/design-your-custom-led-neon-sign-in-canada/');
            $('#create_yours_contact').attr('href', 'https://' + document.location.host + '/custom-neon-design-contact-us-canada/');
            $('a[id="create_yours_contact_bottom"], .create_yours_contact_bottom').attr('href', 'https://' + document.location.host + '/custom-neon-design-contact-us-canada/');
        }

    }

    $('.wmc-currency-redirect img').removeClass('lazyloading');
    var banner_slider = $("#_banner_slider").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        // 		  autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

        responsiveClass: true,
        // 		  autoHeight: true,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        nav: true,
        // 		  dots: false,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 1
            },

            1024: {
                items: 1
            },

            1366: {
                items: 1
            }
        }
    });
    banner_slider.on('changed.owl.carousel', function(e) {
        banner_slider.trigger('stop.owl.autoplay');
        banner_slider.trigger('play.owl.autoplay');
    });

    $("#_brands_slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 5
            }
        }
    });
    $('#_steps_slider').owlCarousel({
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 7500,
        autoplayHoverPause: true,

        // 		  animateOut: 'fadeOut',
        // 		  animateIn: 'fadeIn',

        // 		  autoHeight: true,
        dots: false,
        loop: true,
        margin: 30,
        nav: true,
        smartSpeed: 2000,
        stagePadding: 25,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 1
            },

            1024: {
                items: 1.5,
            },
            1366: {
                items: 1.5,
            }
        }
    });
    var steps = $('#_steps_slider');
    checkClasses();
    steps.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses() {
        var total = $('#_steps_slider .owl-stage .owl-item.active').length;

        $('#_steps_slider .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');

        $('#_steps_slider .owl-stage .owl-item.active').each(function(index) {
            if (index === 0) {
                // this is the first one
                $(this).addClass('firstActiveItem');
            }
            if (index === total - 1 && total > 1) {
                // this is the last one
                $(this).addClass('lastActiveItem');
            }
        });
    }

    $(document).on('click', '#_steps_slider .owl-stage .active.lastActiveItem', function() {
        // 		alert('test');
        steps.trigger('next.owl');
    });

    // 	var owl = $('#_steps_slider');
    // 	owl.on('mousewheel', '.owl-stage', function(e) {
    // 	var curr = $(this);
    // 		//var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    // // 		alert(e.delta);
    // 	   if (e.deltaY > 0) {
    // 		  curr.trigger('next.owl');
    // 	   } else {
    // 		  curr.trigger('prev.owl');
    // 	   }
    // 	   e.preventDefault();
    // 	});

    // 	$('body:not(.single-product) a[href*="#"]:not(.not-scroll)').on('click', function(e) {
    // 		e.preventDefault()

    // 		$('html, body').animate(
    // 			{
    // 				scrollTop: $($(this).attr('href')).offset().top - 100,
    // 			},
    // 			500,
    // 			'linear'
    // 		)
    // 	});

    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('.scroll-box').fadeIn();
        } else {
            $('.scroll-box').fadeOut();
        }
    });

    $('.scroll-box').click(function(e) {
        e.preventDefault()
        $("html, body").animate({
                scrollTop: 0
            },
            500,
            'linear');
    });

    var url = document.location.toString();
    if (window.location.href.indexOf('?') > -1) {
        //console.log('url is: '+url.split('#')[1].split('?')[0]);

        $('.nav-tabs a[href="#' + url.split('#')[1].split('?')[0] + '"]').tab('show');
    } else {

        $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    }
    //added by farooq for footer links to work with sub-nav tabs
    $('.footer_support_links a').on('click', function() {
        var tab = $(this).attr('href');
        //alert(tab.split('#')[1]);
        $('.nav-tabs a[href="#' + tab.split('#')[1] + '"]').tab('show');
        if (tab == '#installations') {
            //alert('installation');
        }
        //$('.nav-tabs a[href="#' + tab.split('#')[1] + '"]').tab('show');;

    })

    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function(e) {

        if (window.location.href.indexOf('?') > -1) {} else {
            window.location.hash = e.target.hash;

        }
        $('html, body').animate({
            scrollTop: $(e.target.hash).offset().top - 144
        }, 100);
    });

    // var sidebar = new StickySidebar('._custom_sticky_sidebar', {
    //     containerSelector: '.sticky_wrapper',
    //     innerWrapperSelector: '.woocommerce-product-gallery',
    //     topSpacing: 100,
    //     bottomSpacing: 100
    // });


    //New Home JS
    $('.home-carousel .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        lazyLoadEager: 3,
        responsive: {
            0: {
                items: 1
            }
        }
    });

    $('.gallery-slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        dots: false,
        lazyLoad: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            }
        }
    });
    /*
        richSnippetReviewsWidgets('carousel-inline-widget-810', {
            store: 'hineon-com',
            widgetName: 'carousel-inline',
            primaryClr: '#F47E27',
            neutralClr: '#F4F4F4',
            reviewTextClr:'#2F2F2F',
            ratingTextClr:'#2F2F2F',
            layout:'fullWidth',
            numReviews: 2
        });
        */
    // $( '.quantity' ).prepend( '<sapn class="_qty_text">Qty<span>' );

    $('#hipatterns-owl-carousel').owlCarousel({
        autoplay:true,
      center: true,
      items:3,
      loop:true,
      margin:200,
      dots: false,
      navigation: false,
      singleItem: true,
      responsive:{
        0:{
          items:2
        },
        600:{
          items:3
        },
        1000:{
          items:3
        }
      }
    });

	 $('#hipatterns-owl-carousel-mobile').owlCarousel({
autoplay:true,
      center: true,
      items:3,
      loop:true,
      margin:60,
      dots: false,
      navigation: false,
      singleItem: true,
      responsive:{
        0:{
          items:2
        },
        600:{
          items:3
        },
        1000:{
          items:3
        }
      }
    });

});




jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 65) {
      if(jQuery('._sub_header').length){
        jQuery('._sub_header').css('top', '2px');
      }
            // $('nav div').addClass('visible-title');
    } else {
            // $('nav div').removeClass('visible-title');
      if(jQuery('._sub_header').length){
        jQuery('._sub_header').css('top', '66px');
      }
    }

});
//Brands Modal JS
jQuery(document).on('click', '.brands_item img', function() {
    var img_src = jQuery(this).data('project');
    var brand_title = jQuery(this).data('title');
    var img_desc = jQuery(this).data('description');
    var img_link = jQuery(this).data('link');

    jQuery(".modal_img_src").attr("src", img_src);
    jQuery(".modal_img_desc").text(img_desc);
    jQuery(".modal-title").text(brand_title);
    jQuery('a.modal-img_link').attr('href', img_link);

});



function GetURLParameter(sParam) {
    var sPageURL = window.location.hash;
    // console.log(sPageURL);
    var sURLVariables = sPageURL.split('?');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}
