<?php

// add main menu
function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  }
 add_action( 'init', 'wpb_custom_new_menu' );


?>