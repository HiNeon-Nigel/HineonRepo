<?php
// Template Name: Homepage Template
get_header();
$a = "active";
$a1 = "active";

?>

<div class="home-section">
    <div class="container-fluid p-0">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
				<?php
				$count=0;
				if( have_rows('slider') ):
				while ( have_rows('slider') ) : the_row();?>
				<li data-target="#demo" data-slide-to="<?php echo $count; ?>" class="<?php echo $a1; ?>"></li>
				<?php
				$a1="";
				$count++;
				endwhile;
				else :
				// no rows found
				endif;
				?>
            </ul>
                    <div class="carousel-inner">
						<?php
						if( have_rows('slider') ):
							while ( have_rows('slider') ) : the_row();?>
						<div class="carousel-item <?php echo $a; ?>">
                                <div class="home-imge text-center" style="background:<?php the_sub_field('background_color'); ?>">
                                  <?php
                                    if(get_sub_field('custom_link')){
                                      $link = get_sub_field('link_for_button');
                                    }else{
                                      $link = get_sub_field('slider_link');
                                    }
                                   ?>
                                    <a class="button" href="<?php echo $link; ?>"><img src="<?php the_sub_field('image'); ?>" class="home-img-3 img-fluid carousel-img" /></a>
                                </div>
                                <div class="slider_link">
                                <?php /*<a class="button" href="<?php the_sub_field('slider_link'); ?>"><?php the_sub_field('slider_link_title'); ?></a> */?>
                                <p><?php the_sub_field('slider_link_title'); ?></p>
                                </div>

                            </div>
						<?php
								$a="";
							endwhile;
						else :
							// no rows found
						endif;
						?>

                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
          </div>
    </div>
</div>
 <!------------------------------------products-section------------------------------>
<section class="our-products">
		<div class="container">
      <h1 class="text-md-center mb-5"><?php the_field('products_title'); ?></h1>
			<div class="row">
				<?php
			if( have_rows('products') ): ?>
				<?php while ( have_rows('products') ) : the_row();?>
				<div class="col-md-4 text-center">
					<div class="top-product">
						<h2 class=""><?php the_sub_field('title'); ?></h2>
<!-- 						<p class=""></p> -->
						<?php the_sub_field('content'); ?>
<!--						--><?php //if(get_sub_field('link')){ ?>
                        <div class="_get_started_link">
                            <a  href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_label'); ?></a>
                        </div>

<!--						--><?php //} ?>

					</div>
				</div>
			<?php
				endwhile;
			else :
			endif;
			?>
			</div>
      <?php
        $products_content = get_field('products_content');
        if( $products_content ):
          ?>
          <div id="products_content" class="collapse">
            <?php echo $products_content; ?></a>
          </div>
          <?php
        endif;
        $products_read_more = get_field('products_read_more');
        if( $products_read_more ):
        if( isset($products_read_more['product_read_more_label']) && !empty($products_read_more['product_read_more_label']) ):
          ?>
          <div class="text-md-center">
            <a class="product-read-more" data-toggle="collapse" data-target="#products_content" href="javascript:;"><?php echo $products_read_more['product_read_more_label']; ?></a>
          </div>
        <?php endif; ?>
        <?php endif; ?>
		</div>
	</section>

<!------------------------------------features-section------------------------------>
<section class="our-features">
		<div class="container">
			<div class="row">
				<?php
			if( have_rows('features') ):
				while ( have_rows('features') ) : the_row();?>
				<div class="col-md-3 col-sm-6 col-xs-6 pb-xl-0 pb-5 pl-xl-5">
					<div class="top-feature">
						<img class="pb-4" src="<?php the_sub_field('icon'); ?>" alt="">
						<h2><?php the_sub_field('title'); ?></h2>
						<p class="pr-2 pl-2 text-center text-md-justify"><?php the_sub_field('content'); ?></p>
					</div>
				</div>
			<?php
				endwhile;
			else :
			endif;
			?>
			</div>
      <?php
        $features_content = get_field('features_content');
        if( $features_content ):
          ?>
          <div id="features_content" class="collapse">
            <?php echo $features_content; ?></a>
          </div>
          <?php
        endif;
        $features_read_more = get_field('features_read_more');
        if( $features_read_more ):
        if( isset($features_read_more['feature_read_more_label']) && !empty($features_read_more['feature_read_more_label']) ):
          ?>
          <div class="text-md-center">
            <a class="feature-read-more" data-toggle="collapse" data-target="#features_content" href="javascript:;"><?php echo $features_read_more['feature_read_more_label']; ?></a>
          </div>
        <?php endif; ?>
        <?php endif; ?>
		</div>
	</section>


