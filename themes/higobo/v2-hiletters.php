<?php

// Template Name: v2-HiLetters



get_header(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icon-all.css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-v2.css" media="all">
    <style>
        header._main_header {
			box-shadow: none; border-bottom: 2px solid;
        }        
		ul.inner_menu li.get_started_btn a {
			line-height: 30px;
		}
		section.menu_section {
			position: sticky;z-index: 999 !important;top: 2px; padding: 15px 0px; background: #fff;border-bottom: 2px solid;
		}
    </style>

    <section class="menu_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="page_title mb-4 mb-md-0">HiLetters</h4>
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
								<li><a href="#tech-specs" class="inner_menu_link" id="tech-specs-menu" data-toggle="tab" role="tab" aria-controls="tech-specs" aria-selected="false">tech specs</a></li>
								<li><a href="#shop" class="inner_menu_link" id="shop-menu" data-toggle="tab" role="tab" aria-controls="shop" aria-selected="false">shop</a></li>
								<li><a href="#installations-tab" class="inner_menu_link" id="installations-menu" data-toggle="tab" role="tab" aria-controls="installations-tab" aria-selected="false">installations</a></li>
                                <li class="get_started_btn mr-0"><a href="/hiletters/design/">Design Lab</a></li>
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
									<img src="https://hineon.com/wp-content/uploads/2020/07/hiletter_slider1.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="col-md-5 col-xl-5">
								<div class="hilettersInner position-relative">
									<h1 class="text-uppercase">hiletters</h1>
									<p>HiLetters are the next evolutionary step for neon signs. Our most customizable and flexible product to date, HiLetters feature the same HiNeon LED Technology that we use in each of our custom made and pre-built neon signs, without any compromise on performance. Simply snap each character to the magnetic beam and your sign is ready to use. Change or enhance your sign to keep up with your business needs by using different characters, sizes and even colors.</p>
									<p class="btn_alignment"><a href="/hiletters/design/" class="homeslider-btn">Get Started</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>				 
			</div>

			<div class="main-content hiletters_page">
				<section class="section-space">
					<div class="container">
						<div class="row flex-md-row-reverse">
							<div class="col-md-6 p-md-0 designs-b-col-left">
								<div class="custom-block d-flex h-100 align-items-center">
									<div class="hiletters-b-content">
										<h3 style="text-align: center;">Versatile</h3>
										<p style="text-align: center;">HiLetters keep up with your business needs whenever they change. Unlike conventional neon signs, HiLetters offer you the ability to change the configuration of your sign whenever you need to. Want to push a different product, change around the characters of your sign, want to mix it up, then add different sizes, want to create a different look then add more colors.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="block-img">
									<img src="https://hineon.com/wp-content/uploads/2020/07/hilitter_1.jpg" class="img-fluid w-100" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section-space pt-0">
					<div class="container">
						<div class="row">
							<div class="col-md-6 p-md-0 designs-b-col-right">
								<div class="custom-block d-flex h-100 align-items-center">
									<div class="hiletters-b-content">
										<h3 style="text-align: center;">Cost Effective</h3>
										<p style="text-align: center;">HiNeon’s mission has always been to make the best neon signs for a fair price. HiLetters takes that commitment to a new level. HiLetters allows you to be in total control of what sign you wish to create and gives you the ability to change your sign at any time without the need to go through the design process again. Simply purchase the characters you need and add them to your sign.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="block-img">
									<img src="https://hineon.com/wp-content/uploads/2020/07/hilitter_2.jpg" class="img-fluid w-100" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section-space pt-0">
					<div class="container">
						<div class="row flex-md-row-reverse">
							<div class="col-md-6 p-md-0 designs-b-col-left">
								<div class="custom-block d-flex h-100 align-items-center">
									<div class="hiletters-b-content">
										<h3 style="text-align: center;">Future Proof</h3>
										<p style="text-align: center;">Our engineering team has been developing and manufacturing neon and LED lights for over 10 years. This rich experience has resulted in continued innovation to create our signature LED; HiNeon LED. This technology powers each of our products to offer their maximum performance for over 50,000 hours whilst being energy and cost efficient throughout the product’s lifespan without compromise.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="block-img">
									<img src="https://hineon.com/wp-content/uploads/2020/07/hilitter_3.jpg" class="img-fluid w-100" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section-space pt-0 section-broder-bm remove-border-ts">
					<div class="container">
						<div class="row">
							<div class="col-md-6 p-md-0 designs-b-col-right">
								<div class="custom-block d-flex h-100 align-items-center">
									<div class="hiletters-b-content">
										<h3 style="text-align: center;">Customizable</h3>
										<p style="text-align: center;">HiLetters come in a range of different sizes and colors for you to create your perfect sign with. Choose from 45 alpha, numeric and special characters, in sizes: 15cm (6”) & 8cm (3.2”) all available in 6 different colors. </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 p-0">
								<div class="block-img">
									<img src="https://hineon.com/wp-content/uploads/2020/07/hilitter_4.jpg" class="img-fluid w-100" alt="">
								</div>
							</div>
						</div> 
					</div>
				</section>
				
				<section class="section-space section-broder-bm">
					<div class="container">
						<h4 class="heading_title">Technical Specifications</h4>
						<div class="technical-table">
							<table class="w-100">
								<tr>
									<td><h4 class="title">Height</h4></td>
									<td><p class="description">15cm (6″) 8cm (3.2″)</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Depth</h4></td>
									<td><p class="description">Neon Letter 2cm, metal support Beam 1cm</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Sign Width</h4></td>
									<td><p class="description">Varies for different message, Up to 2.2m (7.2ft) per electrical run.</p>
										<p class="description">Link to infinite long.	Coal – 450 lb per year</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Power Rating</h4></td>
									<td><p class="description">Average 4.5W per character</p>
										<p class="description">Average 2.5W per character</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Voltage</h4></td>
									<td><p class="description">12V UL listed power adapter</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Neon Materials</h4></td>
									<td><p class="description">NUV Resistant PVC</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Lifetime</h4></td>
									<td><p class="description">50,000+ hours</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Control</h4></td>
									<td><p class="description">Dimmable with RF remote controller (optional accessory)</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Animation</h4></td>
									<td><p class="description">5 dynamic modes (fade, strobe, flash) with adjustable speed. RF remote controller has to be purchased as optional accessory</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Available Colors</h4></td>
									<td><p class="description">Cool White, Red, Green, Blue, Pink, Yellow</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Applications</h4></td>
									<td><p class="description">Indoor LED signage, indoor message board, indoor promotional signage</p></td>
								</tr>
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
		<div class="tab-pane fade" id="tech-specs" role="tabpanel" aria-labelledby="tech-specs-menu">
			<div class="main-content">
				<section class="section-space section-broder-bm">
					<div class="container">
						<h4 class="heading_title">Technical Specifications</h4>
						<div class="technical-table">
							<table class="w-100">
								<tr>
									<td><h4 class="title">Height</h4></td>
									<td><p class="description">15cm (6″) 8cm (3.2″)</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Depth</h4></td>
									<td><p class="description">Neon Letter 2cm, metal support Beam 1cm</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Sign Width</h4></td>
									<td><p class="description">Varies for different message, Up to 2.2m (7.2ft) per electrical run.</p>
										<p class="description">Link to infinite long.	Coal – 450 lb per year</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Power Rating</h4></td>
									<td><p class="description">Average 4.5W per character</p>
										<p class="description">Average 2.5W per character</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Voltage</h4></td>
									<td><p class="description">12V UL listed power adapter</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Neon Materials</h4></td>
									<td><p class="description">NUV Resistant PVC</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Lifetime</h4></td>
									<td><p class="description">50,000+ hours</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Control</h4></td>
									<td><p class="description">Dimmable with RF remote controller (optional accessory)</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Animation</h4></td>
									<td><p class="description">5 dynamic modes (fade, strobe, flash) with adjustable speed. RF remote controller has to be purchased as optional accessory</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Available Colors</h4></td>
									<td><p class="description">Cool White, Red, Green, Blue, Pink, Yellow</p></td>
								</tr>
								<tr>
									<td><h4 class="title">Applications</h4></td>
									<td><p class="description">Indoor LED signage, indoor message board, indoor promotional signage</p></td>
								</tr>
							</table>
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
						<?php echo do_shortcode('[products limit="-1" category="hiletters" columns="4" orderby="desc" ]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="installations-tab" role="tabpanel" aria-labelledby="installations-menu">
			<div class="main-content">
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
								<p>Here is what you get in the package; metal beams, letters, power adaptor, wire connectors, beam stoppers, screw holders, 4mm screws, clear acrylic supporter.</p>
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
									<p>HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It’s designed to provide even illumination, easy installation, low maintenance and even lower power costs.</p>
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
								<p>HiNeon delivers industry leading modern neon signs powered by HiNeonTM proprietary LED technology. It’s designed to provide even illumination, easy installation, low maintenance and even lower power costs.</p>
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