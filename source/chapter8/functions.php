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


// 위젯
register_sidebar(array(
  'name' => '사이드바 위젯 영역(상)',
  'id' => 'primary-widget-area',
  'description' => '사이드바 상단의 위젯 영역',
  'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
));

register_sidebar(array(
  'name' => '사이드바 위젯 영역(하)',
  'id' => 'secondary-widget-area',
  'description' => '사이드바 하단의 위젯 영역',
  'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
));


// 검색어가 입력되지 않거나 0인 경우에 search.php을 템플릿으로 사용
function search_template_redirect() {
  global $wp_query;
  $wp_query->is_search = true;
  $wp_query->is_home = false;
  if (file_exists(TEMPLATEPATH . '/search.php')) { 
    include(TEMPLATEPATH . '/search.php');
  }
  exit;
}

if (isset($_GET['s']) && $_GET['s'] == false) {
  add_action('template_redirect', 'search_template_redirect');
}


// 요약문이 자동적으로 생성되는 경우 마지막에 부여되는 문자열을 변경합니다.
function cms_excerpt_more() {
  return ' ...';
}
add_filter('excerpt_more', 'cms_excerpt_more');


// 요약문이 자동적으로 생성되는 경우 기본 문자수를 변경합니다.
function cms_excerpt_length() {
  return 120;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');


// '페이지'에서 요약문 입력하기.
add_post_type_support('page', 'excerpt');


// short 문자표시 요약(자동생성인 경우) 표시 템플릿 태그의 정의
function the_short_excerpt() {
  add_filter('excerpt_mblength', 'short_excerpt_length', 11);
  the_excerpt();
  remove_filter('excerpt_mblength', 'short_excerpt_length', 11);
}

function short_excerpt_length() {
  return 10; 
}

// pickup 문자표시 요약 표시 템플릿 태그의 정의
function the_pickup_excerpt() {
  add_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  add_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
  the_excerpt();
  remove_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
  remove_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
}

// 톱페이지 픽업(Mall 소개) 부분의 요약문을 잘라냅니다.
function get_pickup_excerpt($excerpt) {
  if ($excerpt) {
    $excerpt = strip_tags($excerpt);
    $excerpt_len = mb_strlen($excerpt);
    if ($excerpt_len > 50) {
      $excerpt = mb_substr($excerpt, 0, 50) . ' ...';
    }    
  }    
  return $excerpt;
}

function pickup_excerpt_length() {
  return 50;
}


// category 이미지 표시
// 1.특성 이미지가 설정되어 있는 경우 특성 이미지 사용
// 2.특성 이미지가 설정되어 있지 않은 페이지에서 최상위 페이지에 특성 이미지가 설정되어 있는 경우 그 특성 이미지 사용.
// 3.그 이외의 경우는 기본 이미지 표시
function the_category_image() {
  global $post;
  $image = ""; 

  if (is_singular() && has_post_thumbnail()) {
    $image = get_the_post_thumbnail(null, 'category_image', array('id' => 'category_image'));
  } elseif (is_page() && has_post_thumbnail(array_pop(get_post_ancestors($post)))) {
    $image = get_the_post_thumbnail(array_pop(get_post_ancestors($post)), 'category_image', array('id' => 'category_image'));
  }

  if ($image == "") {
    $src = get_template_directory_uri() . '/images/category/default.jpg';
    $image = '<img src="' . $src . '" class="attachment-category_image wp-post-image" alt="" id="category_image" />';
  }   
  echo $image;
}


// 칼럼 카테고리만 댓글을 달 수 있습니다.
function comments_allow_only_column($open, $post_id) {
  if (!in_category('column')) { 
    $open = false;
  }     
  return $open;
}
add_filter('comments_open', 'comments_allow_only_column', 10, 2);


// OGP을 위한 각종 설정
// 특성 이미지의 URL 취득
function get_thumbnail_image_url() {
  $img_id = get_post_thumbnail_id();
  $img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
  return $img_url[0];
}


// ogp용 description 취득
function get_ogp_excerpted_content($content) {
  $content = strip_tags($content);
  $content = mb_substr($content, 0, 120, 'UTF-8');
  $content = preg_replace('/\s\s+/', '', $content);
  $content = preg_replace('/[\r\n]/', '', $content);
  $content = esc_attr($content) . ' ...';
  return $content;
}


// Mall 개발실적 페이지의 shortcode
function posts_shortcode ($args) {
  $template = dirname(__FILE__) . '/posts.php';
  if (!file_exists($template)) {
    return;
  }
  $def = array(
    'post_type' => 'shops',
    'taxonomy' => 'mall',
    'term' => '',
    'orderby' => 'asc',
    'posts_per_page' => -1,
  );
  $args = shortcode_atts($def, $args);
  $posts = get_posts($args);
  ob_start();
  foreach ($posts as $post) { 
    $post_custom = get_post_custom($post->ID);
    include($template);
  }   
  $output = ob_get_clean();
  return $output;
}
add_shortcode('posts', 'posts_shortcode');