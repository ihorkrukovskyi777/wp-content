<?php 

if(function_exists('acf_register_block_types')){
    add_action('acf/init', 'acf_register_block_types');
}

function acf_register_block_types(){
    acf_register_block_type(array(
        'name' => 'block-7fridays',
        'title' => __('Home Banner'),
        'render_template' => '/template-parts/sections/home-banner/home-banner.php',
        'enqueue_style'   => get_stylesheet_directory_uri().'/template-parts/sections/home-banner/home-banner.css',
        'enqueue_script' => get_template_directory_uri() . '/template-parts/sections/home-banner/home-banner.js',
        'icon' => 'editor-paste-text'
    )); 

}