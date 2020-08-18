<?php

global $woocommerce , $post , $product;
//$shop_layout = bizto_option('shop_layout');
$thepostid = $post->ID;
$_product = wc_get_product( $thepostid );
if(is_product() AND ('custom' == $_product->get_type())):
  $images = get_ns_field('images');
  $fonts = get_ns_field('fonts');
  $colors = get_ns_field('colors');
  $aprox_horizontal_size = get_field('aprox_horizontal_size', $_product->get_id());
  $aprox_vertical_size = get_field('aprox_vertical_size', $_product->get_id());
  $aprox_power = get_field('power', $_product->get_id());
  $product_full_description = $_product->get_description();
  $product_descriptionArr = explode("\n", $product_full_description);
  $product_sizes = get_post_meta($_product->get_id(), '_sizes', true);
  $product_sizesArr = explode('-', $product_sizes);
  $product_colors = get_post_meta($_product->get_id(), '_colors', true);
  $product_colorsArr = explode('-', $product_colors);
  ?>
  <header class="bg-light _sub_header" style=" z-index:9999 !important;">
    <div class="container">
        <nav class="secondary-nav navbar navbar-expand-lg navbar-light bg-light justify-content-between">
            <a class="h3 text-dark" href="#">HiLetters</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-controls="secondaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-uppercase " id="secondaryNav">
                <ul class="navbar-nav ml-auto nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link cool-link not-scroll" id="features-tab" href="<?= get_home_url() ?>/hiletters/#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link not-scroll" id="features-tab" href="<?= get_home_url() ?>/hiletters/#tech-specs">Tech Specs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link not-scroll" id="shop-tab" href="<?= get_home_url() ?>/hiletters/#shop">Shop</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link not-scroll" id="installations-tab" href="<?= get_home_url() ?>/hiletters/#installations">Installations</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" target="_blank"><button class="btn btn-sm btn-pink mt-1 text-uppercase" type="button">Design Lab</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
  </header>
  <div class="m-wrapper">
    <div id="neonCustomizer" class="images">
      <figure>
        <img id="customBg" src="<?= $images[0]['image'] ?>" alt="">
      </figure>
      <div id="customText" class="<?= sanitize_title($product_colorsArr[0]) ?> on"></div>
      <div id="customTextR" class="on">
        <div class="rows">
          <?php for($i=1; $i <= get_ns_field('max_rows'); $i++): ?>
            <div class="in-row <?= sanitize_title($product_colorsArr[$i-1]) ?>" data-color="<?= sanitize_title($product_colorsArr[$i-1]) ?>" id="r-row-<?php echo $i; ?>"></div>
          <?php endfor; ?>
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
    <?php $currency = get_woocommerce_currency() ?>
    <?php
    $sizes = get_ns_field('costs_calculator');
    $fcosts = get_ns_field('fixed_prices');
    $row_cost = get_ns_field('row_cost');
    if($currency == 'USD'){
      $row_cost = get_ns_field('row_cost_us');
      foreach($fcosts as $key => $cost){
        $newCost = $cost['cost_us'];
        $fcosts[$key]['cost'] = $newCost;
      }
      foreach ($sizes as $key => $size) {
        foreach ($size['characters_cost'] as $key2 => $chars) {
          $us_cost = $sizes[$key]['characters_cost'][$key2]['cost_us'];
          unset($sizes[$key]['characters_cost'][$key2]['cost_us']);
          $sizes[$key]['characters_cost'][$key2]['cost'] = $us_cost;;
        }
      }
    }
    $power = get_ns_field('letter_details');
    $accessories = get_ns_field('accesories');

    $costs = json_encode($sizes);
    $costs2 = json_encode($fcosts);
    $power = json_encode($power);
    ?>
    <div id="customV1" class="customizer open single-product-custom">
      <input type="hidden" id="cCalc" value='<?= $costs ?>'>
      <input type="hidden" id="fCost" value='<?= $costs2 ?>'>
      <input type="hidden" id="power" value='<?= $power ?>'>
      <input type="hidden" id="maxRows" value='<?= get_ns_field('max_rows') ?>'>
      <input type="hidden" id="rowCost" value='<?= $row_cost ?>'>
      <input type="hidden" id="pURL" value="<?= plugins_url() . '/neon-signs' ?>">

      <input type="hidden" id="maxChar6in" value="<?= get_ns_field('max_characters_allowed_6in') ?>">
      <input type="hidden" id="maxChar3.2in" value="<?= get_ns_field('max_characters_allowed_3.2in') ?>">
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
            #neonCustomizer #customTextR.<?= sanitize_title($color['label']) ?>.on{
              filter: drop-shadow(0px 0px 8px <?= $color['color'] ?>);
            }
            @keyframes neon-sign-<?= sanitize_title($color['label'])?>{
              from {
                text-shadow: 0 0 10px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 30px <?= $color['color'] ?>, 0 0 40px <?= $color['color'] ?>, 0 0 70px <?= $color['color'] ?>, 0 0 80px <?= $color['color'] ?>, 0 0 100px <?= $color['color'] ?>, 0 0 150px <?= $color['color'] ?>;
              }
              to {
                text-shadow: 0 0 5px <?= $color['color'] ?>, 0 0 10px <?= $color['color'] ?>, 0 0 15px <?= $color['color'] ?>, 0 0 20px <?= $color['color'] ?>, 0 0 35px <?= $color['color'] ?>, 0 0 40px <?= $color['color'] ?>, 0 0 50px <?= $color['color'] ?>, 0 0 75px <?= $color['color'] ?>;
              }
            }
            <?php endforeach ?>
          </style>
          <div class="cns-step full-w">
            <div class="cns-rows">
              <div class="row">
                <div class="col-sm-4 col-md-3 tabs-control-area">
                  <?php for($i=1; $i <= get_ns_field('max_rows'); $i++): ?>
                    <a data-target="#t<?= $i ?>" class="btn btn-bg <?php if($i == 1){ echo 'active'; } ?>">Row <?= $i ?></a>
                  <?php endfor; ?>
                </div>
                <div class="col-sm-8 col-md-9">
                  <div class="tab-content">
                    <?php for($i=1; $i <= get_ns_field('max_rows'); $i++): ?>
                    <div class="tab-pane <?php if($i == 1){ echo 'active'; } ?>" id="t<?= $i ?>">
                      <div class="f-row" data-color="<?= sanitize_title($product_colorsArr[$i-1])?>" id="row-<?= $i ?>">
                        <div class="form-group">
                          <textarea type="text" placeholder="Type your message" class="form-control input-text text-row" name="cnsText[]" id="cnsText" maxlength="<?= get_ns_field('max_caracters_allowed_'.$sizes[0]['size']) ?>" pattern="[a-zA-Z0-9 -]+" title="Only letters and numbers are allowed."><?php echo (array_key_exists($i-1, $product_descriptionArr))?trim($product_descriptionArr[$i-1]):''; ?></textarea>
                        </div>
                        <div class="row">
                          <div class="col-lg-7">
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-5">
                                  <h4>Select Neon Color</h4>
                                </div>
                                <div class="col-lg-7">
                                  <div class="colors">
                                    <?php foreach ($colors as $key => $color): ?>
                                      <button class="color <?php if($product_colorsArr[$i-1] == sanitize_title($color['label'])){ echo 'active'; } ?>" data-row="<?= $i ?>" data-color="<?= sanitize_title($color['label'])?>" type="button" style="background:<?= $color['color'] ?>" data-toggle="tooltip" title="<?= ucfirst(sanitize_title($color['label'])); ?>" data-placement="top">
                                        <span ></span>
                                      </button>
                                    <?php endforeach; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-5">
                                  <h4>Select Neon Size</h4>
                                </div>
                                <div class="col-lg-7">
                                  <div class="custom-select-wrapper">
                                    <input type="hidden" class="select-row" value="<?= $product_sizesArr[$i-1] ?>">
                                    <div class="row">
                                      <?php foreach ($sizes as $key => $size): ?>
                                        <div class="col">
                                          <label class="custom-radio radioSize"><input type="radio" name="fSize" value="<?= $size['size'] ?>" <?php if($product_sizesArr[$i-1] == $size['size']){ echo 'checked="checked"'; } ?> /> <span><?= str_replace('in', ' in', $size['size']) ?></span></label>
                                        </div>
                                      <?php endforeach; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5">
                            <div class="product-information">
                              <div class="table-responsive">
                                <table class="table">
                                  <tr id="dpHSize">
                                    <td>Aprox. Horizontal size</td>
                                    <td><span><?php echo $aprox_horizontal_size; ?></span></td>
                                  </tr>
                                  <tr id="dpVSize">
                                    <td>Aprox. Vertical size</td>
                                    <td><span><?php echo $aprox_vertical_size; ?></span></td>
                                  </tr>
                                  <tr id="totalPower">
                                    <td>Power:</td>
                                    <td><span><?php echo $aprox_power; ?></span></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endfor; ?>
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
  <div class="container mt-76px single-product-custom-content">
      <div class="pt-5">
          <?php woocommerce_content(); ?>
      </div>
  </div>
<?php
do_action( 'woocommerce_after_main_content' );
endif; ?>
