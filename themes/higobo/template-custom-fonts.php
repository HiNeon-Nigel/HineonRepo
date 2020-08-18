<?php /* template name: Custom Fonts */ get_header(); ?>
<header class="bg-light _sub_header" style="z-index:999 !important;">
        <div class="container">
            <nav class="secondary-nav navbar navbar-expand-lg pl-0 pr-0 navbar-light bg-light justify-content-between">
                <a class="h3 text-dark" href="#">HISCRIPTS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                    <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link cool-link" id="features-tab" href="<?= get_home_url() ?>/hiscripts/#features" role="tab" aria-controls="features" aria-selected="true" >Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" id="tech_specs-tab" href="<?= get_home_url() ?>/hiscripts/#tech-specs" role="tab" aria-controls="tech_specs" aria-selected="false">Tech Specs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" id="shop-tab" href="<?= get_home_url() ?>/hiscripts/#shop" role="tab" aria-controls="shop" aria-selected="false" >Shop</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link cool-link" id="installations-tab" href="<?= get_home_url() ?>/hiscripts/#installations" role="tab" aria-controls="installations" aria-selected="false" href="/hiletters/installations">Installations</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://hineon.com/hiscripts/design/"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

<?php global $woocommerce , $post , $product;

$thepostid = get_nf_field('product');
$product = wc_get_product( $thepostid );
$_product = wc_get_product( $thepostid );

  $images = get_nf_field('images');
  $fonts = get_nf_field('fonts');
  $colors = get_nf_field('colors');
  ?>
  <div class="m-wrapper">
  <div id="neonCustomizer" class="images">
    <figure>
      <img id="customBg" src="<?= $images[0]['image'] ?>" alt="">
    </figure>
    <div id="customText" class="<?= sanitize_title($colors[0]['label']) ?> on"></div>
    <div id="customTextR" class="on">
      <div class="rows">
        <div class="in-row <?= sanitize_title($colors[0]['label']) ?>" data-color="<?= sanitize_title($colors[0]['label']) ?>" id="r-row-1"></div>
        <div class="in-row <?= sanitize_title($colors[0]['label']) ?>" data-color="<?= sanitize_title($colors[0]['label']) ?>" id="r-row-2"></div>
        <div class="in-row <?= sanitize_title($colors[0]['label']) ?>" data-color="<?= sanitize_title($colors[0]['label']) ?>" id="r-row-3"></div>
      </div>

    </div>
    <button id="cnsControlc" class="active"><i class="fas fa-edit"></i><i class="fas fa-times"></i></button>
    <div class="bg-switcher">
      <div class="container">
        <div id="cnsImage">
          <?php foreach ($images as $key => $image): ?>
            <button type="button" class="btn btn-bg <?php if($key == 0){ echo 'active'; } ?>" data-url="<?= $image['image'] ?>" style="background:url(<?= $image['image'] ?>);background-size:cover;"><?= $image['label'] ?></button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <?php $currency = get_woocommerce_currency();  ?>

  <?php
  $sizes = get_nf_field('costs_calculator');

  $fcosts = get_nf_field('fixed_prices');
  $row_cost = get_nf_field('row_cost');
  if($currency == 'USD'){
    $row_cost = get_nf_field('row_cost_us');
    foreach($fcosts as $key => $cost){
      $newCost = $cost['cost_us'];
      $fcosts[$key]['cost'] = $newCost;
    }
    foreach ($sizes as $key => $size) {
      foreach ($size['characters_cost'] as $key2 => $chars) {
        $us_cost = $sizes[$key]['characters_cost'][$key2]['cost_us'];
        unset($sizes[$key]['characters_cost'][$key2]['cost_us']);
        $sizes[$key]['characters_cost'][$key2]['cost_us'] = $us_cost;
      }
    }
  }
  $power = get_nf_field('letter_details');
  $accessories = get_nf_field('accesories');

  $costs = json_encode($sizes);
  $costs2 = json_encode($fcosts);
  // var_dump($costs);
  // var_dump($costs2);
  // exit;
  $power = json_encode($power);
  ?>
  <div id="customV2" class="customizer open">
    <input type="hidden" id="cCalc" value='<?= htmlspecialchars(json_encode($sizes), ENT_QUOTES, 'UTF-8'); ?>'>
    <input type="hidden" id="fCost" value='<?= $costs2 ?>'>
    <input type="hidden" id="power" value='<?= $power ?>'>
    <input type="hidden" id="maxRows" value='<?= get_nf_field('max_rows') ?>'>
    <input type="hidden" id="rowCost" value='<?= $row_cost ?>'>
    <input type="hidden" id="currency_active" value='<?= $currency ?>'>
    <input type="hidden" id="pURL" value="<?= plugins_url() . '/neon-signs' ?>">

    <input type="hidden" id="maxChar15in" value="<?= get_nf_field('max_characters_allowed_15in') ?>">
    <input type="hidden" id="maxChar12in" value="<?= get_nf_field('max_characters_allowed_12in') ?>">
    <input type="hidden" id="maxChar10in" value="<?= get_nf_field('max_characters_allowed_10in') ?>">
    <input type="hidden" id="maxChar8in" value="<?= get_nf_field('max_characters_allowed_8in') ?>">
    <div class="container">
      <form action="." class="cns-tool">
        <style>
        <?php foreach ($colors as $key => $color): ?>
          #neonCustomizer #customText.<?= sanitize_title($color['label']) ?>{
            color: #ebebeb;
            -webkit-text-stroke-color: rgba(0,0,0,.2);
          }
          #neonCustomizer #customText.<?= sanitize_title($color['label']) ?>.on{
            animation:neon-sign-<?= sanitize_title($color['label']) ?> 1.5s ease-in-out infinite alternate;
            color: <?= $color['color'] ?>;
            -webkit-text-stroke-color: rgba(255,255,255,.2);
          }

          #neonCustomizer #customTextR .in-row.<?= sanitize_title($color['label']) ?>{
            animation:neon-sign-<?= sanitize_title($color['label']) ?> 1.5s ease-in-out infinite alternate;
            color: rgba(255,255,255);
            -webkit-text-stroke-color: rgba(255,255,255);
          }

          #neonCustomizer #customTextR.<?= sanitize_title($color['label']) ?>.on{
            filter: drop-shadow(0px 0px 8px <?= $color['color'] ?>);
          }
          <?php
            if(sanitize_title($color['label']) === 'white'){
              ?>
              @keyframes neon-sign-<?= sanitize_title($color['label'])?>{
                from {
                  text-shadow: 0 0 10px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 30px <?= $color['color'] ?>, 0 0 40px <?= $color['color'] ?>, 0 0 70px <?= $color['color'] ?>, 0 0 80px <?= $color['color'] ?>, 0 0 100px <?= $color['color'] ?>, 0 0 150px <?= $color['color'] ?>;
                }
                to {
                  text-shadow: 0 0 5px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 30px <?= $color['color'] ?>, 0 0 60px <?= $color['color'] ?>, 0 0 70px <?= $color['color'] ?>, 0 0 90px <?= $color['color'] ?>, 0 0 140px <?= $color['color'] ?>;
                }
              }
              <?php
            }else{
              ?>
              @keyframes neon-sign-<?= sanitize_title($color['label'])?>{
                from {
                  text-shadow: 0 0 10px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 30px <?= $color['color'] ?>, 0 0 40px <?= $color['color'] ?>, 0 0 70px <?= $color['color'] ?>, 0 0 80px <?= $color['color'] ?>, 0 0 100px <?= $color['color'] ?>, 0 0 150px <?= $color['color'] ?>;
                }
                to {
                  text-shadow: 0 0 5px <?= $color['color'] ?>, 0 0 10px <?= $color['color'] ?>, 0 0 15px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 35px <?= $color['color'] ?>, 0 0 40px <?= $color['color'] ?>, 0 0 50px <?= $color['color'] ?>, 0 0 75px <?= $color['color'] ?>;
                }
              }
              <?php
            }
           ?>

          <?php endforeach ?>
          <?php $font_groups = get_nf_field('font_groups');
          foreach ($font_groups as $key => $font_group) {
              if(!empty($font_group['google'])){
              foreach ($font_group['google'] as $ikey => $font) {
                echo '#font-g-'.($ikey+1).'{font-family:"'.str_replace('+',' ',$font['name']).'"; font-weight:600;}';
              }
              }
              ?>
              <?php
              if(!empty($font_group['adobe'])){
              foreach ($font_group['adobe'] as $ikey => $font) {
                echo '#font-ae-'.($ikey+1).'{font-family:"'.$font['collection'].'"; font-weight:600;}';
              }
              }
              ?>
              <?php
              if(!empty($font_group['local'])){

              foreach ($font_group['local'] as $ikey => $font) {
                if (strpos($font['file_name'], 'bold') !== false) {
                    $font_weight = 400;
                }else{
                    $font_weight = 600;
                }
                ?>
                @font-face {
                  font-family: '<?= $font['name'] ?>';
                  src: url('<?= plugins_url() . '/neon-signs-2/public/webfonts/'.$font['file_name'].'.ttf'; ?>') format('truetype');
                }
                <?php
                echo '#font-lc-'.($ikey+1).'{font-family:"'.$font['name'].'"; font-weight:'.$font_weight.';}';
              }
              }
            }
              ?>
        </style>
      <div class="cns-step full-w">
        <div class="cns-rows">
          <div class="tab-content">
            <?php $maxRows = get_nf_field('max_rows'); ?>
            <div class="tab-pane active" id="t1">
              <div class="f-row" data-color="<?= sanitize_title($colors[0]['label'])?>" data-font="<?= sanitize_title($font_group['local'][0]['name'])?>" id="row-1">
                <div class="form-group">
                  <textarea type="text" rows="<?= $maxRows ?>" placeholder="Type your message" class="form-control input-text text-row" name="cnsText[]" id="cnsText" maxlength="<?= get_nf_field('max_characters_allowed_8in') ?>" pattern="[a-zA-Z0-9 -]+" title="Only letters and numbers are allowed." required></textarea>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <h4>Select Font</h4>
                    <div class="row font-picker">
                      <?php
                      foreach ($font_groups as $key => $font_group) {
                      if(!empty($font_group['adobe'])){
                      foreach ($font_group['adobe'] as $key => $font) {
                        list($font_firstWord) = explode(' ', $font['name']);
                        echo '<div class="col-md-6 col-6"><div class="font" id="font-ae-'.($key+1).'" data-font="'.sanitize_title($font['name']).'">'.$font_firstWord.'</div></div>';
                      }
                      }
                       ?>
                       <?php
                       if(!empty($font_group['local'])){
                       foreach ($font_group['local'] as $key => $font) {
                         list($font_firstWord) = explode(' ', $font['name']);
                         echo '<div class="col-md-6 col-6"><div class="font" id="font-lc-'.($key+1).'" data-font="'.sanitize_title($font['name']).'">'.$font_firstWord.'</div></div>';
                       }
                       }
                        ?>
                        <?php
                     if(!empty($font_group['google'])){
                     foreach ($font_group['google'] as $key => $font) {
                       list($font_firstWord) = explode(' ', str_replace('+',' ',$font['name']));
                       echo '<div class="col-md-6 col-6"><div class="font" id="font-g-'.($key+1).'" data-font="'.sanitize_title($font['name']).'">'.$font_firstWord.'</div></div>';
                     }
                     }
                   }
                      ?>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4>Select Neon Color</h4>
                        <div class="colors">
                          <?php foreach ($colors as $key => $color): ?>
                            <button class="color <?php if($key == 0){ echo 'active'; } ?>" data-row="<?= $i ?>" data-color="<?= sanitize_title($color['label'])?>" type="button" style="background:<?= $color['color'] ?>" data-toggle="tooltip" title="<?= ucfirst(sanitize_title($color['label'])); ?>" data-placement="top">
                              <span ></span>
                            </button>
                          <?php endforeach; ?>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <h4>Select Letter’s Height</h4>
                        <div class="custom-select-wrapper">
                          <input type="hidden" class="select-row" value="<?= $sizes[0]['size'] ?>">
                          <div class="row">
                            <?php foreach ($sizes as $key => $size): ?>
                              <div class="col-md-6">
                                <label class="custom-radio radioSize"><input type="radio" name="fSize" value="<?= $size['size'] ?>" <?php if($key == 0){ echo 'checked="checked"'; } ?> /> <span><?= str_replace('in', ' in', $size['size']) ?></span></label>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="product-information">
                            <div class="table-responsive">
                              <table class="table">
                                <tr id="dpHSize">
                                  <td>Aprox. Horizontal size</td>
                                  <td><span>0 in</span></td>
                                </tr>
                                <tr id="dpVSize">
                                  <td>Aprox. Vertical size</td>
                                  <td><span>0 in</span></td>
                                </tr>
                              </table>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
  </div>
  </div>
  </div>
  <div class="customizer">
    <div class="container">
      <div class="arrow-down"><span></span></div>
      <?php if($accessories): ?>
        <div class="accesories">
          <h3>Accessories</h3>
          <?php foreach ($accessories as $key => $accessory): ?>
            <div class="accesorie">
              <div class="row">
                <div class="col-lg-6">
                  <figure><img src="<?= $accessory['image']['sizes']['large'] ?>" alt="<?= $accessory['title'] ?>"></figure>
                </div>
                <div class="col-lg-6">
                  <?php if($currency == 'USD'){
                    $cost = $accessory['cost_us'];
                  }else{
                    $cost = $accessory['cost'];
                  } ?>
                  <h3><?= $accessory['title'] ?> <span><?= wc_price($cost) ?></span></h3>
                  <p><?= $accessory['description'] ?></p>
                  <div class="buttons">
                    <button class="btn active btn-bg" data-val="no">No, Thanks</button>
                    <button class="btn btn-bg" data-val="yes">Buy <?= $accessory['title'] ?> <?= wc_price($cost) ?></button>
                  </div>
                  <div class="radios d-none">
                    <label class="custom-radio"><input type="radio" name="accesorie-<?= $key ?>" data-name="<?= $accessory['title'] ?>" data-cost="<?= $cost ?>" value="yes" /> <span>Yes</span></label>
                    <label class="custom-radio"><input type="radio" name="accesorie-<?= $key ?>" value="no" checked="checked" /> <span>No</span></label>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php

