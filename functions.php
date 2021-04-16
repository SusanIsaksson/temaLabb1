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
        'name' => 'Logo namn',
        'description' => 'företagets namn',
        'id' => 'logo',
        'before_widget' => ''
    ]
);

register_sidebar(
    [
        'name' => 'Meny Blogg Sidor',
        'description' => 'meny med sidor',
        'id' => 'menysidor',
        'before_widget' => ''
    ]
);

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
        'description' => 'Kontaktinfo om företaget',
        'id' => 'kontaktinfo',
        'before_widget' => ' ' 
    ]
    );

register_sidebar(
        [
            'name' => 'Social Media',
            'description' => 'Socialmedia inkl länk',
            'id' => 'socialmedia',
            'before_widget' => ' ' 
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

//sidbar/meny för undersida
register_sidebar(
    [
        'name' => 'Meny Undersida',
        'description' => 'meny för undersida',
        'id' => 'menyundersida',
        'before_widget' => ' ',
        'after_widget' => ' '
    ]
);

//sidbar/meny för undersida-2
register_sidebar(
    [
        'name' => 'Meny Undersida-2',
        'description' => 'meny för undersida-2',
        'id' => 'menyundersida2',
        'before_widget' => '<li> ',
    ]
);


add_action('wp_enqueue_scripts', 'styleCss');

function styleCss() {

    wp_enqueue_style('stylestyle', get_template_directory_uri() .'/css/style.css');
    wp_enqueue_style('stylebootstrap', get_template_directory_uri() .'/css/bootstrap.css');
    wp_enqueue_style('stylefontawesome', get_template_directory_uri() .'/css/font-awesome.css');

    wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/script.js', [], true, false);
    wp_enqueue_script('scriptjquery', get_template_directory_uri() .'/js/jquery.js', [], true, false);
   

}




?>
