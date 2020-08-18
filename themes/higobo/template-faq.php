<?php

/* template name: FAQ Template */

get_header(); 

?>
<header class="bg-light title_subhead" style=" z-index:1 !important;">
  <div class="container">
      <nav class="secondary-nav navbar navbar-expand-lg navbar-light  justify-content-between">
          <a class="h3 text-dark" href="#">FAQ</a>
       
      </nav>
  </div>
</header>
<?php
        if (have_posts()) :

            while (have_posts()) :

                
                the_post();

                //if(is_page('faq')){
                    ?>
                <!--<div class="container-fluid">
					<div class="row text-center">
						<div class="col-md-12 p-5"><h1><b><?php the_title();?></b></h1>
						</div>
                    </div>
                </div>-->

<?php
               // }
?>
<div class="container-fluid" style="padding-left:0px !important; padding-right:0px !important;">

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