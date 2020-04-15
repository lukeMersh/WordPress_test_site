
<?php
function gymfitness_menus(){
    //wordpress function
    register_nav_menus(array(
        'main-menu'=> 'Main Menu'
    ));
}
//hook
add_action('init', 'gymfitness_menus');

// load Stylesheet and Javascript files
function gymfitness_scripts(){


// normalize.css
wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normailize.css' , array(), '8.0.1' );
}
add_action( 'wp_enqueue_scripts', 'gymfitness_scripts' );

//google fonts
wp_enqueue_script( 'googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway:wght@700;900&family=Staatliches&display=swap', array(), '1.0.0' );

// slicknav
wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10' );



//main stylesheet
wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'normalize'), '1.0.0');

wp_enqueue_script( 'jquery' );

//Load JS files for slicknav
wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery' ), '1.0.10', true);

wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
