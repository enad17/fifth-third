<?php

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// when the WP admin initializes, add our custom boxes.
add_action("admin_init", "admin_init");
add_action('save_post', 'save_details');
 
function admin_init() {
  add_meta_box("featured_meta", "Feature Post", "featured_meta", "post", "side", "high");
}

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

function featured_meta(){
  global $post;
  $custom = get_post_custom($post->ID);
  $featured = $custom["featured"][0];
  ?>
  <label for="featured" style="font-weight: bold;background: yellow; padding: 5px 10px;" >Make this post featured:</label>
  <input name="featured" type="checkbox" <?php if ($featured) { echo "checked=\"checked\""; } ?>" value="featured" />
  <?php
}

// Function that saves our Custom Post type details
function save_details(){
  global $post;
 
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return $post_id; 
  }

  //For events, work, blog posts, or news
  if (isset($_POST["featured"])) {
    update_post_meta($post->ID, "featured", true);
  } else {
    update_post_meta($post->ID, "featured", false);
  }
 
}
?>