<!------------------------------------gallery-section------------------------------>
<section class="home-gallery">
		<div class="container text-center">
			<span class="section-small-title"><?php the_field('gallery_title'); ?></span>
			<h2 class="section-title"><?php the_field('gallery_main_title'); ?></h2>
			<div class="gallery-slider">
				<div class="owl-carousel owl-theme gallery-carousel">
					<?php
					if( have_rows('gallery') ):
						while ( have_rows('gallery') ) : the_row();?>
					<div class="item">
						<img src="<?php the_sub_field('image'); ?>" alt="" class="carousel-img" />
					</div>
					<?php
						endwhile;
					else :
					endif;

					?>

				</div>
			</div>
		</div>
	</section>


<section class="client-reviews">
		<div class="container">
			<div class="row">



				<div class="col-md-12 pt-4 text-center"><span class="section-small-title">Client</span>
					<h2 class="section-title white-color" style="color: white !important;">Reviews</h2>
                <script src="https://widget.reviews.io/rich-snippet-reviews-widgets/dist.js"></script>
<div id="carousel-inline-widget-810" style="width:100%;max-width:810px;margin:0 auto;"></div>
<script>
richSnippetReviewsWidgets('carousel-inline-widget-810', {
store: 'hineon-com',
widgetName: 'carousel-inline',
primaryClr: '#f47e27',
neutralClr: '#f4f4f4',
reviewTextClr:'#ffffff',
ratingTextClr:'#ffffff',
layout:'fullWidth',
numReviews: 21
});
</script>

				</div>
			</div>
		</div>
	</section>


<section class="brands spacer-top pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-self-center">
				<div class="_section_title text-center">

			<span class="section-small-title"><b><?php the_field('trusted_by_title'); ?></b></span>
			<h2 class="section-title"><?php the_field('trusted_by_sub_tittle'); ?></h2>

				</div>
			</div>
			<div class="col-md-12 align-self-center">

				  <div class="container my-4">
					  <div id="_brands_slider" class="owl-carousel">
					<?php if(get_field('logos')): ?>
					<?php while(has_sub_field('logos')): ?>
					<div class="item">
						<img src="<?php the_sub_field('image'); ?>" data-project="<?php the_sub_field('project_image'); ?>" data-title="<?php the_sub_field('brand_title');?>" alt="" data-toggle="modal" data-target="#brandsPopup" data-link="<?php the_sub_field('ts_read_more_link'); ?>" data-description="<?php the_sub_field('image_data_description'); ?>" class="carousel-img" />
                    </div>
					<?php endwhile; ?>
					<?php endif; ?>
					  </div>
				</div>
			</div>
		</div>
    <?php
      $trusted_by_content = get_field('trusted_by_content');
      if( $trusted_by_content ):
        ?>
        <div id="trusted_by_content" class="collapse">
          <?php echo $trusted_by_content; ?></a>
        </div>
        <?php
      endif;
      $trusted_by_read_more = get_field('trusted_by_read_more');
      if( $trusted_by_read_more ):
      if( isset($trusted_by_read_more['trusted_by_read_more_label']) && !empty($trusted_by_read_more['trusted_by_read_more_label']) ):
        ?>
        <div class="text-md-center">
          <a class="trusted-by-read-more" data-toggle="collapse" data-target="#trusted_by_content" href="javascript:;"><?php echo $trusted_by_read_more['trusted_by_read_more_label']; ?></a>
        </div>
      <?php endif; ?>
      <?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>
