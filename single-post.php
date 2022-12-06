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
        <div class="article_box">
            <!-- ループの開始 -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <!-- 記事を取得して$postに代入 -->
            <?php the_post(); ?>

            <section>
                <h2 class="h2_under"><?php the_title(); ?></h2>

                <!-- このコースのカテゴリ表示 -->
                <ul class="category_post">
                    <li><?php the_category(); ?></li>
                </ul>

                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium') ?>
                <?php else : ?>
                <img class="course_top_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                <?php endif; ?>

                <p class="txt"><?php the_content(); ?></p>

                <!-- いいね！ボタン -->
                <div class="iineicon_tooltip">
                    <?php echo do_shortcode('[wp_ulike]'); ?>
                    <div class="iineicon_description">いいね！</div>
                </div>
            </section>

            <?php endwhile; ?>
            <!-- ループの終了 -->
            <?php endif; ?>
        </div>

        <!-- カテゴリバー -->
        <?php get_sidebar('category') ?>
    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>