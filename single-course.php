<!-- header -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="./assets/img/key-under/key_img.jpg" alt="">
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
                    <?php
                            // URLのパラメータからタクソノミの値を取得する
                            $purpose_slug = get_query_var('purpose');
                            // タクソノミの値にてそのタクソノミを取得する
                            $purpose = get_term_by('slug', $purpose_slug, 'purpose');
                            ?>
                    <?php foreach ($purpose as $key => $purpose) : ?>
                    <li>
                        <a href="<?php echo get_term_link($purpose); ?>">
                            <?php echo $purpose->name; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <!-- <li>一日</li>
                    <li>ピクニック</li>
                    <li>遊具遊び</li> -->
                </ul>

                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large') ?>
                <?php endif; ?>
                <!-- <img class="course_top_img" src="./assets/img/uploads/c-dummy.jpg" alt="コース詳細一枚目"> -->

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

            <!-- コースコンテンツ(ループ部分) -->
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
            <div class="course_box">
                <div class="time_box">
                    <img class="course_img" src="<?php //echo $pic_url;
                                                                    ?>" alt="<?php echo $pic['alt'];
                                                                                ?>">
                    <div class="course_time"><?php echo $course_time; ?></div>

                </div>
                <p class="txt"><?php echo $course_discription; ?></p>
                <img class="separater_img" src="assets/img/course_separater.png" alt="コース区切り画像">
            </div>

            <?php endif; ?>
            <?php endfor; ?>

            <?php endwhile; ?>
            <?php endif; ?>

            <!-- 関連する公園ページの出力 -->
            <section>

                <h3>ここで紹介した公園の<br>
                    詳細情報はこちら</h3>
                <!-- card_flexの指定 -->
                <div class="card_flex">

                    <?php
                    $park = get_field('park_id');
                    //print_r($park);

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
                    <?php //get_template_part('template-part/loop', 'park')
                            ?>
                    <div class="card_wrap">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="menu_pic">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail') ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                                <?php endif; ?>
                            </figure>
                            <h3 class="menu_title"><?php the_title(); ?></h3>
                            <div class="menu_desc">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- <div class="card_wrap">
                        <a href="#">
                            // 記事画像
                            <img class="card_img" src="./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
                            // 文章部分の枠
                            <div class="card_container">
                                <div class="card_inner">
                                    // サブタイトル
                                    <h3 class="card_subttl">西部</h3>
                                    // メインタイトル
                                    <h2 class="card_ttl ">レインボーオアシスパーク</h2>
                                    // 記事本文
                                    <div class="card_txt ">
                                        <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </section>
        </div>

        <!-- カテゴリバー -->
        <div class="sidebar_box">
            <?php
                    // タクソノミーpurposeの要素を取得する
                    $args = array(
                        'taxonomy' => 'purpose',
                    );
                    $purposes = get_terms($args);
                    ?>
            <!-- タクソノミーのメニューボタンを作成 -->
            <?php if (!empty($purposes)) :
                    ?>
            <aside class="sidebar">
                <h3 class="category_ttl">カテゴリ一覧</h3>
                <ul>
                    <!-- kindに属する種類を一つずつリンクボタンを作成 -->
                    <?php foreach ($purposes as $key => $purpose) : ?>
                    <li>
                        <a href="<?php echo get_term_link($purpose); ?>">
                            <?php echo $purpose->name; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    <!-- <li><a href="#">たっぷり一日コース</a>
                        <hr>
                    </li>
                    <li><a href="#">お手軽半日コース</a>
                        <hr>
                    </li>
                    <li><a href="#">BBQコース</a>
                        <hr>
                    </li>
                    <li><a href="#">ピクニックコース</a>
                        <hr>
                    </li>
                    <li><a href="#">デイキャンプコース</a>
                        <hr>
                    </li>
                    <li><a href="#">ボール遊びコース</a>
                        <hr>
                    </li>
                    <li><a href="#">水遊びコース</a>
                        <hr>
                    </li>
                    <li><a href="#">遊具遊びコース</a>
                        <hr>
                    </li> -->
                </ul>
            </aside>
            <?php endif; ?>
        </div>
    </div>
    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>