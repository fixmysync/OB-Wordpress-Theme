<?php

/*
	Template Name: page-menu
*/ 

get_header();  ?>

<div id="menuWrapper" class="wood clearfix">
    <div class="food-menu clearfix">

     <!--  Start the loop -->
     
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


      <h1><?php the_title(); ?></h1>

       <?php the_content(); ?>

      
    </div> <!-- end of .food-menu -->
</div> <!-- end of #menuWrapper & .wood -->


      <?php endwhile; // end the loop?>
    
    <div class="spacer2Wrapper"></div> <!-- Lobster photo -->

<?php get_footer(); ?>