<?php get_header(); 

/*
  Template Name: page-home
*/ 

 ?>



<header> <!-- This div makes is an unstyled div to give the header a full bleed look -->
      <div class="home">
        <div class="logo">
    <!-- this links to google maps in the address under the logo -->
          <p>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/office.svg" alt="office icon"><a href="https://www.google.com/maps/preview/place/872+Queen+St+W,+Toronto,+ON+M6J+1G3,+Canada/@43.645122,-79.414255,3a,75y,332.76h,90.97t/data=!3m4!1e1!3m2!1sXFa_vlO9oObBtrR_2JIFBA!2e0!4m2!3m1!1s0x882b34fcd5a94cab:0xa64719e73741a0a7!6m1!1e1" target="_blank">872 Queen Street West</a><img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone.svg" alt="phone icon"><a href="tel:+14165343432">416.534.3432</a><img src="<?php bloginfo('stylesheet_directory'); ?>/images/envelope.svg" alt="envelope icon"><a href="mailto:adam@oysterboy.ca">adam@oysterboy.ca</a></p>
    
    </div> <!-- /.logo -->
  </div> <!-- /.home -->
</header>
<div class="introWrapper clearfix">
      <div class="innerWrapper clearfix">
        <div class="leftCopy">
         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> <!-- start of loop -->
           <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
        <div class="rightMediaBox">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2887.181269202485!2d-79.41420128280335!3d43.644396826444655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34fcd5a94cab%3A0xa64719e73741a0a7!2s872+Queen+St+W%2C+Toronto%2C+ON+M6J+1G3%2C+Canada!5e0!3m2!1sen!2s!4v1391190884244" width="400" height="300" frameborder="0" style="border:1px solid black"></iframe>
        </div>
      </div>
    </div>

    <div class="spacer1Wrapper"></div>

<?php  get_footer(); ?> 