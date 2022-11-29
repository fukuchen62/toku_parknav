<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2 class="pageTitle">公園検索</h2>

<!-- 地域選択ボタンの設計 -->
<?php
$args = array(
    'taxonomy' => 'area',
);
$areas = get_terms($args);
?>

<!-- タクソノミーのメニューボタンを作成 -->
<?php if (!empty($areas)) : ?>
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
    </ul>
</div>
<?php endif; ?>

<main class="main">
    <h2 class="pageTitle">公園検索 結果一覧</h2>

    <?php
    $selected_terms_area = $_GET['area'];
    $selected_terms_purpose = $_GET['purpose'];
    $selected_terms_playground = $_GET['playground'];

    if ($selected_terms) {};

    $args = array(
        'post_type' => 'park',
        'post_per_page' => -1,
    );

    $taxquerysp = array('relation' => 'AND');
    $taxquerysp[] = array(
        'taxonomy' => 'area',
        'term' => ,
        'field' => 'slug',
    );

    $args['tax_query'] = $taxquerysp;

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while($query->have_posts()) :
            $query->the_post(); ?>

    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'park') ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>


    // if(selected_terms){
    // $taxquery_taxonomy = array(

    // )
    // }

    // $args = array(
    // 'post_type' => 'park',
    // 'tax_query' => array(
    // 'relation' => 'AND',
    // array(
    // 'taxonomy' => 'area',
    // 'field' => 'slug',
    // 'terms' => array('east','west','north'),
    // 'operator' => 'IN',
    // )
    // ),
    // );
    ?>
</main>

<?php get_footer(); ?>