<?php

// add main menu
function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
			  'name'          => 'Home right sidebar',
			  'id'            => 'home_right_1',
			  'before_widget' => '<div>',
			  'after_widget'  => '</div>',
			  'before_title'  => '<h2 class="rounded">',
			  'after_title'   => '</h2>',
			  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>