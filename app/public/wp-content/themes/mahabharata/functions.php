<?php
function add_file() {
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
    wp_enqueue_script('scroll-animation', get_template_directory_uri().'/js/scroll-animation.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_file');

// pタグの自動挿入を無効化する
remove_filter('the_content', 'wpautop'); 
remove_filter('the_excerpt', 'wpautop');
?>