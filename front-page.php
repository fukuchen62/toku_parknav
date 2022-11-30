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
                    <a href="<?php echo home_url('/park/'); ?>">公園検索</a>
                    <span>　|　 </span>
                    <a href="<?php echo home_url('/course/'); ?>">モデルコース</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/nursing/'); ?>">運動療育について</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/gamestart/'); ?>">ゲーム</a>
                    <span>　|　</span>
                    <a href="<?php echo home_url('/mypage/'); ?>">お気に入りリスト</a>
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

    <main>
        <!-- キービジュアル -->
        <div class="key_bg bgcolor_cream">

            <!-- タイトルロゴ -->
            <h1><img class="key_logo fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_logo.png" alt="とくしまGo!Go!パークなび"></h1>
            <h1><img class="key_logo_sp fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/header_logo.png" alt="とくしまGo!Go!パークなび"></h1>

            <!-- キャッチコピー -->
            <img class="key_catch" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_catch.png" alt="あわっこあつまれ！遊び方は無限大">

            <!-- 装飾写真 -->
            <img class="key_photo01" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo01.svg" alt="キービジュアル写真(双子姉妹)">
            <img class="key_photo02" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo02.png" alt="キービジュアル写真(すべり台少年)">
            <img class="key_photo03" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo03.png" alt="キービジュアル写真(乗り物3人兄弟)">
            <img class="key_photo04" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo04.png" alt="キービジュアル写真(グローブジャングル少女)">
            <img class="key_photo05" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo05.svg" alt="キービジュアル写真(ブランコ少年)">
            <img class="key_photo06" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo06.png" alt="キービジュアル写真(3人家族)">

            <!-- 丸い飾り -->
            <img class="key_circle_pk01" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_pk.png" alt="ピンク丸1">
            <img class="key_circle_pk02" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_pk.png" alt="ピンク丸2">
            <img class="key_circle_pk03" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_pk.png" alt="ピンク丸3">
            <img class="key_circle_pk04" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_pk.png" alt="ピンク丸4">
            <img class="key_circle_bl01" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_bl.png" alt="青丸1">
            <img class="key_circle_bl02" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_bl.png" alt="青丸2">
            <img class="key_circle_bl03" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_circle_bl.png" alt="青丸3">

            <!-- 三角の旗 -->
            <img class="key_flag" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_flag.png" alt="三角旗">
            <!-- 町 -->
            <img class="key_city" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_city.png" alt="町">
        </div>

        <!-- 公園検索 -->
        <section class="search">
            <h2>今週末、どこ行く？<br>公園検索</h2>
            <div class="search_inner">
                <img class="search_map" src="<?php echo get_template_directory_uri(); ?>/assets/img/search_map.png" alt="検索マップ">
                <a href="<?php echo home_url('/area/east/'); ?>">
                    <div class="map_btn map_btn_east circle">東部</div>
                </a>
                <a href="<?php echo home_url('/area/west/'); ?>">
                    <div class="map_btn map_btn_west circle">西部</div>
                </a>
                <a href="<?php echo home_url('/area/south/'); ?>">
                    <div class="map_btn map_btn_south circle">南部</div>
                </a>
            </div>
            <!-- ランダムに公園のカードが入るところ -->
            <h2>pickup！パーク</h2>
            <!-- card_flexの指定 -->
            <div class="card_flex">
                <!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- サブタイトル -->
                                <h3 class="card_subttl">西部</h3>
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- サブタイトル -->
                                <h3 class="card_subttl">西部</h3>
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- サブタイトル -->
                                <h3 class="card_subttl">西部</h3>
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- このサイトについて -->
        <section class="bgcolor_cream">
            <h2>このサイトについて</h2>
            <div class="section_flex">
                <img class="section_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/about_img.png" alt="about写真">
                <div class="inner_flex">
                    <p class="section_txt">このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。</p>
                    <div class="next_btn">
                        <a href="<?php echo home_url('/minori/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/next_btn_white.png" alt="次の画面へ">
                            <p>くわしく</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- コース -->
        <section>
            <h2>公園をもっと楽しむ！<br>モデルコース</h2>
            <div class="section_flex_reverse">
                <img class="section_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/course_img.png" alt="course写真">

                <div class="inner_flex">
                    <p class="section_txt">このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。</p>
                    <div class="next_btn">
                        <a href="<?php echo home_url('/course/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/next_btn_cream.png" alt="次の画面へ">
                            <p>一覧へ</p>
                        </a>
                    </div>
                </div>

            </div>

            <!-- ランダムにコースのカードが入るところ -->
            <h2>pickup！コース</h2>
            <!-- card_flexの指定 -->
            <div class="card_flex">
                <!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパークでデイキャンプ！</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパークでデイキャンプ！</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">
                                <!-- メインタイトル -->
                                <h2 class="card_ttl ">レインボーオアシスパークでデイキャンプ！</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt ">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- 療育 -->
        <section class="bgcolor_cream">
            <h2>理学療法士の先生と考える<br>
                運動療育と遊具</h2>

            <div class="section_flex">
                <img class="section_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/nursing_img.png" alt="療育写真">

                <div class="inner_flex">
                    <p class="section_txt">このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。</p>
                    <div class="next_btn">
                        <a href="<?php echo home_url('/nursing/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/next_btn_white.png" alt="次の画面へ">
                            <p>くわしく</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- ゲーム -->
        <section>
            <h2>ポポ二郎と虫キャッチ！</h2>
            <div class="section_flex_reverse">
                <img class="section_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/popo_img.png" alt="キャラクター画像">
                <div class="inner_flex">
                    <p class="section_txt">このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。このメニューについての概要が入ります。</p>
                    <div class="next_btn">
                        <a href="<?php echo home_url('/gamestart/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/img/next_btn_cream.png" alt="次の画面へ">
                            <p>あそぶ</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- お知らせ -->
        <section class="bgcolor_cream">
            <h2>お知らせ</h2>
            <div class="section_flex">
                <img class="news_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/news_img.png" alt="療育写真">
                <div class="news_article">
                    <a href="#">
                        <div class="news_date">2022.12.13</div>
                        <div class="news_ttl">「とくしまGo!Go!パークなび」公開
                        </div>
                    </a>
                    <a href="#">
                        <div class="news_date">2022.11.18</div>
                        <div class="news_ttl"> Instagram開設</div>
                    </a>
                </div>
                <div class="news_next_btn next_btn">
                    <a href="<?php echo home_url('/newslist/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/next_btn_white.png" alt="次の画面へ">
                        <p>一覧へ</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- インスタ -->
        <section class="insta_box">
            <h2>Instagram</h2>
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </section>

        <!-- リンク集 -->
        <div class="banner_flex">
            <div class="banner"><a href="http://awacamp.site/"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/banner01.png" alt="サイトリンク"></a></div>
            <div class="banner"><a href="https://awa-nolife.com/"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/banner02.png" alt="サイトリンク"></a></div>
            <div class="banner"><a href="https://arutoku.com/"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/banner03.png" alt="サイトリンク"></a></div>
            <div class="banner"><a href="https://kisyanotabi.com/"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/banner04.png" alt="サイトリンク"></a></div>
            <div class="banner"><a href="http://mizutokushima.com/"><img src="<?php echo get_template_directory_uri(); ?>./assets/img/banner05.png" alt="サイトリンク"></a></div>
        </div>
    </main>

    <!-- フッター -->
    <footer class="foot_bgcolor_cream">
        <div class="foot_content">
            <div class="foot_menu">
                <ul class="foot_col">
                    <li class="foot_fontbold">
                        公園検索
                    </li>
                    <li>
                        <a href="<?php echo home_url('/area/east/'); ?>">県東部</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/area/west/'); ?>">県西部</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/area/south/'); ?>">県南部</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/park/'); ?>">条件検索</a>
                    </li>
                </ul>
                <ul class="foot_col">
                    <li>
                        <a href="<?php echo home_url('/course/'); ?>">モデルコース一覧</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/nursing/'); ?>">運動療育について</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/gamestart/'); ?>">ゲーム</a>
                    </li>
                </ul>
                <ul class="foot_col">
                    <li>
                        <a href="<?php echo home_url('/newslist/'); ?>">ニュース一覧</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/mypage/'); ?>">お気に入りリスト</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/about/'); ?>">このサイトについて</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー・免責事項</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/minori/'); ?>">サイト制作にあたって</a>
                    </li>
                </ul>
            </div>
            <!-- コピーライト -->
            <div class="foot_copyright">
                copyright©とくしまGo!Go!パークなび All Rights Reserved.
            </div>
        </div>

        <!-- ポポ二郎の豆知識 -->
        <div class="popo_trivia hoge">
            <div class="popo_commentset">
                <img class="popo_commentbox" src="<?php echo get_template_directory_uri(); ?>./assets/img/popo_commentbox.png" alt="ポポ吹き出し">
                <p id="popo_comment" class="popo_comment"></p>
            </div>
            <img class="popo" src="<?php echo get_template_directory_uri(); ?>./assets/img/popo_img.png" alt="ポポじろう">
            <input class="popo" type="image" src="<?php echo get_template_directory_uri(); ?>./assets/img/popo_img.png" value="豆知識" onclick="mame()" alt="ポポじろう">
        </div>

        <!-- トップへ戻るボタン -->
        <!-- <div class="pagetop"> -->
        <!-- ボタン本体  -->
        <div class="foot_top foot_rotate hoge">
        </div>
    </footer>

    <!-- スクリプト -->
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/common.js"></script>
    <script src="./assets/js/top.js"></script>

    <?php
    // wp_foot()を呼び出す
    wp_footer();
    ?>
</body>

</html>