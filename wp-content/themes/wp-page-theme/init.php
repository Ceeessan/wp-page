<?php
function wp_page(){
$theme_directory = get_template_directory_uri();
wp_enqueue_style("app", $theme_directory . "/app.css");
wp_enqueue_script("app", $theme_directory . "/app.js");
}
add_action('wp_enqueue_scripts', 'wp_page');
?>