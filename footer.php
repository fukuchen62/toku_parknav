<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <nav>
                <!-- <ul>
                    <li><a href="<?php echo home_url(); ?>">HOME</a></li>
                    <li><a href="#">わたしたちについて</a></li>
                    <li><a href="#">アクセス</a></li>
                    <li><a href="#">最新情報</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul> -->
                <?php
                $args = array(
                    'menu' => 'footer-menu',
                    'menu_class' => '',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>
            <div class="footer_copyright">
                <small>&copy; BISTRO CALME All rights reserved.</small>
            </div>
        </div>
    </div>
</footer>

<!--
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script> -->

<?php
// トップページであれば以下のファイルを読み込む
if (is_home()) {
    // slickのCSSファイルを読み込む
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // slickのJSファイルを読み込む
    wp_enqueue_script(
        'slick-carousel',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'
    );

    // 独自のJSファイルを読み込む
    wp_enqueue_script(
        'bistro-calme-home',
        get_template_directory_uri() . '/assets/js/home.js'
    );
}

// wp_footer関数を呼び出す
wp_footer();
?>
</body>

</html>