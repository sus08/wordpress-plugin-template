<?php
/*
    Plugin Name: Simple Social Media Addon
    Description: This is a simple social media plugin created for fun.
    Author: Susmita Sen


*/
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Social Media Addon', 'Sunny Leone', 'manage_options', 'sma_menu', 'sma_func', 'dashicons-share', 7 );
}
function sma_func(){
    ?>
<img src="https://stat1.bollywoodhungama.in/wp-content/uploads/2016/03/54649565.jpg">

<?php
}
?>
