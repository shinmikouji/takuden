<?php
function enqueue_head()
{
  wp_enqueue_style('style_name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
  wp_enqueue_script('script_jquery', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_head');

function get_first_image_or_default() {
  global $post;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if (isset($matches[1][0])) {
      $first_img = $matches[1][0];
  } else {
      // デフォルトの画像を設定
      $first_img = get_template_directory_uri() . '/img/business/business-02.jpg';
  }
  return $first_img;
}