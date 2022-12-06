<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<main class="main">
    <div class="container">
        <div class="content">
            <!-- 固定ページの内容を読み込んで表示させる -->
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>