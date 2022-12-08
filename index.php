<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_img.jpg" alt="">
    <div class="key_circle"></div>
</div>

<main>
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <div class="flex_box">

        <!-- カードとページをまとめるdiv -->
        <div>
            <!-- ↓ここに選んだカテゴリ名が入る。 -->
            <h2 class="h2_under">お知らせ一覧</h2>
            <!-- card_flexの指定 -->
            <div class="card_flex">

                <!-- ループの開始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <!-- 記事を取得して$postに代入 -->
                <?php the_post(); ?>

                <!-- カード型テンプレートパーツの読み込み -->
                <?php get_template_part('template-parts/loop', 'post') ?>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>

            <!-- ページネーション -->
            <?php wp_pagenavi(); ?>
            <!-- <ul class="pagination">
                <li class="disabled">
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul> -->

        </div>

        <!-- カテゴリバー -->
        <?php get_sidebar('category') ?>
    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>