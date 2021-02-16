<?php
function add_file() {
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
    wp_enqueue_script('animation_js', get_template_directory_uri().'/js/scroll-animation.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'add_file');

?>