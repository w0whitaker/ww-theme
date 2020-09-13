<?php
function register_ww_menus() {
  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'ww-theme' ),
      'artwork' => esc_html__( 'Artwork', 'ww-theme' ),
      'paintings' => esc_html__( 'Paintings', 'ww-theme' ),
      'paintings_sub' => esc_html__( 'paintings_sub', 'ww-theme' )
    )
  );
}

add_action( 'init', 'register_ww_menus' );