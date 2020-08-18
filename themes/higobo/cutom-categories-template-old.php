<?php
/*Template Name: Custom Category*/

get_header(); 
global $post;
$product_slider = get_field( 'products',$post->ID );
$select_categories = get_field( 'select_categories',$post->ID );
$data_content_repeater_section = get_field( 'content_repeater_section',$post->ID );
$deal_of_the_day = get_field( 'deal_of_the_day',$post->ID );
$deal_image = get_field( 'deal_image',$post->ID );
$real_section_title = get_field( 'real_section_title',$post->ID );
$real_section_short_description = get_field( 'real_section_short_description',$post->ID );
$section_script = get_field( 'section_script',$post->ID );


$load_more_text = get_field( 'load_more_text',$post->ID );
$navbar_main_title = get_field( 'navbar_main_title',$post->ID );
$page_link = get_field( 'page_link',$post->ID );
$total_product_show = get_field( 'total_product_show',$post->ID );

$deal_select_product = get_field( 'deal_select_product',$post->ID );
$deal_badge_text = get_field( 'deal_badge_text',$post->ID );
$deal_title = get_field( 'deal_title',$post->ID );
$deal_image = get_field( 'deal_image',$post->ID );
$deal_shop_now_text = get_field( 'deal_shop_now_text',$post->ID );
$deal_of_the_day = get_field( 'deal_of_the_day',$post->ID );
$product_obj = wc_get_product( $deal_select_product->ID);

$total_product_show=(!empty($total_product_show)) ? $total_product_show : '12';

$args = array(
			'post_type'             => 'product',
			'post_status'           => 'publish',
			'posts_per_page'        => $total_product_show,
			'orderby'               => 'id',
			 'order'             => 'asc',
			'tax_query'             => array(
				array(
					'taxonomy'      => 'product_cat',
					'field' => 'term_id', //This is optional, as it defaults to 'term_id'
					'terms'         => $select_categories,
				)
			)
		);
$loop = new WP_Query( $args );

?>
<style>
.why-us.mt-5 {
    margin-top: 0rem!important;
}
span.deal-reg-price del .woocommerce-Price-amount:last-child {
    font-size: 14px;
}
span.deal-reg-price del {
    font-size: 0px;
}
</style>

