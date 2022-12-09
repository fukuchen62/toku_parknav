<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_search.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <h2 class="h2_under">公園一覧</h2>

    <!-- 条件ボタン -->
    <div class="search_btn_wrap">
        <?php
        // タクソノミーpurposeの要素を取得する
        $args = array(
            'taxonomy' => 'area',
            'orderby' => 'slug',
            'order' => 'asc',
        );
        $areas = get_terms($args);
        ?>
        <!-- タクソノミーのメニューボタンを作成 -->
        <?php if (!empty($areas)) :
        ?>
        <?php foreach ($areas as $key => $area) : ?>
        <!-- 地域ボタン -->
        <!-- <a href="<?php echo get_term_link($area); ?>" class="search_btn"> -->
        <div class="search_btn search_btn_north">
            <a href="<?php echo get_term_link($area); ?>">
                <?php echo $area->name; ?>
            </a>
        </div>
        <!-- </a> -->
        <?php endforeach; ?>
        <?php endif; ?>
        <!-- 詳細検索ボタン -->
        <a href="<?php echo home_url('/?search_type=park'); ?>" class="search_btn">
            <div class="search_btn_terms">
                詳細検索
            </div>
        </a>
    </div>

    <!-- カードとページをまとめるdiv -->
    <div>
        <?php
        // URLのパラメータからタクソノミの値を取得する
        //$area_slug = get_query_var('area');
        // タクソノミの値にてそのタクソノミを取得する
        //$area = get_term_by('slug', $area_slug, 'area');
        ?>

        <!-- <h2 class="h2_under"><?php //echo $area->name;
                                    ?></h2> -->
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
        <?php wp_pagenavi(); ?>

    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>