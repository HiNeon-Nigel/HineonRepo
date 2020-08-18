<?php
	// Template Name: HiNeon Custom Page V2

get_header(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icon-all.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-v2.css" media="all">
    <style>
        header._main_header {box-shadow: none; border-bottom: 2px solid; }
        section.menu_section {position: sticky;z-index: 999 !important;top: 2px; padding: 15px 0px; background: #fff;border-bottom: 2px solid; }
		.title { font-family: 'Quicksand', sans-serif; font-style: normal; font-weight: 500; font-size: 48px; line-height: 120%; text-transform: uppercase; color: #11113D; }
		ul.points { margin-top: 50px; }
		/* .image_width { width: 60%; margin-top: 20%; } */
		h4.sub_title { font-family: 'Quicksand', sans-serif; font-style: normal; font-weight: bold; font-size: 24px; line-height: 115%; color: #11113D; margin-bottom: 40px; }
        ul.points li { font-family: 'Open Sans', sans-serif; font-style: normal; font-weight: normal; font-size: 14px; line-height: 150%; color: rgba(17, 17, 61, 0.7); list-style: none; }
		@media screen and (max-width:767.98px){
			.custom_page .hiletters-right img.img-fluid {
				margin-top: -40px;
			}
            .title{font-size: 42px;}
			.table td, .table th { 
				vertical-align: top;
				border-top: 1px solid #dee2e6!important;
			}
			.custom-page-table-desktop {
				display: block!important;
			}
			.custom-page-table table tbody tr td h4 { font-size: 15px; }
        }
		@media (max-width:780px) and (min-width:768px) {
			h1.text-uppercase.lineHeight120 {
				font-size: 20px !important; 
			}
			a.homeslider-btn {
				margin-top: 20px!important;
			}
		}
		@media (max-width:1024px) and (min-width:1024px) {
			h1.text-uppercase.lineHeight120 {
				font-size: 25px !important; 
			}
			a.homeslider-btn {
				margin-top: 30px!important;
			}
		}
		table.table {
			width: 70%!important;
			margin: 0 auto;
		}
		table.table td, table.table th {
			padding: 4px;
			border: none;
		}
		ul.inner_menu li.get_started_btn a {
			line-height: 30px!important;
		}
    </style>

    <section class="menu_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="page_title mb-4 mb-md-0">custom neon signs</h4>
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
                                <li><a href="#design-guide" class="inner_menu_link" id="design-guide-menu" data-toggle="tab" role="tab" aria-controls="design-guide" aria-selected="false">design guide</a></li>
                                <li><a href="/projects/" class="inner_menu_link" id="shop-menu">Project</a></li>
                                <li><a href="#installations-tab" class="inner_menu_link" id="installations-menu" data-toggle="tab" role="tab" aria-controls="installations-tab" aria-selected="false">installations</a></li>
                                <li class="get_started_btn mr-0"><a href="https://hineon.com/custom-neon-design-contact-us-usa/" class="dynamic_url">Design Lab</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-menu">
            <!--div id="hiletters_slider" class="hilettersslider custom_page owl-carousel"-->
            <div id="hiletters_slider" class="hilettersslider custom_page">
                <div class="hiletters-slide h-100">
                    <div class="container h-100">
                        <div class="row flex-md-row-reverse">
                            <div class="col-md-7 col-xl-7">
                                <div class="hiletters-right mb-4 mb-md-0">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/hineon-cps.png" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-5">
                                <div class="hilettersInner position-relative">
                                    <h1 class="text-uppercase lineHeight120">Welcome to a New Generation of Neon Displays</h1>
                                    <p style="color: #fff!important;">A LED-based product that retains all of neon’s sharp looking attributes, but with more colors and extra shapes! Say goodbye to traditional hazardous glass tubes and welcome a much safer PVC coating. Its recyclable material allows for a green, eco-friendly product. Think of what you can buy with your electricity savings! HiNeon is everything you love about design lighting. Only not as expensive.</p>
                                    <a href="https://hineon.com/custom-neon-design-contact-us-usa/" class="homeslider-btn dynamic_url">Get Started</a>
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
                                        <h3 style="text-align: center;">Exceptionally Safe Material</h3>
                                        <p style="text-align: center;">Our revolutionary neon products do not use glass, we use PVC. Don’t worry if it drops, it’s fine. It runs on low voltage, even if you touch it, it’s not hot. LEDs are great. It uses semiconductors, turn on and off as many times as you want. Oh yeah, and they have water and dust resistance option.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="block-img">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/exceptionally-safe-material.png" class="img-fluid w-100" alt="">
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
                                        <h3 style="text-align: center;">Maximize Your Creativity</h3>
                                        <p style="text-align: center;">Too bright, or not bright enough? Want it to flash? Say no more. Our inhouse adapter will give you full control. It will feel like you have magical powers.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="block-img">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/maximize-your-creativity.png" class="img-fluid w-100" alt="">
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
                                        <h3 style="text-align: center;">Fastest Production Time in the Industry</h3>
                                        <p style="text-align: center;">Other companies say the production process takes 4+ weeks. But you really want to spice up your event that’s in 3 weeks. How about we deliver your sign in 2 weeks? AND we’ll have a thank you note.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="block-img">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/exceptionally-safe-material.png" class="img-fluid w-100" alt="">
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
                                        <h3 style="text-align: center;">Unlimited Color Options & Super Customizable Design</h3>
                                        <p style="text-align: center;">Our LEDs can match any color in the universe. Certainly the most accurate in the industry. HiNeon are produced with precision – enabling any size and shape possible. Whatever the design is, we will make it work!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="block-img">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/unlimited-color.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
                
                <section class="section-space pt-0 section-broder-bm">
                    <h3 class="lineHeight115 notice">By the time you finish reading this line, you could<br> have installed the light already.</h3>
                </section>

                <section class="section-space section-broder-bm">
                    <div class="container">
                        <h4 class="heading_title">Technical Specifications</h4>
                        <div class="custom-page-table custom-page-table-desktop">
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <td><h4>Traditional Neon</h4></td>
                                    <td><h4>LED Neon</h4></td>
                                </tr>
                                <tr>
                                    <td><p>Electricity</p></td>
                                    <td><p>3,000-18,000 Volts</p></td>
                                    <td><p>12 Volts</p></td>
                                </tr>
                                <tr>
                                    <td><p>Lifetime</p></td>
                                    <td><p>15,000 hrs</p></td>
                                    <td><p>50,000+ hrs</p></td>
                                </tr>
                                <tr>
                                    <td><p>Environment</p></td>
                                    <td><p>Coal – 7500 lb per Year</p></td>
                                    <td><p>Coal – 450 lb per year</p></td>
                                </tr>
                                <tr>
                                    <td><p>Colors</p></td>
                                    <td><p>Limited</p></td>
                                    <td><p>Unlimited</p></td>
                                </tr>
                                <tr>
                                    <td><p>Material</p></td>
                                    <td><p>Glass Tubes</p></td>
                                    <td><p>PVC</p></td>
                                </tr>
                                <tr>
                                    <td><p>Durability</p></td>
                                    <td><p>Breaks Easily</p></td>
                                    <td><p>Indoor & Outdoor</p></td>
                                </tr>
                                <tr>
                                    <td><p>Safety</p></td>
                                    <td><p>Toxic Chemicals	Touchable</p></td>
                                    <td><p>Non-flammable</p></td>
                                </tr>
                                <tr>
                                    <td><p>Lead Time</p></td>
                                    <td><p>3 – 7 Weeks</p></td>
                                    <td><p>1 – 3 Weeks</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section> 

                <section class="section-space leaf_section">
                    <div class="container">
                        <div class="row flex-md-row-reverse">
                            <div class="col-md-6 p-md-0 designs-b-col-left">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3 style="text-align: center;">There is going Green, Then there is going HiNeon</h3>
                                        <p style="text-align: center;">Traditional neon products have a life expectancy of 30,000~ hours. HiNeon products triple that. For every dollar spent on keeping the traditional neon product on, you can save 40 cents on our energy efficient LED product. 40 cents multiplied by tens of thousands of hours. The math checks out, HiNeon is awesome.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-0">
                                <div class="block-img">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/Leaf-2000x2000-4-1.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-space" style="border-bottom: 2px solid #11113D">
                    <div class="container">
                        <h4 class="heading_title mb-4">Have Questions? <br>Want to get a Qoute?</h4>
                        <div class="button_hi_letters mt-0">
                            <a href="https://hineon.com/custom-neon-design-contact-us-usa/" class="try_it_out_btn dynamic_url">customize your own</a>
                        </div>
                    </div>
                </section>               
            </div>
        </div>
        <div class="tab-pane fade" id="design-guide" role="tabpanel" aria-labelledby="design-guide-menu">
            <div class="main-content">
                <section class="section-space">
                    <div class="container">
                        <h2 class="title">neon sign design guide</h2>
                    </div>
                </section>
                
                <section class="section-space pt-0 full-border-right full-border-section">
                    <div class="container">
                        <div class="row align-items-center flex-md-row-reverse">
                            <div class="col-md-6 col-xl-5 mt-5 mt-xl-5 mt-md-0">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/custom-neon-width.png" class="img-fluid" class="image_width" alt="Custom Neon Width">
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-7">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Custom Neon Width</h3>
                                        <p>Different neon width available for your every design need. The standard available neon width is 12mm, which is available in all colors. There are two thicker neon width at 14mm and 25mm for larger designs. A slim neon at 8mm is available, but in single color only. Please note that the slim neon may be required to recreate smaller sized shapes.</p>
                                        <ul class="points">
                                            <li>*Standard 12mm,</li>
                                            <li>*Slim 8mm (single color only),</li>
                                            <li>*Thick 14mm, 20mm, 25mm, 32mm</li>
                                            <li>Indicates availability at additional cost</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-space pt-0 full-border-left full-border-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 mt-5">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/waterproof.png" class="img-fluid" class="image_width" alt="Waterproof">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Waterproof</h3>
                                        <p>Waterproof HiNeon signs available to accommodate all your event needs. Permanent outdoor installation would require additional notice as regulations may differ depending on your whereabouts.</p>
                                        <ul class="points">
                                            <li>*Indoor</li>
                                            <li>*Outdoor Events</li>
                                            <li>*Outdoor permanent installation</li>
                                            <li>Indicates availability at additional cost</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-space pt-0 full-border-right full-border-section">
                    <div class="container">
                        <div class="row mt-4 mt-md-0 align-items-center flex-md-row-reverse">
                            <div class="col-md-6 col-xl-5 offset-xl-1 mt-5 mt-xl-5 mt-md-0">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://hineon.com/wp-content/uploads/2020/02/Group-82.png" class="image_width" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Color Options</h3>
                                        <p>Our neon tubes can produce all sorts of colors, providing an industry-best color matching service.</p>
                                        <p>Cool white, Warm white, Red, Green, Blue, Baby blue, Yellow, Pink, Orange, RGB (14mm+)</p>
                                        <p>Please note that RGB (tunable) neon tubes will require a thicker width at 14mm+.</p>								 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-space pt-0 full-border-left full-border-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-xl-5 mt-5 mt-xl-5 mt-md-0">
                                <div class="block-imgs">
                                    <img src="https://hineon.com/wp-content/uploads/2020/02/Website-Assets-04-1.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 offset-xl-1">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Acrylic Options</h3>
                                        <h4 class="sub_title">(5mm/ 0.2" thickness, 1.4 lbs/sq. Ft., 7 kg/sq. Meter)</h4>
                                        <p style="margin-left: 0px;">The acrylic backdrop provides a variety of color to choose from. Aside from standard colors, we also support UV printing on the backdrop, enabling more creativity to your design.</p>
                                        <br><br>
                                        <p>*Red Green Blue Yellow Orange (extra cost)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-space pl-5 pl-md-0 pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <h3 class="backdrop_title">Backdrop Options</h3>
                            </div>
                            <div class="col-md-7">
                                <p class="backdrop_text mt-5 mt-md-0">Customize your backdrop acrylic to fit better with the rest of the design or surroundings. We have a wide variety of choices.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-space pt-0 pb-0 pb-md-5 full-border-right">
                    <div class="container">
                        <div class="row pl-lg-4 pl-xl-5">
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/rectangle.png" class="img-fluid" alt="">
                                    </div>
                                    <h5>rectangle</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/circle.png" class="img-fluid" alt="">
                                    </div>
                                    <h5>circle</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/outline-to-ltter.png" class="img-fluid" alt="">
                                    </div>
                                    <h5>Outline to Letter</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-space pt-0 pt-md-5 full-border-left">
                    <div class="container">
                        <div class="row pr-lg-4 pr-xl-5">
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/no-backing.png" class="img-fluid" alt="No Backing">
                                    </div>
                                    <h5>No Backing</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/outline-to-shape.png" class="img-fluid" alt="Outline to Shape">
                                    </div>
                                    <h5>Outline to Shape</h5>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backdrop_col text-center">
                                    <div class="backdrop_col_img">
                                        <img src="https://hineon.com/wp-content/uploads/2020/07/acrylic-box.png" class="img-fluid" alt="Acrylic Box">
                                    </div>
                                    <h5>Acrylic Box</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-space pt-0 full-border-right full-border-section">
                    <div class="container">
                        <div class="row align-items-center flex-md-row-reverse">
                            <div class="col-md-5">
                                <div class="block-imgs" style="text-align: center;">
                                    <img src="https://hineon.com/wp-content/uploads/2020/07/power-consumption.png" class="img-fluid" alt="Power Consumption">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="custom-block d-flex h-100 align-items-center">
                                    <div class="hiletters-b-content">
                                        <h3>Power Consumption</h3>
                                        <p>Our neon tubes can produce all sorts of colors, providing an industry-best color matching service.</p>
                                        <p>Cool white, Warm white, Red, Green, Blue, Baby blue, Yellow, Pink, Orange, RGB (14mm+)</p>
                                        <p>Please note that RGB (tunable) neon tubes will require a thicker width at 14mm+.</p>
                                        <ul class="points">
                                            <li>*Standard 12mm,</li>
                                            <li>*Slim 8mm (single color only),</li>
                                            <li>*Thick 14mm, 20mm, 25mm, 32mm</li>
                                            <li>Indicates availability at additional cost</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-space full-border-section">
                    <div class="container">
                        <h3 class="backdrop_title text-center text-uppercase mb-5 pb-4 pb-xl-5">Sketch to finish</h3>
                    </div>
                    <div class="swiper-container swiper-sketch-finish">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://hineon.com/wp-content/uploads/2020/07/Leaf-2000x2000-4-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide ">
                                <img src="https://hineon.com/wp-content/uploads/2020/07/Leaf-2000x2000-4-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://hineon.com/wp-content/uploads/2020/07/Leaf-2000x2000-4-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://hineon.com/wp-content/uploads/2020/07/Leaf-2000x2000-4-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>
                
                <section class="section-space" style="border-bottom: 2px solid #11113D; border-top: 2px solid #11113D">
                    <div class="container">
                        <h4 class="heading_title mb-4">Congratulations! <br>Now you know how to design your own Neon Sign</h4>
                        <div class="button_hi_letters mt-0">
                            <a href="/hiscripts/design/" class="try_it_out_btn">customize your own</a>
                        </div>
                    </div>
                </section>                          
            </div>
        </div>
        <!--div class="tab-pane fade" id="shop-tab" role="tabpanel" aria-labelledby="shop-menu">shop</div-->
        <div class="tab-pane fade" id="installations-tab" role="tabpanel" aria-labelledby="installations-menu">
			<div class="main-content">
				<section class="hero-sec spc" style="">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1>INSTALLATIONS</h1>
							</div>
						</div>
					</div>
				</section>
				<section class="main-content">
					<div class="container">
						<div class="row my-5" role="tablist">
							<div class="col-md-12 text-center text-md-left">
								<h4><b>How To Install Custom Neon Signs?</b></h4>
								<p class="p-0 text-center text-md-left">Choose the way you want to show people your LED neon signs:</p>
							</div>
							<?php
							$category_query_args = array(
								'cat' => 4,
								'order'     => 'ASC',
							);
							$category_query = new WP_Query( $category_query_args );
							if ( $category_query->have_posts() ) {
								while ($category_query->have_posts()){
									$category_query->the_post(); ?>
									<div class="col-md-3 text-center mt-4 col-sm-6">
										<div class="__animate_img_box installation_post_item">
											<img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam carousel-img"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
											<div class="img-title" data-postid="<?php echo get_the_ID(); ?>"  style="cursor: pointer">
												<h5 class="mt-4"><?php the_title(); ?></h5>
											</div>
										</div>
									</div>
									<?php
								}
							}
							wp_reset_postdata();
							?>
						</div>                  
					</div>
					<div class="container">
						<div class="row my-5" role="tablist">
							<div class="col-md-12 text-center text-md-left">
								<h4><b>How To Install No Backing Neon Signs?</b></h4>
								<p class="p-0 text-center text-md-left">Choose the way you want to show people your no backing neon signs:</p>
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
											<img data-postid="<?php echo get_the_ID(); ?>" class="img-fluid xam carousel-img"  src="<?php echo get_the_post_thumbnail_url(); ?>" style="cursor: pointer">
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
						<div id="installation_detail"></div>
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
    	
    <script type="text/javascript" src="https://unpkg.com/swiper@6.0.4/swiper-bundle.js"></script>
<?php get_footer(); ?>