$product_object = $thepostid ? wc_get_product( $thepostid ) : new WC_Product; ?>
    <div class="container mt-76px">
        <div class="pt-5">
          <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
          	<div id="rNCustom">
          	<?php
          	/**
          	 * Hook: woocommerce_before_single_product_summary.
          	 *
          	 * @hooked woocommerce_show_product_sale_flash - 10
          	 * @hooked woocommerce_show_product_images - 20
          	 */
            remove_action( 'woocommerce_before_single_product_summary', 'wooswipe_woocommerce_show_product_thumbnails', 20 );
          	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
          	do_action( 'woocommerce_before_single_product_summary' );
          	?>
          	<div class="summary entry-summary">
          		<?php
          		/**
          		 * Hook: woocommerce_single_product_summary.
          		 *
          		 * @hooked woocommerce_template_single_title - 5
          		 * @hooked woocommerce_template_single_rating - 10
          		 * @hooked woocommerce_template_single_price - 10
          		 * @hooked woocommerce_template_single_excerpt - 20
          		 * @hooked woocommerce_template_single_add_to_cart - 30
          		 * @hooked woocommerce_template_single_meta - 40
          		 * @hooked woocommerce_template_single_sharing - 50
          		 * @hooked WC_Structured_Data::generate_product_data() - 60
          		 */
          		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
          		remove_action( 'woocommerce_single_product_summary', 'toastie_wc_smsb_form_code', 31 );
          		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
          		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
          		do_action( 'woocommerce_single_product_summary' );
          		?>
          	</div>
          	</div>
          	<?php
          	/**
          	 * Hook: woocommerce_after_single_product_summary.
          	 *
          	 * @hooked woocommerce_output_product_data_tabs - 10
          	 * @hooked woocommerce_upsell_display - 15
          	 * @hooked woocommerce_output_related_products - 20
          	 */
          	 remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);
          	do_action( 'woocommerce_after_single_product_summary' );
          	?>
          </div>
        </div>
    </div>
<?php get_footer();
