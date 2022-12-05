<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>　



<!-- キービジュアルの下層ページのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/key-under/key_under_about.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>


<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <!-- ループの開始 -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
    <!-- 記事を取得して$postに代入 -->
    <?php the_post(); ?>

    <div class="site_summary_wrap">
        <h2 class="h2_under">このサイトについて</h2>
        <p>自然豊かなとくしま県には、子どもたちが喜ぶ公園がたくさん。<br>
                    このサイトでは、主に徳島市内の公園を中心に、おすすめしたい公園を掲載しています。
                    地域別・目的別・遊具別で検索が可能です。
                    公園詳細では、遊具を利用して運動機能を向上する遊び方を紹介しています。<br>
                    また、近年耳にすることが多くなった「発達障がい」。
                    療育のページでは、実際に施設へインタビューを行い、療育の目的で公園を利用するメリットなどもお聞きしました。<br>
                    公園利用には、たくさんの可能性があります。
                    この週末、是非気になった公園であそんでみませんか？<br>
                    公園の「楽しみ方は無限大！！！」
                </p>
    </div>

    <!-- キャラクター紹介 -->
    <h2 class="h2_under">キャラクター紹介</h2>
    <div class="site_char_wrap">
        <div class="char_wrap">
            <div class="cha_img">
                <img class="about_popo_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/popo_img.png" alt="ぽぽじろう画像">
            </div>
            <div class="about_profile_txt">
                <p>なまえ：ぽぽじろう</p>
                <p>分類：雑学王</p>
                <p>タイプ：文系</p>
                <p>高さ：80cm</p>
                <p>重さ：大豆200個分</p>
                <p>趣味：ボーリング</p>
            </div>
        </div>

        <div class="char_wrap">
            <div class="cha_img">
                <img class="about_koro_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/koro.png" alt="ころちゃん画像">
            </div>
            <div class="about_profile_txt">
                <p>なまえ：ころちゃん</p>
                <p>分類：木の妖精</p>
                <p>タイプ：理系</p>
                <p>高さ：20cm</p>
                <p>重さ：マカロン2個分</p>
                <p>趣味：ひとりカラオケ</p>
            </div>
        </div>
    </div>

</main>
<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

</div>
<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>