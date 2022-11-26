<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

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
                            <?php the_post_thumbnail('large')?>
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
                        <span>
                            <?php
                            $img1 = get_field('course_image1');
                            if(!empty($img1)):
                            ?>
                            <img src="<?php echo $img1['sizes']['medium']; ?>" alt="<?php echo $img1['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription1');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time1');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <span>
                        <?php
                            $img2 = get_field('course_image2');
                            if(!empty($img2)):
                            ?>
                            <img src="<?php echo the_field('course_image2')['sizes']['medium']; ?>" alt="<?php //echo $img2['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription2');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time2');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <?php
                            $img3 = get_field('course_image3');
                            if(!empty($img3)):
                            ?>
                            <img src="<?php echo $img3['sizes']['medium']; ?>" alt="<?php echo $img3['alt']; ?>">
                            <?php endif; ?>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription3');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time3');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <span><?php
                            $img4 = get_field('course_image3');
                            if(!empty($img4)):
                            ?>
                            <img src="<?php echo $img4['sizes']['medium']; ?>" alt="<?php echo $img4['alt']; ?>">
                            <?php endif; ?></span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription4');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time4');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <span><?php
                            $img5 = get_field('course_image5');
                            if(!empty($img5)):
                            ?>
                            <img src="<?php echo $img5['sizes']['medium']; ?>" alt="<?php echo $img5['alt']; ?>">
                            <?php endif; ?></span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription5');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time5');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <span><?php
                            $img6 = get_field('course_image6');
                            if(!empty($img6)):
                            ?>
                            <img src="<?php echo $img6['sizes']['medium']; ?>" alt="<?php echo $img6['alt']; ?>">
                            <?php endif; ?></span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription6');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time6');?>
                        </span>
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
