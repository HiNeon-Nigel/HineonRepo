<?php
// Template Name: HiNeon Hiletters
// Live working.... 26-02-20
get_header(); ?>
<header class="bg-light _sub_header" style="z-index:999 !important;">
    <div class="container">
        <nav class="secondary-nav navbar navbar-expand-lg navbar-light pl-0 pr-0 bg-light justify-content-between">
            <a class="h3 text-dark" href="#">HiLetters</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link cool-link active" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="true" >Features</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link cool-link" id="tech-specs-tab" data-toggle="tab" href="#tech-specs" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/tech-specs">Tech Specs</a>
                    </li>
<!--                    <li class="nav-item">-->

<!--                        <a class="nav-link cool-link" id="design_guide-tab" data-toggle="tab" href="#design-guide" role="tab" aria-controls="design_guide" aria-selected="false">Design Guide</a>-->

<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link cool-link" id="shop-tab" data-toggle="tab" href="#shop" role="tab" aria-controls="shop" aria-selected="false" >Shop</a>
                    </li>

                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" id="installations-tab" data-toggle="tab" href="#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php bloginfo('url'); ?>/hiletters/design/"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
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
                        <div class="col-md-10 offset-md-1 text-center">
                            <p><?php the_field('features_description'); ?></p>
                        </div>
                    </div>
                </div>

            </section>



            <section class="pb-5 _programmable-neon">

                <div class="container pr-0 pl-0">

                    <!--                    <div class="yt-style">-->

                    <!--                        <h2 class="text-center pt-5"><b>Programmable Neon Sign</b></h2>-->

                    <!--                        <h4 class="text-center pb-3">We can make your neon sign animated as well!</h4>-->

                    <!--                    </div>-->

                    <div class="embed-responsive embed-responsive-16by9 mb-5">

