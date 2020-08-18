<?php
// Template Name: Thank You

get_header(); ?>




                <section class="hero-sec" style="padding-top: 96px;padding-bottom: 96px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 style="font-weight: 600;font-size: 50px;"><?php the_field('page_title'); ?></h1>
                            </div>
                        </div>
                        <?php 
                        //$about_description = get_field('thankyou_description');
                        //if(!empty($about_description)){?>
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <div class="col-md-8 offset-md-2 p-5"><p style="font-size:18px;"><?php the_field('page_description'); ?></p></div>
                            <div class=""><p style="font-size:18px;font-weight:600">Other ways to connect with us:
                            </p></div>
                        </div>
                        </div>
                        <div class="row pt-5 mt-5">
                        <?php
			if( have_rows('icons') ):
				while ( have_rows('icons') ) : the_row();?>
				
                
                        <div class="<?php the_sub_field('icon_div_class'); ?>">
                        <img class="img-fluid" src="<?php the_sub_field('icon_image'); ?>"/>
                        <p><?php the_sub_field('icon_description'); ?></p>
                        </div>
                      
			<?php
				endwhile;
			else :
			endif;
			?> 
                        </div>
                        
                        <?php //} ?>
                    </div>
                </section>

        

               
 <!------------------------------------instagram section------------------------------>
                <section class="container-fluid hfc-special mt-5">
                    <div class="container hcf-features-rbr">
                            <div class="row align-items-center pt-5 pb-5">
                                <div class="col-md-10 offset-md-1 text-white">
                                <h5 class="text-left" style="font-size: 12px; color: #F86970;">FOLLOW US ON<?php //the_field('our_mission_description'); ?></h5>
                              
                                    <h2 class="text-left"><b><?php the_field('section_title'); ?></b>  </h2>
                                       <div class="row">
			<div class="col"><?php the_field('instagram_code'); ?></div>
			</div>
                                </div>
                               
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
			<div class="row">
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

