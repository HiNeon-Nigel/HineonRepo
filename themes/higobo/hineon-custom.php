<?php
// Template Name: HiNeon Custom
// Live working.... 26-02-20
get_header(); ?>
    <header class="bg-light _sub_header" style=" z-index:999 !important;">
        <div class="container">
            <nav class="secondary-nav navbar navbar-expand-lg navbar-light bg-light justify-content-between pl-0 pr-0">
                <a class="h3 text-dark" href="#"><?php the_title(); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                    <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link cool-link active" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="true" >Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" id="design_guide-tab" data-toggle="tab" href="#design-guide" role="tab" aria-controls="design_guide" aria-selected="false">Design Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" href="<?php bloginfo('url');?>/hineon-custom-projects/" >Projects</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link cool-link" id="installations-tab" data-toggle="tab" href="#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="create_yours"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">CREATE YOURS</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>



    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
            <div class="_tab_content">
                <section class="hero-sec spc">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1><?php the_field('features_title'); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <p><?php the_field('features_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="hicustom-feature-gallery">
                    <div class="container pt-5 pb-5">
                        <div class="hfg row">
                            <div class="col-md-12">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                        <?php 
                                        $i=0;
                                        if( have_rows('features_slider') ):
                                        while ( have_rows('features_slider') ) : the_row(); ?>
                                        <li data-target="#carouselExampleControls" data-slide-to="<?php echo $i; ?>" class="<?php echo (get_row_index() == 1) ? 'active' : '' ?>"></li>
                                        <?php 
                                        $i++;
                                        endwhile;
                                        else :
                                            echo 'No Slide Found';
                                        endif;
                                        ?>

                                    </ul>
                                    <div class="carousel-inner">
                                        <?php

                                        if( have_rows('features_slider') ):
                                        while ( have_rows('features_slider') ) : the_row(); ?>
                                        <div class="carousel-item <?php echo (get_row_index() == 1) ? 'active' : '' ?>">
                                        <img class="carousel-img" src="<?php the_sub_field('image'); ?>" alt="First slide" />
                                        </div>
                                        <?php endwhile;
                                        else :
                                            echo 'No Slide Found';
                                        endif;
                                        ?>
                                    </div>
                                    <?php /*<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span aria-label="sr-only" style="font-size: 25px;bottom: 5px;position: absolute;">&#x2039;</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span aria-label="sr-only" style="font-size: 25px;bottom: 5px;position: absolute;">&#x203a;</span>
                                    </a>
                                    */ ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="hcf-features-rbr">
                    <div class="container pt-5 pb-5">
                        <?php if( have_rows('features_sections') ):
                        while ( have_rows('features_sections') ) : the_row(); ?>
                        <?php  if( get_row_index() % 2 == 1 ){ ?>
                        <div class="row <?php echo (get_row_index() == 1) ? '' : 'pt-5 mt-5' ?> align-items-center">
                            <div class="col-md-6">
                                <div class="">
                                    <div class="sm-img-row">
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-left text-center pr-md-5 pl-md-5">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } else{ ?>
                        <div class="row pt-5 mt-5 align-items-center invert-image">
                            <div class="col-md-6 text-md-left text-center pr-md-5 pl-md-5" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>-image">
                                <div class="">
                                    <div class="sm-img-row">
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                    </div>
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

                <section class=" pb-5 pt-5 mt-5 mb-5 info-hcf">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center text-white">
                                    <h1><?php the_field('installation_time_line'); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                
                <section class="table-info-hcf">
                    <div class="container pt-5 pb-5">
                        <div class="row">
                            <div class="col-md-10">
                                <table class="table-info-hcf-in float-right">
                                    <tr>
                                        <td></td>
                                        <td><h5>Traditional Neon</h5></td>
                                        <td><h5>LED Neon</h5></td>
                                    </tr>
                                    <?php if( have_rows('traditional_vs_led') ):
                                    while ( have_rows('traditional_vs_led') ) : the_row(); ?>
                                        <tr>
                                            <td><?php the_sub_field('feature_name'); ?></td>
                                            <td><?php the_sub_field('traditional_neon'); ?></td>
                                            <td><?php the_sub_field('led_neon'); ?></td>
                                        </tr>
                                    <?php endwhile;
                                    else :
//                            echo 'No Slide Found';
                                    endif;
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container-fluid hfc-special mt-5">
                    <div class="container">
                        <div class="pb-5 pt-5">
                            <div class="row align-items-center pt-5 pb-5">
                                <div class="col-md-6 text-center">
                                    <div>
                                        <img  class="img-fluid" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/4-1-2.png">
                                    </div>
                                </div>
                                <div class="col-md-5 text-center text-white">
                                    <h2><b>There is going Green, Then there is going HiNeon</b>  </h2>
                                    <p class="text-white">Traditional neon products have a life expectancy of 30,000~ hours. HiNeon products triple that. For every dollar spent on keeping the traditional neon product on, you can save 40 cents on our energy efficient LED product. 40 cents multiplied by tens of thousands of hours. The math checks out, HiNeon is awesome. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <script src="https://widget.reviews.io/carousel-photo/dist.js"></script>
<div id="carousel-photos-widget" style="width:100%;max-width:1000px;margin:0 auto;"></div>
<script>
carouselPhotoWidget('carousel-photos-widget',{
store: 'hineon-com',
primaryClr: '#F47E27',
neutralClr: '#f4f4f4',
reviewTextClr: '#494949',
layout:'fullWidth',
numReviews: 21
});
</script>
            </div>
        </div>
    
    </div>
</section>

                  <section class="table-info-hcf">
                    <div class="container pt-5 pb-5">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1> <b>Have Questions?</b><br />
<b>Want to get a Quote?</b></h1>
                <p><a class="hcf-btn  mt-0 mr-0" style="padding:10px 55px;" id="create_yours" href="#">CUSTOMIZE YOUR OWN</a></p>
                            </div>
                        </div>
                        
                    </div>
                </section>

            </div>

        </div>
		
<!-- 	----------------------------------------------------------------------------------------	 -->
		
    <div class="tab-pane fade" id="design-guide" role="tabpanel" aria-labelledby="design_guide-tab">
        <div class="_tab_content">

            <section class="hero-sec spc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center" >
                            <h1><?php the_field('design_guide_title'); ?></h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5" id="maximize-your-creativity">
                            <h2><b><?php the_field('about_width_title'); ?></b></h2>
                            <?php the_field('about_width_description'); ?>

                        </div>
                        <div class="col-md-5 offset-md-1 pt-4" id="maximize-your-creativity-image">
                            <div class="image-sec">
                                <img src="<?php the_field('about_width_image'); ?>" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="image-sec">
                                <img src="<?php the_field('waterproof_image'); ?>" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-5 offset-md-1 pt-4">
                            <h2><b><?php the_field('waterproof_title'); ?></b></h2>
                            <?php the_field('waterproof_description'); ?>
                        </div> 
                    </div>
                </div>
            </section>

            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5" id="maximize-your-creativity">
                            <h2><b><?php the_field('color_options'); ?></b></h2>
                            <?php the_field('color_options_description'); ?>
                        </div>
                        <div class="col-md-5 offset-md-1 pt-5" id="maximize-your-creativity-image">
                            <div class="image-sec">
                                <img src="<?php the_field('color_options_image'); ?>" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-md-5 acrylic-icons">
                           <div class="row">
                               <?php
                               if( have_rows('acrylic_options_colors') ):
                               while ( have_rows('acrylic_options_colors') ) : the_row(); ?>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <img src="<?php the_sub_field('image'); ?>" class="img-fluid">
                                    <h4><?php the_sub_field('title'); ?></h4>
                                </div>
                               <?php
                               endwhile;
                               else :

                               endif;
                               ?>
                           </div>
                        </div>

                        <div class="col-md-5 offset-md-1 pt-4">
                            <h2><b><?php the_field('acrylic_options_title'); ?></b></h2>
                            <h4 class="pt-2"><b> <?php the_field('acrylic_options_sub_title'); ?></b></h4>
                            <?php the_field('acrylic_options_list'); ?>
                        </div>

                    </div>
                </div>
            </section>


            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center" >
                        
                        <div class="col-md-5" id="maximize-your-creativity">
                            <h2><b><?php the_field('backdrop_option_title'); ?></b></h2>
                        </div>

                        <div class="col-md-7" id="maximize-your-creativity">
                            <p><?php the_field('backdrop_option_description'); ?></p>
                        </div>
                        
                        <div class="col-md-12 pt-5 neon-icons" id="maximize-your-creativity-image">
                            <div class="row align-items-center">
                                <?php
                                if( have_rows('backdrop_options') ):
                                    while ( have_rows('backdrop_options') ) : the_row(); ?>
                                        <div class="col-4 col-sm-4 col-md-4">
                                            <img src="<?php the_sub_field('image'); ?>" class="img-fluid">
                                            <h4><?php the_sub_field('title'); ?></h4>
                                        </div>
                                        <?php
                                    endwhile;
                                else :

                                endif;
                                ?>
                           </div>
                        </div>

                    </div>
                </div>
            </section>
           

            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-md-5">
                            <div class="image-sec">
                                <img src="<?php the_field('power_consumption_image'); ?>" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-5 offset-md-1">
                            <h2><b><?php the_field('power_consumption_title'); ?></b></h2>
                           <?php the_field('power_consumption_detail_list'); ?>
                        </div> 

                    </div>
                </div>
            </section>



            <section class="pt-5 pb-5 hfc-d _programmable-neon" style="background-color:#8DCEBA;">
                <div class="container">
                    <div class="yt-style">
                        <h2 class="text-center pt-5"><b><?php the_field('programmable_neon_sign_title'); ?></b></h2>
                        <h4 class="text-center pb-3"><?php the_field('programmable_neon_sign_sub_title'); ?></h4>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9 mb-5">
                        <?php the_field('programmable_neon_sign_video'); ?>
                    </div>
                </div>
            </section>

            <section class="hfc-d">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-md-12">
                            <h2><b><?php the_field('sketch_to_finish_title'); ?></b></h2>
                        </div>
                        
                        <div class="col-md-12 pb-5">
                        <?php /**
                         * 
                         * uncomment this if needed gallery for sketch to finish. commented by Farooq.
                            <section class="hicustom-feature-gallery">
                                <div class="container">
                                    <div class="hfg row">
                                        <div class="col-md-10 offset-md-1">
                                            <div id="carouselSketch" class="carousel slide" data-ride="carousel">
                                                <ul class="carousel-indicators">
                                                    <?php if( have_rows('sketch_to_finish_slides') ):
                                                        while ( have_rows('sketch_to_finish_slides') ) : the_row(); ?>
                                                            <li data-target="#carouselSketch" data-slide-to="<?php echo (get_row_index() - 1) ; ?>" class="<?php echo (get_row_index() == 1) ? 'active' : '' ?>"></li>
                                                        <?php endwhile;
                                                    else :
                                                        echo 'No Slide Found';
                                                    endif;
                                                    ?>
                                                </ul>
                                                <div class="carousel-inner">
                                                    <?php if( have_rows('sketch_to_finish_slides') ):
                                                    while ( have_rows('sketch_to_finish_slides') ) : the_row(); ?>
                                                    <div class="carousel-item <?php echo (get_row_index() == 1) ? 'active' : '' ?>">
                                                    <img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt="First slide">
                                                    </div>
                                                    <?php endwhile;
                                                    else :
                                                        echo 'No Slide Found';
                                                    endif;
                                                    ?>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselSketch" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselSketch" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>*/?>
                            
                            <section>
                                <div class="container">
                                    <div class="hfg row">
                                        <div class="col-md-10 offset-md-1">
                                      <?php if( have_rows('sketch_to_finish_slides') ):
                                                    while ( have_rows('sketch_to_finish_slides') ) : the_row(); ?>
                                                    <div class="sketch-item <?php echo (get_row_index() == 1) ? 'active' : '' ?>">
                                                    <img class="d-block mt-5" src="<?php the_sub_field('image'); ?>" alt="First slide">
                                                    </div>
                                                    <?php endwhile;
                                                    else :
                                                        echo 'No Slide Found';
                                                    endif;
                                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>

<!--            <div class="container-fluid pb-5 pt-5">-->
            <section class="container-fluid hfc-special-cta mt-5">
                <div class="container">
                    <div class="row align-items-center pt-5 pb-5">
                        <div class="col-md-6 text-center">
                            <div>
                                <img  class="img-fluid" src="<?php the_field('contact_to_creative_specialist_image'); ?>">
                            </div>
                        </div>
                        <div class="col-md-5 text-center text-white">
                            <h2 class="text-white"><b><?php the_field('contact_to_creative_specialist'); ?></b>  </h2>
                            <!--                        <button class="hcf-btn">Contact Us</button>-->
                            <a class="hcf-btn" id="create_yours_contact" href="https://form.jotform.com/92557128196264<?php //the_field('contact_to_creative_specialist_link') ?>">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>
		
		
		<!-- 	----------------------------------------------------------------------------------------	 -->
		
		
    <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-tab">
        <div class="_tab_content">
            <section class="hero-sec spc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center">
                            <h1>Shop</h1>
                        </div>
                    </div>
                </div>
            </section>
<!--            div.section-->
            <div class="container mt-5">
<!--                <div class="_shop_title">-->
<!--                    <h2 class="text-center pt-5 mb-5">Shop</h2>-->
<!--                </div>-->
                <div class="row">
                    <?php echo do_shortcode('[products limit="-1" category="custom-neon-signs" columns="4" orderby="popularity" ]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="installations" role="tabpanel" aria-labelledby="installations-tab">
        <div class="_tab_content">
            <section class="hero-sec spc" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- 					<p class="pink-title">Traditional Neon Vs LED Neon Signs</p> -->
                            <h1>INSTALLATIONS</h1>
                        </div>
                    </div>

                </div>
            </section>
            <section class="main-content">
                <div class="container">
                    <div class="row my-5" role="tablist">
                        <div class="col-md-12 text-center text-md-left">
                            <h4><b>How To Install Custom Neon Signs?</b></h4>
                            <p class="p-0 text-center text-md-left">Choose the way you want to show people your LED neon signs:</p>
                        </div>
                        <?php
                        $category_query_args = array(
                            'cat' => 4,
                            'order'     => 'ASC',
                        );
                        $category_query = new WP_Query( $category_query_args );
                        if ( $category_query->have_posts() ) {
                            while ($category_query->have_posts()){
                                $category_query->the_post();
                                ?>
                                <div class="col-md-3 text-center mt-4 col-sm-6">
                                    <div class="__animate_img_box installation_post_item">
                                        <img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam carousel-img"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
                                        <div class="img-title" data-postid="<?php echo get_the_ID(); ?>"  style="cursor: pointer"><h5 class="mt-4"><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                  
                </div>
				<div class="container">
                    <div class="row my-5" role="tablist">
                        <div class="col-md-12 text-center text-md-left">
                            <h4><b>How To Install No Backing Neon Signs?</b></h4>
                            <p class="p-0 text-center text-md-left">Choose the way you want to show people your no backing neon signs:</p>
                        </div>
                        <?php
                        $category_query_args = array(
                            'category_name' => 'no-backing-neon-signs'
                        );
                        $category_query = new WP_Query( $category_query_args );
                        if ( $category_query->have_posts() ) {
                            while ($category_query->have_posts()){
                                $category_query->the_post();
                                ?>
                                <div class="col-md-3 text-center mt-4 col-sm-6">
                                    <div class="__animate_img_box installation_post_item">
                                        <img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam carousel-img"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
                                        <div class="img-title" data-postid="<?php echo get_the_ID(); ?>"  style="cursor: pointer"><h5 class="mt-4"><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div id="installation_detail">

<!--                    </div>-->
<!--                    <div id="installation_detail_backing">-->
<!---->
<!--                    </div>-->
                </div>
            </section>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>
