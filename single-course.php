<!-- header -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_img.jpg" alt="">
    <div class="key_circle"></div>
</div>

<main>
    <!-- パンくずリスト -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <div class="flex_box">

        <!-- ループの開始 -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <!-- 記事を取得して$postに代入 -->
        <?php the_post(); ?>

        <!-- コース概要の出力 -->
        <div class="article_box">
            <section>
                <h2 class="h2_under"><?php the_title(); ?></h2>

                <!-- このコースのカテゴリ表示 -->
                <ul class="category_post">
                    <li>
                        <?php //the_field("purpose");
                                ?>
                        <?php
                                $taxonomy_slug = 'purpose'; // 任意のタクソノミースラッグを指定
                                $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                                if (!empty($category_terms)) { // 変数が空でなければ true
                                    if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true
                                        echo '<ul>';
                                        foreach ($category_terms as $category_term) { // タームのループを開始
                                            echo '#' .  $category_term->name . ' ';
                                        } // ループの終了
                                        echo '</ul>';
                                    }
                                }
                                ?>
                    </li>
                </ul>

                <?php
                        $pic = get_field('course_image1');
                        // 大サイズ画像URL
                        $pic_url = $pic['sizes']['large'];
                        ?>
                <img class="course_top_img" src="<?php echo $pic_url; ?>" alt="<?php echo $pic['alt']; ?>">

                <table>
                    <tr>
                        <th>所要時間</th>
                        <td><?php the_field("course_time"); ?></td>
                    </tr>
                    <tr>
                        <th>概要</th>
                        <td><?php the_content(); ?></td>
                    </tr>
                    <tr>
                        <th>備考</th>
                        <td><?php the_field("memo"); ?></td>
                    </tr>
                </table>

                <!-- いいね！ボタン -->
                <div class="iineicon_tooltip">
                    <?php echo do_shortcode('[wp_ulike]'); ?>
                    <div class="iineicon_description">いいね！</div>
                </div>
            </section>


            <div class="course_box">
                <!-- コースコンテンツ(ループ部分) -->
                <?php for ($i = 1; $i <= 8; $i++) : ?>
                <?php
                            //写真パス
                            $pic = "";
                            if (get_field('course_image' . $i)) {
                                $pic = get_field('course_image' . $i);
                                $pic_url = $pic['sizes']['large'];
                            }

                            // ディスクリプション
                            $course_discription = get_field('course_discription' . $i);

                            // コース時間
                            $course_time = get_field('course_time' . $i);
                            ?>

                <?php if ($pic != '') : ?>
                <div class="time_box">
                    <img class="course_img" src="<?php echo $pic_url; ?>" alt="<?php echo $pic['alt']; ?>">
                    <div class="course_time"><?php echo $course_time; ?></div>
                </div>
                <p class="txt"><?php echo $course_discription; ?></p>
                <img class="separater_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/course_separater.png" alt="コース区切り画像">

                <?php endif; ?>
                <?php endfor; ?>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>

            <!-- 関連する公園ページの出力 -->
            <section>
                <h3>ここで紹介した公園の<br>詳細情報はこちら</h3>

                <!-- card_flexの指定 -->
                <div class="card_flex">
                    <?php
                    $park = get_field('park_id');
                    $args = array(
                        'post_type' => 'park',
                        'p' => $park,
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                    ?>

                    <!-- カード1つ分 -->
                    <?php get_template_part('template-parts/loop', 'park') ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
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

<!-- フッター -->
<?php get_footer(); ?>