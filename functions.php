<?php

/**
 * WordPressの既成機能を有効させる
 *
 * @return void
 */
function toku_parknav_theme_support()
{
    /**
     * <title>タグを出力する
     */
    add_theme_support('title-tag');

    /**
     * アイキャッチ画像を使用可能にする
     */
    add_theme_support('post-thumbnails');

    /**
     * カスタムメニュー機能を使用可能にする
     */
    add_theme_support('menus');
}
add_action('after_setup_theme', 'toku_parknav_theme_support');

/**
 * ファイルを読み込む
 *
 *  01.リセットCSSと共通のCSS，JSを読み込む
 *  02.ページごとのCSSとJSを読み込む
 */

// -------------------------------
// 01.共通のCSSやJS，外部ファイルを読み込む
// -------------------------------
add_action('wp_enqueue_scripts', 'add_common_stylesheet_script');
function add_common_stylesheet_script()
{

    //font-awesomeを読み込む
    wp_enqueue_style('toku_parknav-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

    //共通のCSS（common.css）を読み込む
    // 01.『リセットCSS（reset.css）』
    wp_enqueue_style('toku_parknav-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), false);

    // 02.『common.css』
    wp_enqueue_style('toku_parknav-common-style', get_template_directory_uri() . '/assets/css/common.css', array(), false);

    // 03.『ヘッダーのCSS（header.css）』
    wp_enqueue_style('toku_parknav-header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

    // 04.『フッターのCSS（footer.css）』
    wp_enqueue_style('toku_parknav-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), false);

    // 共通のJavaScriptを読み込む
    // jQueryライブラリを読み込む
    wp_enqueue_script('jquery');

    // 00.『jQuery』
    // WordPress本体のjquery.jsを読み込まない
    // wp_deregister_script('jquery');

    //GoogleCDNから読み込む
    wp_enqueue_script(
        'jquery-min.js',
        '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    );

    // 01.『common.js』
    wp_enqueue_script('toku_parknav-common-script', get_template_directory_uri() . '/assets/js/common.js', '', '', true);

    // 02.『template-header.js』
    // wp_enqueue_script('toku_parknav-header-script', get_template_directory_uri() . '/assets/js/template_header.js', '', '', true);

    // 03.『template-footer.js』
    // wp_enqueue_script('toku_parknav-footer-script', get_template_directory_uri() . '/assets/js/template_footer.js', '', '', true);

    //slickCSSを読み込む
    //wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', false);

    //slick-themeCSSを読み込む
    //wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false);

    //slickのJSを読み込み
    //wp_enqueue_script('slick-min', get_template_directory_uri() . '/assets/slick/slick.min.js', '', '', true);
}

/**-----------------------------------------
/*
/*    02.ページごとに読み込むCSS・JSを変える
//
//      02-A:トップページ
//      02-B:このサイトについて⇒なし、その他の固定ページへ
//      02-C:農業体験⇒⇒公園検索
//      02:農家さん紹介⇒⇒なし
//      02-D:農ライフ記事⇒⇒モデルコース
//      02:野菜⇒⇒なし
//      02-E:療育
//      02-F:ゲーム
//      02-G:マイページ
//      02-H:その他の固定ページ
//      02-I:index.php
//      02-J:ニュース ←※(is_single)をカスタム投稿(is_singular)より前に書くと，
//                     カスタム投稿(is_singular)でファイルを読み込まなくなる。
なので，02-Iの後ろに移動させました。(2022.10.07大北)

//////////////////////////////////////////////////
//1122shibuya  農ライフに上書き、療育とゲームの固定ページ追加、元データは削除もコメントアウトもしていない。
//

/* -------------------------------------------------------------------------- */

add_action('wp_enqueue_scripts', 'add_individual_stylesheet_script');
function add_individual_stylesheet_script()
{

    //----------------------
    //  02-A:トップページ
    //----------------------
    if (is_home()) {

        //トップページのCSS（top.css）を読み込む
        wp_enqueue_style('toku_parknav-top', get_template_directory_uri() . '/assets/css/top.css', array(), false);

        //トップページのヘッダーのCSS（header.css）を読み込む
        // wp_enqueue_style('toku_parknav-template_top_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

        //slickCSSを読み込む
        //wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', false);

        //slick-themeCSSを読み込む
        //wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false);

        // トップページ用のJS（top.js）を読み込む
        //wp_enqueue_script('toku_parknav-top-script', get_template_directory_uri() . '/assets/js/top.js', '', '', true);

        // トップページ用のJS（template_top_footer.js）を読み込む
        // wp_enqueue_script('toku_parknav-template_top_footer', get_template_directory_uri() . '/assets/js/template_top_footer.js', '', '', true);
    }
    //---------------------
    //  02-B:このサイトについて⇒なし、その他の固定ページへ
    //----------------------
    //elseif (is_page('aboutsite')) {

    //このサイトについてのCSS（about.css）を読み込む
    //wp_enqueue_style('toku_parknav-about', get_template_directory_uri() . '/assets/css/about.css', array(), false);
    //}

    //----------------------
    //  02-C:農業体験⇒⇒公園検索
    //----------------------
    elseif (is_post_type_archive('park')) {

        // 公園の一覧ページのCSS（park_area.css）を読み込む
        wp_enqueue_style('toku_parknav-search-area-park', get_template_directory_uri() . '/assets/css/park_area.css', array(), false);
    } elseif (is_search()) {

        // 公園の詳細検索のCSS（park_search.css）を読み込む
        wp_enqueue_style('toku_parknav-search-park', get_template_directory_uri() . '/assets/css/park_search.css', array(), false);
    } elseif (is_tax("area", "east") || is_tax("area", "west") || is_tax("area", "south")) {

        // 公園の地域検索のCSSなどを書く
        wp_enqueue_style('toku_parknav-taxonomy-area', get_template_directory_uri() . '/assets/css/park_area.css', array(), false);
    } elseif (is_singular('park')) {

        // 公園の個別ページのCSS（park_info.css）を読み込む
        wp_enqueue_style('toku_parknav-single-park', get_template_directory_uri() . '/assets/css/park_info.css', array(), false);
    }
    //----------------------
    //  02:農家さん紹介⇒⇒なし
    //----------------------
    elseif (is_post_type_archive('farmer')) {

        // 農家さんの一覧ページのCSS（farmer.css）を読み込む
        wp_enqueue_style('toku_parknav-archive-farmer', get_template_directory_uri() . '/assets/css/farmer.css', array(), false);

        //farmer.jsを読み込み
        wp_enqueue_script('toku_parknav-farmer', get_template_directory_uri() . '/assets/js/farmer.js', '', '', true);
    } elseif (is_singular('farmer')) {

        // 農家さんの個別ページのCSS（farmer_content.css）を読み込む
        wp_enqueue_style('toku_parknav-single-farmer', get_template_directory_uri() . '/assets/css/farmer_content.css', array(), false);

        // 野菜の個別ページのJS（farmer_content.js）を読み込む
        wp_enqueue_script('toku_parknav-farmer_content-script', get_template_directory_uri() . '/assets/js/farmer_content.js', '', '', true);
    }
    //----------------------
    //  02-D:農ライフ記事⇒⇒モデルコース
    //----------------------
    elseif (is_post_type_archive('course')) {

        // モデルコースの一覧ページのCSS（course.css）を読み込む
        wp_enqueue_style('toku_parknav-archive-course', get_template_directory_uri() . '/assets/css/course.css', array(), false);
    } elseif (is_tax("purpose", "bbq") || is_tax("purpose", "daycamp") || is_tax("purpose", "picnic") || is_tax("purpose", "ballplay") || is_tax("purpose", "allday") || is_tax("purpose", "halfday") || is_tax("purpose", "watergame") || is_tax("purpose", "playground")) {

        // 公園の地域検索のCSSなどを書く
        wp_enqueue_style('toku_parknav-taxonomy-purpose', get_template_directory_uri() . '/assets/css/course.css', array(), false);
    } elseif (is_singular('course')) {

        // モデルコースの個別ページのCSS（course_info.css）を読み込む
        wp_enqueue_style('toku_parknav-single-course', get_template_directory_uri() . '/assets/css/course_info.css', array(), false);
    }
    //----------------------
    //  02:野菜⇒⇒なし
    //----------------------
    elseif (is_post_type_archive('vegetable')) {

        // 野菜の一覧ページのCSS（food.css）を読み込む
        wp_enqueue_style('toku_parknav-archive-vegetable', get_template_directory_uri() . '/assets/css/food.css', array(), false);
    } elseif (is_singular('vegetable')) {

        // 野菜の個別ページのCSS（food_info.css）を読み込む
        wp_enqueue_style('toku_parknav-archive-vegetable', get_template_directory_uri() . '/assets/css/food_info.css', array(), false);

        // 野菜の個別ページのJS（food_info.js）を読み込む
        wp_enqueue_script('toku_parknav-food_info-script', get_template_directory_uri() . '/assets/js/food_info.js', '', '', true);
    }

    //----------------------
    //  02-E:療育
    //----------------------
    else if (is_page('nursing')) {

        //療育のCSS（nursing.css）を読み込む
        wp_enqueue_style(
            'toku_parknav-nursing',
            get_template_directory_uri() . '/assets/css/nursing.css',
            array(),
            false
        );
    }

    //----------------------
    //  02-F:ゲームスタート
    //----------------------
    else if (is_page('gamestart')) {

        //ゲームのリセットCSS（destyle.css）を読み込む
        wp_enqueue_style('toku_parknav-gamedestyle', get_template_directory_uri() . '/assets/css/destyle.css', array(), false);

        //ゲームスタートのCSS（gamestart_style.css）を読み込む
        wp_enqueue_style('toku_parknav-game', get_template_directory_uri() . '/assets/css/gamestart_style.css', array(), false);
    }

    //----------------------
    //  02-F:ゲームプレイ
    //----------------------
    else if (is_page('gameplay')) {

        //ゲームのリセットCSS（destyle.css）を読み込む
        wp_enqueue_style('toku_parknav-gamedestyle', get_template_directory_uri() . '/assets/css/destyle.css', array(), false);

        //ゲームプレイのCSS（games_style.css）を読み込む
        wp_enqueue_style('toku_parknav-game', get_template_directory_uri() . '/assets/css/game_style.css', array(), false);
    }

    //----------------------
    //  02-G:マイページ
    //----------------------
    else if (is_page('mypage')) {

        //マイページのCSS（mypage.css）を読み込む
        wp_enqueue_style('toku_parknav-mypage', get_template_directory_uri() . '/assets/css/mypage.css', array(), false);
    }

    //----------------------
    //  02-H:その他の固定ページ
    //----------------------
    else if (is_page('about')) {

        //このサイトについてのCSS（about.css）を読み込む
        wp_enqueue_style('toku_parknav-about', get_template_directory_uri() . '/assets/css/about.css', array(), false);
    } else if (is_page('qa')) {

        //Q＆AページのCSS（question.css）を読み込む
        wp_enqueue_style('toku_parknav-qa', get_template_directory_uri() . '/assets/css/question.css', array(), false);
    } else if (is_page('contact')) {

        //お問合せページのCSS（contact.css）を読み込む
        wp_enqueue_style('toku_parknav-contact', get_template_directory_uri() . '/assets/css/contact.css', array(), false);
    } else if (is_page('privacy')) {

        //プライバシーポリシーのCSS（privacy.css）を読み込む
        wp_enqueue_style('toku_parknav-privacy', get_template_directory_uri() . '/assets/css/privacy.css', array(), false);
    } else if (is_page('teamminori')) {

        //サイト制作にあたってのCSS（minori.css）を読み込む
        wp_enqueue_style('toku_parknav-teamminori', get_template_directory_uri() . '/assets/css/minori.css', array(), false);
    }
    //----------------------
    //  02-I:index.php
    //----------------------
    elseif (is_category()) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('toku_parknav-index', get_template_directory_uri() . '/assets/css/index.css', array(), false);
    }

    //----------------------
    //  02-J:ニュース
    //----------------------
    elseif (is_page('newslist')) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('toku_parknav-news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
    } elseif (is_single()) {

        //ニュースの個別ページのCSS（news-content.css）を読み込む
        wp_enqueue_style('toku_parknav-news-content', get_template_directory_uri() . '/assets/css/news_content.css', array(), false);
    }
}

////////////////////////////////////////////////////////////////////////
//以下は とくぱーくナビのオリジナル、必要に応じて加工する

/** 検索結果表示のテンプレートの切り替え*/
add_action('template_include', 'my_search_template');
function my_search_template($template)
{
    $type = filter_input(INPUT_GET, 'search_type');
    $new_template = '';
    if ($type) {
        switch ($type) {
            case 'keywords':
                $new_template = STYLESHEETPATH . '/search-keywords.php';
                break;
            case 'park':
                $new_template = STYLESHEETPATH . '/search-park.php';
                break;
            default:
                $new_template = '';
        }
    }
    if ($new_template) {
        if (file_exists($new_template)) {
            return $new_template;
        }
    }
    return $template;
}


// コース一覧の記事の表示件数を６に設定
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_archive('course')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '6'); //表示件数を指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');










/////////////////////////////////////////////////////////////////////
//以下は農ライフオリジナル、必要に応じて加工する


/**
 * wp_body_openのタイミングで出力したいソースコードを挿入する
 */
add_action('wp_body_open', function () {
    // ここに挿入したいソースコードを記述
    // echo '<h2>こんにちは、テストです。</h2>';
});

// タイトルのセパレータを変更する
add_filter('document_title_separator', 'awa_nolife_document_title_separator');
function awa_nolife_document_title_separator($separator)
{
    $separator = '@'; //タイトルの区切り文字を「｜」にする
    return $separator;
}

// タイトルを変更する
add_filter('document_title_parts', 'awa_nolife_document_title_parts');
function awa_nolife_document_title_parts($title)
{
    if (is_home()) {
        // print_r($title);
        // unset($title['tagline']);   //タグラインを削除
        // $title['tagline'] = '最高最高！！！';
        // $title['title'] = "BISTRO CALMEは、カジュアルワインバーよりなビストロ";

    } else if (is_search()) {
        $title['title'] = "体験をさがす";
    }
    return $title;
}

add_filter('comment_form_default_fields', 'awa_nolife_comment_form_default_fields');
function awa_nolife_comment_form_default_fields($args)
{
    $args['url'] = '';
    $args['author'] = '';
    $args['email'] = '';
    return $args;
}

add_action('pre_get_posts', 'awa_nolife_pre_get_posts');
function awa_nolife_pre_get_posts($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return; //関数から抜け出す
    }
    // 管理画面とメインクエリのページ
    // 更にトップページの場合は
    if ($query->is_home()) {
        // $query->set('category_name', 'news');
        $query->set('posts_per_page', 3);
    }
}

add_action('wp', 'awa_nolife_wpautop');
function awa_nolife_wpautop()
{
    if (is_page('contact')) {
        remove_filter('the_content', 'wpautop');
    }
}

// 検索条件を体験（event）だけにする
function SearchFilter($query)
{
    // if ($query->is_search) {
    //     $query->set('post_type', 'event');
    // }
    return $query;
}
add_filter('pre_get_posts', 'SearchFilter');

// 農ライフ特集 抜粋を投稿可とする
add_post_type_support('special', 'excerpt');

// カテゴリー一覧の各項目の右に '>' を表示する
add_filter('wp_list_categories', 'span_before_link_list_categories');
function span_before_link_list_categories($list)
{
    // $list = str_replace('</a>', '<span  class="li-right">></span></a>', $list);
    return $list;
}


//////////////////////////////////////////////////////////