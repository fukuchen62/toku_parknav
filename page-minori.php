<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアルの下層ページのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_minori.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>

    <!-- パンくずリストを読み込む -->
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <div class="minori_wrap">
        <!-- サイト制作にあたって -->
        <h2 class="h2_under">サイト制作にあたって</h2>
        <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>

        <!-- なぜ、このサイトを作成したか -->
        <h3>なぜ、このWEBサイトを作成したか</h3>
        <!-- <h2 class="h2_under">なぜ、このWEBサイトを作成したか</h2> -->
        <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>

        <!-- 関係者の皆様 -->
        <h2 class="h2_under">サイト制作に協力していただいた関係者の皆様</h2>
        <ul>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
            <li>・</li>
        </ul>

        <!-- 参考サイト一覧 -->
        <h3>参考サイト一覧</h3>
        <div class="ref_wrap">
            <!-- <cite> -->
            <a href="">・リンク先が入ります</a><br>
            <a href="">・リンク先が入ります</a><br>
            <a href="">・リンク先が入ります</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <a href="">・</a><br>
            <!-- </cite> -->
        </div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>