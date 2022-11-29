<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">おしらせ</h2>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<?php
$args = array(
    'post-type' => 'post',
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts-per-page' => -1,
);

$newslist = new WP_Query($args);

?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="row">
                    <!-- ループの開始 -->
                    <?php if ($newslist->have_posts()) : ?>
                    <?php while ($newslist->have_posts()) : ?>
                    <!-- 記事を取得して$postに代入 -->
                    <?php $newslist->the_post(); ?>

                    <div class="col-md-4">
                        <!-- テンプレートパーツを読み込む -->
                        <?php get_template_part('template-parts/loop', 'post') ?>
                    </div>

                    <?php endwhile; ?>
                    <!-- ループの終了 -->
                    <?php endif; ?>
                </div>

            </div>

            <div class="col-12 col-md-3">
                <!-- カテゴリサイドバー -->
                <?php get_sidebar('category') ?>
            </div>
        </div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>