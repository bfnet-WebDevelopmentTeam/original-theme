<?php

// add_theme_support('title-tag');
// function my_title_separator($separator) {
//   $separator = '|';
//   return $separator;
// }
// add_filter('document_title_separator', 'my_title_separator');

add_action('init', function () {
  add_theme_support('title-tag');
});

function theme_enqueue_styles()
{
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ'
  )
);

function my_body_class($classes)
{
  if (is_page()) {
    $page = get_post();
    $classes[] = $page->post_name;
  }
  return $classes;
}
add_filter('body_class', 'my_body_class');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// カスタム投稿タイプ登録
function create_post_type()
{
  register_post_type(
    'news',
    array(
      'label' => 'お知らせ',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'support' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields',
        'revisions',
        'excerpt',
      )
    )
  );
  // register_post_type(
  //   'works',
  //   array(
  //     'label' => '実績',
  //     'public' => true,
  //     'has_archive' => true,
  //     'menu_position' => 5,
  //     'show_in_rest' => true,
  //     'support' => array(
  //       'title',
  //       'editor',
  //       'thumbnail',
  //       'custom-fields',
  //       'revisions',
  //       'excerpt',
  //     )
  //   )
  // );
}

add_action('init', 'create_post_type');

/** 抜粋の文字数を変更する */
function new_excerpt_mblength($length)
{
  return 40;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
/** 文末文字の変更 */
function new_excerpt_more($post)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// アーカイブタイトルのフィルター
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) { // カテゴリーページ
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグページ
    $title = single_tag_title('', false);
  } elseif (is_tax()) { // タクソノミーページ
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) { //カスタム投稿タイプアーカイブページ
    $title = post_type_archive_title('', false);
  }
  return $title;
});

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');
add_image_size('content', 1280, 853, true);

// 子ページを取得
function get_child_pages($number = -1, $specific_id = null)
{
  if (isset($specific_id)) :
    $parent_id = $specific_id;
  else :
    $parent_id = get_the_ID();
  endif;
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new Wp_Query($args);
  return $child_pages;
}
