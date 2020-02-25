<?php

function esliceu_files(){
    wp_enqueue_style('esliceu_main_styles',get_stylesheet_uri(),NULL,microtime());
    wp_enqueue_style('font-awesom','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_script('mai-esliceu-js',get_theme_file_uri(('/js/scripts-bundled.js')),NULL,'1.0',true);
}

add_action('wp_enqueue_scripts','esliceu_files');

add_action('after_setup_theme','esliceu_features');

function esliceu_features(){
    register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('footerLocation1','Footer Location One');
    register_nav_menu('footerLocation2','Footer Location Two');
    add_theme_support('title-tag');
}


add_action( 'pre_get_posts', 'esliceu_adjust_queries' );
function esliceu_adjust_queries($query){
      if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
  

}


?>