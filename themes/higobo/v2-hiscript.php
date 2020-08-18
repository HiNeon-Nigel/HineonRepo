<?php

// Template Name: v2-HiScript



get_header(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icon-all.css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-v2.css" media="all">
    <style>
        header._main_header { box-shadow: none; border-bottom: 2px solid; }
		ul.inner_menu li.get_started_btn a { line-height: 30px; }
		section.menu_section { position: sticky;z-index: 999 !important;top: 2px; padding: 15px 0px; background: #fff;border-bottom: 2px solid; }
		.hiscripts-design-img { background: #000; padding: 50px 15px; }
		.hiscripts-plug-play-img { margin: 30px 0px 20px 0px; }
		.hiscripts-customizable-img { margin: 20px 0px 70px; }
		.hiscripts-color-img { margin: 50px 0px 60px 0px; }
		.size_a_row { margin: 78px 0px 0px; }
		.size_a_row .block-imgs{margin-bottom:60px;}
		p.description { position: relative; top: -15px; }
		@media screen and (max-width: 767.98px){
			.designs-b-col-right .custom-block{ padding-top: 20px; padding-bottom: 50px; justify-content: center; }
			.designs-b-col-right .custom-block{ padding-top: 20px; padding-bottom: 50px; justify-content: center; }
			.custom-block{ padding-top: 70px; padding-bottom: 35px; justify-content: center; }
			.hiscripts-design-img{ margin-top: 20px; }
			.hiscripts-plug-play-img { margin: 0; }
			.hiscripts-customizable-img { margin: 0px 0px 35px; }
			.backdrop_title, .backdrop_text { text-align: center; }
			.full-bordertop-done.full-border-section { border-top:none; }
			.design-section{ padding-bottom:20px; }
			.size_a_row { margin: 20px 0px 0px; }
			.size-section, .four-fonts-section{ border-top: 2px solid #11113d; padding-top:80px; }
			.four-fonts-section{ padding-bottom: 25px; }
			.hiscripts-color-img { margin-bottom: 0px; }
			.future-proof-img{ margin-bottom: -20px; }
		}
		@media only screen and (max-width: 1024px) {
			.hilettersInner .homeslider-btn { margin-top: 50px; }
		}
		@media only screen and (max-width: 768px) {
			.btn_alignment { text-align: left; }
			.hilettersInner .homeslider-btn { margin-top: 35px; }
			.hilettersslider { padding: 35px 0px 75px 0;}
			.custom-block h3 { font-size: 32px; }
			.backdrop_title { font-size: 30px; }
			.block-img img { height: auto; margin-top: 50px; }
		}		
    </style>

    <section class="menu_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="page_title mb-4 mb-md-0">HiScript</h4>
                        <div class="inner_menu_toggler text-right w-100 d-md-none">
                            <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarInnerMenu" aria-controls="navbarInnerMenu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    <div class="navbar navbar-expand-md p-0">
                        <div class="navbar-collapse collapse" id="navbarInnerMenu">
                            <ul id="menu-inner-menu" role="tablist" class="inner_menu d-block text-md-right w-100 nav nav-tabs">
								<li><a href="#features" class="inner_menu_link active" id="features-menu" data-toggle="tab" role="tab" aria-controls="features" aria-selected="true">features</a></li>
								<li><a href="#design-guide" class="inner_menu_link" id="design-guide-menu" data-toggle="tab" role="tab" aria-controls="design-guide" aria-selected="false">tech spec</a></li>
								<li><a href="#shop" class="inner_menu_link" id="shop-menu" data-toggle="tab" role="tab" aria-controls="shop" aria-selected="false">shop</a></li>
								<li><a href="#installations-tab" class="inner_menu_link" id="installations-menu" data-toggle="tab" role="tab" aria-controls="installations-tab" aria-selected="false">installations</a></li>
                                <li class="get_started_btn mr-0"><a href="/hiscripts/design/">Design Lab</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-menu">
			<div class="hilettersslider">
				<div class="hiletters-slide h-100">
					<div class="container h-100">
						<div class="row flex-md-row-reverse">
							<div class="col-md-7 col-xl-7">
								<div class="hiletters-right mb-4 mb-md-0">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/Image1.png" class="img-fluid" alt="">
								</div>
							</div>
							<div class="col-md-5 col-xl-5">
								<div class="hilettersInner position-relative">
									<h1 class="text-uppercase">hiscript</h1>
									<p>HiScript Signs are an alternative to our fully customizable signs featuring our HiNeon LED Technology. These are a great and simple way for you to showcase messages for weddings, offices or just for fun.</p>
									<p class="btn_alignment"><a href="/hiscripts/design/" class="homeslider-btn">Get Started</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>				 
			</div>

			<div class="main-content">				 
				<section class="section-space design-section">
					<div class="container">
						<div class="row">
							<div class="col-md-6 p-md-0 designs-b-col-right">
								<div class="custom-block d-flex h-100 align-items-center">
									<div class="hiletters-b-content">
										<h3>design</h3>
										<p>With HiScript Signs it's all about elegance. Our design team has worked closely with our engineering team to produce four fonts that look great whilst performing to our highest standard. Each font is scripted and each letter is joined together for a traditional look. We use 12mm wide standard HiNeon LED neon to achieve best neon effects.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="block-img hiscripts-design-img">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/Image2.png" class="img-fluid w-100" alt="design hineon">
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="section-space pt-0 full-border-left full-border-section full-bordertop-done">
                    <div class="container">
                        <div class="row align-items-center flex-md-row-reverse mt-4 mb-4">
							<div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Plug & Play</h3>
                                        <p>HiScript Signs come delivered to you ready to be plugged in working within minutes. Simply unbox the sign, follow our easy to use display guide and kit to mount or display the sign and plug it in, that's it!</p>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-imgs hiscripts-plug-play-img" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/08/Image3.png" class="img-fluid" alt="Plug & Play">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section class="section-space pt-0 full-border-right full-border-section">
                    <div class="container">
                        <div class="row mt-4 mt-md-0 align-items-center">
							<div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Customizable</h3>
                                        <p>Hi Script signs have 4 different script fonts professionally selected to ensure your sign looks great and doesn't lose performance. Each font can be made in sizes ranging from 20.3cm (8”) to 38cm (15”) and come in 9 different colors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-5 offset-xl-1 mt-0 mt-md-5 mt-md-0">
                                <div class="block-imgs hiscripts-customizable-img" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/08/Image4.png" class="image_width" alt="">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
				
				<section class="section-space pt-0 full-border-left full-border-section">
                    <div class="container">
                        <div class="row align-items-center flex-md-row-reverse mt-3 mb-5">
							<div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Color Options</h3>
                                        <p>9 single colors to choose from:</p>
										<p>Cool white, Warm white, Red, Green, Blue, Baby blue, Yellow, Pink, Orange.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5">
                                <div class="block-imgs hiscripts-color-img" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/08/Image5.png" class="img-fluid" alt="Plug & Play">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
				
				<section class="section-space pl-0 pl-md-5 pt-md-0 size-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                                <h3 class="backdrop_title">Size</h3>
                            </div>
                            <div class="col-md-11">
                                <p class="backdrop_text mt-5 mt-md-1">letter height ranging from 20cm (8”) to 38cm (15”)</p>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section class="section-space pt-0 full-border-right full-border-section full-bordertop-done">
                    <div class="container">
                        <div class="row align-items-end size_a_row">
                            <div class="col-md-6 col-lg-3">
                                <div class="block-imgs" style="text-align: center;">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/size_a1.png" class="image_width mb-4" alt="">
									<p class="description text-center"><b>Font Antro</b></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="block-imgs" style="text-align: center;">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/size_a2.png" class="image_width mb-4" alt="">
									<p class="description text-center"><b>Font Antro</b></p>
                                </div>
                            </div>
							<div class="col-md-6 col-lg-3">
                                <div class="block-imgs" style="text-align: center;">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/size_a3.png" class="image_width mb-4" alt="">
									<p class="description text-center"><b>Font Antro</b></p>
                                </div>
                            </div>
							<div class="col-md-6 col-lg-3">
                                <div class="block-imgs" style="text-align: center;">
									<img src="https://staging.hineon.com/wp-content/uploads/2020/08/size_a4.png" class="image_width mb-4" alt="">
									<p class="description text-center"><b>Font Antro</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section class="section-space pl-md-5 pl-md-0 pt-md-0 four-fonts-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="backdrop_title">Four Fonts</h3>
                            </div>
                            <div class="col-md-8">
                                <p class="backdrop_text mt-5 mt-md-1">to choose from</p>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section class="section-space pt-0 full-border-left full-border-section ull-bordertop-done full-bordertop-done">
                    <div class="container">
                        <div class="row align-items-center mt-5">
                            <div class="col-md-6">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/03/Website-Assets-10.png" class="img-fluid" alt="Plug & Play">
									<p class="description text-center"><b>Font Antro</b></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/03/Website-Assets-11.png" class="img-fluid" alt="Plug & Play">
									<p class="description text-center"><b>Font EV</b></p>
                                </div>
                            </div>
                        </div>
						<div class="row align-items-center mb-5">
                            <div class="col-md-6">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/06/Website_Assets-24.png" class="img-fluid" alt="Plug & Play">
									<p class="description text-center"><b>Font Fab</b></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/03/Website-Assets-13.png" class="img-fluid" alt="Plug & Play">
									<p class="description text-center"><b>Font Sacramento</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

				<section class="section-space pt-0 full-border-right full-border-section">
                    <div class="container">
                        <div class="row mt-3 mt-md-0 align-items-center">
							<div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Future Proof</h3>
                                        <p>Our engineering team has been developing and manufacturing neon and LED lights for over 10 years. This rich experience has resulted in continued innovation to create our signature LED; HiNeon LED.</p>
                                        <p>This technology powers each of our products to offer their maximum performance for over 50,000 hours whilst being energy and cost efficient throughout the product”s lifespan without compromise.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-5 offset-xl-1 mt-0 mt-md-5 mt-md-0">
                                <div class="block-imgs future-proof-img mb-md-4 pb-md-4" style="text-align: center;">
                                    <img src="https://staging.hineon.com/wp-content/uploads/2020/03/Website-Assets-16-2.png" class="image_width" alt="">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>

				<section class="section-space section-broder-bm" style="border-top: 2px solid #11113d;">
					<div class="container">
						<h4 class="heading_title">Technical Specifications</h4>
						<div class="technical-table">
							<table class="w-100">
								<tbody>
									<tr>
										<td><h4 class="title">Height</h4></td>
										<td><p class="description">Between 20cm (8”) - 38cm (15”)</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Depth</h4></td>
										<td><p class="description">Character 2cm (0.8”), perspex backing 0.5cm (0.2”)</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Length</h4></td>
										<td><p class="description">Dependant on script design</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Neon Width</h4></td>
										<td><p class="description">12mm standard</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Engine</h4></td>
										<td><p class="description">HiNeon LED</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Power</h4></td>
										<td><p class="description">Average 5W - 10W per character depending on neon size</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Voltage</h4></td>
										<td><p class="description">12V UL listed power adapter</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Material</h4></td>
										<td><p class="description">UV Resistant PVC</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Viewing Angle	</h4></td>
										<td><p class="description">160 degrees</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Lifespan</h4></td>
										<td><p class="description">50,000+ hours</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Application</h4></td>
										<td><p class="description">Indoor use only*1</p></td>
									</tr>
									<tr>
										<td><h4 class="title">Animation</h4></td>
										<td><p class="description">5 dynamic modes with adjustable speed*2</p></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
				
				<section class="section-space section-broder-bm">
					<div class="container">
						<h4 class="heading_title mb-4">Try it Out</h4>
						<div class="button_hi_letters mt-0">
							<a href="/hiscripts/design/" class="try_it_out_btn">customize your own</a>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<div class="tab-pane fade" id="design-guide" role="tabpanel" aria-labelledby="design-guide-menu">
			<div class="main-content">
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
									<tbody>
										<tr>
                                            <td>Height</td>
                                            <td>Between 20cm (8”) - 38cm (15”)</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Depth</td>
                                            <td>Character 2cm (0.8”), perspex backing 0.5cm (0.2”)</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Length</td>
                                            <td>Dependant on script design</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Neon Width</td>
                                            <td>12mm standard</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Engine</td>
                                            <td>HiNeon LED</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Power</td>
                                            <td>Average 5W  - 10W per character depending on neon size </td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Voltage</td>
                                            <td>12V UL listed power adapter</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Material</td>
                                            <td>UV Resistant PVC</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Viewing Angle</td>
                                            <td>160 degrees</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Lifespan</td>
                                            <td>50,000+ hours</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Application</td>
                                            <td>Indoor use only*1</td>
                                            <td></td>
                                        </tr>
										<tr>
                                            <td>Animation</td>
                                            <td>5 dynamic modes with adjustable speed*2</td>
                                            <td></td>
                                        </tr>
									</tbody>
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
		
		<div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-menu">
			<div class="main-content">
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
					<div class="">
						<?php echo do_shortcode('[products limit="100" category="hiscripts" columns="4" orderby="popularity" ]'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-pane fade" id="installations-tab" role="tabpanel" aria-labelledby="installations-menu">
			<div class="main-content">
				<section class="hero-sec pt-5 pb-5 spc">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1><b>INSTALLATIONS</b></h1>
							</div>
						</div>
					</div>
				</section>
				<section class="main-content text-center">                 
					<div class="container">
						<div class="row my-5" role="tablist">
							<div class="col-md-12 text-center text-md-left">
								<h2><b>How To Install No Backing Neon Signs?</b></h2>
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
	<div class="main-content">
		<section class="section-space section-broder-bm why-work-section">
			<div class="accordion-desktop d-none d-md-block">
				<div class="container">
					<div class="why-work-hineon">
						<h3>Why Work With Hineon?</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="why-work-col mb-4">
									<h4>Modern Neon with LED Technology</h4>
									<p>HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It�s designed to provide even illumination, easy installation, low maintenance and even lower power costs.</p>
									<a href="https://staging.hineon.com/hineon-custom/#features">Learn More</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="why-work-col mb-4">
									<h4>Prodly Canadian</h4>
									<p>Each sign is assembled in Vancouver, BC, machined by our expert sign-makers to guarantee brand accuracy and performance. We ship to both Canada & the USA.</p>
									<a href="/projects/">Browse Projects</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="why-work-col">
									<h4>Our Client Love Us</h4>
									<p>Part of our commitment is to provide an easy and quality neon experience to all the clients. We listen and demonstrate our expertise by providing innovative and creative solutions on every project we involved.</p>
									<a href="/projects/">Browse Projects</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="accordion" class="accordion-mobile d-md-none">
				<div class="container">
					<div class="why-work-hineon">
						<h3>Why Work With Hineon?</h3>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading1">
						<h5 class="mb-0">
						  <a href="javascript:;" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1"> <i class="fa fa-plus"></i>
							Modern Neon with LED Technology
						  </a>
						</h5>
					</div>
					<div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
						<div class="card-body pt-0">
							<div class="why-work-col">
								<p>HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It�s designed to provide even illumination, easy installation, low maintenance and even lower power costs.</p>
								<a href="https://staging.hineon.com/hineon-custom/#features">Learn More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="heading2">
						<h5 class="mb-0">
						  <a href="javascript:;" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2"> <i class="fa fa-plus"></i>
							Prodly Canadian
						  </a>
						</h5>
					</div>

					<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
						<div class="card-body pt-0">
							<div class="why-work-col">
								<p>Each sign is assembled in Vancouver, BC, machined by our expert sign-makers to guarantee brand accuracy and performance. We ship to both Canada & the USA.</p>
								<a href="/projects/">Browse Projects</a>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="heading3">
						<h5 class="mb-0">
						  <a href="javascript:;" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3"> <i class="fa fa-plus"></i>
							Our Client Love Us
						  </a>
						</h5>
					</div>
					<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
						<div class="card-body pt-0">
							<div class="why-work-col">
								<p>Part of our commitment is to provide an easy and quality neon experience to all the clients. We listen and demonstrate our expertise by providing innovative and creative solutions on every project we involved.</p>
								<a href="/projects/">Browse Projects</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="why-work-from mt-5">
					<div class="row">
						<div class="col-xl-4 col-lg-5 mb-4">
							<h6>Get new products and neon industry news in your inbox.</h6>
						</div>
						<div class="col-xl-7 offset-xl-1 col-lg-7">
							<div class="why-work-sub">
								<?php echo do_shortcode('[mc4wp_form id="11727"]');?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php get_footer(); ?>