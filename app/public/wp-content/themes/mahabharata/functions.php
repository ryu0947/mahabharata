<?php
function add_file() {
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
    wp_enqueue_script('scroll-animation', get_template_directory_uri().'/js/scroll-animation.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_file');

// pタグの自動挿入を無効化する
remove_filter('the_content', 'wpautop'); 
remove_filter('the_excerpt', 'wpautop');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// 画像サイズ指定
add_image_size('news', 360, 201, true);

add_image_size('article', 1024, 731, true);

function add_confirm_page() {
  echo <<<EOS
    <script>
      document.addEventListener('wpcf7mailsent', () => {
        location = 'http://localhost:10004/confirm/';
      }, false );
    </script>
  EOS;
}

add_action('wp_footer', 'add_confirm_page');
?>