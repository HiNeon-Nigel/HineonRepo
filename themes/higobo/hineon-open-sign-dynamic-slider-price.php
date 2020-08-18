<?php
// Template Name: HiNeon Open Sign Dynamic Price Slider
$args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'custom-open,open', 'orderby' => 'menu_order', 'order' => 'asc', 'offset' => 0 );
$loop = new WP_Query( $args );
get_header(); ?>


<header class="bg-light _sub_header" style="z-index:999 !important;">
    <div class="container">
        <nav class="secondary-nav navbar navbar-expand-lg navbar-light pl-0 pr-0 bg-light justify-content-between">
            <a class="h3 text-dark" href="#">OPEN SIGNS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link cool-link" id="hipatterns-tab" href="<?php echo get_site_url(); ?>/hipatterns/">HiPatterns</a>
                    </li>
					           <li class="nav-item">
                        <a class="nav-link cool-link active" id="open-signs-tab" href="<?php echo get_site_url(); ?>/open-sign">Open Signs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>




<?php 
$product_1 = wc_get_product( 8050 );  
$product_2 = wc_get_product( 12369 );  
$product_3 = wc_get_product( 7998 ); 
$product_4 = wc_get_product( 12340 ); 
$product_5 = wc_get_product( 8050 );   
?>


<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="hipatterns" role="tabpanel" aria-labelledby="hipatterns-tab">
        <div class="_tab_content">
          <div id="hipatterns-owl-carousel" class="owl-carousel owl-theme talha">
              <div class="item">
              <a href="<?php echo get_permalink( $product_1->get_id() ); ?> "/>
                	<img src="/wp-content/uploads/2020/07/Open-takeout-1.jpg">
            </a>
	
                
                <div class="cust-tiltle-price">
	<p><a href="<?php echo get_permalink( $product_1->get_id() ); ?>">
	<?php echo $product_1->get_name(); ?>
</a></p>
                <p><?php echo $product_1->get_price_html(); ?></p>
	</div>
              </div>

	<div class="item">
              <a href="<?php echo get_permalink( $product_2->get_id() ); ?> "/>
                	<img src="/wp-content/uploads/2020/06/OPEN-cool-white-2000x2000-5.jpg">
            </a>
	
                
                <div class="cust-tiltle-price">
	<p><a href="<?php echo get_permalink( $product_2->get_id() ); ?>">
	<?php echo $product_2->get_name(); ?>
</a></p>
                <p><?php echo $product_2->get_price_html(); ?></p>
	</div>
              </div>

              
<div class="item">
              <a href="<?php echo get_permalink( $product_3->get_id() ); ?> "/>
                	<img src="/wp-content/uploads/2020/07/open.jpg">
            </a>
	
                
                <div class="cust-tiltle-price">
	<p><a href="<?php echo get_permalink( $product_3->get_id() ); ?>">
	<?php echo $product_3->get_name(); ?>
</a></p>
                <p><?php echo $product_3->get_price_html(); ?></p>
	</div>
              </div>

<div class="item">
              <a href="<?php echo get_permalink( $product_4->get_id() ); ?> "/>
                	<img src="/wp-content/uploads/2020/06/OPEN-cool-white-2000x2000-6.jpg">
            </a>
	
                
                <div class="cust-tiltle-price">
	<p><a href="<?php echo get_permalink( $product_4->get_id() ); ?>">
	<?php echo $product_4->get_name(); ?>
</a></p>
                <p><?php echo $product_4->get_price_html(); ?></p>
	</div>
              </div>

<div class="item">
              <a href="<?php echo get_permalink( $product_5->get_id() ); ?> "/>
                	<img src="/wp-content/uploads/2020/07/open.jpg">
            </a>
	
                
                <div class="cust-tiltle-price">
	<p><a href="<?php echo get_permalink( $product_5->get_id() ); ?>">
	<?php echo $product_5->get_name(); ?>
</a></p>
                <p><?php echo $product_5->get_price_html(); ?></p>
	</div>
              </div>
              
              
          </div>


<div id="hipatterns-owl-carousel-mobile" class="owl-carousel owl-theme talha">


              <div class="item">
                <img src="https://hineon.com/wp-content/uploads/2020/07/Open-takeout-1.jpg" />
                <div class="cust-tiltle-price">
	<p><a href="https://hineon.com/product/hiletters-shop/open/custom-open/led-open-take-out-neon-sign-for-business-store-flashing-take-out-sign-w-remote-controller/">Open Take Out Sign
</a></p>
                <p>$319 - $259</p>
	</div>
              </div>
              <div class="item">
                <img src="https://hineon.com/wp-content/uploads/2020/07/open.jpg" />
                <div class="cust-tiltle-price">
	<p><a href="#">Open - White Sign
</a></p>
                <p>$199</p>
	</div>
              </div>
              <div class="item">
                <img src="https://hineon.com/wp-content/uploads/2020/06/OPEN-cool-white-2000x2000-5.jpg" />
                <div class="cust-tiltle-price">
	<p><a href="#">Open - White Sign
