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

    // 02.『slickのcss』
    // wp_enqueue_style('toku_parknav-single-park', get_template_directory_uri() . '/assets/css/slick.css', array(), false);

    // wp_enqueue_style('toku_parknav-single-park', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), false);

    // 03.『common.css』
    wp_enqueue_style('toku_parknav-common-style', get_template_directory_uri() . '/assets/css/common.css', array(), false);

    // 04.『ヘッダーのCSS（header.css）』
    wp_enqueue_style('toku_parknav-header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

    // 05.『フッターのCSS（footer.css）』
    wp_enqueue_style('toku_parknav-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), false);

    // 06.『公園の詳細検索のCSS（park_search.css）を読み込む』
    wp_enqueue_style('toku_parknav-park-search', get_template_directory_uri() . '/assets/css/park_search.css', array(), false);

    // 07.『キーワード検索のCSS（search-keywords.css）を読み込む』
    wp_enqueue_style('toku_parknav-search-keywords', get_template_directory_uri() . '/assets/css/search-keywords.css', array(), false);

    // 共通のJavaScriptを読み込む
    // jQueryライブラリを読み込む
    // wp_enqueue_script('jquery');

    // 00.『jQuery』
    // WordPress本体のjquery.jsを読み込まない
    //wp_deregister_script('jquery');

    // //GoogleCDNから読み込む
    wp_enqueue_script(
        'jquery-min.js',
        '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    );

    // 01.『common.js』
    wp_enqueue_script('toku_parknav-common-script', get_template_directory_uri() . '/assets/js/common.js', '', '', true);

    // 02.『スライダー部分のslick』
    // wp_enqueue_script(
    //     'toku_parknav-park',
    //     get_template_directory_uri() . '/assets/js/park_slider.js',
    //     array(),
    //     false
    // );
}

/**-----------------------------------------
/*
/*    02.ページごとに読み込むCSS・JSを変える
//
//      02-A:トップページ
//      02-B:公園検索
//      02-C:モデルコース
//      02-D:療育
//      02-E:ゲームスタート
//      02-F:ゲームプレイ
//      02-G:お気に入りリスト
//      02-H:その他の固定ページ
//      02-I:index.php
//      02-J:ニュース ←※(is_single)をカスタム投稿(is_singular)より前に書くと，
//                     カスタム投稿(is_singular)でファイルを読み込まなくなる。
//      02-K:キーワード検索

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

        //トップページのjs（top.js）を読み込む
        wp_enqueue_script('toku_parknav-top-script', get_template_directory_uri() . '/assets/js/top.js', '', '', true);
    }

    //----------------------
    //  02-B:公園検索
    //----------------------
    elseif (is_post_type_archive('park')) {

        // 公園の一覧ページのCSS（park_area.css）を読み込む
        wp_enqueue_style('toku_parknav-search-area-park', get_template_directory_uri() . '/assets/css/park_area.css', array(), false);
    } elseif (is_search()) {

        // 公園の詳細検索のCSS（park_search.css）を読み込む
        // wp_enqueue_style('toku_parknav-search-park', get_template_directory_uri() . '/assets/css/park_search.css', array(), false);
    } elseif (is_tax("area", "east") || is_tax("area", "west") || is_tax("area", "south")) {

        // 公園の地域検索のCSSなどを書く
        wp_enqueue_style('toku_parknav-taxonomy-area', get_template_directory_uri() . '/assets/css/park_area.css', array(), false);
    } elseif (is_singular('park')) {

        // 公園の個別ページのCSS（park_info.css）を読み込む
        // 公園詳細ページ用のcss
        wp_enqueue_style(
            'toku_parknav-single-park',
            get_template_directory_uri() . '/assets/css/park_info.css',
            array(),
            false
        );

        // slickのcss
        wp_enqueue_style(
            'toku_parknav-slick',
            get_template_directory_uri() . '/assets/slick/slick.css',
            array(),
            false
        );
        wp_enqueue_style('toku_parknav-slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), false);

        // slickのjs
        wp_enqueue_script(
            'toku_parknav-slick-min',
            get_template_directory_uri() . '/assets/slick/slick.min.js',
            array(),
            false
        );

        // スライダー部分のslick
        wp_enqueue_script(
            'toku_parknav-park_slider',
            get_template_directory_uri() . '/assets/js/park_slider.js',
            array(),
            false
        );
    }
    //----------------------
    //  02-C:モデルコース
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
    //  02-D:療育
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
    //  02-E:ゲームスタート
    //----------------------
    else if (is_page('gamestart')) {

        //ゲームのリセットCSS（destyle.css）を読み込む
        wp_enqueue_style('toku_parknav-gamedestyle', get_template_directory_uri() . '/assets/css/destyle.css', array(), false);

        //ゲームスタートのCSS（gamestart_style.css）を読み込む
        wp_enqueue_style('toku_parknav-gamestart', get_template_directory_uri() . '/assets/css/gamestart_style.css', array(), false);
    }

    //----------------------
    //  02-F:ゲームプレイ
    //----------------------
    else if (is_page('gameplay')) {

        //ゲームのリセットCSS（destyle.css）を読み込む
        wp_enqueue_style('toku_parknav-gamedestyle', get_template_directory_uri() . '/assets/css/destyle.css', array(), false);

        //ゲームプレイのCSS（game_style.css）を読み込む
        wp_enqueue_style('toku_parknav-gameplay', get_template_directory_uri() . '/assets/css/game_style.css', array(), false);

        //ゲームプレイ用のJS（game.js）を読み込む
        wp_enqueue_script('toku_parknav-gameplay-js', get_template_directory_uri() . '/assets/js/game.js', '', '', true);
    }

    //----------------------
    //  02-G:お気に入りリスト
    //----------------------
    else if (is_page('mypage')) {

        //お気に入りリストのCSS（mypage.css）を読み込む
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
    } else if (is_page('minori')) {

        //サイト制作にあたってのCSS（minori.css）を読み込む
        wp_enqueue_style('toku_parknav-teamminori', get_template_directory_uri() . '/assets/css/minori.css', array(), false);
    } else if (is_page('thanks')) {

        //問い合わせありがとうございましたにCSS（contact.css）を読み込む
        wp_enqueue_style('toku_parknav-thanks', get_template_directory_uri() . '/assets/css/contact.css', array(), false);
    }


    //----------------------
    //  02-I:index.php
    //----------------------
    elseif (is_category()) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('toku_parknav-index', get_template_directory_uri() . '/assets/css/news.css', array(), false);
    }

    //----------------------
    //  02-J:ニュース
    //----------------------
    elseif (is_page('newslist')) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('toku_parknav-news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
    } elseif (is_single()) {

        //ニュースの個別ページのCSS（news-content.css）を読み込む
        wp_enqueue_style('toku_parknav-news-content', get_template_directory_uri() . '/assets/css/news-content.css', array(), false);
    }

    //----------------------
    //  02-K:キーワード検索
    //----------------------
    //elseif (is_search('keywords')) {

    // キーワード検索のCSS（search-keywords.css）を読み込む
    // wp_enqueue_style('toku_parknav-search-keywords', get_template_directory_uri() . '/assets/css/search-keywords.css', array(), false);

    //----------------------
    //  02-L:404ページ
    //----------------------
    // } else if (is_page('minori')) {

    //     //サイト制作にあたってのCSS（minori.css）を読み込む
    //     wp_enqueue_style('toku_parknav', get_template_directory_uri() . '/assets/css/minori.css', array(), false);
    // }
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


/**
 * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
 */
// //全角スペースを入れての検索に対応させる
function SearchFilter($query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_search()) { //全角スペースでも検索可能にする
        $s = $query->get('s');
        $s = str_replace('　', ' ', $s);
        $query->set('s', $s);
    }
    // 検索結果に公園とコースを含める
    if (!is_admin() && $query->is_main_query() && $query->is_search()) { //検索する投稿タイプ
        $query->set('post_type', array('park', 'course'));
    }
}
add_action('pre_get_posts', 'SearchFilter');

//検索対象＜カテゴリー・タグ・カスタムタクソノミー・カスタムフィールド・ユーザー表示名から＞
function custom_search($search, $wp_query)
{
    global $wpdb;

    if (!$wp_query->is_search)
        return $search;
    if (!isset($wp_query->query_vars))
        return $search;

    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    if (count($search_words) > 0) {
        $search = '';
        /*$search .= "AND post_type = 'post'";*/
        foreach ($search_words as $word) {
            if (!empty($word)) {
                $search_word = '%' . esc_sql($word) . '%';
                $search .= " AND (
                                 {$wpdb->posts}.post_title LIKE '{$search_word}'
                                OR {$wpdb->posts}.post_content LIKE '{$search_word}'
           OR {$wpdb->posts}.ID IN (
             SELECT distinct r.object_id
             FROM {$wpdb->term_relationships} AS r
             INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
             INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
             WHERE t.name LIKE '{$search_word}'
           OR t.slug LIKE '{$search_word}'
           OR tt.description LIKE '{$search_word}'
           )
                                OR {$wpdb->posts}.ID IN (
                                SELECT distinct post_id
                                FROM {$wpdb->postmeta}
                                WHERE meta_value LIKE '{$search_word}'
                                )
           OR {$wpdb->posts}.post_author IN (
             SELECT distinct ID
             FROM {$wpdb->users}
             WHERE display_name LIKE '{$search_word}'
             )
                            ) ";
            }
        }
    }

    return $search;
}
add_filter('posts_search', 'custom_search', 10, 2);



// 記事の表示件数を全て６に設定
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    //----------------------
    // コース一覧のカード型
    //----------------------
    // コース一覧
    if ($query->is_archive('course')) { //カスタム投稿タイプを指定
        $query->set('posts_per_page', '6'); //表示件数を指定
    }
    // 目的別一覧
    if ($query->is_tax('purpose')) {
        $query->set('posts_per_page', '6');
    }

    //----------------------
    //  公園一覧のカード型
    //----------------------
    //公園一覧
    if ($query->is_archive('park')) {
        $query->set('posts_per_page', '6');
    }
    // 地域別一覧
    if ($query->is_tax('area')) {
        $query->set('posts_per_page', '6');
    }

    //----------------------
    //  公園詳細検索 結果
    //----------------------
    if ($query->is_search('park')) {
        $query->set('posts_per_page', '6');
    }

    //----------------------
    //  キーワード検索 結果
    //----------------------
    if ($query->is_search('keywords')) {
        $query->set('posts_per_page', '-1');
    }
};
add_action('pre_get_posts', 'change_posts_per_page');