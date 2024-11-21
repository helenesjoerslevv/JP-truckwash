<?php 
// Registrer CSS-stylesheets
function plp_register_stylesheet() {
    wp_enqueue_style("main-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Squada+One&display=swap', array(), null);
}
add_action("wp_enqueue_scripts", "plp_register_stylesheet");

// Deaktiver Gutenberg editoren for sider og indlæg
function plp_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "plp_disable_gutenberg");

// Fjern bootstrap og jQuery scripts, samt custom.js
function blog_theme_enqueue_assets() {
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'blog_theme_enqueue_assets');

function plp_register_strings() {
    pll_register_string("forespørgsel", "SEND OS EN FORESPØRGSEL");
    pll_register_string("ydelser", "Se vores ydelser");
    pll_register_string("Adresse", "Adresse:");
    pll_register_string("Telefon", "Telefon:");
    pll_register_string("E-mail", "E-mail:");
    pll_register_string("CVR", "CVR NR.:");
    pll_register_string("Åbningstider", "Åbningstider: Mandag - Fredag kl. 06.30 - 17.00");
}
add_action("init", "plp_register_strings");
