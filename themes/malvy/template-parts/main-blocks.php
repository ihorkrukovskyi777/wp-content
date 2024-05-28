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
        'name' => 'contact-section',
        'title' => __('Contact Section'),
        'render_template' => '/template-parts/sections/contact-section/contact-section.php',
        'icon' => 'editor-paste-text',
    ));
    acf_register_block_type(array(
        'name' => 'accordion-section',
        'title' => __('Accordion Section'),
        'render_template' => '/template-parts/sections/accordion-section/accordion-section.php',
        'icon' => 'editor-paste-text',
    ));
    acf_register_block_type(array(
        'name' => 'posts-section',
        'title' => __('Posts Section'),
        'render_template' => '/template-parts/sections/posts-section/posts-section.php',
        'icon' => 'editor-paste-text',
    ));

}