<?php

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

function shorten_excerpt($text, $num_chars)
{
    if (strlen($text) > $num_chars) {
        $subtext = substr($text, 0, $num_chars);
        $space = strrpos($subtext, " ");
        $finaltext = substr($subtext, 0, $space)." [...]";
        return $finaltext;
    } else {
        return $text;    
    }
}

?>