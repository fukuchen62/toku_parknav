<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_archive_post.jpg" alt="">
    <div class="key_circle"></div>
</div>

<main>
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <div class="flex_box">

        <?php
        $args = array(
            'post-type' => 'post',
            'orderby' => 'ID',
            'order' => 'DESC',
            'posts-per-page' => -1,
        );

        $newslist = new WP_Query($args);

        ?>

        <!-- カードとページをまとめるdiv -->
        <div>
            <!-- ↓ここに選んだカテゴリ名が入る。 -->
            <h2 class="h2_under">お知らせ一覧</h2>
            <!-- card_flexの指定 -->
            <div class="card_flex">

                <!-- ループの開始 -->
                <?php if ($newslist->have_posts()) : ?>
                <?php while ($newslist->have_posts()) : ?>
                <!-- 記事を取得して$postに代入 -->
                <?php $newslist->the_post(); ?>

                <!-- カード -->
                <div class="card_wrap">
                    <!-- テンプレートパーツの読み込み -->
                    <?php get_template_part('template-parts/loop', 'post') ?>
                </div>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>

            <!-- ページネーション -->
            <?php wp_pagenavi(); ?>
        </div>

        <!-- カテゴリバー -->
        <?php get_sidebar('category') ?>

    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>