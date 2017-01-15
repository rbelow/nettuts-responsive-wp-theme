<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head elements and everything up until the "container" div.
 */

?><!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-left">
            <div id="site-title">
                <h1 id="site-name"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
                <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div><!-- .site-title -->
        </div><!-- .header-left -->
        <div class="header-right">
            <address>Contact details</address>
        </div><!-- .header-right -->
    </header>

    <nav class="main">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
