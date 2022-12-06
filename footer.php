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

    <!-- ポポ二郎の豆知識 -->
    <div class="popo_trivia hoge">
        <div class="popo_commentset">
            <img class="popo_commentbox" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_commentbox.png" alt="ポポ吹き出し">
            <p id="popo_comment" class="popo_comment"></p>
        </div>
        <img class="popo" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_img.png" alt="ポポじろう">
        <input class="popo" type="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_img.png" value="豆知識" onclick="mame()" alt="ポポじろう">
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