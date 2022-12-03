<!-- header -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="./assets/img/key-under/key_under_search_keywords.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>

    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>
    <section>
        <h2 class="h2_under">「<?php the_search_query(); ?>」検索結果</h2>

        <!-- 公園の検索結果 -->
        <h3>該当する公園</h3>
        <!-- card_flexの指定 -->
        <div class="card_flex">
            <?php
            $park = get_search_query();
            //print_r($park);
            $args = array(
                'post_type' => 'park',
                's' => $park,
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>

            <!-- カード1つ分 -->
            <?php //get_template_part('template-part/loop', 'park')
                    ?>
            <div class="card_wrap">
                <a href="<?php the_permalink(); ?>">
                    <!-- アイキャッチ -->
                    <figure class="menu_pic">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail') ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                        <?php endif; ?>
                    </figure>
                    <!-- タイトル -->
                    <h3 class="menu_title"><?php the_title(); ?></h3>
                    <!-- 説明文(抜粋) -->
                    <div class="menu_desc">
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p>
                    <center>該当する記事はありません。</center>
                </p>
            <?php endif; ?>
        </div>




        <!-- コースの検索結果 -->
        <h3>該当するモデルコース</h3>

        <!-- card_flexの指定 -->
        <div class="card_flex">
            <?php
            $course = get_search_query();
            //print_r($park);

            $args = array(
                'post_type' => 'course',
                's' => $course,
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>

            <!-- カード1つ分 -->
            <?php //get_template_part('template-part/loop', 'park')
                    ?>
            <div class="card_wrap">
                <a href="<?php the_permalink(); ?>">
                    <!-- アイキャッチ -->
                    <figure class="menu_pic">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail') ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                        <?php endif; ?>
                    </figure>
                    <!-- タイトル -->
                    <h3 class="menu_title"><?php the_title(); ?></h3>
                    <!-- 説明文(抜粋) -->
                    <div class="menu_desc">
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p>
                    <center>該当する記事はありません。</center>
                </p>
            <?php endif; ?>
        </div>


    </section>

</main>

<!-- フッター -->
<?php get_footer(); ?>