</a></p>
                <p>$199</p>
	</div>
              </div>
              <div class="item">
                <img src="https://hineon.com/wp-content/uploads/2020/06/OPEN-cool-white-2000x2000-6.jpg" />
                <div class="cust-tiltle-price">
	<p><a href="#">Open - White Sign
</a></p>
                <p>$199</p>
	</div>
              </div>



          </div>



          <div class="mx-5 mb-5 custom-neon-signs-products">
            <div class="container">
			<div class="row">

	     <div class="cust-input-form">
                <div class="form-group has-search">

                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div>
		<div class="cust-search-icon">
			<span class="fa fa-search form-control-feedback"></span>
</div>
            </div>

            <div class="row products cust-for-mobile">

				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="col-md-4 text-center mb-3 product">
						<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php if( $product->is_on_sale() ) { ?>
              <div class="sale-badge"><span>Sale</span></div>
              <?php } ?>
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
						<p><?php the_title(); ?></p>
            <?php
                if($product->is_type('variable')){
                  if( $product->is_on_sale() ) {
                    ?>
                    <span class="price">
                      <del class="mr-2"><?php echo wc_price($product->get_variation_regular_price( 'min', true )); ?></del>
                      <ins><?php echo wc_price($product->get_variation_sale_price( 'min', true )); ?></ins>
                    </span>
                    <?php
                  }else{
                    ?>
                    <span class="price"><?php echo wc_price($product->get_variation_regular_price( 'min', true )); ?></span>
                    <?php
                  }
                }else{
                  ?>
                  <span class="price"><?php echo $product->get_price_html(); ?></span>
                  <?php
                }
            ?>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
            <div class="text-center cust-load-btn-div">

              <button type="button" class="load_more" data-offset="1">Load More</button>

               <div class="load-more-arrow"><span></span></div>
              </div>
			</div>
          </div>
<div class="container cust-deal-of-day">

			<div class="row">
				<div class="cust-deal-image deal-mob">
					<img src="https://hineon.com/wp-content/uploads/2020/06/S2-unique-design-open-sign-768x768.jpg">
				</div>
				<div class="cust-deal-text">
					<div class="sale-badge"><span>Sale</span></div>
                    <div class="deal-main-title">Deal of the Day</div>
                    <div class="deal-mini-title">OPEN Neon Sign Script Font S2
</div>
                    <p class="deal-desc">Open neon sign in modern handwritten script font.
<br>Add this unique LED open sign to your coffee shop, bakery, or bar today!</p>
                    <div class="deal-extra-space-xl"></div>
                    <div class="deal-price">
                    <span class="deal-reg-price"><del>$139.90</del></span>
                    <span class="deal-sale-price">$99.90</span>
                    </div>
                    <div class="deal-extra-space-lg"></div>
                    <div class="deal-shop-btn">
                    <a href="https://hineon.com/product/hiletters-shop/open/custom-open/open-neon-sign-handwritten-script-font-s2/">SHOP NOW</a>
                    </div>

				</div>
                <div class="cust-deal-image deal-desk">
					<img src="https://hineon.com/wp-content/uploads/2020/06/S2-unique-design-open-sign-768x768.jpg">
				</div>
			</div>
</div>
<div class="container">
			<h2 class="instatitle">HiNeon, In Real Life </h2>
			<p class="instap">Show us your neon sign using #hineon and make sure you tag us @hineonled</p>
			<div class="row">

				<div class="col-md-12">
          <div class="instagram-feed mb-5">
            <script src="https://widget.reviews.co.uk/instagram-photo/dist.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://widget.reviews.co.uk/instagram-photo/dist.css" />
            <div id="instagram-photo-widget"></div>
            <script>
            instagramPhotoWidget('instagram-photo-widget', {
            store: 'hineon-com',
            layout: 'grid',
            sliderToggleControls: true,
            sliderCellSize: '300px',
            commentFontFamily: 'Quicksand, Times New Roman, serif',
            commentFontWeight: 'normal',
            commentFontStyle: 'normal',
            accentFontFamily: 'Quicksand, Helvetica Neue, Helvetica, Arial, sans-serif',
            accentFontWeight: 'bold',
            accentFontStyle: 'normal',
            hoverButtonLabel: 'Shop Now',
            hoverButtonStyle: 'border',
            hoverButtonPadding: '2px',
            hoverButtonBorderSize: '3px',
            hoverBackgroundColor: 'rgba(0,0,0,0.6)',
            hoverTextColor: 'rgba(255,255,255,1)',
            hoverShowIcon: true,
            hoverShowDate: false,
            hoverShowButton: false,
            hoverShowText: true,
            hoverShowUsername: false,
            hoverShowRatingStars: true,
            hoverRatingStarColor: '#F98D3F',
            hoverMargin: '0px',
            modalShowText: true,
            modalShowDate: true,
            modalShowShareIcons: true,
            modalShowRatingStars: true,
            modalButtonStyle: 'button',
            modalButtonLabel: 'Shop now',
            modalButtonBorderColor: '#414141',
            modalButtonColor: '#222222',
            modalButtonTextColor: '#ffffff',
            modalButtonPadding: '7px',
            modalButtonBorderSize: '3px',
            modalButtonEnableHover: false,
            modalButtonTarget: '_blank',
            modalRatingStarColor: '#F98D3F',
            modalOverlayColor: 'rgba(0,0,0,0.7)',
            gridMargin: '2px',
            categories: 'hipatterns'
            });
            </script>
          </div>
	</div>
