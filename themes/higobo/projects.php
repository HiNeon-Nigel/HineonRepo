<?php
get_header(); ?>

    <section class="hero-sec spc">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h1>All Projects</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
            
                <?php 
                if(have_posts()) : while(have_posts()) : the_post();?>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/static/img15.jpg" alt="" class="fluid-img" />
                        <b>Tag, Category</b>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                <?endwhile; endif;?>
              
            </div>
        </div>
    </section>




<?php get_footer(); ?>
