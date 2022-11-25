<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<!-- サイドバーの設計 -->
<?php
// タクソノミーpurposeの要素を取得する
$args = array(
    'taxonomy' => 'purpose',
);
$purposes = get_terms($args);
?>
<!-- タクソノミーのメニューボタンを作成 -->
<?php if (!empty($purposes)) : ?>
<div class="pageNav">
    <ul>
        <!-- kindに属する種類を一つずつリンクボタンを作成 -->
        <?php foreach ($purposes as $key => $purpose) : ?>
        <li>
            <a href="<?php echo get_term_link($purpose); ?>">
                <?php echo $purpose->name; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<main class="main">
    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $kind->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($kind->slug); ?></span>
            </div>

            <div class="row justify-content-center">
                <!-- 検索用サブクエリを定義 -->
                <?php
                // 投稿タイプ
                // $args = array(
                //     'post_type' => 'menu',
                //     'posts_per_page' => -1,
                // );

                // 料理の種類で絞り込む
                // $taxquerysp = array(
                //     'relation' => 'AND',
                // );
                // $taxquerysp[] = array(
                //     'taxonomy' => 'kind',
                //     'terms' => $kind->slug,
                //     'field' => 'slug',
                // );
                // $args['tax_query'] = $taxquerysp;

                // print_r($args);

                // サブクエリを生成
                // $the_query = new WP_Query($args);
                ?>

                <!-- ループの開始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <!-- メニューを取得して$postに代入 -->
                <?php the_post(); ?>

                <!-- 繰り返しメニューのカード型 -->
                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'course') ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>


<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>