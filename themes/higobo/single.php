<?php get_header(); ?>
<div class="_main mt-76px">
<?php
if(has_category(array('customneonsigns', 'installations', 'backing-neon-signs'))){ ?>
	<section class="steps-links-tabs p-tb-60px">
		<div class="container">
			<div class="row justify-content-center">
				<?php
					$stepCount = 0;
					if( have_rows('steps') ):
						while ( have_rows('steps') ) : the_row(); $stepCount++; ?>
						<div class="col-md-2 p-2">
							<div class="_step-link_img">
								<a href="#step-<?php echo $stepCount; ?>">
									<span class="_step_tab_count"><?php echo $stepCount; ?></span>
									<img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
								</a>
							</div>
						</div>
						<?php
					 endwhile;
				else :
					echo 'No Steps Found';
				endif;
				?>
			</div>
		</div>
	</section>
	<section class="_steps_detailed">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center m-4">
						Detail Images
					</h3>
				</div>
			</div>
		</div>
		<div class="container">
			
				<?php
					$stepCount = 0;
					if( have_rows('steps') ):
						while ( have_rows('steps') ) : the_row(); $stepCount++; ?>
							<div class="row justify-content-center">
								<div class="col-md-6 p-2">
									<div class="_step-detail_img">
										<div id="step-<?php echo $stepCount; ?>">
											<img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
											<h4 class="text-center m-4"><?php the_sub_field('title'); ?></h4>
										</div>
									</div>
								</div>
							</div>
						<?php
					 endwhile;
				else :
					echo 'No Steps Found';
				endif;
				?>
			
		</div>
	</section>
	<a href="" class="scroll-box" title="Scroll to top"style="color:#fff" >&#8593;</a>
<?php }else{ ?>
    <div class="container pt-5">

    <?php
//    if(is_product()){
//        woocommerce_content();
//    }else{
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;

//    }

    ?>
    </div>
<?php }
?>
</div>
<?php get_footer(); ?>