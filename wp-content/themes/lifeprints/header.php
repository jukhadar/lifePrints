<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="/image/png" href="images/favicon.png">
        <?php wp_head(); ?>
    </head>
  	<body <?php body_class(); ?>>

  	<!-- site header -->
    <div class="sitelogo">
      <div class="container">
        <div class="row">
            <div class="three columns">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
                  <h5><?php bloginfo('description');?></h5>
            </div>
            <div class="seven columns">
                <div class="button phoneNumber">
                  <h5><i class="fa fa-phone"></i><a href="tel:6029935447">(602)-993-5447</a></h5>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="anousments ">
      <div class="container">
           <div class="row">
            <div class="eleven columns news animated slideInLeft">
              <p>NEWS<p>
              <h5><?php
                    global $post;
                    $args = array( 'numberposts' => 1 );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) :  setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endforeach; ?></h5>
           </div>
      </div>
    </div>
  	<header class="site-header">
    <div class="container">
      <div class="row">
        <div class="eleven columns">  
  		    <nav class="site-nav">
  			     <?php $args = array('theme_location' => 'primary');?>
  			     <?php wp_nav_menu(args); ?>
  		    </nav>
        </div>
      </div>
    </div>
  	</header><!-- /site-header -->




                