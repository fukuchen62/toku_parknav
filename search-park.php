<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2 class="pageTitle">公園検索</h2>

<!-- 詳細検索フォーム -->
<form method="get" action="<?php echo home_url('/'); ?>">
    <input type="hidden" name="search_type" value="park">

    <h3>エリア</h3>
    <?php $terms = get_terms('area'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="radio" name="area[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <h3>目的</h3>
    <?php $terms = get_terms('purpose'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="radio" name="purpose[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <h3>遊具</h3>
    <?php $terms = get_field('playground_slug'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="checkbox" name="playground[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <input type="clear" value="クリア">
    <input type="submit" value="検索">
</form>

<!-- 詳細検索 結果一覧 -->
<main class="main">
    <h2 class="pageTitle">公園検索 結果一覧</h2>

    <?php
    $selected_terms_area = $_GET['area'];
    $selected_terms_purpose = $_GET['purpose'];
    $selected_terms_playground = $_GET['playground'];

    // $args = array(
    //     'post_type' => 'park',
    //     'post_per_page' => -1,
    // );

    if ($selected_terms_area) {
        $taxquery_area = array('relation' => 'AND');
        $taxquery_area[] = array(
            'taxonomy' => 'area',
            'term' => $selected_terms_area,
            'field' => 'slug',
        );
    };

    if ($selected_terms_purpose) {
        $taxquery_purpose = array('relation' => 'AND');
        $taxquery_purpose[] = array(
            'taxonomy' => 'purpose',
            'term' => $selected_terms_purpose,
            'field' => 'slug',
        );
    }

    if ($selected_terms_playground) {
        $metaquery = array('relation' => 'AND');
        $metaquery[] = array(
            'key' => 'playground_slug',
            'value' => $selected_terms_playground,
            'type' => 'CHAR',
        );
    }

    $args = array(
        'post_type' => 'park',
        'posts_per_page' => -1,
        's' => get_search_query(),
        'tax_query' => array(
            'relation' => 'AND',
            $taxquery_area,
            $taxquery_purpose,
            $metaquery
        ),
    );

    // $args['tax_query']
    //     = $taxquery_area;

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post(); ?>

    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'park') ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>