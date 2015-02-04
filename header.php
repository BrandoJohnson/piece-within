<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Brandon Johnson">

    <!-- Mobile specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic' rel='stylesheet' >
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet'>
    <script src="js/vendor/modernizr-2.8.0.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- HEADER -->
<header class="main-header align-center section-content">
    <div class="cart-link"><a href="cart">View Cart</a> - <a href="contact">Contact Us</a></div>
    <a href="<?php home_url(); ?>/"  class="logo"><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
    <nav class="main-nav">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => '',
                'menu-class' => 'inline'
            ));
        ?>
    </nav>
</header>