<?php
function mysite_script() {
  wp_enqueue_style( 'style', get_template_directory_uri().'./css/style.css', array(), '1.0.0');
  wp_enqueue_script( 'scriptjs', get_template_directory_uri().'./js/script.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts','mysite_script');