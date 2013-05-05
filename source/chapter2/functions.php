<?php

// custom header
add_custom_image_header('', '__return_false');

define('NO_HEADER_TEXT', true);
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', '%s/images/top/main_image.png');
define('HEADER_IMAGE_WIDTH', 950);
define('HEADER_IMAGE_HEIGHT', 295); 


// custom menu
register_nav_menus(
  array(
    'place_global' => 'global',
    'place_utility' => 'utility',
  )   
);


// 특성 이미지를 이용할 수 있도록 합니다.
add_theme_support('post-thumbnails');

// 특성 이미지 크기 설정
set_post_thumbnail_size(90, 90 ,true);

// 사이드바용 이미지 크기 설정
add_image_size('small_thumbnail', 61, 61, true);

// 아카이브용 이미지 크기 설정
add_image_size('large_thumbnail', 120, 120, true);

// 하위 페이지 헤더용 이미지 크기 설정
add_image_size('category_image', 658, 113, true);

// 몰 이미지용 이미지 크기 설정
add_image_size('pickup_thumbnail', 302, 123, true);


// Child Pages Shortcode의 CSS의 URL을 갱신합니다.
function change_child_pages_shortcode_css() {
  $url = get_template_directory_uri() . '/css/child-pages-shortcode/style.css';
  return $url;
}
add_filter('child-pages-shortcode-stylesheet', 'change_child_pages_shortcode_css');
