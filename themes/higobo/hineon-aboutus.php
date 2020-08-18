<?php
// Template Name: About Us

get_header(); ?>




                <section class="hero-sec spc" style="padding-top: 96px;padding-bottom: 96px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1><?php the_field('aboutus_title'); ?></h1>
                            </div>
                        </div>
                        <?php 
                        $about_description = get_field('aboutus_description');
                        if(!empty($about_description)){?>
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <p><?php the_field('aboutus_description'); ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </section>

        

                <div class="hcf-features-rbr">
                    <div class="container pt-5 pb-5">
                        <?php if( have_rows('about_sections') ):
                        while ( have_rows('about_sections') ) : the_row(); ?>
                        <?php  if( get_row_index() % 2 == 0 ){ ?>
                        <div class="row <?php echo (get_row_index() == 1) ? '' : 'pt-5 mt-5' ?> align-items-center">
                            <div class="col-md-6 p-3">
                                <div class="">
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                    <div class="row"><div class="col-md-3 offset-md-3">Los Angeles, USA </div><div class="col-md-6">Vancouver, Canada</div></div>
                                </div>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="">
                                    <h4><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } else{ ?>
                        <div class="row pt-5 mt-5 align-items-center invert-image">
                            <div class="col-md-6 p-3" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>">
                                <div class="">
                                    <h4><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 p-3" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>-image">
                                <div class="">
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                    
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php endwhile;
                        else :
//                            echo 'No Slide Found';
                        endif;
                        ?>
                    </div>
                </div>
 <!------------------------------------products-section------------------------------>
<section class="">
		<div class="container hcf-features-rbr">
        <div class="row">
        <div class="col-md-12 text-center p-5">
        
                                    <h4><b><?php the_field('product_section_title'); ?></b></h4>
                                    <div class="our_products_description p-3"><p><?php the_field('product_section_description'); ?></p></div>
        </div>
        </div>
			<div class="row">
				<?php
			if( have_rows('products') ):
				while ( have_rows('products') ) : the_row();?>
				<div class="col-md-4 _product_clmn">
					<div class="aboutus-products">
                    <a href="<?php echo (get_sub_field('product_image_link')=='#')? '#' : bloginfo('url').get_sub_field('product_image_link'); ?>"><img src="<?php the_sub_field('product_image'); ?>" class="img-fluid " /></a>
						<h1 class="pt-5 pb-3"><?php the_sub_field('product_title'); ?></h1>
<!-- 						<p class=""></p> -->
						<p class="p-3"><?php the_sub_field('product_description'); ?></p>
<!--						<?php //if(get_sub_field('link')){ ?>
                        <div class="_get_started_link">
                            <a  href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_label'); ?></a>
                        </div>-->

<!--						--><?php //} ?>
						
					</div>
				</div>
			<?php
				endwhile;
			else :
			endif;
			?> 
			</div>
		</div>
	</section>
               
 <!------------------------------------our mission section------------------------------>
                <section class="container-fluid hfc-special mt-5">
                    <div class="container hcf-features-rbr">
                            <div class="row text-center pt-5 pb-5">
                                <div class="col-xl-8 offset-xl-2 col text-center text-white">
                                    <h2 style="color: white !important;"><b><?php the_field('our_mission_title'); ?></b>  </h2>
                                    <h3 class="text-white pt-4 our-mission-description"><?php the_field('our_mission_description'); ?></h3></div>
                               
                            </div>
                                 <div class="row pt-5 pb-5 text-center">
				<?php
			if( have_rows('mission_buttons') ):
				while ( have_rows('mission_buttons') ) : the_row();?>
				<div class="<?php the_sub_field('button_div_class'); ?> _product_clmn">
					<div class="top-product">
							<?php //if(get_sub_field('link')){ ?>
                        <div class="">
                            <a href="<?php the_sub_field('button_link'); ?>" id="<?php the_sub_field('button_id'); ?>"><?php the_sub_field('button_label'); ?></a>
                        </div><?php //} ?>
						
					</div>
				</div>
			<?php
				endwhile;
			else :
			endif;
			?> 
			</div>
                                
                           	
                            
                        
                    </div>

                </section>


<!--                <section class="final-hcf">-->
<!--                    <div class="container pb-5 pt-5">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6 offset-md-3 center-btn text-center">-->
<!--                                <h3>-->
<!--                                    <b>Have Questions?<br>Want to get a Qoute?</b>-->
<!--                                </h3>-->
<!--                                <div class="spacer-btn"></div>-->
<!--                                <button class="hcf-btn">Contact Us</button>-->
<!--                                <button class="hcf-btn">Customize Your Own!</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
          
<!------------------------------------reviews-section------------------------------>
<section class="">
		<div class="container hcf-features-rbr">
        <div class="row">
        <div class="col-md-12 text-left pb-5 pt-5 mt-5">
        
                                    <h4><b><?php the_field('reviews_section_title'); ?></b></h4>
        </div>
        </div>
			<div class="row pb-5 mb-5">
				<?php
			if( have_rows('reviews') ):
				while ( have_rows('reviews') ) : the_row();?>
				<div class="col _product_clmn">
                
                <div class="rating-stars pb-1" style="color: #FFC400;">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					<div class="top-product">
                    <img src="<?php the_sub_field('review_image'); ?>" class="img-fluid ">
<!-- 						<p class=""></p> -->
						<p class="review_content mt-5 pr-2"><?php the_sub_field('review_content'); ?></p>
<!--						<?php //if(get_sub_field('link')){ ?>
                        <div class="_get_started_link">
                            <a  href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_label'); ?></a>
                        </div>-->

<!--						--><?php //} ?>
						
					</div>
				</div>
			<?php
				endwhile;
			else :
			endif;
			?> 
			</div>
		</div>
	</section>
		

<?php get_footer(); ?>

