<?php
function load_style_script(){
    wp_enqueue_style('style-allan', 'https://fonts.googleapis.com/css?family=Allan');

    wp_enqueue_style('style3', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style4', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/bootstrap.min.js');
    //[if lt IE 9]
    wp_enqueue_script('script2', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
    wp_enqueue_script('script3', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
    //[endif]
    wp_enqueue_script('script4', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');

function add_widgets_areas() {
    register_sidebar( array(
        'name'          => 'Top widget area',
        'id'            => 'top_widget_area_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_areas' );

function add_widgets_areas_bot() {
    register_sidebar( array(
        'name'          => 'Bottom widget area',
        'id'            => 'bottom_widget_area_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_areas_bot' );

function add_widgets_areas_sb1() {
    register_sidebar( array(
        'name'          => 'Sidebar widget area',
        'id'            => 'sidebar_widget_area_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_areas_sb1' );

function add_widgets_areas_sbt() {
    register_sidebar( array(
        'name'          => 'Sidebar widget area 2',
        'id'            => 'sidebar_widget_area_2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_areas_sbt' );



function register_my_menus() {
    register_nav_menus(
        array(
            'header_navigation' => __( 'Header Navigation' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function default_header_nav() { // HTML markup for a default message in menu location
    echo "<ul class='nav navbar-nav'>
		<li>Create the Header Navigation</li>
	</ul>";
}

function default_expanded_footer() {
    echo "<ul class='nav navbar-nav'>
		<li>Create the Expanded Footer</li>
	</ul>";
}