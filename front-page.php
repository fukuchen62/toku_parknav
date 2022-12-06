<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<main>
    <!-- キービジュアル -->
    <div class="key_bg bgcolor_cream">

        <!-- タイトルロゴ -->
        <h1><img class="key_logo fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_logo.svg" alt="とくしまGo!Go!パークなび"></h1>
        <h1><img class="key_logo_sp fadeIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/header_logo.png" alt="とくしまGo!Go!パークなび"></h1>

        <!-- キャッチコピー -->
        <img class="key_catch" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_catch.png" alt="あわっこあつまれ！遊び方は無限大">

        <!-- 装飾写真 -->
        <img class="key_photo01" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo01.png" alt="キービジュアル写真(双子姉妹)">
        <img class="key_photo02" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo02.png" alt="キービジュアル写真(すべり台少年)">
        <img class="key_photo03" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo03.png" alt="キービジュアル写真(乗り物3人兄弟)">
        <img class="key_photo04" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo04.png" alt="キービジュアル写真(グローブジャングル少女)">
        <img class="key_photo05" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-visual/key_photo05.png" alt="キービジュアル写真(ブランコ少年)">
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
        <h2 class="zoom_in"><span class="h2_first h2_first_bg">今</span>週末、どこ行く？<br>公園検索</h2>
        <div class="sun_box fade_in">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_sun.png" alt="太陽" class="top_sun">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_sun_face.png" alt="太陽の顔" class="top_sun_face">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_grove.svg"" alt=" グローブジャングル" class="top_grove">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_seesaw.svg"" alt=" シーソー" class="top_seesaw">
        </div>
        <div class="search_inner">
            <img class="search_map fade_in" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/search_map.png" alt="検索マップ">
            <a href="<?php echo home_url('/area/east/'); ?>">
                <div class="map_btn map_btn_east circle zoom_in">東部</div>
            </a>
            <a href="<?php echo home_url('/area/west/'); ?>">
                <div class="map_btn map_btn_west circle zoom_in">西部</div>
            </a>
            <a href="<?php echo home_url('/area/south/'); ?>">
                <div class="map_btn map_btn_south circle zoom_in">南部</div>
            </a>
        </div>


        <!-- ランダムに公園のカードが入るところ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_pickup.svg" alt="装飾" class="pickup_deco zoom_in">
        <h2 class="zoom_in">pickup！パーク</h2>
        <!-- card_flexの指定 -->
        <div class="card_flex animate_wrap">
            <?php
            $args = array(
                'post_type' => 'park', // 投稿タイプを指定
                'orderby' => 'rand', // ランダムで表示
                'posts_per_page' => 3, // 表示する記事数
            );
            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();
            ?>

            <!-- カード型の呼び出し -->
            <?php get_template_part('template-parts/loop', 'park') ?>

            <?php endwhile; ?>
            <!-- ループの終了 -->
            <?php endif; ?>


        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator.png" alt="セクション区切り" class="top_separator">

    <!-- このサイトについて -->
    <section class="bgcolor_cream">
        <h2 class="zoom_in"><span class="h2_first h2_first_pw">こ</span>のサイトについて</h2>
        <div class="section_flex">
            <img class="section_img zoom_in" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_about.png" alt="about写真">
            <div class="inner_flex">
                <p class="section_txt">
                    ～あなたもきっと、この週末公園に行きたくなる～<br>
                    「徳島にもこんな公園あったんだ！」<br>
                    「この遊具であそんでみたい！」<br>
                    そんな気持ちになるような、公園情報サイトです。<br>

                    ・公式サイトがない<br>
                    ・知りたい情報が載ってない<br>
                    そんなお悩みを解決するために、
                    『とくしまGo！Go！パークなび』はうまれました！
                </p>
                <div class="next_btn">
                    <a href="<?php echo home_url('/about/'); ?>">
                        <div class="next_btn_frame_box">
                            <div class="next_btn_frame">
                                <div class='next_btn_frame_triangle'></div>
                                <div class='next_btn_frame_square'></div>
                            </div>
                        </div>
                        <div class="next_btn_inner_box">
                            <div class="next_btn_inner">
                                <div class='next_btn_inner_triangle'></div>
                                <div class='next_btn_inner_square'></div>
                                <p class="next_btn_txt">くわしく</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator_white.png" alt="セクション区切り" class="top_separator">

    <!-- コース -->
    <section>
        <h2 class="zoom_in"><span class="h2_first h2_first_bg">公</span>園をもっと楽しむ！<br>モデルコース</h2>
        <div class="section_flex_reverse">
            <img class="section_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_course.svg" alt="course写真">

            <div class="inner_flex">
                <p class="section_txt">半日コース・１日コースで、公園のおすすめの過ごし方を紹介しています。<br>
                    公園に行ったことがない方はもちろん、行ったことがある方も、普段とは違った過ごし方を発見できるチャンスかもしれません。
                </p>
                <div class="next_btn">
                    <a href="<?php echo home_url('/course/'); ?>">
                        <div class="next_btn_frame_box">
                            <div class="next_btn_frame">
                                <div class='next_btn_frame_triangle'></div>
                                <div class='next_btn_frame_square'></div>
                            </div>
                        </div>
                        <div class="next_btn_inner_box">
                            <div class="next_btn_inner">
                                <div class='next_btn_inner_triangle'></div>
                                <div class='next_btn_inner_square'></div>
                                <p class="next_btn_txt">一覧へ</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- ///////////////////////////////////////// -->

        <!-- ランダムにコースのカードが入るところ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_pickup.png" alt="装飾" class="pickup_deco zoom_in">
        <h2 class="zoom_in">pickup！コース</h2>
        <!-- card_flexの指定 -->
        <div class="card_flex animate_wrap">
            <?php
            $args = array(
                'post_type' => 'course', // 投稿タイプを指定
                'orderby' => 'rand', // ランダムで表示
                'posts_per_page' => 3, // 表示する記事数
            );
            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();
            ?>

            <!-- カード型の呼び出し -->
            <?php get_template_part('template-parts/loop', 'course') ?>

            <?php endwhile; ?>
            <!-- ループの終了 -->
            <?php endif; ?>
        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator.png" alt="セクション区切り" class="top_separator">

    <!-- 療育 -->
    <section class="bgcolor_cream">
        <h2 class="zoom_in"><span class="h2_first h2_first_bw">理</span>学療法士の先生と考える<br>
            運動療育と遊具</h2>

        <div class="section_flex">
            <img class="section_img zoom_in" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_nursing.png" alt="療育写真">

            <div class="inner_flex">
                <p class="section_txt">発達障がいや自閉症、知的障がいの子どもたちに療育や学習指導を行う施設「ギフテッド」様へインタビューを行いました。<br>
                    発達障がいの子を持つ親御様への役立つ情報や、公園での遊び方などを紹介しています。
                </p>
                <div class="next_btn">
                    <a href="<?php echo home_url('/nursing/'); ?>">
                        <div class="next_btn_frame_box">
                            <div class="next_btn_frame">
                                <div class='next_btn_frame_triangle'></div>
                                <div class='next_btn_frame_square'></div>
                            </div>
                        </div>
                        <div class="next_btn_inner_box">
                            <div class="next_btn_inner">
                                <div class='next_btn_inner_triangle'></div>
                                <div class='next_btn_inner_square'></div>
                                <p class="next_btn_txt">くわしく</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator_white.png" alt="セクション区切り" class="top_separator">

    <!-- ゲーム -->
    <section>
        <h2 class="zoom_in"><span class="h2_first h2_first_pg">ぽ</span>ぽじろうとむしキャッチ！</h2>
        <div class="section_flex_reverse">
            <img class="section_img zoom_in" src="<?php echo get_template_directory_uri(); ?>/assets/img/gamestart_popojiro_2.png" alt="キャラクター画像">
            <div class="inner_flex">
                <p class="section_txt">カンタン操作、単純ルールで小さいお子様でも安心して遊べるゲームアプリです。<br>制限時間内に出てくる「むし」をタッチするとスコアが加算され、むしと一緒に登場する「おじゃまむし」をタッチすると時間が減り、時間が0になるとゲームオーバー！<br>目指せ、神レベル！！</p>
                <div class="next_btn">
                    <a href="<?php echo home_url('/gamestart/'); ?>">
                        <div class="next_btn_frame_box">
                            <div class="next_btn_frame">
                                <div class='next_btn_frame_triangle'></div>
                                <div class='next_btn_frame_square'></div>
                            </div>
                        </div>
                        <div class="next_btn_inner_box">
                            <div class="next_btn_inner">
                                <div class='next_btn_inner_triangle'></div>
                                <div class='next_btn_inner_square'></div>
                                <p class="next_btn_txt">あそぶ</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator.png" alt="セクション区切り" class="top_separator">

    <!-- お知らせ -->
    <section class="bgcolor_cream">
        <h2 class="zoom_in"><span class="h2_first h2_first_bw">お</span>知らせ</h2>
        <div class="section_flex">
            <img class="news_img zoom_in" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_news.png" alt="お知らせイラスト">
            <div class="news_article">
                <a href="<?php echo get_permalink('1') ?>">
                    <div class="news_date">2022.12.13</div>
                    <div class="news_ttl">「とくしまGo!Go!パークなび」公開
                    </div>
                </a>
                <a href="<?php echo get_permalink('224') ?>">
                    <div class="news_date">2022.11.18</div>
                    <div class="news_ttl"> Instagram開設</div>
                </a>
            </div>
            <div class="news_next_btn next_btn">
                <a href="<?php echo home_url('/newslist/'); ?>">
                    <div class="next_btn_frame_box">
                        <div class="next_btn_frame">
                            <div class='next_btn_frame_triangle'></div>
                            <div class='next_btn_frame_square'></div>
                        </div>
                    </div>
                    <div class="next_btn_inner_box">
                        <div class="next_btn_inner">
                            <div class='next_btn_inner_triangle'></div>
                            <div class='next_btn_inner_square'></div>
                            <p class="next_btn_txt">一覧へ</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_separator_white.png" alt="セクション区切り" class="top_separator">

    <!-- インスタ -->
    <section class="insta_box">
        <h2 class="zoom_in"><span class="h2_first h2_first_pw">In</span>stagram</h2>
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>

    <!-- リンク集 -->
    <div class="banner_flex animate_wrap">
        <div class="banner animate"><a href="http://awacamp.site/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner01.png" alt="サイトリンク"></a></div>
        <div class="banner animate"><a href="https://awa-nolife.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner02.png" alt="サイトリンク"></a></div>
        <div class="banner animate"><a href="https://arutoku.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner03.png" alt="サイトリンク"></a></div>
        <div class="banner animate"><a href="https://kisyanotabi.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner04.png" alt="サイトリンク"></a></div>
        <div class="banner animate"><a href="http://mizutokushima.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner05.png" alt="サイトリンク"></a></div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>