<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

    <!-- キービジュアル -->
    <div class="key_wrap">
        <img class="key_img" src="./assets/img/key-under/key_img.jpg" alt="">
        <div class="key_circle"></div>
    </div>

    <main>
        <!-- パンくずリストを読み込む -->
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

        <div class="flex_box">
            <div>
                <?php
                // URLのパラメータからタクソノミの値を取得する
                $purpose_slug = get_query_var('purpose');
                // タクソノミの値にてそのタクソノミを取得する
                $purpose = get_term_by('slug', $purpose_slug, 'purpose');
                ?>

                <!-- ↓ここに選んだカテゴリ名が入る。 -->
                <h2 class="h2_under"><?php echo $purpose->name; ?></h2>
                <div class="card_flex">
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

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post(); ?>

                        <?php get_template_part('template-parts/loop', 'course') ?>

                        <?php endwhile;
                    endif; ?>
                </div>

                <!-- ページネーション -->
                <ul class="pagination">
                    <li class="disabled">
                        <a href="#"><i class="fas fa-angle-left"></i></a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>

            </div>

            <!-- カテゴリバー -->
            <?php
            // タクソノミーpurposeの要素を取得する
            $args = array(
                'taxonomy' => 'purpose',
            );
            $purposes = get_terms($args);

            //タクソノミーのメニューボタンを作成
            if (!empty($purposes)) :
            ?>

            <div class="sidebar_box">
                <aside class="sidebar">
                    <h3 class="category_ttl">カテゴリ一覧</h3>
                    <ul>
                        <?php foreach ($purposes as $key => $purpose) : ?>
                        <li>
                            <a href="<?php echo get_term_link($purpose); ?>">
                                <?php echo $purpose->name; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </aside>
            </div>
        </div>


    </main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>
