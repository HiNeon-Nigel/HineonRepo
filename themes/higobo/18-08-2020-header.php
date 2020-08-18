<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex" />
<style>

.swiper-pagination{
	
	position:none !important;
}

</style>
    <?php   wp_head(); ?>
    <meta charset="UTF-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><#?php echo get_bloginfo( 'name' ).  '  -  '  .get_bloginfo('description'); ?></title> -->
    <title><?php wp_title() ?></title>    
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
<div class="container-fluid" style="overflow: hidden;">
	<div class="row">
		<div class="col-md-12 pr-0 pl-0">
			<p class="covid text-center">Canadian Manufacturer, Ships to CAN & USA</p>
		</div>
	</div>
</div>
<header class="_main_header">
	<div class="container">

		<nav class="navbar navbar-expand-lg pl-0 pr-0">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
        		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
            <button class="navbar-toggler pl-0 pr-5" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
		  </button>
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <?php
                        if ( has_custom_logo() ) { ?>
                            <img src="<?php echo $logo[0] ?>" alt="<?php echo get_bloginfo( 'name' );?>" class="img-fluid">
                        <?php
                        } else { ?>
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2020/02/higobo_head_logo.png" alt="">
                        <?php }
                        ?>

                    </a>
                    <div class="d-inline-block d-lg-none mobile-country-nav">
			<ul class="navbar-nav _cart-item">
                <?php
                if(is_active_sidebar('header-menu')){
                    dynamic_sidebar('header-menu');
                }
                ?>
				<li class="header-widget">
                <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" class=""><div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div><i class="fas fa-shopping-cart"></i></a>
                </li>
			</ul>
            </div>

		  <div class="collapse navbar-collapse" id="navbarText">
			<?php  wp_nav_menu([
					'theme_location'  => 'header-menu',
					'container'       => 'false',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav ml-auto mr-0',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker(),
				]);
			  ?>
			<ul class="navbar-nav _cart-item cs-none">
                <?php
                if(is_active_sidebar('header-menu')){
                    dynamic_sidebar('header-menu');
                }
                ?>
				<a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" class="cart_icon"><div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div><i class="fas fa-shopping-cart"></i></a>
			</ul>
		  </div>
		</nav>
	</div>
</header>
 
<?php
	if(is_product() || is_page(array(4851,4831,4855,4853,5621))){
		?>
			<header class="bg-light _sub_header" style="z-index:999 !important;">
    <div class="container">
        <nav class="secondary-nav navbar navbar-expand-lg navbar-light pl-0 pr-0 bg-light justify-content-between">
        <?php
//        global $wp_query;
//        $cat = $wp_query->get_queried_object()->name;
//

          $product_cat_name = '';
          if(is_product()){
            global $post;
            $terms = get_the_terms( $post->ID, 'product_cat' );
		
            if(!empty($terms)){
              foreach ($terms as $term) {
                 
                  if( $term->slug== 'custom-neon-signs'){
                    $product_cat_link = site_url('hipatterns');
					$product_cat_name ='HIPATTERNS';
                  }
				  else if($term->slug== 'custom-open' || $term->slug== 'open'){
					$product_cat_name ='OPEN SIGNS';
                    $product_cat_link = site_url('open-sign');
				  }
				  else{
					$product_cat_name = $term->name;
                    $product_cat_link = site_url('open-sign');
                  }
                  break;
              }
            }
          }
         ?>
            <?php
            if(is_page(array(4851,4831,4855,4853,5621))){
                echo '<a class="h3 text-dark" href="'.site_url('hipatterns').'">CUSTOM LED NEON SIGNS</a>';
            }else {echo '<p class="h3 text-dark" style="font-weight: 600;"><a href="'.$product_cat_link.'">'.$product_cat_name.'</a></p>'; }?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">

                      <?php if(has_term( 'hiletters', 'product_cat', $post )){
                        ?>
                   <li class="nav-item">
                        <a class="nav-link cool-link"  href="<?php bloginfo('url'); ?>/hiletters/#features"  aria-controls="features" aria-selected="true" >Features</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link cool-link" href="<?php bloginfo('url'); ?>/hiletters/#tech-specs">Tech Specs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link active"  href="<?php bloginfo('url'); ?>/hiletters/#shop">Shop</a>
                    </li>

                    <?php
                    /*
                     <li class="nav-item mr-3">
                        <a class="nav-link cool-link" id="installations-tab" data-toggle="tab" href="#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                    </li> */?>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link"  href="<?php bloginfo('url'); ?>/hiletters/#installations">Installations</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php bloginfo('url'); ?>/hiletters/design/"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
                    </li>
                    <?php
                    }
                    if(has_term( 'hiscripts', 'product_cat', $post )){
                        ?><li class="nav-item">
                        <a class="nav-link cool-link" href="<?php bloginfo('url'); ?>/hiscripts/#features">Features</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link"  href="<?php bloginfo('url'); ?>/hiscripts/#tech-specs">Tech Specs</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link active"  href="<?php bloginfo('url'); ?>/hiscripts/#shop">Shop</a>
                    </li>
                    <li class="nav-item mr-3">
                            <a class="nav-link cool-link" href="<?php bloginfo('url'); ?>/hiscripts/#installations">Installations</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php bloginfo('url'); ?>//hiscripts/design/"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
                        </li>
                        <?php
                    };
                    if(has_term( 'custom-open', 'product_cat', $post ) || has_term( 'open', 'product_cat', $post ) || has_term( 'custom-neon-signs', 'product_cat', $post )){
                        ?><li class="nav-item">
                        <a class="nav-link cool-link"  href="<?php echo site_url('hipatterns'); ?>">Hipatterns</a>
                    </li>
                        <li class="nav-item">

                        <a class="nav-link cool-link" href="<?php echo site_url('open-sign'); ?>">Open sign</a>
                    </li>
                        <?php
                    }
                    if(is_page(array(4851,4831,4855,4853,5621))){?>

                        <li class="nav-item">
                        <a class="nav-link cool-link"  href="<?php bloginfo('url'); ?>/hineon-custom/#features">Features</a>
                    </li>
                        <li class="nav-item">

                        <a class="nav-link cool-link" id="design_guide-tab" href="<?php bloginfo('url'); ?>/hineon-custom/#design-guide" role="tab" aria-controls="design_guide" aria-selected="false">Design Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link <?php if(is_page(5621)){echo "active";}?>"  href="<?php bloginfo('url'); ?>/hineon-custom-projects/">Projects</a>
                    </li>
                     <li class="nav-item mr-3">
                        <a class="nav-link cool-link" id="installations-tab" href="<?php bloginfo('url'); ?>/hineon-custom/#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="create_yours"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">CREATE YOURS</button></a>
                    </li>
                    <?php
                    }else{
                    ?>



					<?php }?>
                </ul>
            </div>
        </nav>
    </div>
</header>
		<?php
	}
    if(is_page(array(5206,5621))){
        ?>
        <div class="_tab_content">
            <section class="hero-sec spc">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                            <p>Check out how HiNeon help our clients neon up their space</p>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
        <?php
    }
?>
