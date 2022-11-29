<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2 class="pageTitle">公園検索</h2>

<!-- 地域選択ボタンの設計 -->
<?php
$args => array(
    'taxonomy' => 'area',
)
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

<h2 class="pageTitle">公園検索 結果一覧</h2>

<?php
$selected_terms = $_GET['name'];

if(selected_terms){
    $taxquery_taxonomy = array(

    )
}

// $args = array(
//     'post_type' => 'park',
//     'tax_query' => array(
//         'relation' => 'AND',
//         array(
//             'taxonomy' => 'area',
//             'field' => 'slug',
//             'terms' => array('east','west','north'),
//             'operator' => 'IN',
//         )
//     ),
//     );
?>

<?php get_footer(); ?>