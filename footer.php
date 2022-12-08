<!-- フッター -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/foot_grass.png" alt="草" class="foot_grass">
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
                    <a href="<?php echo home_url('/?search_type=park'); ?>">条件検索</a>
                </li>
            </ul>
            <ul class="foot_col">
                <li>
                    <a href="<?php echo home_url('/course/'); ?>">モデルコース一覧</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/nursing/'); ?>">運動療育とは</a>
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
                    <a href="<?php echo home_url('/qa/'); ?>">Q＆A</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
                </li>
                <li>
                    <a href="<?php echo home_url('/minori/'); ?>">サイト制作にあたって</a>
                </li>
            </ul>
        </div>

        <?php
        // $args = array(
        //     'menu' => 'footer-menu',
        //     'menu_class' => '',
        //     'container' => false,
        // );
        // wp_nav_menu($args);
        ?>

        <!-- コピーライト -->
        <div class="foot_copyright">
            copyright©とくしまGo!Go!パークなび All Rights Reserved.
        </div>
    </div>

    <!-- 豆知識データの取得 -->
    <?php
    // 配列をつくってデータ保存
    $mames = [];
    $mames_count = 0;

    // サブクエリの発行
    $args = array(
        'post_type' => 'mame',
        'posts_per_page' => -1,
        'orderby' => 'rand',
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();

            // フィールドから豆知識の取得
            $mm = get_field('mame');
            // フィールドから取得したデータを配列$mamesに格納
            $mames[] = $mm;
            $mames_count++;
        endwhile;
        wp_reset_postdata();
    endif;

    //print_r($mames);
    ?>

    <!-- js -->
    <script type="text/javascript">
    // 豆知識の配列を生成

    let mames = [];

    // let mames = [];
    //console.log("確認表示");

    // 豆知識を配列$mamesから取り出す
    <?php
        for ($i = 0; $i < $mames_count; $i++) {
            echo "mames[${i}]='";
            echo $mames[$i];
            echo "';\n";
        }
        ?>

    // ランダムに豆知識を表示させる

    function mame() {
        // 変数mameに配列を代入
        //変数ｒに、0以上1以下のランダムな数字とmameのlength(5）を掛けた結果（小数点を切り捨てた数字）を代入
        let r = Math.floor(Math.random() * mames.length);

        document.getElementById("popo_comment").innerHTML = mames[r]; //上の式で出た結果をHTMLで"popo_comment"に表示する
    }
    </script>


    <!-- ポポ二郎の豆知識 -->
    <div class="popo_trivia hoge">
        <div class="popo_commentset">
            <img class="popo_commentbox" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_commentbox.png" alt="ポポ吹き出し">

            <p id="popo_comment" class="popo_comment">
                <?php
                // foreach ($mames as $key => $mame) {
                //     echo $mame;
                // }
                ?>
            </p>

        </div>
        <img class="popo" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_img.png" alt="ポポじろう">
        <input class="popo" type="button" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_img.png" value="豆知識" onclick="mame()" alt="ポポじろう">
    </div>

    <!-- トップへ戻るボタン -->
    <!-- <div class="pagetop"> -->
    <!-- ボタン本体  -->
    <div class="foot_top foot_rotate foot_scroll">
    </div>
</footer>

<!-- スクリプト -->
<!-- <script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/common.js"></script>
<script src="/assets/js/top.js"></script> -->

<?php
// wp_foot()を呼び出す
wp_footer();
?>
</body>

</html>