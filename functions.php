<?php
function shakuisitive_travel_styles_and_scripts(){
wp_enqueue_style("main-styles", get_template_directory_uri() . "/styles/main.css");
wp_enqueue_script("main-script", get_template_directory_uri() . "/scripts/main.js", "", "", true);
}

add_action("wp_enqueue_scripts", "shakuisitive_travel_styles_and_scripts");