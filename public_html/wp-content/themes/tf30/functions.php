<?php

// テーマのセットアップ
function my_setup()
{
  add_theme_support('posy-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', 
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

// CSSとJavaScriptの読み込み
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/TF-30/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/TF-30/js/script.js', array('jquery'), '1.0.0', true);
  if(is_single()){
    wp_enqueue_script('sns', get_template_directory_uri() . '/TF-30/js/sns.js', array('jquery'), '1.0.0', true);
  }
  if(is_category() || is_date() || is_tag()){
    wp_enqueue_script('horizontal', get_template_directory_uri() . '/TF-30/js/horizontal.js', array('jquery'), '1.0.0', true);
  }
}

add_action('wp_enqueue_scripts', 'my_script_init');

// メニューを編集できるようにする
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'local'  => 'フッターメニュー',
      'drawer' => 'ドロワーメニュー',
    )
    );
}

add_action('init', 'my_menu_init');

// アーカイブタイトルから「カテゴリー」という文字列を削除
function my_archive_title($title)
{
  if(is_category()){
    $title = single_cat_title('', false);
  }elseif(is_tag()){
    $title = single_tag_title('', false);
  }elseif(is_post_type_archive()){
    $title = post_type_archive_title('', false);
  }elseif(is_tax()){
    $title = single_term_title('', false);
  }elseif(is_author()){
    $title = get_the_author();
  }elseif(is_date()){
    $title = '';
    if(get_query_var('year')){
      $title .= get_query_var('year') . '年';
    }
    if(get_query_var('monthnum')){
      $title .= get_query_var('monthnum') . '月';
    }
    if(get_query_var('day')){
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};

add_filter('get_the_archive_title', 'my_archive_title');

// カテゴリー名の表示を独自関数化
function my_the_post_category($anchor = true, $id = 0)
{
  global $post;
  if(0 === $id){
    $id = $post->ID;
  }

  $this_categories = get_the_category($id);
  if($this_categories[0]){
    if($anchor){
      echo  '<a href="' . esc_url(get_category_link( $this_categories[0]->term_id )) . '">' . esc_html($this_categories[0]->cat_name) . '</a>';
    }else{
      echo esc_html($this_categories[0]->cat_name);
    }
  }
}

// タグの表示を独自関数化
function my_get_post_tags($id = 0)
{
  global $post;
  if(0 === $id){
    $id = $post->ID;
  }
  $tags = get_the_tags($id);
  if($tags){
    foreach($tags as $tag){
      echo '<div class="entry-tag-item"><a href="' . esc_url(get_tag_link($tag -> term_id)) . '">' . esc_html($tag -> name) . '</a></div><!-- /entry-tag-item -->';
    }
  }
}

// ウィジェットの有効化
function my_widget_init()
{
  register_sidebar(
    array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<div class="widget_title">',
      'after_title' => '</div>',
    )
  );
}

add_action('widgets_init', 'my_widget_init');

// アクセス数を取得。
function get_post_views($id = 0)
{
  global $post;
  if(0 === $id){
    $id = $post->ID;
  }
  $count_key = 'view_counter';
  $count = get_post_meta($id, $count_key, true);

  if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '0');
  }
  return $count;
}

// アクセスカウンターの設置
function set_post_views()
{
  global $post;
  $count = 0;
  $count_key = 'view_counter';

  if($post){
    $id = $post->ID;
    $count = get_post_meta($id, $count_key, true);
  }

  //初回アクセス時
  if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '1');
  }
  //2回目以降のアクセス時
  elseif ($count > 0) {
    if(!is_user_logged_in()){ // アクセスしたのが管理者でなければ
      $count++;
      update_post_meta($id, $count_key, $count);
    }
  }
  //404や該当記事の検索結果が0件の時
  // 何もしない
}

add_action('template_redirect', 
'set_post_views', 10);

// 検索結果から固定ページを除外する
function my_posts_search($search, $wp_query)
{
  //検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
  if($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()){
    // 検索結果を投稿タイプに絞る
    $search .= "AND post_type = 'post' ";
    return $search;
  }
  return $search;
}

add_filter('posts_search', 'my_posts_search', 10, 2);

// ボタンのショートコード
function my_shortcode( $atts, $content = '')
{
  return '<div class="entry-btn"><a class="btn" href="' . $atts['link'] . '">' . $content . '</a></div>';
}

add_shortcode('btn', 'my_shortcode');

// 抜粋の文字数を50にする
function my_change_excerpt_length( $length ) {
  $length = 50;
  if ( is_category() || is_tax() ) {
    $length = 100;
  } 
  return $length; 
}
add_filter( 'excerpt_length', 'my_change_excerpt_length', 999 );

// 抜粋があふれたときのアイコンを...にする
function my_change_excerpt_more( $more ) {
  return ' ...';
}
add_filter( 'excerpt_more', 'my_change_excerpt_more' );
