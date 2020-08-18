<?php get_header(); ?>
<?php //if ( have_posts() ) : while ( have_posts() ) : the_post();
   // the_content();
//endwhile; else : ?>
<!--     <p><?php // esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p> -->
<?php //endif; ?>

<div class="_tab_content">
            <section class="hero-sec spc">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>PROJECTS</h1>
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
<div class="container">
	<div class="pt-5">
		<div class="row">
			<?php 
				if ( have_posts() ) : 
    			while ( have_posts() ) : the_post();  ?>

					<div class="col-md-4" style="padding-bottom: 30px;">
						<a href="<?php the_permalink(); ?>">
							<?php $image = get_the_post_thumbnail_url(); ?>
							<img style="height: 250px;object-fit: cover;width: 100%" class="pb-1" src="<?= $image; ?>" alt="">
							<div class="wpupg-meta-container">
	  							<p class="pt-2" style="font-size:14px;color:#F86970;"><b><?php echo single_cat_title( '', false ) ?></b></p>
	  							<h4 class="pt-2 pb-md-2 pb-3"><b><div class="wpupg-item-title wpupg-block-text-bold"><?php the_title(); ?></div></b></h4>
							</div>
						</a>
					</div>
			<?php
				    endwhile; 
					else: 
					    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
					endif;
			 ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>