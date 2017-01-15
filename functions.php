<?php
// register menus
function rm_register_menus() {
    register_nav_menus(
        array( 'header-menu' => __( 'Header Menu' ) )
    );
}
add_action( 'init', 'rm_register_menus' );
// register widgets
function rm_widgets_init() {
    register_sidebar (array(
        'name'          => __('Sidebar','rm'),
        'id'            => "sidebar-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' )
        );
    register_sidebar (array(
        'name'          => __('First Footer Widget Area','rm'),
        'id'            => "footer-first-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' )
        );
    register_sidebar (array(
        'name'          => __('Second Footer Widget Area','rm'),
        'id'            => "footer-second-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' )
        );
    register_sidebar (array(
        'name'          => __('Third Footer Widget Area','rm'),
        'id'            => "footer-third-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' )
        );
    register_sidebar (array(
        'name'          => __('Fourth Footer Widget Area','rm'),
        'id'            => "footer-fourth-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' )
        );
}
add_action('init', 'rm_widgets_init');
?>
