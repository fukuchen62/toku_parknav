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

        <!-- カードとページをまとめるdiv -->
        <div>
            <!-- ↓ここに選んだカテゴリ名が入る。 -->
            <?php
            $count_pages = wp_count_posts();
            $num = $count_pages->publish;
            // echo '記事数は' . $num . '件です';
            ?>
            <h2 class="h2_under">モデルコース一覧（<?php echo $num; ?>）</h2>

            <div class="card_flex">


                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <!-- カード型の呼び出し -->
                <?php get_template_part('template-parts/loop', 'course') ?>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>
            <?php wp_reset_postdata(); ?>

            <!-- ページネーション -->
            <?php wp_pagenavi(); ?>

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