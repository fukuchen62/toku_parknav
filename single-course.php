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
            <?php //get_template_part('template-parts/loop','spend') ?>


            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image1');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription1');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time1');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image2');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription2');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time2');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image3');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription3');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time3');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image4');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription4');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time4');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image5');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription5');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time5');?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image6');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription6');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time6');?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- <div>
            <?php
            $args = array(
                'post_type' => 'course',
                'orderby' => 'rand',
                'posts_per_page' => 3,
                'post__not_in' => array($post->ID)
            );
            $post_query = new WP_Query($args);
            if($post_query->have_posts()):
                while($post_query->have_posts()):
                    $post_query->the_posts();?>
            <div>
            <?php get_template_part('template-parts/loop','course') ?>
            </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div> -->
    </section>
</main>

<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>
