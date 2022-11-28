<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- ループの開始 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : ?>
<!-- 記事を取得して$postに代入 -->
<?php the_post(); ?>

<!-- <h2 class="pageTitle">わたしたちについて<span>ABOUT</span></h2> -->
<h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span></h2>

<main class="main">
    <div class="container">
        <div class="content">
            <!-- 固定ページの内容を読み込んで表示させる -->
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>