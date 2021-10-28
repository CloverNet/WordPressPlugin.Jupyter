<?php
   /*
   Plugin Name: Jupyter
   Description: 
   Version: 1.0
   Author: Clover
   Author URI: https://github.com/CloverNet
   License: MIT
   */

function jupyter_enqueue_style() {
	wp_enqueue_style( 'Jupyter', plugins_url( '/css/jupyter.css', __FILE__ ));
}

function jupyter_handler($atts) {

    //process plugin
    extract(shortcode_atts(array(
        'url' => "",
    ), $atts));

    $frame = '<iframe 
        class="jupyter_frame"
        frameborder="no"  
        scrolling="no" 
    src="'.$url.'" ></iframe>';

    //send back text to calling function
    return $frame;

}

add_action( 'wp_enqueue_scripts', 'jupyter_enqueue_style' );
add_shortcode("jupyter", "jupyter_handler");
