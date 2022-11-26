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
    <?php
	// URLのパラメータからタクソノミの値を取得する
	$purpose_slug = get_query_var('purpose');
	// タクソノミの値にてそのタクソノミを取得する
	$purpose = get_term_by('slug',$purpose_slug,'purpose');

    //if( !empty($purpose)):
        //foreach($purpose as $purpose):
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
                    'taxonomy' => 'purpose',
                    'term' => $purpose->slug,
                    'posts_per_page' => -1,
                );
                $the_query = new WP_Query($args);

                //ループの開始
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                //メニューを取得して$postに代入
                $the_query->the_post(); ?>

                <!-- 繰り返しメニューのカード型 -->
                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'menu') ?>
                </div>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>
        </div>
    </section>

    <?php
        //endforeach;
    //endif;
    ?>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>