</div>
</div>
          <div class="features">
           <div class="container">
			<div class="row p-5">
              <div class="col-md-6">
                <h3>Make your business visible with “Open” signs for shops from HiNeon</h3>
                <p>
                  Whether you run a grocery store, a hair salon, or a nightclub, you need to let your visitors know that you’re ready to welcome them. The best way to show that your doors are open is to place a bright neon sign nearby. However, it’s essential to make sure it reflects your venue’s concept. At HiNeon, we produce outdoor LED “Open” signs designed to meet every customer’s specific requirements. By ordering neon lighting from us, you will get a perfect representation of your spot. You have our word.</p>

                 <p>Since attracting new customers is the primary purpose of “Open” signs for businesses, they should draw attention without being too flashy. This is the exact kind of products you will find at HiNeon. We value uniqueness and respect your aesthetic sense. That’s why you’re better off customizing your light-up “Open” sign before placing an order. This option will let you make your place genuinely memorable and matchless.
                </p>
              </div>
              <div class="col-md-6 text-center">
                <img class="leafi" src="<?php echo get_template_directory_uri(); ?>/images/OPEN-cool-white-2000x2000-3-scaled.jpg" />
              </div>
            </div>
            <div class="row p-5 ">
              <div class="col-md-6 text-center cust-mob-hidden">
                <img class="lightbulb" src="<?php echo get_template_directory_uri(); ?>/images/OPEN-TAKEOUT-2000x2000-4.jpg" />
              </div>
              <div class="col-md-6">
                <h3>“Open” neon signs that blend everything from technology to usability</h3>
                <p>
                  You may ask, what makes HiNeon special? To answer this question, we won’t bother you with a lengthy overview of our company and catchy quotes by our CEOs about how amazing we are. Instead, we’d like to pick 3 major features that our clients find appealing:
                  <br/><br/>
                  <strong>• Technology.</strong> We use our own LED technology that extends the lifetime of our lights and allows them to be energy-efficient and environmentally friendly. Moreover, all our products are dust- and water-resistant.
                  <br/><br/>
                  <strong>• Materials and manufacturing.</strong> We use PVC instead of glass tubes and non-flammable substances when producing our lighted “Open” signs. They are protected from overheating and other damages, so you don’t have to worry about safety.
                  <br/><br/>
                  <strong>• Usability.</strong> We provide mounting kits that make installation almost effortless. Besides, you can use a radio frequency remote controller and regulate your LED lighting’s brightness from a distance of up to 30 meters.
                  <br/><br/>
                  HiNeon cares about the quality of its products. So, if you’re looking for a durable neon “Open” sign for sale, we’ve got your back. We assemble every item in Vancouver, using the best equipment and following precise manufacturing guidelines. This is what makes HiNeon a reliable company, and our customers – successful business owners.

                </p>
              </div>
<div class="col-md-6 text-center cust-desktop-hidden">
                <img class="lightbulb" src="<?php echo get_template_directory_uri(); ?>/images/OPEN-TAKEOUT-2000x2000-4.jpg" />
              </div>
            </div>
            <div class="row p-5">
              <div class="col-md-6">
                <h3>How long does it take to produce a custom outdoor LED “Open” sign?</h3>
                <p>
                  While you can wait for traditional neon lights to be made for 3 to 7 weeks, ours will be ready much faster. We ship to both Canada & the US, and the delivery time solely depends on your location. You can rest assured that your sign will never break down on the way to your door owing to its PVC coating and the utmost care we handle it with.</p>

                 <p> With our signs, your business will get brighter and more attractive. Share your ideas with us so that we could design a custom lighting solution to make your shop, bar, or restaurant noticeable. Never miss a client with eye-catching light-up “Open” signs from HiNeon!
                </p>
              </div>
              <div class="col-md-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/S2-led-open-sign-creative-script-design.jpg" />
              </div>
            </div>
          </div>
		 </div>
        </div>

      </div>

      <div class="tab-pane fade" id="open-signs" role="tabpanel" aria-labelledby="open-signs-tab">
          <div class="_tab_content">

          </div>

        </div>

      </div>
<?php
  echo do_shortcode('[why-us]');
  get_footer();
 ?>
