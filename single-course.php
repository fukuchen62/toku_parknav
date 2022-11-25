<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

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

                    <div class="col-12 col-md-6">
                        <div class="article_pic">
                            <?php
                                    $pic = get_the_post_thumbnail();
                                    // 大サイズ画像URL
                                    // $pic_url = $pic['sizes']['large'];
                                    ?>
                            <img src="<?php echo $pic_url; ?>" alt="<?php //echo $pic['filename'];
                                                                            ?>">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <h2 class="article_title"><?php the_field('plice'); ?></h2>
                        <div class="content">
                            <?php the_field('memo'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info">
            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <?php
                                $pic = get_field('course_image1');
                                // 大サイズ画像URL
                                $pic_url = $pic['sizes']['large'];
                                ?>
                        <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
                    </li>
                    <li>
                        <!-- <b>価格</b> -->
                        <span><?php the_field('course_discription1'); ?></span>
                    </li>
                    <li>
                        <!-- <b>価格</b> -->
                        <div class="article_pic">
                            <?php
                                    $pic = get_field('playground_image1');
                                    // 大サイズ画像URL
                                    $pic_url = $pic['sizes']['medium'];
                                    ?>
                            <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
                        </div>
                        <span><?php the_field('course_time1'); ?></span>
                    </li>
                </ul>
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