<header class="bg-light _sub_header" style="z-index:999 !important;">
    <div class="container">
        <nav class="secondary-nav navbar navbar-expand-lg navbar-light pl-0 pr-0 bg-light justify-content-between">
            <a class="h3 text-dark" href="#"><?= $navbar_main_title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
		
                <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                    
					<?php if(!empty($page_link)): ?>
						<?php foreach($page_link as $single_link) : ?>
							<li class="nav-item">
							
								<a class="nav-link cool-link <?= ($single_link['nave-bar-page']==get_page_link()) ? 'active' : '';?>" id="hipatterns-tab" href="<?= (!empty($single_link['nave-bar-page'])) ? $single_link['nave-bar-page'] : '#'; ?>"><?= (!empty($single_link['link_text'])) ? $single_link['link_text'] : ''; ?></a>
							</li>
							<?php endforeach;?>
					<?php endif; ?>
					
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="tab-content page-template-hineon-hipatterns " id="myTabContent">
    <div class="tab-pane fade show active" id="hipatterns" role="tabpanel" aria-labelledby="hipatterns-tab">
        <div class="_tab_content">
		<!--Slider Section here--->
		<?php if(!empty($product_slider)): ?>
          <div id="hipatterns-owl-carousel" class="owl-carousel owl-theme talha">
			<?php foreach($product_slider as $single_slide): ?>
              <div class="item">
              
                <img src="<?= (!empty($single_slide['product_image'])) ? $single_slide['product_image'] : 'https://staging.hineon.com/wp-content/uploads/2020/07/Open-takeout-1.jpg'; ?>" />
                <div class="cust-tiltle-price">
					<p><a target="_blank" href="<?= (!empty($single_slide['product_image_link']['url'])) ? $single_slide['product_image_link']['url'] : ''; ?>"><?= (!empty($single_slide['product_image_link']['title'])) ? $single_slide['product_image_link']['title'] : ''; ?></a></p>
					<p>$129</p>
				</div>
              </div>
			  <?php endforeach; ?>

          </div>
		<?php endif; ?>




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
						<?php if ( $product->is_on_sale() ):?>
							<span class="price"><?php echo $product->get_price_html(); ?></span>
						<?php else: ?>
							<span class="price"><?= get_woocommerce_currency_symbol().''.$product->get_price(); ?></span>
						<?php endif;?>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
			</div>
            <div class="text-center cust-load-btn-div">
			  
              <button type="button" class="load_more" data-offset="1"><?= $load_more_text; ?></button>

               <div class="load-more-arrow"><span></span></div>
              </div>
			</div>
          </div>
			<div class="container cust-deal-of-day">
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 cust-deal-text deak-section-area">
							<div class="sale-badge"><span class="txt"><?= (!empty($deal_badge_text)) ? $deal_badge_text : 'Sale';?></span></div>
							<div class="deal-main-title"><?= (!empty($deal_title)) ?  $deal_title : $deal_select_product->post_title;?></div>
							<?php if(!empty($deal_of_the_day)): ?>
								<?php echo $deal_of_the_day; ?>
							<?php else: ?>
								<p class="deal-desc"><?php echo $deal_select_product->post_content; ?></p>
							<?php endif; ?>
							
							
							<div class="deal-extra-space-xl"></div>
							<div class="deal-price">
								
								<span class="deal-reg-price"><del><?= $product_obj->get_price_html(); ?></del></span>
								<span class="deal-sale-price"><?= get_woocommerce_currency_symbol().''.$product_obj->get_price(); ?></span>
								
								
							</div>
							<div class="deal-extra-space-lg"></div>
							<div class="deal-shop-btn">
							<a href="<?= get_permalink( $deal_select_product->ID); ?>"><?= (!empty($deal_shop_now_text))  ? $deal_shop_now_text: 'SHOP NOW';?></a>
							</div>

						</div>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($deal_select_product->ID ), 'single-post-thumbnail' );?>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 pl-0 pr-0">
							<img src="<?= (!empty($deal_image['url'])) ? $deal_image['url']: $image[0]; ?>" alt="<?= (!empty($deal_image['title'])) ? $deal_image['title']: ''; ?>">
						</div>
						
					</div>
				</div>
			</div>

			<div class="container">
				<h2 class="instatitle"><?= $real_section_title; ?> </h2>
				<div class="instap"><?= $real_section_short_description; ?> </div>
				<div class="row">
					
					<div class="col-md-12">
						<div class="instagram-feed mb-5">
							<?= $section_script; ?>
						</div>
					</div>
				</div>
			</div>
          <div class="features">
           <div class="container"> 
			<?php if(!empty($data_content_repeater_section)): ?>
				<?php foreach($data_content_repeater_section as $content_repeater_section): ?>
						<?php if(!$content_repeater_section['hide_this_section']): ?>
						<?php if($content_repeater_section['image_position']=='Right'): ?>
							<div class="row p-5">
							  <div class="col-md-6">
								<h3><?= (!empty($content_repeater_section['section_title'])) ? $content_repeater_section['section_title']  : ''; ?></h3>
								<p>
								 <?= (!empty($content_repeater_section['section_content'])) ? $content_repeater_section['section_content']  : ''; ?>
								</p>
							  </div>
							  <div class="col-md-6 text-center">
								<?php if(!empty($content_repeater_section['section_image']['url'])): ?>
									<img class="leafi" src="<?= $content_repeater_section['section_image']['url']; ?>" />
								<?php endif; ?>
							  </div>
							  
							</div>
						<?php endif; ?>
						<?php if($content_repeater_section['image_position']=='Left'): ?>
						<div class="row p-5 ">
						  <div class="col-md-6 text-center cust-mob-hidden">
							<?php if(!empty($content_repeater_section['section_image']['url'])): ?>
								<img class="lightbulb" src="<?= $content_repeater_section['section_image']['url']; ?>" />
							<?php endif; ?>
						  </div>
						  <div class="col-md-6">
							<h3><?= (!empty($content_repeater_section['section_title'])) ? $content_repeater_section['section_title']  : ''; ?></h3>
							<p>  <?= (!empty($content_repeater_section['section_content'])) ? $content_repeater_section['section_content']  : ''; ?></p>
						  </div>
						  <div class="col-md-6 text-center cust-desktop-hidden">
							<?php if(!empty($content_repeater_section['section_image']['url'])): ?>
								<img class="lightbulb" src="<?= $content_repeater_section['section_image']['url']; ?>" />
							<?php endif; ?>
						  </div>
						</div>
						<?php endif; ?>
					
					<?php endif; ?>
					
				<?php endforeach; ?>
			<?php endif; ?>
            
          </div>
		  
		 </div> 
        </div>

      </div>

	<div class="tab-pane fade" id="open-signs" role="tabpanel" aria-labelledby="open-signs-tab">
		<div class="_tab_content"></div>
	</div>

      </div>
<?php
  //echo do_shortcode('[why-us]');
  dynamic_sidebar('sidebar-1');
  get_footer();
 ?>