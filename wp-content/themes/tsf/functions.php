<?php
// テーマのcss・jsファイルを読み込む
function enqueue_scripts()
{
    // css
    wp_enqueue_style("style-theme2", get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style("style-theme3", get_stylesheet_directory_uri().'/css/responsive.css');
    // js
    // wp_enqueue_script("script", get_stylesheet_directory_uri().'/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');