
// if ($('#allinone_carousel_sweet').length) {
// 	$('#allinone_carousel_sweet').allinone_carousel({
// 		skin: 'sweet',
// 		width: 1200,
// 		height: 700,
// 		responsive:true,
// 		autoPlay: true,
// 		resizeImages:true,
// 		autoHideBottomNav:false,
// 		showElementTitle:false,
// 		//easing:'easeOutBounce',
// 		numberOfVisibleItems:5,
// 		elementsHorizontalSpacing:200,
// 		elementsVerticalSpacing:50,
// 		verticalAdjustment:0,
// 		animationTime:0.5,
// 		circleLeftPositionCorrection:50,
// 		circleTopPositionCorrection:20,
// 		circleLineWidth:1,
// 		circleColor:"#29282B",
// 		behindCircleColor:"#999999",
// 		nextPrevMarginTop:25,
// 		bottomNavMarginBottom:-50
// 	});	
// } 
$(document).ready(function() {
    if ($('#home_slider').length) {
			$("#home_slider").owlCarousel({
				loop:true,
				nav:false,
				items:1,		    
				dots: true,
				autoplay:true,
				autoplaySpeed: 2000,
				autoplayTimeout:5000,
				transitionStyle : "fade",
				mouseDrag: true,
				touchDrag: true,
			});

			$("#home_slider").on("translate.owl.carousel", function(){
				$(".single-slide h1, .single-slide p").removeClass("animated fadeInUp").css("opacity", "0");
				$(".single-slide h2, .single-slide .ven-btn").removeClass("animated fadeInDown").css("opacity", "0");
			});
			
			$("#home_slider").on("translated.owl.carousel", function(){
				$(".single-slide h1, .single-slide p").addClass("animated fadeInUp").css("opacity", "1");
				$(".single-slide h2, .single-slide .ven-btn").addClass("animated fadeInDown").css("opacity", "0");
			});
		}
	
	/*if ($('#hiletters_slider').length) {
		$("#hiletters_slider").owlCarousel({
			loop:false,
			nav:false,
			items:1,		    
			dots: true,
			autoplay:false,
			autoplayTimeout:5000,
			mouseDrag: true,
			touchDrag: true,
		});

		$("#hiletters_slider").on("translate.owl.carousel", function(){
			$(".hiletters-slide h1, .hiletters-slide p").removeClass("animated fadeInUp").css("opacity", "0");
			$(".hiletters-slide h2, .hiletters-slide .homeslider-btn").removeClass("animated fadeInDown").css("opacity", "0");
		});
		
		$("#hiletters_slider").on("translated.owl.carousel", function(){
			$(".hiletters-slide h1, .hiletters-slide p").addClass("animated fadeInUp").css("opacity", "1");
			$(".hiletters-slide h2, .hiletters-slide .homeslider-btn").addClass("animated fadeInDown").css("opacity", "0");
		});
	}*/
	
	if ($('.custom_b_owl').length) {
			$('.custom_b_owl').owlCarousel({
				loop: false,
				nav: false,
				margin: 0,
				dots: false,
				autoWidth: true,
				autoplay: false,
				autoplayTimeout: 5000,
				autoplayHoverPause: false,
				responsive: {
					0: {
						items:1,
						autoWidth: false,
					},
					480: {
						items:1,
						autoWidth: false,
					},
					576: {
						items:1,
						autoWidth: false,
						margin: 15,
					},
					768: {
						items:1,
						autoWidth: false,
					},
					992: {
						items:2,
						autoWidth: false,
						margin: 30,
					},
				}
			});
		};

	if ($('.review_slider_part').length) {
		var owlwinners = $('.review_slider_part').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			navText: ['<i class="fas fa-chevron-left"></i>','</i> <i class="fas fa-chevron-right"></i>'],
			dots: false,
			autoWidth: false,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items:1,
					autoWidth: false,
					margin: 10,
				},
				480: {
					items:1,
					autoWidth: false,
					margin: 10,
				},
				576: {
					items:1,
					autoWidth: false,
					margin: 15,
				},
				768: {
					items:2,
					autoWidth: false,
					margin: 25,
				},
				992: {
					items: 3,
					autoWidth: false
				},
				
				
			}
		});
		$('.right-Winnersarrow-btn').click(function() {
			owlwinners.trigger('next.owl.carousel');
		})
		
		$('.left-Winnersarrow-btn').click(function() {
			owlwinners.trigger('prev.owl.carousel', [300]);
		})
	};

	if ($('#brands_slider').length) {
		$('#brands_slider').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			navText: ['<i class="fas fa-chevron-left"></i>','</i> <i class="fas fa-chevron-right"></i>'],
			dots: false,
			autoWidth: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items:3,
					autoWidth: false,
					margin: 10,
				},
				480: {
					items:3,
					autoWidth: false,
					margin: 15,
				},
				576: {
					items:3,
					autoWidth: false,
					margin: 15,
				},
				1000: {
					items: 4,
					autoWidth: false
				},
				1200: {
					items:5,
					autoWidth: false
				}
			}
		});
	};
    
    $(".accordion-mobile .collapse").on('show.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
	});	
	$(".read-more-btn").on('click', function(){
		if($(this).hasClass('open')){
			$(this).removeClass('open')
			$(this).parents('.read-more-part').find(".readmore-info").stop(true, true).slideUp();
			$(this).html('Read More')
			
		}else{
			$(this).addClass('open')
			$(this).parents('.read-more-part').find(".readmore-info").stop(true, true).slideDown();
			$(this).html('Read Less')
		}
	});
	if ($('.swiper-sketch-finish').length) {
		var width = $(window).width();
		var slidesPerView = 1;
		if(width > 767) {
			slidesPerView = 2;
		}
		var mySwiper = new Swiper ('.swiper-sketch-finish', {
			speed: 400,
			spaceBetween: 100,
			initialSlide: 0,
			autoHeight: false,
			calculateHeight: false,
			direction: 'horizontal',
			loop: true,
			autoplay: 50000,
			autoplayStopOnLast: false, 
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				renderBullet: function (index, className) {
				  return '<span class="' + className + '"></span>';
				},
			},
			paginationType: "bullets",
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			effect: 'slide',
			spaceBetween: 150,
			slidesPerView: slidesPerView,
			centeredSlides: true,
			slidesOffsetBefore: 0,
			grabCursor: false,
			breakpoints: {
				0: {
					spaceBetween: 35
					//spaceBetween: 25
				},
				480: {
					spaceBetween: 40
					//spaceBetween: 20
				},
				576: {
					spaceBetween: 50
					//spaceBetween: 30
				},
				768: {
					spaceBetween: 70
					//spaceBetween: 35
				},
				992: {
					spaceBetween: 90
					//spaceBetween: 45
				},
				1200: {
					spaceBetween: 100
					//spaceBetween: 50
				},
				1600: {
					spaceBetween: 150
					//spaceBetween: 75
				}
			}
		});
		mySwiper.update();
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			mySwiper.update();
		});
	}
	
	//
	setTimeout(function(){
		if ($('.cns_product_cat_variable .entry-summary .woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 4000);
	
	//
	setTimeout(function(){
		if (jQuery('.cns_product_cat_variable .entry-summary .woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 6000);
	
	//
	setTimeout(function(){
		if (jQuery('.cns_product_cat_variable .entry-summary .woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 8000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .price >.woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 4000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .price >.woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 6000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .price >.woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 8000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 4) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 4000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 4) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 6000);
	
	//
	setTimeout(function(){
		if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 4) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
	}, 8000);
	
	//
	jQuery("li.variable-item.button-variable-item").click(function() {
		if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 2) {
			jQuery('p.price.ay').hide(); //hide the window object
		};
		setTimeout(function(){
			if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 2) {		  
				jQuery('p.price.ay').hide(); //hide the window object
			};
		}, 10);
		setTimeout(function(){
			if (jQuery('.entry-summary .woocommerce-Price-amount.amount').length == 2) {
				jQuery('p.price.ay').hide(); //hide the window object
			};
		}, 300);
	});
	
	//
	jQuery("span.fa.fa-search.form-control-feedback").click(function(){
		jQuery(".form-group.has-search input").toggle();
	});
	
	//This script is to hide load more arrow
	var count = 0;
	jQuery(".custom-neon-signs-products button.load_more").click(function () {
		if (count >= 2) {
			setTimeout(function(){
				jQuery(".custom-neon-signs-products .load-more-arrow").hide();
			}, 6000);
		} else count++
	});
	
	//
	jQuery('button.load_more').on('click', function(event) {	 
		jQuery(event.currentTarget).toggleClass('loader');
		setTimeout(function() {
			jQuery(event.currentTarget).removeClass('loader');
		}, 3000);
	});

	//This script is to hide load more arrow
	jQuery(document).ready(function () {
		setTimeout(function(){
			jQuery(".CarouselWidget .cw__header").hide();
		}, 19000);
	});

	//Code for Gallery slider
	if (jQuery('#slider-materialize-cust').length) {
		jQuery('#slider-materialize-cust').allinone_carousel({
			skin: 'sweet',
			width: 1500,
			height: 600,
			responsive:true,
			autoplay:false,
			resizeImages:true,
			autoHideBottomNav:false,
			showElementTitle:false,
			//easing:'easeOutBounce',
			numberOfVisibleItems:5,
			elementsHorizontalSpacing:200,
			elementsVerticalSpacing:50,
			verticalAdjustment:0,
			animationTime:false,
			circleLeftPositionCorrection:50,
			circleTopPositionCorrection:20,
			circleLineWidth:0,
			circleColor:"#29282B",
			behindCircleColor:"#999999",
			nextPrevMarginTop:25,
			bottomNavMarginBottom:-50
		});
	}
	if (jQuery('li#wmc_widget-3 .wmc-current-currency i').hasClass('flag-us')){
		jQuery('.hineon_custom_url').attr('href', '/design-your-custom-led-neon-sign-in-usa');
	} else {
		jQuery('.hineon_custom_url').attr('href', '/design-your-custom-led-neon-sign-in-canada/');
	}
});
