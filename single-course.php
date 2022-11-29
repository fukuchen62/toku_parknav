<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">モデルコース一覧</h2>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

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
                            <?php the_post_thumbnail('large') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info">

            <?php for ($i = 1; $i <= 8; $i++) : ?>
            <?php
                        //写真パス
                        $pic = "";
                        if (get_field('course_image' . $i)) {
                            $pic = get_field('course_image' . $i);
                            $pic_url = esc_url($pic['url']);
                        }

                        // ディスクリプション
                        $course_discription = get_field('course_discription' . $i);
                        // コース時間
                        $course_time = get_field('course_time' . $i);
                        ?>

            <?php if ($pic != '') : ?>
            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <img src="<?php echo $pic_url;
                                                        ?>" alt="<?php echo $pic['alt'];
                                                                    ?>">
                        </span>
                    </li>
                    <li>
                        <span><?php echo $course_discription; ?></span>
                    </li>
                    <li>
                        <span>
                            <?php echo $course_time; ?>
                        </span>
                    </li>
                </ul>
            </div>
            <?php endif; ?>

            <?php endfor; ?>

    </section>
</main>

<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>