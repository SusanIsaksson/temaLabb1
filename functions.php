<?php 
add_theme_support('post-thumbnails');
add_theme_support('menus');

add_action('after_setup_theme', 'footer_meny');

function footer_meny() {
    register_nav_menu('menyid', 'Meny i footer');
}
//koppla sedan till placering 'theme_location' i tex footer.php 

add_action('after_sertup_theme', 'sidebar_meny');

function sidebar_meny() {
    register_nav_menu('sidebarid', 'Meny i sidebar');
}

add_action('wp_enqueue_script', 'styleCss');

function styleCss() {
    wp_enqueue_style('temastil', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('temastil', get_template_directory_uri() .'/bootstrap.css');
    wp_enqueue_style('temastil', get_template_directory_uri() .'/font-awesome.css');


}


?>
