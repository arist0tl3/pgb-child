<?php

/**
 * pgb-child functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_styles' );
function pgb_child_enqueue_styles() {
    wp_enqueue_style( 'pgb', get_template_directory_uri() . '/style.css' );
<<<<<<< HEAD
}

add_filter( 'home_url', 'swap_url' );

function swap_url( $url )
{
    return "http://ninthlink.com";
}
=======
}
>>>>>>> 710107380f68896f9a91dca60cc91fc92fa32dc0
