<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ディスクリプションをページごとに変更 -->
    <?php if (is_home() || is_front_page()) : ?>
    <meta name="description" content="休日に親子でお出かけ！「とくしまGo!Go!パークなび」では、お子様との休日に最適な徳島県内の公園情報を発信中。公園で過ごすためのモデルコースや療育情報に沿った遊具の情報も掲載しています。">
    <?php elseif (is_singular('park')) : ?>
    <meta name="description" content="とくしまGo!Go!パークなびでは、公園にどんな遊具や自然があるのかその場所ならではの楽しみ方をまとめてみました。">
    <?php elseif (is_singular('course')) : ?>
    <meta name="description" content="さあ、何して遊ぼうかな？とくしまGo!Go!パークなびではその日に過ごす公園に合ったモデルコースを掲載しています。休日のスケジューリングにお役立てください。">
    <?php elseif (is_singular('post')) : ?>
    <meta name="description" content="公園に関するイチオシ情報を提供、療育に関するニュースも掲載しています。とくしまGo!Go!パークなびでチェック！">
    <?php endif; ?>

    <!-- フォント読み込み-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <!-- 各種css読み込み functions.phpで読み込んでいます-->

    <!-- jQuery functions.phpで読み込んでいます-->

    <!-- fontawesome functions.phpで読み込んでいます-->


    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/popo_favicon-16x16.png" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/popo_favicon-180x180.png">
    <link rel="android-hrome" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/popo_favicon-192x192.png">

    <!-- <title>とくしまGo!Go!パークなび</title> -->
    <?php
    // wp_head()を呼び出す
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

    <?php
    // wp_body_openを呼び出す
    wp_body_open();
    ?>
    <!-- Gナビ -->
    <header>
        <nav class="head_bg">
            <div class="head_content">

                <!-- ロゴ -->
                <div>
                    <a href="<?php echo home_url('') ?>">
                        <img class="head_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/header_logo.png" alt="とくしまGo!Go!パークなび">
                    </a>
                </div>

                <!-- メニュー -->
                <div class="head_menu_item">
                    <!-- <input type="hidden" name="search_type" value="keywords"> -->
                    <a href="<?php echo home_url('/park'); ?>">公園一覧</a>
                    <span>　|　 </span>
                    <a href="<?php echo home_url('/course/'); ?>">モデルコース</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/nursing/'); ?>">公園遊びで育む</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/gamestart/'); ?>">ゲーム</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/mypage/'); ?>">お気に入り</a>

                </div>


                <!-- 検索フォームを表示させる -->
                <?php get_search_form('keywords');
                //php get_template_part('searchform','keywords');
                ?>

                <!-- ハンバーガーメニュー -->
                <div class="hbg_menubox">
                    <input id="hbg" type="checkbox" class="input-hidden" value="hbg_open">
                    <label for="hbg" class="hbg_btn hbg_btn">
                        <span class="hbg_btn-circle"></span>
                    </label>
                    <div class="hbg_menuwrap hbg_menuwrap-right">
                        <ul class="hbg_menulist hbg_menulist-circle">
                            <li><a href="<?php echo home_url('/?search_type=park'); ?>">公園検索</a></li>
                            <li><a href="<?php echo home_url('/course/'); ?>">モデルコース</a></li>
                            <li><a href="<?php echo home_url('/nursing/'); ?>">公園遊びで育む</a></li>
                            <li><a href="<?php echo home_url('/gamestart/'); ?>">ゲーム</a></li>
                            <li><a href="<?php echo home_url('/mypage/'); ?>">お気に入り</a></li>

                            <!-- 検索ボックス -->
                            <li class="hbg_search_box">
                                <!-- 検索フォームを表示させる -->
                                <?php //get_search_form('keywords');
                                ?>
                                <form class="hbg_search" action="index.php" method="get">
                                    <input type="hidden" name="search_type" value="keywords">
                                    <input class="hbg_form" size="300" type="search" name="s" placeholder="キーワードを入力" maxlength="20" value="<?php echo the_search_query(); ?>">
                                    <input class="hbg_submit fas" type="submit" value="検索">
                                </form>

                            </li>
                        </ul>
                    </div>
                    <div class="hbg_cover"></div>
                </div>
        </nav>
    </header>