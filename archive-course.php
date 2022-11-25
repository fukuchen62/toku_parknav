<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">コース<span>COURSE</span></h2>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- サイドバーの読み込み -->
<?php get_sidebar('course'); ?>

<!-- サイドバーのサブカテゴリーの作成方法を考える -->
<?php get_sidebar('purpose'); ?>

<?php
// タクソノミkindの要素を取得する
$args = array(
    'taxonomy' => 'purpose',
);
$purposes = get_terms($args);
?>
<!-- タクソノミーのメニューボタンを作成 -->
<?php //if (!empty($kinds)) :
?>

<!-- <div class="pageNav">
    <ul>
        // kindに属する種類を一つずつリンクボタンを作成
        <?php //foreach ($kinds as $key => $kind) :
        ?>
        <li>
            <a href="<?php //echo get_term_link($kind);
                        ?>">
                <?php //echo $kind->name;
                ?>
            </a>
        </li>
        <?php //endforeach;
        ?>
    </ul>
</div> -->
<?php //endif;
?>

<main class="main">

    <!-- 料理別にグルーピングして表示させる -->
    <?php
    // タクソノミkindの要素を取得する
    // $args = array(
    //     'taxonomy' => 'kind',
    // );
    // $kinds = get_terms($args);
    ?>

    <!-- タクソノミーのメニューボタンを作成 -->
    <?php //if (!empty($kinds)) :
    ?>

    <!-- kindに属する種類を一つずつグループを作成 -->
    <?php //foreach ($kinds as $key => $kind) :
    ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $purpose->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($purpose->slug); ?></span>
            </div>

            <div class="row justify-content-center">
                <!-- 検索用サブクエリを定義 -->
                <?php
                // 投稿タイプ
                $args = array(
                    'post_type' => 'course',
                    'posts_per_page' => -1,
                );

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
                $the_query = new WP_Query($args);
                ?>

                <!-- ループの開始 -->
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : ?>
                <!-- メニューを取得して$postに代入 -->
                <?php $the_query->the_post(); ?>

                <!-- 繰り返しメニューのカード型 -->
                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'course') ?>
                </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php //endforeach;
    ?>
    <?php //endif;
    ?>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>