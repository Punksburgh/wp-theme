<?php
  add_action('wp_enqueue_scripts', 'punksburgh_styles');

  function punksburgh_styles() {
    wp_enqueue_style('punksburgh', get_stylesheet_directory_uri() . '/style.css');
  };

  function punksburgh_rss($content) {
    $content = 'Punksburgh: '.$content;
	return $content;
  }

  add_filter('the_title_rss', 'punksburgh_rss');
?>
