<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">公園検索<span>park</span></h2>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<main class="main">
    <?php
    // URLのパラメータからタクソノミの値を取得する
    $area_slug = get_query_var('area');
    // タクソノミの値にてそのタクソノミを取得する
    $area = get_term_by('slug', $area_slug, 'area');
    ?>

    <?php //get_search_form();
    ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $area->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($area->slug); ?></span>
            </div>

            <div class="row justify-content-center">

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
        </div>
    </section>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>