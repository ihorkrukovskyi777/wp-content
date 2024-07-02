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

    acf_register_block_type(array(
        'name' => 'framed_text_and_image',
        'title' => __('Framed Text and Image'),
        'render_template' => '/template-parts/sections/framed_text_and_image/framed_text_and_image.php',
        'icon' => 'editor-paste-text'
    ));

    acf_register_block_type(array(
        'name' => 'text_cards_block',
        'title' => __('Text Cards Block'),
        'render_template' => '/template-parts/sections/text_cards_block/text_cards_block.php',
        'icon' => 'editor-paste-text'
    )); 
}