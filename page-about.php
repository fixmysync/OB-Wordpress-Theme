<?php

/*
	Template Name: page-about
*/ 

get_header();  ?>


<div id="aboutWrapper" class="about clearfix">
  <div class="innerWrapper clearfix">
    <div class="leftCopy">

        <!-- Start the loop -->

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

    </div>

    <div class="rightMediaBox">
        <div class="poleroid">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/owner2.jpg" alt="photo of Adam Colquhoun"><h6>Adam Colquhoun</h6>
        </div>
    </div>

</div> <!-- end of innerWrapper -->
        

<?php get_footer(); ?>