<!--                        <iframe width="560" height="315" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/HiLetters-Video-JUICE-ICE-hig-res.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>-->

                        <video width="320" height="240" controls poster="<?php the_field('hiletters_video_cover_image'); ?>">

                            <source src="<?php the_field('hiletters_video'); ?>" type="video/mp4">

                            <source src="<?php the_field('hiletters_video'); ?>" type="video/ogg">
                            <img src="<?php the_field('hiletters_video_cover_image'); ?>">
                            Your browser does not support the video tag.

                        </video>

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
                                            <div class="">
                                                <img src="<?php the_sub_field('image'); ?>" class="img-fluid ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-left text-center pl-md-5">
                                        <div class="">
                                            <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                            <p><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } else{ ?>
                                <div class="row pt-5 mt-5 align-items-center" id="invert-image">
                                    <div class="col-md-6 text-md-left text-center pr-md-5 " id="<?php echo strtolower(str_replace(' ','-',get_sub_field('title'))); ?>">
                                        <div class="">
                                            <h4 class="pt-4 pt-md-0"><b><?php the_sub_field('title'); ?></b></h4>
                                            <p><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="<?php echo strtolower(str_replace(' ','-',get_sub_field('title'))); ?>-image">
                                        <div class="">
                                            <div class="">
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


<!-- 	Inserting gallery here for hiletters page (feature section)	 -->

			<section class="home-gallery">
		<div class="container">
			<h1 class="section-title text-center"><?php the_field('hiletters_gallery_title'); ?></h1>
			<div class="gallery-slider">
				<div class="owl-carousel owl-theme gallery-carousel">

					<?php
					$images = get_field('hiletters_gallery');
					if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<div class="item">
										 <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="carousel-img"/>

								</div>
							<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

			<section class="container-fluid hfc-special mt-5">
                    <div class="container">
                        <div class="pt-5">
                            <div class="row align-items-center  pt-5 pb-5 mb-5">


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
                <p class="text-center"><a class="hcf-btn  mt-0 mr-0" style="padding:10px 55px;" href="<?php bloginfo('url');?>/hiletters/design/">CREATE</a></p>
                            </div>
                        </div>

                    </div>
                </section>


<!--            <div class="container-fluid pb-5 pt-5">-->

<!--                <div class="row align-items-center hfc-special pt-5 pb-5">-->

<!--                    <div class="col-md-6 text-center">-->

<!--                        <div>-->

<!--                            <img  class="img-fluid" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/4-1-2.png">-->

<!--                        </div>-->

<!--                    </div>-->

<!--                    <div class="col-md-5 text-center text-white">-->

<!--                        <h2><b>There is going Green, Then there is going HiNeon</b>  </h2>-->

<!--                        <p class="text-white">Traditional neon products have a life expectancy of 30,000~ hours. HiNeon products triple that. For every dollar spent on keeping the traditional neon product on, you can save 40 cents on our energy efficient LED product. 40 cents multiplied by tens of thousands of hours. The math checks out, HiNeon is awesome. </p>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->







<!--            <section class="final-hcf">-->

<!--                <div class="container pb-5 pt-5">-->

<!--                    <div class="row">-->

<!--                        <div class="col-md-6 offset-md-3 center-btn text-center">-->

<!--                            <h3>-->

<!--                                <b>Have Questions?<br>Want to get a Qoute?</b>-->

<!--                            </h3>-->

<!--                            <div class="spacer-btn"></div>-->

<!--                            <button class="hcf-btn">Contact Us</button>-->

<!--                            <button class="hcf-btn">Customize Your Own!</button>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </section>-->
        </div>
    </div>
    <!-- 	----------------------------------------------------------------------------------------	 -->

    <div class="tab-pane fade" id="tech-specs" role="tabpanel" aria-labelledby="tech-specs-tab">
        <div class="_tab_content">
			  <section class=" pb-5 pt-5 mb-5 info-hcf">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="text-center text-white">
                                <h1><?php the_field('installation_time_line'); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>

            </section>





            <section class="table-info-hcf">

                <div class="container pt-5 pb-5 mb-5">

                    <div class="row">

                        <div class="col-md-12">

                            <table class="table-info-hcf-in">
<!--                                <tr>-->
<!--                                    <td></td>-->
<!--                                    <td><h1>Traditional Neon</h1></td>-->
<!--                                    <td><h1>LED Neon</h1></td>-->
<!--                                </tr>-->
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
		</div>
	</div>

    <div class="tab-pane fade" id="design-guide" role="tabpanel" aria-labelledby="design_guide-tab">

        <div class="_tab_content">



            <section class="hero-sec spc">

                <div class="container">

                    <div class="row">

                        <div class="col-md-10 offset-md-1 text-center">

                            <h1>Neon Sign Design Guide</h1>

                        </div>

                    </div>

                </div>

            </section>



            <section class="hfc-d">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-md-5">

                            <h2><b>Custom Neon Width</b></h2>

                            <div class="content">

                                <p>Different neon width available for your every design need. The standard available neon width is 12mm, which is available in all colors. There are two thicker neon width at 14mm and 25mm for larger designs. A slim neon at 8mm is available, but in single color only. Please note that the slim neon may be required to recreate smaller sized shapes.</p>

                            </div>

                            <div class="options pt-3">



                                <ul class="option-list">

                                    <li>*Standard 12mm,</li>

                                    <li>*Slim 8mm (single color only),</li>

                                    <li>*Thick 14mm, 20mm, 25mm, 32mm</li>

                                    <li>Indicates availability at additional cost</li>

                                </ul>

                            </div>



                        </div>

                        <div class="col-md-5 offset-md-1 pt-4">

                            <div class="image-sec">

                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-02-1.png" class="img-fluid">

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

                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-04-1.png" class="img-fluid">

                            </div>

                        </div>



                        <div class="col-md-5 offset-md-1 pt-4">

                            <h2><b>Waterproof</b></h2>

                            <div class="content">

                                <p>Waterproof HiNeon signs available to accommodate all your event needs. Permanent outdoor installation would require additional notice as regulations may differ depending on your whereabouts.</p>

                            </div>

                            <div class="options pt-3">

                                <ul class="option-list">

                                    <li>*Indoor</li>

                                    <li>*Outdoor Events</li>

                                    <li>*Outdoor permanent installation</li>

                                    <li>Indicates availability at additional cost</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <section class="hfc-d">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-md-5">

                            <h2><b>Color Options</b></h2>

                            <div class="content">

                                <p>Our neon tubes can produce all sorts of colors, providing an industry-best color matching service.

                                    <br><br>

                                    Cool white, Warm white, Red, Green, Blue, Baby blue, Yellow, Pink, Orange, RGB (14mm+)

                                </p>

                            </div>

                            <div class="options pt-3">



                                <ul class="option-list">

                                    <li>Please note that RGB (tunable) neon tubes will require a thicker width at 14mm+.</li>

                                </ul>

                            </div>



                        </div>

                        <div class="col-md-5 offset-md-1 pt-5">

                            <div class="image-sec">

                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-82.png" class="img-fluid">

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

                                <div class="col-6 col-sm-6 col-md-6">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-86.png" class="img-fluid">

                                    <h4>Clear</h4>

                                </div>

                                <div class=" col-6 col-sm-6 col-md-6">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Ellipse-11.png" class="img-fluid">

                                    <h4>Black</h4>

                                </div>

                                <div class="col-6 col-sm-6 col-md-6">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Ellipse-9.png" class="img-fluid">

                                    <h4>Red</h4>

                                </div>

                                <div class="col-6 col-sm-6 col-md-6">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-84.png" class="img-fluid">

                                    <h4>Custom</h4>

                                </div>

                            </div>

                        </div>



                        <div class="col-md-5 offset-md-1 pt-4">

                            <h2><b>Acrylic Options</b></h2>

                            <h4 class="pt-2"><b>(5mm/ 0.2” thickness, 1.4 lbs/sq. Ft., 7 kg/sq. Meter)</b></h4>

                            <div class="content">

                                <p>The acrylic backdrop provides a variety of color to choose from. Aside from standard colors, we also support UV printing on the backdrop, enabling more creativity to your design. .

                                </p>

                            </div>

                            <div class="options pt-3">

                                <ul class="option-list">

                                    <li>*Red Green Blue Yellow Orange (extra cost)</li>

                                </ul>

                            </div>

                        </div>



                    </div>

                </div>

            </section>





            <section class="hfc-d">

                <div class="container">

                    <div class="row align-items-center">



                        <div class="col-md-5">

                            <h2><b>Backdrop Options</b></h2>

                        </div>



                        <div class="col-md-7">

                            <p>Customize your backdrop acrylic to fit better with the rest of the design or surroundings. We have a wide variety of choices.</p>

                        </div>



                        <div class="col-md-12 pt-5 neon-icons">

                            <div class="row align-items-center">

                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-07-1.png" class="img-fluid">

                                    <h4>Rectangle</h4>

                                </div>

                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-06-1.png" class="img-fluid">

                                    <h4>Circle</h4>

                                </div>

                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-08-1.png" class="img-fluid">

                                    <h4>Outline to Letter</h4>

                                </div>



                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-10-1.png" class="img-fluid">

                                    <h4>No Backing</h4>

                                </div>

                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-09-1.png" class="img-fluid">

                                    <h4>Outline to Shape</h4>

                                </div>

                                <div class="col-4 col-sm-4 col-md-4">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-11-1.png" class="img-fluid">

                                    <h4>Acrylic Box</h4>

                                </div>

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

                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Website-Assets-05-1.png" class="img-fluid">

                            </div>

                        </div>



                        <div class="col-md-5 offset-md-1">

                            <h2><b>Power Consumption</b></h2>

                            <div class="content">

                                <p>Our product operates at a very low voltage of 12V, which makes the product very easy and safe to handle. It also uses low power, reducing energy waste and electric bill costs.</p>

                            </div>

                            <div class="options pt-3">

                                <ul class="option-list">

                                    <li>*Single Color 7W/m (2.1w/ft)</li>

                                    <li>*RGB 10W/m (3w/ft),</li>

                                    <li>*12V UL listed power supply</li>

                                </ul>

                            </div>

                        </div>



                    </div>

                </div>

            </section>







            <section class="pt-5 pb-5 hfc-d _programmable-neon" style="background-color:#8DCEBA;">

                <div class="container">

                    <div class="yt-style">

                        <h2 class="text-center pt-5"><b>Programmable Neon Sign</b></h2>

                        <h4 class="text-center pb-3">We can make your neon sign animated as well!</h4>

                    </div>

                    <div class="embed-responsive embed-responsive-16by9 mb-5">

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GNua_JsCtqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                </div>

            </section>



            <section class="hfc-d">

                <div class="container">

                    <div class="row align-items-center">



                        <div class="col-md-12">

                            <h2><b>Sketch to Finish</b></h2>

                        </div>



                        <div class="col-md-12 pt-5 pb-5">

                            <section class="hicustom-feature-gallery">

                                <div class="container">

                                    <div class="hfg row">

                                        <div class="col-md-10 offset-md-1">

                                            <div id="carouselSketch" class="carousel slide" data-ride="carousel">

                                                <ul class="carousel-indicators">

                                                    <li data-target="#carouselSketch" data-slide-to="0" class="active"></li>

                                                    <li data-target="#carouselSketch" data-slide-to="1" class=""></li>

                                                    <li data-target="#carouselSketch" data-slide-to="2" class=""></li>

                                                </ul>

                                                <div class="carousel-inner">

                                                    <div class="carousel-item active">

                                                        <img class="d-block w-100" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-100.png" alt="First slide">

                                                    </div>

                                                    <div class="carousel-item">

                                                        <img class="d-block w-100" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-100.png" alt="Second slide">

                                                    </div>

                                                    <div class="carousel-item">

                                                        <img class="d-block w-100" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/Group-100.png" alt="Third slide">

                                                    </div>

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

                            </section>

                        </div>



                    </div>

                </div>

            </section>



            <div class="container-fluid pb-5 pt-5">

                <div class="row align-items-center hfc-special-cta pt-5 pb-5">

                    <div class="col-md-6 text-center">

                        <div>

                            <img  class="img-fluid" src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/T2-1.png">

                        </div>

                    </div>

                    <div class="col-md-5 text-center text-white">

                        <h2><b>If you are still unsure which option goes best with your design, please feel free to let our creative specialist know right here:</b>  </h2>

                        <button class="hcf-btn">Contact Us</button>

                    </div>

                </div>

            </div>



            <section class="hfc-end-spc pt-5 pb-5">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 offset-md-2">

                            <h3>Congratulations! Now you know how to design your own Neon Sign</h3>

                            <button class="hcf-btn">START</button>

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

            <div class="container mt-5">

                <!--                <div class="_shop_title">-->

                <!--                    <h2 class="text-center pt-5 mb-5">Shop</h2>-->

                <!--                </div>-->

                <div class="">

                    <?php echo do_shortcode('[products limit="-1" category="hiletters" columns="4" orderby="desc" ]'); ?>

                </div>

            </div>

        </div>

    </div>

    <div class="tab-pane fade" id="installations" role="tabpanel" aria-labelledby="installations-tab">

        <div class="_tab_content">

            <!-- Page Content -->
            <section class="hero-sec pt-5 pb-5 pb-md-5 spc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <h1>INSTALLATIONs</h1>

                        </div>
                    </div>
                </div>
            </section>
            <section class="top-sec">
                <div class="container">
                    <div class="row package-text">
                        <div class="col-md-6 text-center">
                            <h1>What's in the Package</h1>
                        </div>
                        <div class="col-md-6 text-center">
                            <p>
                                Here is what you get in the package; metal beams, letters, power adaptor, wire connectors, beam stoppers, screw holders, 4mm screws, clear acrylic supporter, XXmm screws.
                            </p>
                        </div>
                    </div>
                    <div class="head-image text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/head.png" class="img-fluid">
                    </div>
                </div>
            </section>
            <section class="body-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center main-title">
                            <h1>Follow These Steps:</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item1.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 1</h2>
                            </div>
                            <div class="box-desc">
                                <p>Flip the metal beams to the back where the holes are. Align the clear acrylic supporter and lock it with the 4 mm screws.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item2.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 2</h2>
                            </div>
                            <div class="box-desc">
                                <p>Flip it to the font.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item4.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 3</h2>
                            </div>
                            <div class="box-desc">
                                <p>Choose your preferred wire exit of the sign. Place the red wire at the top of the sign and the white wire at the bottom.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item5.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 4</h2>
                            </div>
                            <div class="box-desc">
                                <p>Fill the opposite side with the beam stoppers.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item6.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 5</h2>
                            </div>
                            <div class="box-desc">
                                <p>Install the adapter to the sign and plug into the outlet.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item8.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 6</h2>
                            </div>
                            <div class="box-desc">
                                <p>Place the letters on the beam and make sure the letters work before mounting the sign.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item9.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 7</h2>
                            </div>
                            <div class="box-desc">
                                <p>Place the metal beam against the wall and mark the areas where it needs to be drilled on the wall</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item10.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 8</h2>
                            </div>
                            <div class="box-desc">
                                <p>Drill a hole on the wall at the marked areas</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item11.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 9</h2>
                            </div>
                            <div class="box-desc">
                                <p>Insert the nail holders with a hammer where the holes are.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item12.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 10</h2>
                            </div>
                            <div class="box-desc">
                                <p>Align the holes with the sign</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item14.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 11</h2>
                            </div>
                            <div class="box-desc">
                                <p>Drill the screws accordingly</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="box-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/item15.png" class="img-fluid">
                            </div>
                            <div class="box-title">
                                <h2>Step 12</h2>
                            </div>
                            <div class="box-desc">
                                <p>Arrange the characters back to the beams and your sign is ready light up.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="space mt-5"></section>
            <section class="contact-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center need-help-sec">
                            <h1 class="mb-4">Need Help?</h1>
                            <a class="help-button" id="create_yours_contact">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>

</div>



<?php get_footer(); ?>



<script>

    jQuery(document).ready(function ($) {

        $(document).on('click', '.installation_post_item img, .installation_post_item .img-title', function () {

            var postid = $(this).data('postid');

            $('#installation_detail').html('<h1>Loading...</h1>');

//            $("html, body").animate({

//                    scrollTop: $("#installation_detail").offset().top

//                },

//                500,

//                'linear');

            $.ajax({

                type : "GET",

                url : "<?php echo admin_url('admin-ajax.php'); ?>",

                data : {

                    action: "get_post",

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



    })

</script>
