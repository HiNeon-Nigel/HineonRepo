<?php
// Template Name: Hineon Scripts
get_header(); ?>
    <header class="bg-light _sub_header" style="z-index:999 !important;">
        <div class="container">
            <nav class="secondary-nav navbar navbar-expand-lg pl-0 pr-0 navbar-light bg-light justify-content-between">
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
                            <a class="nav-link cool-link" id="tech_specs-tab" data-toggle="tab" href="#tech-specs" role="tab" aria-controls="tech_specs" aria-selected="false">Tech Specs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" id="shop-tab" data-toggle="tab" href="#shop" role="tab" aria-controls="shop" aria-selected="false" >Shop</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link cool-link" id="installations-tab" data-toggle="tab" href="#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://hineon.com/hiscripts/design/"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>



    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
            <div class="_tab_content">
                <section class="hero-sec spc pb-md-5 pt-md-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1><?php the_field('features_title'); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <p class="text-md-center"><?php the_field('features_description'); ?></p>
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
                                    <?php /*
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span aria-label="sr-only" style="font-size: 25px;bottom: 5px;position: absolute;">&#x2039;</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span aria-label="sr-only" style="font-size: 25px;bottom: 5px;position: absolute;">&#x203a;</span>
                                    </a>*/ ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<section>
                <div class="hcf-features-rbr">
                    <div class="container pt-5 pb-5">
                        <?php if( have_rows('features_sections') ):
                        while ( have_rows('features_sections') ) : the_row(); ?>
                       
                         <?php  if( get_row_index() % 2 == 1 ){ ?>
                        <div class="row <?php echo (get_row_index() == 1) ? '' : 'pt-5 mt-5' ?> align-items-center">
                            <div class="col-md-6 <?php echo (get_row_index() == 3) ? 'text-center' : '' ?>">
                                
                                    <div class="">
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                    </div>
                                
                            </div>
                            <div class="col-md-6 text-md-left text-center">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } else{ ?>
                        <div class="row pt-5 mt-5 align-items-center invert-image">
                            <div class="col-md-6 text-md-left text-center" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_sub_field('title'))); ?>-image">
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
                
                <div class="hcf-features-rbr">
                    <div class="container pb-5">
                        <div class="row pt-5 align-items-center invert-image">
                            <div class="col-md-2" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('font_size_section_title'))); ?>">
                                
                                    <h4 class="pt-4"><b><?php the_field('font_size_section_title'); ?></b></h4>
                                
                            </div>
                            <div class="col-md-6 pt-4">
                            <p><?php the_field('font_size_section_sub_title'); ?></p>
                            </div>
                            
                        </div>
                        <div class="row invert-image">
                            <div class="col-md-12" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('font_size_section_title'))); ?>">
                                
                                    
                                        <img src="<?php the_field('font_size_section_image'); ?>" class="img-fluid ">
                                        <div class="row"><div class="col-md-3"><p>Small: 20cm (8")</p></div>
                                        <div class="col-md-3"><p>Standard: 25cm (10")</p></div>
                                        <div class="col-md-3"><p>Large: 30cm (12")</p></div>
                                        <div class="col-md-3"><p>Extra Large: 38cm (15")</p></div>
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hcf-features-rbr">
                    <div class="container pb-5">
                        <div class="row pt-5 align-items-center invert-image">
                            <div class="col-md-5" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('color_options_title'))); ?>">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_field('color_options_title'); ?></b></h4>
                                    <p><?php the_field('color_options_description'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('color_options_title'))); ?>-image">
                                    <div class="">
                                        <img src="<?php the_field('color_options_image'); ?>" class="img-fluid ">
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="hcf-features-rbr">
                    <div class="container pt-5 pb-5">
                    <div class="row pb-5">
                    <div class="col-md-3 text-md-left text-center">
                                    <h4 class="pt-4"><b><?php the_field('four_fonts_section_title'); ?></b></h4>
                         </div>
                         <div class="col-md-6 pt-4">
                         <p><?php the_field('four_fonts_section_sub_title'); ?></p>
                         </div>           
                                </div>
                        <div class="row align-items-center">
                        <?php if( have_rows('four_fonts') ):
                        while ( have_rows('four_fonts') ) : the_row(); ?>
                         <?php  if( get_row_index() % 2 == 1 ){ ?>
                            <div class="col-md-5 text-center pb-5">
                            
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                
                                <p class="text-center">
                                <?php the_sub_field('title'); ?>
                                </p>
                            </div>
                         <?php }else{ ?>
                            <div class="col-md-6 offset-md-1 text-center pb-5">
                            
                                        <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                
                                <p class="text-center">
                                <?php the_sub_field('title'); ?>
                                </p>
                            </div>
                         <?php } ?>
                        <?php endwhile;
                        
                        endif; ?>
                        </div>
                    </div>
                </div>
                <div class="hcf-features-rbr">
                    <div class="container pb-5">
                        <div class="row pt-5 align-items-center invert-image">
                        <div class="col-md-5 text-md-left text-center" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('future_proof_section_title'))); ?>-image">
                                    <div class="">
                                        <img src="<?php the_field('future_proof_section_image'); ?>" class="img-fluid ">
                                    </div>
                                
                            </div>
                            <div class="col-md-6 text-md-left text-center" id="<?php echo strtolower(str_replace(array(' ','&'),'-',get_field('future_proof_section_title'))); ?>">
                                <div class="">
                                    <h4 class="pt-4 pt-md-0"><b><?php the_field('future_proof_section_title'); ?></b></h4>
                                    <p><?php the_field('future_proof_section_description'); ?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="container-fluid pb-5 pt-5 mb-5 info-hcf">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center text-white">
                                
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
                                <h1 style="font-size: 45px;font-weight: 600;">Try it Out</h1>
                <p class="text-center"><a class="hcf-btn  mt-0 mr-0" style="padding:10px 55px;" href="https://hineon.com/hiscripts/design/">CREATE</a></p>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
               
            </div>

        </div>
		
