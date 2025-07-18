<?php
function shakuisitive_travel_styles_and_scripts(){
// stylesheets
wp_enqueue_style("main-styles", get_template_directory_uri() . "/styles/main.css");
wp_enqueue_style("inter_font", "https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap");
wp_enqueue_style("font_awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css");

// scripts
wp_enqueue_script("main-script", get_template_directory_uri() . "/scripts/main.js", "", "", true);
}

add_action("wp_enqueue_scripts", "shakuisitive_travel_styles_and_scripts");