<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- <h2 class="pageTitle">最新情報<span>NEWS</span></h2> -->

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">

                <!-- ループの開始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <!-- 記事を取得して$postに代入 -->
                <?php the_post(); ?>

                <article class="article">
                    <header class="article_header">
                        <h2 class="article_title"><?php the_title(); ?></h2>
                        <div class="article_meta">

                            <!-- カテゴリ― -->
                            <?php the_category(); ?>

                            <!-- 投稿日 -->
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                        </div>
                    </header>

                    <div class="article_body">
                        <div class="content">
                            <!-- 記事の詳細内容 -->
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>

            <!-- サイドバー -->
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
