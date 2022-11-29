<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">モデルコース</h2>

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
<?php if (!empty($purposes)) :
?>
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
    <?php
    // URLのパラメータからタクソノミの値を取得する
    $purpose_slug = get_query_var('purpose');
    // タクソノミの値にてそのタクソノミを取得する
    $purpose = get_term_by('slug', $purpose_slug, 'purpose');
    ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $purpose->name; ?></h2>
            </div>

            <div class="row justify-content-center">

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

                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'course') ?>
                </div>

                <?php endwhile;
                endif; ?>

            </div>
        </div>
    </section>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>