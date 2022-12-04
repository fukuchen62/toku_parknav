<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle"><?php the_title(); ?><span></h2>

<div class="content">
    <!-- 固定ページの内容を読み込んで表示させる -->
    <?php the_content(); ?>




</div>
<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>