<?php 
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

add_action('after_setup_theme', 'footer_meny');

function footer_meny() {
    register_nav_menu('menyid', 'Meny i footer');
}
//koppla sedan till placering 'theme_location' i tex footer.php 

add_action('after_setup_theme', 'sidebar_meny');

function sidebar_meny() {
    register_nav_menu('sidebarid', 'Meny i sidebar');
}

register_sidebar(
    [
        'name' => 'Kort om oss',
        'description' => 'Kort beskrivning av oss',
        'id' => 'omoss',
        'before_widget' => ''   
    ]
    );

register_sidebar(
    [
        'name' => 'Kontaktuppgifter',
        'description' => 'Kontaktuppgifter: företag, adress, tel och epost',
        'id' => 'kontaktInfo',
        'before_widget' => ''
            
    ]
    );

register_sidebar(
    [
        'name' => 'Kontaktformulär',
        'description' => 'Formulär med namn, epost, meddelande och skicka-knapp',
        'id' => 'kontaktForm',
        'before_widget' => ''
    ]
    );

add_action('wp_enqueue_scripts', 'styleCss');

function styleCss() {

    wp_enqueue_style('temastil', get_template_directory_uri() .'/css/style.css');
    wp_enqueue_style('temastil2', get_template_directory_uri() .'/css/bootstrap.css');
    wp_enqueue_style('temastil3', get_template_directory_uri() .'/css/font-awesome.css');

    wp_enqueue_style('temascript', get_template_directory_uri() . '/js/script.js', [], true, false);
    wp_enqueue_style('temascript2', get_template_directory_uri() .'/js/jquery.js', [], true, false);
   

}




?>
