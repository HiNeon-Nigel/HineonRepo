<?php
get_header(); 
while ( have_posts() ) : the_post();
?>

    <section class="hero-sec sinlge-project-header">
        <div class="container">
            <div class="row row pt-5 mt-5">
                <div class="col-md-10 offset-md-1 text-center">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
        <div class="row pb-5">
                <div class="col col-md-6 pl-md-3">
                <p class="text-right"><b>Product Line Used:</b></p>
                <p class="text-right"><b>Neon Colors:</b></p>
                </div>
                <div class="col-6 col-md-5">
                
         <?php

 global $post;
 
$categories = get_the_terms( $post->ID, 'project_category' );

$j = 0;

$parents = array();
foreach( $categories as $category ) {
        array_push($parents,$category->parent);
    if(in_array($category->parent,array(232))){
$j++;
     }
     }     
    //echo $category->parent . ', ';
    foreach( $categories as $category ) {
    if(in_array(231,$parents)){
        
    if($category->parent == 231){
        
    $product_line = $category->name;
     }
     }else{
        
      $product_line = 'None';
     }
     
}

$i=1;
foreach( $categories as $category ){
    if(in_array(232,$parents)){
        
    if($category->parent == 232){
        if($i < $j && $i != $j){ $comma = ', ';}else{$comma='';}
    $neon_colors .= $category->name. $comma;
      
  $i++;
   }
     }else{
     $neon_colors = 'None';
   }
}
?>      
                <p>
   
    <?php
echo $product_line;
?></p>
                <p><?php


echo $neon_colors;
?></p>
                </div>
                
                </div>
                
                 <div class="row pb-5 pt-5">
                <div class="col-md-12 text-center">
                <b><svg class="bi bi-arrow-left" width="1em" height="1em" style="font-size: 30px;" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.854 6.646a.5.5 0 010 .708L5.207 10l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
  <path fill-rule="evenodd" d="M4.5 10a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
</svg> 
<a href="<?php bloginfo('url')?>/projects">Back To Projects</a>
</b>
                </div>
                </div>

                
                <hr />
            <div class="hfg row">
                <div class="col-md-12 pb-5"><?php the_content(); ?></div>
               
            </div>
            <hr />
            
            
        </div>
        
        
    </section>
     <section>
     
                    <div class="container pt-4 pb-5 text-center">
                        <div class="row mb-5 pb-5 create-yours">
                            <div class="col-md-12 ">
                                <h1>Create Your Own</h1>
                <p>
                    
                <?php 
                $product_line = strtolower(str_replace(' ','-',$product_line));
                if ($product_line  == 'hiscript'){
                    ?>
                     <a class="hcf-btn  mt-0 mr-0" style="padding:10px 55px;" href="#">COMING SOON</a>
               
                    <?php
                }elseif($product_line  == 'custom-neon-signs'){
                    ?>
                     <a class="hcf-btn  mt-0 mr-0" id="create_yours" style="padding:10px 55px;" href="#">CREATE YOURS</a>
               
                    <?php
                }elseif($product_line  ==  'hiletters'){
                   ?>
                   
                    <a class="hcf-btn  mt-0 mr-0" style="padding:10px 55px;" href="<?php echo get_bloginfo('url') .'/'. strtolower(str_replace(' ','-',$product_line));?>/design/">DESIGN LAB</a>
               
               <?php
                }
                ?>
                </p>
                            </div>
                        </div>
                        <div class="row pb-4 pt-4 browse-more">
                        <div class="col-md-12">
                        <h1 class="pb-3">Browse More Projects</h1></div>
                        <?php echo do_shortcode("[wpb-random-posts]"); ?>
                        
                        </div>
                    </div>
                </section>




<?php 
endwhile;
get_footer(); ?>
