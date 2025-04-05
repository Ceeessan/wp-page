<?php
if(!defined('ABSPATH')){
exit;
}
//Initialize theme
require_once(get_template_directory() . "/init.php");
// require_once("vite.php");
// require_once("init.php");
function wp_page_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wp_page_add_woocommerce_support' );

?>