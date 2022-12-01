<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>



<h2 class="pageTitle">サイト内検索<span>SEARCH</span></h2>

<main class="main">
    <div class="container">
        <h2 class="main_title">「<?php the_search_query(); ?>」の検索結果</h2>
        <div class="row">
            <!-- ループの開始 -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <!-- 記事を取得して$postに代入 -->
            <?php the_post(); ?>

            <div class="col-md-4">
                <!-- テンプレートパーツを読み込む -->
                <?php get_template_part('template-parts/loop', 'park') ?>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-12 text-center">
                <p>検索結果はありませんでした。</p>
            </div>
            <!-- ループの終了 -->
            <?php endif; ?>
        </div>

        <!-- ページNavi -->
        <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        }
        ?>
    </div>

</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>