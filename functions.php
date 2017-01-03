<?php

if ( ! function_exists( 'mamard_setup' ) ) :
  function mamard_setup() {
    register_nav_menus();
  }

  add_action( 'after_setup_theme', 'mamard_setup' );
endif;
