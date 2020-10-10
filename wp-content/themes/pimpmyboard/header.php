<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pimp my Board
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Pacifico' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar-inverse" <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pimpmyboard' ); ?></a>

	<header class="site-header" role="banner">
  <!-- NAVBAR -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><?php bloginfo('name'); ?></a>
      </div>

			<?php
				wp_nav_menu(array(
          'menu'                  => 'primary',
					'theme_location'				=> 'primary',
					'container'							=> 'div',
					'container_class'				=> 'collapse navbar-collapse navbar-right',
          'container_id'          => 'navbar',
					'menu_class'						=> 'nav navbar-nav',
          'fallback_cb'           => 'wp_bootstrap_navwalker::fallback',
          'walker'                => new wp_bootstrap_navwalker()
				));
			?>

    </div>
  </nav>
</header>
