<?php

function my_custom_init() {
    register_post_type( 'news', array(
        'label' => '新着情報',
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        'menu_position' => 5,
        'has_archive' => true
    ));
}

add_action( 'init', 'my_custom_init' );

?>