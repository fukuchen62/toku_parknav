<!-- header -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_single_park.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>
    <div class="wrap">
        <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

        <!-- ループの開始 -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <!-- 記事を取得して$postに代入 -->
        <?php the_post(); ?>

        <section>
            <h2 class="h2_under"><?php the_title(); ?></h2>
            <div class="row_flex">
                <?php
                        $pic = get_field('park_image_1');
                        // 大サイズ画像URL
                        $pic_url = $pic['sizes']['medium'];
                        ?>
                <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
                <div class="column_flex">
                    <p class="txt"><?php the_content(); ?></p>
                    <div class="icon_flex">
                        <div class="clipicon_tooltip">
                            <?php echo get_favorites_button(get_the_ID()); ?>
                            <div class="clipicon_description">お気に入り登録</div>
                        </div>
                        <div class="iineicon_tooltip">
                            <?php echo do_shortcode('[wp_ulike]'); ?>
                            <div class="iineicon_description">いいね！</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgcolor_cream">
            <h3>遊具データ</h3>

            <ul>
                <!-- 療育コンテンツ(ループ部分) -->
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <?php
                            //写真パス
                            $pic = "";
                            if (get_field('playground_image' . $i)) {
                                $pic = get_field('playground_image' . $i);
                                $pic_url = $pic['sizes']['medium'];
                            }

                            // 遊具名
                            $playground_name = get_field('playground_name' . $i);

                            // ディスクリプション
                            $playground_description = get_field('playground_description' . $i);
                            ?>

                <?php if ($pic != '') : ?>
                <li class="row_flex">
                    <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['alt']; ?>">
                    <div>
                        <h4><?php echo $playground_name ?></h4>
                        <p class="txt"><?php echo $playground_description ?></p>
                    </div>
                </li>
                <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </section>

        <section>
            <h3>基本情報</h3>
            <table>
                <tr>
                    <th>公園名</th>
                    <td><?php the_field('park_name'); ?></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><?php the_field('address'); ?></td>
                </tr>
                <tr>
                    <th>利用時間</th>
                    <td><?php the_field('business_hours'); ?></td>
                </tr>
                <tr>
                    <th>敷地面積</th>
                    <td><?php the_field('sitearea'); ?></td>
                </tr>
                <tr>
                    <th>管理会社</th>
                    <td><?php the_field('organizer'); ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php the_field('tel'); ?></td>
                </tr>

                <tr>
                    <th>E-mail</th>
                    <td><?php the_field('email'); ?></td>
                </tr>
                <tr>
                    <th>公式HP</th>
                    <td><?php the_field('url'); ?></td>
                </tr>
                <tr>
                    <th>設備など</th>
                    <td>
                        <?php
                                $facility = get_field('facility');
                                // print_r($facility);

                                if (!empty($facility)) {
                                    foreach ($facility as $value) {
                                        if (trim($value) == 'トイレ') {
                                            echo '<img src="';
                                            echo  get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon10.svg"' . ' alt="トイレ"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '授乳室') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon07.svg"' . ' alt="授乳室"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == 'おむつ替え') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon03.svg"' . ' alt="おむつ替え"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '無料駐車場') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon09.svg"' . ' alt="無料駐車場"' . 'class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '有料駐車場') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon08.svg"' . ' alt="有料駐車場"' . 'class="park_icon"';
                                            echo '>';
                                        } elseif ($value == 'BBQエリア') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon11.svg"' . ' alt="BBQエリア"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == 'キャンプエリア') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon12.svg"' . ' alt="キャンプエリア"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '芝生エリア') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon01.svg"' . ' alt="芝生エリア"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '自動販売機') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon06.svg"' . ' alt="自動販売機"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '売店') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon04.svg"' . ' alt="売店"' . 'class="park_icon"';
                                            echo '>';
                                        } elseif ($value == '屋根付き休憩所') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon05.svg"' . ' alt="屋根付き休憩所"' . ' class="park_icon"';
                                            echo '>';
                                        } elseif ($value == 'ユニバーサルデザイン') {
                                            echo '<img src="';
                                            echo get_template_directory_uri();
                                            echo '/assets/img/park-icon/park_icon02.svg"' . ' alt="ユニバーサルデザイン"' . 'class="park_icon"';
                                            echo '>';
                                        };
                                    };
                                };

                                //echo implode('、', $facility);
                                ?>
                    </td>
                </tr>
                <tr>
                    <th>備考</th>
                    <td>
                        <?php the_field('memo'); ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <div class="map_dummy">
                            <?php the_field('iflame'); ?>
                        </div>
                    </th>
                </tr>
            </table>
        </section>

        <?php endwhile; ?>
        <!-- ループの終了 -->
        <?php endif; ?>

        <section>
            <h3>
                この公園はこちらの記事でも<br>紹介しています
            </h3>
            <!-- card_flexの指定 -->
            <div class="card_flex">
                <?php
                $course = get_field('course_id');
                $args = array(
                    'post_type' => 'course',
                    'p' => $course,
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                ?>

                <?php get_template_part('template-parts/loop', 'course') ?>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>
            </div>
    </div>

    <!-- 近くの公園（３つ）カード型を呼び出す -->
    <h3>近くの公園はこちら</h3>
    <!-- card_flexの指定 -->
    <div class="card_flex">
        <?php
        $args = array(
            'post_type' => 'park', // 投稿タイプを指定
            'orderby' => 'rand', // ランダムで表示
            'posts_per_page' => 3, // 表示する記事数
            'post__not_in' => array($post->ID) // 現在表示している記事を除外
        );

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) :
            while ($post_query->have_posts()) :
                $post_query->the_post();
        ?>

        <?php get_template_part('template-parts/loop', 'park') ?>

        <?php endwhile; ?>
        <!-- ループの終了 -->
        <?php endif; ?>
    </div>
    </section>

    <!-- 左向き矢印ボタン -->
    <!-- <div class="prev_btn">
                <a href="search.html">
                    <img src="assets/img/prev_btn_cream.png" alt="左向き矢印ボタン">
                    <p>検索一覧へ</p>
                </a>
            </div> -->
    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>