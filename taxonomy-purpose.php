<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_archive_course.jpg" alt="キービジュアル写真">
    <div class="key_circle"></div>
</div>

<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <div class="flex_box">
        <?php
        // URLのパラメータからタクソノミの値を取得する
        $purpose_slug = get_query_var('purpose');
        // タクソノミの値にてそのタクソノミを取得する
        $purpose = get_term_by('slug', $purpose_slug, 'purpose');
        ?>
        <!-- カードとページをまとめるdiv -->
        <div class="article_bar">
            <!-- ↓ここに選んだカテゴリ名が入る。 -->
            <?php
            $args = array(
                'post_type' => 'course',
                'post_per_page' => -1,
            );

            $taxquerysp = array('relation' => 'AND');
            $taxquerysp[] = array(
                'taxonomy' => 'purpose',
                'terms' => $purpose->slug,
                'field' => 'slug',
            );

            $args['tax_query'] = $taxquerysp;

            $query = new WP_Query($args);
            $num = $query->found_posts;
            ?>

            <h2 class="h2_under">
                <?php echo $purpose->name; ?>
                （<?php echo $num; ?>）
            </h2>

            <div class="card_flex">

                <?php //$paged = get_query_var('paged') ? get_query_var('paged') : 1;
                ?>
                <?php //query_posts("posts_per_page=6 & paged=$paged");
                ?>

                <?php
                if ($query->have_posts()) : //query_posts($query_string . '&posts_per_page=6&tax=purpose');
                    while ($query->have_posts()) :
                        $query->the_post(); ?>

                <?php get_template_part('template-parts/loop', 'course') ?>

                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <?php if (function_exists("wp_pagenavi")) wp_pagenavi(); ?>




        </div>

        <!-- カテゴリバー -->
        <div class="sidebar_box">
            <aside class="sidebar">
                <!-- サイドバーの設計 -->
                <?php
                // タクソノミーpurposeの要素を取得する
                $args = array(
                    'taxonomy' => 'purpose',
                    'field' => 'slug',
                    'exclude' => array(10, 11),
                    //'operator' => 'NOT IN',
                    'order' => 'ASC'
                );
                $purposes = get_terms($args);
                ?>
                <!-- タクソノミーのメニューボタンを作成 -->
                <?php if (!empty($purposes)) : ?>
                <h3 class="category_ttl">カテゴリ一覧</h3>
                <ul>
                    <!-- ベタ打ち -->
                    <li>
                        <a href="<?php echo home_url('/purpose/allday/'); ?>">一日たっぷり</a>
                        <hr>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/purpose/halfday/'); ?>">半日お手軽</a>
                        <hr>
                    </li>
                    <!-- kindに属する種類を一つずつリンクボタンを作成 -->
                    <!-- 自動取得 -->
                    <?php foreach ($purposes as $key => $purpose) : ?>
                    <li>
                        <a href="<?php echo get_term_link($purpose); ?>">
                            <?php echo $purpose->name; ?>
                        </a>
                        <hr>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>