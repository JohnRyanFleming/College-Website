<?php

function university_files() {
    wp_enqueue_script('main-unviersity-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);                                                            //loads script for slideshow behavior at footer, third arguement determines dependancies (NULL given when no dependants), fourth arguement is version number, final arguement is boolean to determine if it loads at the head or right before the closing tag. True is best for performance. 
    wp_enqueue_style('custom-google font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');                //loads access to custom fonts
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');                                                               //loads access font awesome icons
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));                                                                                //loads formatting from style-index.css
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));                                                                                     //loads formatting from index.css
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');            //Necessary to add new feature function
}

add_action('after_setup_theme', 'university_features');

