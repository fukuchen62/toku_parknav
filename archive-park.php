<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">地域<span>area</span></h2>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<?php
// タクソノミの要素を取得する
$args = array(
    'taxonomy' => 'area',
);
$ares = get_terms($args);
?>
<!-- タクソノミーのメニューボタンを作成 -->
<?php if (!empty($areas)) : ?>
<div class="pageNav">
    <ul>
        <!-- areaに属する種類を一つずつリンクボタンを作成 -->
        <?php foreach ($areas as $key => $area) : ?>
        <li>
            <a href="<?php echo get_term_link($area); ?>">
                <?php echo $area->name; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<main class="main">
    <!-- 地域別にグルーピングして表示させる -->
    <?php
    // タクソノミareaの要素を取得する
    $args = array(
        'taxonomy' => 'area',
    );
    $areas = get_terms($args);
    ?>
    <!-- タクソノミーのメニューボタンを作成 -->
    <?php if (!empty($areas)) : ?>

    <!-- areaに属する種類を一つずつグループを作成 -->
    <?php foreach ($areas as $key => $area) : ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $area->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($area->slug); ?></span>
            </div>

            <div class="row justify-content-center">
                <!-- 検索用サブクエリを定義 -->
                <?php
                        // 投稿タイプ
                        $args = array(
                            'post_type' => 'area',
                            'posts_per_page' => -1,
                        );

                        // 料理の種類で絞り込む
                        $taxquerysp = array(
                            'relation' => 'AND',
                        );
                        $taxquerysp[] = array(
                            'taxonomy' => 'area',
                            'terms' => $area->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $taxquerysp;

                        // print_r($args);

                        // サブクエリを生成
                        $the_query = new WP_Query($args);
                        ?>

                <!-- ループの開始 -->
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : ?>
                <!-- メニューを取得して$postに代入 -->
                <?php $the_query->the_post(); ?>

                <!-- 繰り返しメニューのカード型 -->
                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'area') ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php endforeach; ?>
    <?php endif; ?>
</main>


<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>