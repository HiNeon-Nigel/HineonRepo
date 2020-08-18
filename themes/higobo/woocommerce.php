<?php get_header();
global $woocommerce , $post , $product;
$thepostid = $post->ID;
$_product = wc_get_product( $thepostid ); ?>

<?php if( is_shop()){ ?>
    <div class="container mt-76px">
        <div class="row  pt-5">
            <div class="col-md-12">
                <?php woocommerce_content(); ?>
            </div>
            <!--div class="col-md-3">
                <?php //get_sidebar('shop'); ?>
            </div-->
        </div>
    </div>
<?php
do_action( 'woocommerce_after_main_content' );} elseif( is_product() ){
    $product_object = $thepostid ? wc_get_product( $thepostid ) : new WC_Product;
    if(is_product() AND ('custom' == $_product->get_type())):
      wc_get_template( 'single-product-custom.php' );
    else: ?>
    <div class="container mt-76px test">
        <div class="pt-5">
            <?php woocommerce_content(); ?>
        </div>
    </div>
<?php
do_action( 'woocommerce_after_main_content' );endif; ?>
<?php } elseif(is_product_category() || is_product_tag()) { ?>
  <?php wc_get_template( 'product-cat-wrapper.php' ); ?>
<?php } else{ ?>
    <!-- Details -->
    <div class="container mt-76px">
        <div class="pt-5">
            <?php woocommerce_content(); ?>
        </div>

    </div>
<?php
do_action( 'woocommerce_after_main_content' );}
get_footer(); ?>
