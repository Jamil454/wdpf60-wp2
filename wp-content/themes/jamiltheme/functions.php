<?php

function register_jamil_menu() {
  register_nav_menu( 'primary', __( 'Main Location', 'jamiltheme' ) );

  
}

add_action('after_setup_theme', 'register_jamil_menu');
?>