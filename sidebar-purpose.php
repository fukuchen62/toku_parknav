<?php
// サブクエリを記述
$args = array(
    'post_type' => 'course',        //投稿タイプ
    //'posts_per_page' => -1,        //読み込む件数 -1は全部

    'tax_query' => array(
        array(
            'taxonomy' => 'purpose',
            'terms' => $purposes->slug,
            'field' => 'slug',
        ),
    ),
);

// WP_Queryのオブジェクトを生成する
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()) : ?>
<aside class="archive">
    <h2 class="archive_title">コース一覧</h2>
    <ul class="archive_list">
        <?php while ($the_query->have_posts()) : ?>
        <?php $the_query->the_post(); ?>

        <li>
            <a href="<?php the_permalink(); ?>"><?php echo $the_query->name; ?></a>
        </li>
        <?php endwhile; ?>

        <!-- リセット -->
        <?php wp_reset_postdata(); ?>

    </ul>
</aside>
<?php endif; ?>