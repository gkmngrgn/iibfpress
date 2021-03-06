<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> :: <?php } ?> <?php bloginfo('name'); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/_bp/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/_bp/print.css" type="text/css" media="print" />
    <!--[if lt IE 8]>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/_bp/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="all" />

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/gkmngrgn.js"></script>
    <!--[if lt IE 7]>
        <script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
    <![endif]-->

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="container no-footer">
      <?php get_sidebar(); ?>

      <div class="span-18 last">
        <div id="header">
	  <!-- Site Name -->
	  <a href="<?php echo get_option('home'); ?>/" class="logo"></a>
	  <h1><?php bloginfo('name'); ?></h1>
	  <!-- If not using logo:
               <a href="<?php echo get_option('home'); ?>/" class="logo"><h1><?php bloginfo('name'); ?></h1></a> -->
	  <div class="description"><?php bloginfo('description'); ?></div>
        </div>

        <div class="span-18 last" id="nav">
	  <ul>
	    <li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?> first">
              <a href="<?php echo get_settings('home'); ?>">Ana sayfa</a>
            </li>
	    <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
	  </ul>
        </div>
