<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>



<header class="clearfix">
  <div class="container top">
    <div class="nav"
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
    <div class="title">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <h2>
        <?php echo get_bloginfo ( 'description' );  ?>
      </h2>
    </div>
    <div class="social">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social'
      )); ?>
    </div>

    
  </div> <!-- /.container -->
</header><!--/.header-->
<div class="wrapper">

