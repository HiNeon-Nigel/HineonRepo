<?php get_header(); ?>
<?php
  $term_id = get_queried_object()->term_id;
  $term_name = get_queried_object()->name;
  $termArr = explode('-',$term_name);
  $state_code = $termArr[1];
  $stateArr = clt_usa_canada_states($state_code);
  $args = array(
    'post_type' => 'clt',
    'numberposts' => -1,
    'tax_query' => array(
        array(
        'taxonomy' => 'clt_category',
        'field' => 'term_id',
        'terms' => $term_id
         )
      )
    );
  $clt_posts = get_posts($args);
 ?>
<div class="container">
<div class="row mt-76px">
        <div class="col-md-12">
        <?php
          if($stateArr['country'] == 'Canada'){
            echo '<h1 class="text-center"><b>We made custom LED Neon Sign for '.$stateArr["state"].'!</b></h1>
                  <p class="text-center">Below is our custom made neon sign gallery, Are you in '. $stateArr["state"].' and want to get beautiful neon signs? Our shop is based in Vancouver BC and we deliver Canada wide in 2-3 weeks.</p>';
          }else if($stateArr['country'] == 'USA'){
            echo '<h1 class="text-center"><b>We made custom LED Neon Sign for ' . $stateArr["state"] . '!</b></h1>
                    <p class="text-center">Below is our custom made neon sign gallery, Are you in '. $stateArr["state"] . ', '.$stateArr["country"].' and want to get beautiful neon signs? Our shop is based in Vancouver, BC and we deliver signs to all U.S. States.</p>';
          }
        ?>
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
        ?>
    </div>
    <div class="row clt-flicker-images">
        <?php
          echo do_shortcode('[clt-flicker-images city_name='.$stateArr["state"].']');
        ?>
    </div>

    <div class="row">
        <div class="col-md-12"><?php
          if($clt_posts){
            echo '<div class="text-justify mb-md-5 mt-md-5">';
            foreach($clt_posts as $clt_key => $clt_post){
              echo '<a href="'.get_the_permalink($clt_post->ID).'">'.$clt_post->post_title.'</a>, ';
            }
            echo '</div>';
          }
        ?></div>

    </div>
</div>


<?php get_footer(); ?>
