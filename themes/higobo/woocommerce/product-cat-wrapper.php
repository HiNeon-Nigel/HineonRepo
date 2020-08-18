<?php

  defined( 'ABSPATH' ) || exit;
 ?>

<section class="hero-sec spc">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 text-center">
        <h1><?php echo (is_product_category() )? single_cat_title().' Neon Signs':'Product Tag'; ?></h1>
      </div>
    </div>
  </div>
</section>
 <div class="container">
     <div class="row pt-5">
         <div class="col-md-12">
             <?php woocommerce_content(); ?>
         </div>
     </div>
 </div>
<?php
 do_action( 'woocommerce_after_main_content' );