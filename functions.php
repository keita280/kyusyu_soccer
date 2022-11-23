<?php
/**
 * テーマのセットアップ
 **/
function my_setup() {
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init() {
  // reset_css
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), filemtime(get_theme_file_path('css/reset.css')), 'all');
  // fontawsome
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  // original_css
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('css/style.css')), 'all');
  // js
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* animate.css登録
---------------------------------------------------------- */
function my_styles() {
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
}
add_action( 'wp_enqueue_scripts', 'my_styles' );


/* wow.js登録
---------------------------------------------------------- */
function my_scripts() {
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js'
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

/* body直前にいれる　*/
function my_js_function() {
  echo <<< EOM
  
  <script>
      new WOW().init();
  </script>
  
  EOM;
  }
  add_action( 'wp_footer', 'my_js_function' );
  



/**
 * メニューの登録
 */
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');




/**
 * パンくずリストに「新着情報」を追加
 */

// function bcn_insert_test($breadcrumb_trail) {
//   if ( get_post_type() === 'post' ) {
//   $breadcrumb = new bcn_breadcrumb();
//   $breadcrumb->set_title('新着情報');
//   $breadcrumb->set_url(home_url('category/training/'));
//   $breadcrumb->set_linked(true);
//   array_splice($breadcrumb_trail->breadcrumbs, 1, 0, [$breadcrumb]);
//   return $breadcrumb_trail;
// }
// }
// add_action('bcn_after_fill', 'bcn_insert_test');

/**
 * パンくずリストを３階層のみ表示
 */
add_action('bcn_after_fill', 'bc_limit');
function bc_limit ($trail) {
  $max = count($trail->breadcrumbs);
  for ($i = 2; $i < $max - 1; $i++) {
    unset($trail -> trail[$i]);
  }
}


// ContactForm7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 




// 検索フォームの初期設定では、投稿ページ、固定ページの両方が検索対象となります。
// 今回は、検索対象を投稿ページだけにするためのカスタマイズを行います。
function search_filter($query) {
  if ($query -> is_search) {
    $query -> set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');