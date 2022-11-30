<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<h2 class="pageTitle">モデルコース一覧</h2>

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

<!-- ループの開始 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : ?>
<!-- 記事を取得して$postに代入 -->
<?php the_post(); ?>

<main class="main">
    <section class="sec">
        <div class="container">
            <div class="article article-menu">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="article_title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="article_pic">
                            <?php the_post_thumbnail('large') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info">

            <?php for ($i = 1; $i <= 8; $i++) : ?>
            <?php
                        //写真パス
                        $pic = "";
                        if (get_field('course_image' . $i)) {
                            $pic = get_field('course_image' . $i);
                            $pic_url = esc_url($pic['url']);
                        }

                        // ディスクリプション
                        $course_discription = get_field('course_discription' . $i);
                        // コース時間
                        $course_time = get_field('course_time' . $i);
                        ?>

            <?php if ($pic != '') : ?>
            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <img src="<?php echo $pic_url;
                                                        ?>" alt="<?php echo $pic['alt'];
                                                                    ?>">
                        </span>
                    </li>
                    <li>
                        <span><?php echo $course_discription; ?></span>
                    </li>
                    <li>
                        <span>
                            <?php echo $course_time; ?>
                        </span>
                    </li>
                </ul>
            </div>
            <?php endif; ?>

            <?php endfor; ?>
        </div>
    </section>

    <section>
        <div>
            <h2>このコースで紹介した公園はこちら</h2>
            <div>
                <?php
                        $park = get_field('park_id');
                        // print_r($park);

                        $args = array(
                            'post_type' => 'park',
                            'p' => $park,
                            // 'post_per_page' => -1
                        );

                        // $metaquerysp =  array('relation' => 'AND');
                        // $metaquerysp[] = array(
                        //     'key' => 'park_id',
                        //     'value' => $park,
                        //     'type' => 'CHAR',
                        //     'compare' => '=',
                        // );

                        // $args['meta_query'] = $metaquerysp;

                        print_r($args);

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                        ?>
                <div>
                    <?php //get_template_part('template-part/loop', 'park')
                                    ?>

                    <div class="menu">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="menu_pic">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium') ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                                <?php endif; ?>
                            </figure>
                            <h3 class="menu_title"><?php the_title(); ?></h3>
                            <div class="menu_desc">
                                <?php the_content(); ?>
                            </div>
                        </a>
                    </div>

                </div>
                <?php
                            endwhile;
                        endif;
                        ?>
            </div>
        </div>
    </section>
</main>

<?php endwhile;
    ?>
<!-- ループの終了 -->
<?php endif;
?>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>