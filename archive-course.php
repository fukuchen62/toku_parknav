<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">モデルコース<span>course</span></h2>

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
            <!-- <div class="sec_header">
                <h2 class="title title-jp"><?php //echo $kind->name; ?></h2>
                <span class="title title-en"><?php //echo strtoupper($kind->slug); ?></span>
            </div> -->

            <div class="row justify-content-center">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
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
