<?php get_header(); 

/*
  Template Name: page-event
*/ 

 ?>

 <div id="eventsWrapper"> <!-- light blue bg, with circle & gallery inside -->
  <div class="innerWrapper clearfix"> 
    <div class="half">
      <div class="circle"> 
        <div class="events">
          <h3>Add Us to Your Guest List</h3>
          <p>Planning the perfect event really does come down to who is on the guest list. With Oyster Boy on the guest list, your next party is guaranteed to be a lively one.</p> 

          <p>You can pick up one of our ready-to-serve platters or a box of Oyster Boy’s best oysters and shuck them yourself. Or you can relax, and let us take care of everything for you by have our expert team shuck your guests’ oysters right before their eyes.</p>
        </div>
      </div>
    </div>

  <div class="half">

    <div class="form clearfix"> <!-- contact form goes here -->
      
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <!-- start of loop -->
        <?php echo do_shortcode( '[contact-form-7 id="35" title="Contact Form"]' ); ?>
       <?php endwhile; ?>


    </div>
  
  </div>


      

        <div class="gallery">

          <div class="poleroid">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shucker1.jpg" alt="photo of a female staff member, shucking oysters">
          <p>Photo Caption</p> </div>

          <div class="poleroid middle">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shucker2.jpg" alt="photo of a male staff member, shucking oysters">
          <p>Photo Caption</p>
          </div>

          <div class="poleroid">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shucker3.jpg" alt="photo of a the owner, shucking oysters">
          <p>Photo Caption</p>
          </div>
        </div>
        
      </div>

  </div>
 
<?php  get_footer(); ?> 