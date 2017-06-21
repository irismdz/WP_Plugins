<?php
/*
Plugin Name: imdz-custom-background-color
Plugin URI: http://fwdisfwd.com/
Description: A plugin demonstration that changes the background color of a wordpress site
Version: 1.0
Author: Iris Melendez
Author URI: http://fwdisfwd.com
License: GPL
*/ 

function imdz_set_custom_background($new_colour)
{
    $old_colour = get_theme_mod('background_color', get_theme_support('custom-background', 'default-color'));

    // Nothing to do here
    if ( $old_colour == $new_colour )
        return;

    return set_theme_mod('background_color', $new_colour);
}

function imdz_update_custom_background()
{
    // update background to dark pink
    imdz_set_custom_background('e000b0');
}

add_action('init', 'imdz_update_custom_background');
?>