<!-- 	----------------------------------------------------------------------------------------	 -->
		
    <div class="tab-pane fade" id="tech-specs" role="tabpanel" aria-labelledby="tech_specs-tab">
        <div class="_tab_content">

            <section class="info-hcf text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center">
                            <h1>Technical Specifications</h1>
                        </div>
                    </div>
                </div>
            </section>


                <section class="table-info-hcf">
                    <div class="container pt-5 pb-5 mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table-info-hcf-in float-right">
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
                        <div class="row pt-5">
                        <div class="col-md-12 pt-0">
                        <p class="pt-0">*1 For outdoor application LED neon signs please submit your inquiry to our custom neon sign page</p>
                        <p class="pt-0">*2 Requires RF remote control (optional accessory)</p>
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
<!--                <div class="row">-->
<!--                    --><?php //echo do_shortcode('[products limit="12" category="hiscripts" columns="4" orderby="popularity" ]'); ?>
<!--                </div>-->
                <div class="">
                    <?php echo do_shortcode('[products limit="100" category="hiscripts" columns="4" orderby="popularity" ]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="installations" role="tabpanel" aria-labelledby="installations-tab">
        <div class="_tab_content">
            <section class="hero-sec pt-5 pb-5 spc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- 					<p class="pink-title">Traditional Neon Vs LED Neon Signs</p> -->
                            <h1><b>INSTALLATIONS</b></h1>
                        </div>
                    </div>

                </div>
            </section>
            <section class="main-content text-center">
                <?php /*
                <div class="container">
                    <div class="row my-5" role="tablist">
                        <div class="col-md-12">
                            <h4><b>How To Install Custom Neon Signs?</b></h4>
                            <p class="p-0">Choose the way you want to show people your LED neon signs:</p>
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
                                        <img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
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
                    
                    

                </div> */ ?>
				<div class="container">
                    <div class="row my-5" role="tablist">
                        <div class="col-md-12 text-center text-md-left">
                            <h4><b>How To Install No Backing Neon Signs?</b></h4>
                            <p class="p-0">Choose the way you want to show people your no backing neon signs:</p>
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
                                        <img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
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

                    </div>
                    <div id="installation_detail_backing">

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<?php get_footer(); ?>
