<!-- _____________________________________________________________________________________________________________________
            Oyster Boy Custom Theme - Developed by Mandy Thomson &#64; MandyMadeThis.com &copy;2014
______________________________________________________________________________________________________________________ -->

<!DOCTYPE html>
<htmllang="en">
<head> 
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?> " />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  
  <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
  <script src="<?php bloginfo('stylesheet_directory');?>/scripts/jquery.smooth-scroll.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/scripts/scripts.js"></script>

    <script type="text/javascript" charset="utf-8">
      $(window).load(function(){
      
        $('nav a').smoothScroll({
          offset: -39,
        });
    });

  </script>

</head> <!-- end of head -->


<body <?php body_class(); ?>>
  <nav>
  

  <?php wp_nav_menu( array('container' => false, 'menu' => 'navigation') ); ?>
    
  </nav>


	
    



