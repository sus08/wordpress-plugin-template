<?php
/*
    Plugin Name: Simple plugin
    Description: This is a simple description.
    Author: Susmita Sen


*/
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Simple plugin', 'Simple plugin', 'manage_options', 'sma_menu', 'sma_func', 'dashicons-share', 7 );
}
function sma_func(){
    ?>
<!--write what you want-->
<?php
}
?>
