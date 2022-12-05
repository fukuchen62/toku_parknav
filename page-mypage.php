<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>


<!-- キービジュアルのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/key-under/key_under_mypage.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>


<main>
    <div class="wrap">
        <!-- パンくずリストを読み込む -->
        <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

        <section>
            <h2 class="h2_under">お気に入りリスト</h2>

            <!-- Googleマップが表示されるダミーブロック -->
            <div class="map_dummy">
                <p>ここにGoogleマップがはいります。</p>
            </div>

            <div class="mypage_use">
                <h3>お気に入りリストの使い方</h3>
                <ol>
                    <li>1. 「今度ここ行こう！」と思った公園のページにある<span class="paperclip_img"></span>マークをクリック！
                    </li>
                    <li>2. 公園に行く時にこのページを開いてマップ上のピン<span class="pin_img"></span>をクリックすると、公園の詳細ページにとぶことができます。
                    </li>
                    <li>3. レッツエンジョイ・パーク！！
                    </li>
                </ol>
            </div>
        </section>

        <!-- カードとページをまとめるdiv -->
        <div>
            <!-- ↓ここに選んだカテゴリ名が入る。 -->
            <h2 class="h2_under">チェックした公園</h2>
            <div class="card_flex">
                <!-- カード1つ分 -->
                <div class="card_wrap">
                    <a href="#">
                        <!-- 記事画像 -->
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
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
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
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
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
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
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
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
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
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
                        <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <div class="card_inner">

                                <!-- メインタイトル -->
                                <h2 class="card_ttl">レインボーオアシスパーク</h2>
                                <!-- 記事本文 -->
                                <div class="card_txt">
                                    <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>