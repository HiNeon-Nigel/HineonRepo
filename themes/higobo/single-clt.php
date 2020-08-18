<?php get_header(); ?>
<meta name="description" content="Preferred description goes here"/>
<div class="container">
<div class="row mt-76px">
        <div class="col-md-12">
        <?php echo get_province_or_state();?>
         </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <p class="text-center pb-md-5 mb-md-5 mt-md-5">Visit us at<br />
            <a href="<?php bloginfo('url'); ?>"><b>www.hineon.com</b></a> <br />
                and get free Neon design quote in 24 hrs!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2 class="text-center"><b>Create Your Own Neon Sign</b></h2>
            <p class="text-center">
            <a href="https://www.hineon.com" class="hcf-btn"><b>Design Lab</b></a></p>

            <?php echo do_shortcode('[instagram-feed num=6 cols=3 sortby=random showcaption=false]');?>
        </div>
    </div>
    <div class="row">

        <?php
        echo do_shortcode('[clt-rand-posts]');
        //print_r($categories);
        ?>
    </div>
    <div class="row clt-flicker-images">
        <?php
          global $post;
          $city_name =  get_field('city_name', $post->ID, true);
          echo do_shortcode('[clt-flicker-images city_name='.$city_name.']');
        ?>
    </div>

    <div class="row">
        <div class="col-md-12"><?php
        echo do_shortcode('[clt-cities]');
        //the_field('content');?></div>

    </div>
</div>


<?php get_footer(); ?>
