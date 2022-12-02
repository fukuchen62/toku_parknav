<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="./assets/img/key-under/key_under_search.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <h2 class="h2_under">公園検索</h2>

    <!-- 条件ボタン -->
    <div class="search_btn_wrap">
        <?php
        // タクソノミーpurposeの要素を取得する
        $args = array(
            'taxonomy' => 'area',
        );
        $areas = get_terms($args);
        ?>
        <!-- タクソノミーのメニューボタンを作成 -->
        <?php if (!empty($areas)) :
        ?>
        <div class="pageNav">
            <ul>
                <!-- kindに属する種類を一つずつリンクボタンを作成 -->
                <?php foreach ($areas as $key => $area) : ?>
                <li>
                    <a href="<?php echo get_term_link($area); ?>">
                        <?php echo $area->name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
                <li><a href="echo get_term_link('/');"></a></li>
            </ul>
        </div>


        <!-- <a href="#" class="search_btn search_btn_north">東部</a>
        <a href="#" class="search_btn search_btn_east">南部</a>
        <a href="#" class="search_btn search_btn_south">西部</a> -->
        <a href="./park_search.html" class="search_btn search_btn_terms">詳細検索</a>
    </div>

    <!-- カードとページをまとめるdiv -->
    <div>
        <?php
        // URLのパラメータからタクソノミの値を取得する
        $area_slug = get_query_var('area');
        // タクソノミの値にてそのタクソノミを取得する
        $area = get_term_by('slug', $area_slug, 'area');
        ?>

        <!-- 東部エリア -->
        <h2 class="h2_under"><?php echo $area->name; ?></h2>
        <div class="card_flex">
            <!-- ループの開始 -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <!-- メニューを取得して$postに代入 -->
            <?php the_post(); ?>

            <!-- 繰り返しメニューのカード型 -->
            <div class="col-md-3">
                <?php get_template_part('template-parts/loop', 'park') ?>
            </div>

            <?php endwhile; ?>
            <!-- ループの終了 -->
            <?php endif; ?>
        </div>

        <!-- ページネーション -->
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
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>