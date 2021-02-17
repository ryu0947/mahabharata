<?php
function add_file() {
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
    wp_enqueue_script('scroll-animation', get_template_directory_uri().'/js/scroll-animation.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_file');

remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする
?>