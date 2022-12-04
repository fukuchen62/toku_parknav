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
        <?php foreach ($areas as $key => $area) : ?>
        <!-- 地域ボタン -->
        <div class="search_btn search_btn_north">
            <a href="<?php echo get_term_link($area); ?>"><?php echo $area->name; ?></a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <!-- 詳細検索ボタン -->
        <div class="search_btn search_btn_terms">
            <a href="<?php echo home_url('/park/?s='); ?>">詳細検索</a>
        </div>
    </div>

    <!-- カードとページをまとめるdiv -->
    <div>
        <?php
        // URLのパラメータからタクソノミの値を取得する
        $area_slug = get_query_var('area');
        // タクソノミの値にてそのタクソノミを取得する
        $area = get_term_by('slug', $area_slug, 'area');
        ?>

        <h2 class="h2_under"><?php echo $area->name; ?></h2>
        <div class="card_flex">
            <!-- ループの開始 -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <!-- カード型の呼び出し -->
            <?php get_template_part('template-parts/loop', 'park') ?>

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
