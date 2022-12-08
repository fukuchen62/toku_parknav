<!-- header -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_search_keywords.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>

    <!-- <p class="pkz"><?php //echo do_shortcode('[flexy_breadcrumb]');
                        ?></p> -->
    <section>
        <h2 class="h2_under">「<?php the_search_query(); ?>」の検索結果</h2>

        <!-- 公園の検索結果 -->
        <div class="inner_under">
            <h3>該当する公園</h3>
            <!-- card_flexの指定 -->
            <div class="card_flex">
                <?php
                $park = get_search_query();
                //print_r($park);

                if (!empty($park)) {

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
                <div class="card_wrap animate">
                    <a href="<?php the_permalink(); ?>">

                        <!-- 記事画像 -->
                        <?php $img = get_field('park_image_1'); ?>
                        <img class="card_img" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <!-- メインタイトル（公園名） -->
                            <div class="card_ttl">
                                <h2>
                                                <?php
                                                // 文字数制限の設定
                                                $ttl = get_the_title();
                                                if (mb_strlen($ttl) >= 20) {
                                                    $title = mb_substr($ttl, 0, 20) . "…";
                                                } else {
                                                    $title = $ttl;
                                                }
                                                echo $title;
                                                ?>
                                            </h2>
                            </div>

                            <!-- 記事本文 -->
                            <div class="card_txt">
                                <p>
                                                <?php
                                                // 文字数制限の設定
                                                $exc = get_the_excerpt();
                                                if (mb_strlen($exc) >= 75) {
                                                    $except = mb_substr($exc, 0, 75) . "…";
                                                } else {
                                                    $except = $exc;
                                                }
                                                echo $except;
                                                ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <p class="search_else">
                            該当する公園はありません。
                        </p>
                <?php endif; ?>

                <?php } else { ?>
                <p class="search_else">
                        該当する公園はありません。
                    </p>
                <?php } ?>
            </div>

        </div>

        <div class="inner_under">
            <!-- コースの検索結果 -->
            <h3>該当するモデルコース</h3>

            <!-- card_flexの指定 -->
            <div class="card_flex">
                <?php
                $course = get_search_query();
                //print_r($park);

                if (!empty($course)) {
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
                <div class="card_wrap animate">
                    <a href="<?php the_permalink(); ?>">

                        <!-- 記事画像 -->
                        <?php $img = get_field('course_image1'); ?>
                        <img class="card_img" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

                        <!-- 文章部分の枠 -->
                        <div class="card_container">
                            <!-- メインタイトル -->
                            <div class="card_ttl">
                                <h2>
                                                <?php
                                                // 文字数制限の設定
                                                $ttl = get_the_title();
                                                if (mb_strlen($ttl) >= 20) {
                                                    $title = mb_substr($ttl, 0, 20) . "…";
                                                } else {
                                                    $title = $ttl;
                                                }
                                                echo $title;
                                                ?>
                                            </h2>
                            </div>

                            <!-- 記事本文 -->
                            <div class="card_txt">
                                <p>
                                                <?php
                                                // 文字数制限の設定
                                                $exc = get_the_excerpt();
                                                if (mb_strlen($exc) >= 75) {
                                                    $except = mb_substr($exc, 0, 75) . "…";
                                                } else {
                                                    $except = $exc;
                                                }
                                                echo $except;
                                                ?>
                                            </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <p class="search_else">
                            該当するコースはありません。
                        </p>
                <?php endif; ?>

                <?php } else { ?>
                <p class="search_else">
                        該当するコースはありません。
                    </p>
                <?php } ?>
            </div>
        </div>


    </section>

</main>

<!-- フッター -->
<?php get_footer(); ?>