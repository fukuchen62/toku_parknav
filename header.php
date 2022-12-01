<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="休日に親子でお出かけ！「とくしまGo!Go!パークなび」では、お子様との休日に最適な徳島県内の公園情報を発信中。公園で過ごすためのモデルコースや療育情報に沿った遊具の情報も掲載しています。">

    <!-- フォント読み込み-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <!-- 各種css読み込み -->
    <!-- <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/top.css"> -->

    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <!-- fontawesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->

    <!-- <title>とくしまGo!Go!パークなび</title> -->
    <?php
    // wp_head()を呼び出す
    wp_head();
    ?>
</head>

<body>
    <?php body_class(); ?>>
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
                    <a href="<?php echo home_url('/park/');
                                ?>">公園検索</a>
                    <span>　|　 </span>
                    <a href="<?php echo home_url('/course/');
                                ?>">モデルコース</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/nursing/');
                                ?>">運動療育について</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/gamestart/');
                                ?>">ゲーム</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/mypage/');
                                ?>">お気に入りリスト</a>

                    <?php
                    // $args = array(
                    //     'menu' => 'global-navigation',
                    //     'menu_class' => '',
                    //     'container' => false,
                    // );
                    // wp_nav_menu($args);
                    ?>
                </div>

                <!-- 検索ボックス -->
                <div class=" head_menu_item">
                    <form class="head_search" action="">
                        <input class="head_form" size="300" type="search" name="search" placeholder="キーワードを入力">
                        <input class="head_submit fas" type="submit" value="&#xf002;">
                    </form>

                    <!-- 検索フォームを表示させる -->
                    <? //php get_search_form();
                    //php get_template_part('searchform','keywords');
                    ?>
                </div>

            </div>

            <!-- ハンバーガーメニュー -->
            <div class="hbg_menubox">
                <input id="hbg" type="checkbox" class="input-hidden" value="hbg_open">
                <label for="hbg" class="hbg_btn hbg_btn">
                    <span class="hbg_btn-circle"></span>
                </label>
                <div class="hbg_menuwrap hbg_menuwrap-right">
                    <ul class="hbg_menulist hbg_menulist-circle">
                        <a href="<?php echo home_url('/park/'); ?>">公園検索</a>
                        <span>　|　 </span>
                        <a href="<?php echo home_url('/course/'); ?>">モデルコース</a>
                        <span>　|　</span>
                        <a href="<?php echo home_url('/nursing/'); ?>">運動療育について</a>
                        <span>　|　</span>
                        <a href="<?php echo home_url('/gamestart/'); ?>">ゲーム</a>
                        <span>　|　</span>
                        <a href="<?php echo home_url('/mypage/'); ?>">お気に入りリスト</a>

                        <!-- 検索ボックス -->
                        <li class="hbg_search_box">
                            <form class="hbg_search" action="index.php" method="get">
                                <input class="hbg_form" size="300" type="search" name="search" placeholder="キーワードを入力">
                                <input class="hbg_submit fas" type="submit" value="検索">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="hbg_cover"></div>
            </div>
        </nav>
    </header>