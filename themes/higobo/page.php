<?php

get_header(); 

        if (have_posts()) :

            while (have_posts()) :

                
                the_post();

                if(is_page('faq')){
                    ?>
                <div class="container-fluid">
                <div class="row text-center" style="background-color:#dcdcdc;">
                <div class="col-md-12 p-5"><h1><b><?php the_title();?></b></h1>
</div>
                </div>
                </div>

<?php
                }
?>
<div class="container">

    <div class="pt-5">
<?php

                the_content();
?>
    </div>

</div>
  <?php          endwhile;

        endif;

        ?>


<?php get_footer(); ?>