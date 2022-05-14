<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define('KEYTECHDIR' , get_stylesheet_directory());
define('KEYTECHURL' , get_stylesheet_directory_uri());

$theme_data = wp_get_theme() ;
//var_dump($theme_data);


define('KEYTECHNAME' , $theme_data->get('Name'));
define('KEYTECHDOMAIN' ,  $theme_data->get('TextDomain'));

//var_dump(KEYTECHDOMAIN);

/* AKR custom schema types */
if(!function_exists('akr_schema_type')){
    function akr_schema_type() {
        $schema = 'https://schema.org/';
        if ( is_single() ) {
        $type = "Article";
        } elseif ( is_author() ) {
        $type = 'ProfilePage';
        } elseif ( is_search() ) {
        $type = 'SearchResultsPage';
        } else {
        $type = 'WebPage';
        }
        echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
        }
}

require_once KEYTECHDIR.'/inc/clskeeneye.php';
new clskeeneye();




