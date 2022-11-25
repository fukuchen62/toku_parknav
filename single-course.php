<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- サイドバーの読み込み -->
<?php get_sidebar('course'); ?>

<!-- ループの開始 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : ?>
<!-- 記事を取得して$postに代入 -->
<?php the_post(); ?>

<main class="main">
    <section class="sec">
        <div class="container">
            <div class="article article-menu">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="article_title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>