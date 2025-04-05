<?php
function wp_page(){
// Här länkar vi till CSS och JS.
$theme_directory = get_template_directory_uri();
wp_enqueue_style("wp-pahe", $theme_directory . "/app.scss");
wp_enqueue_script("app", $theme_directory . "/app.js");
}
add_action('wp_enqueue_scripts', 'wp_page');
?>