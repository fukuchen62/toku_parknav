<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- トップページの場合は、キービジュアルを表示させる -->
<?php if (is_home()) : ?>
<div class="jumbotron">
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
    <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
</div>
<?php endif; ?>


<!-- おしらせ -->
<section class="sec">
    <div class="container">
        <header class="sec_header">
            <h2 class="title">おしらせ</h2>
        </header>

        <!-- 一覧表示 -->
        <div class="row">
            <!-- ループの開始 -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <!-- 記事を取得して$postに代入 -->
            <?php the_post(); ?>

            <div class="col-md-4">
                <!-- テンプレートパーツを読み込む -->
                <?php //get_template_part('template-parts/loop', 'news') ?>
            </div>

            <?php endwhile; ?>
            <!-- ループの終了 -->
            <?php endif; ?>
        </div>

        <p class="sec_btn">
            <?php
            // $news = get_term_by('slug', 'news', 'category');
            // $newslink = get_term_link($news, 'category');
            ?>
            <a href="<?php //echo $newslink; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>

            <a href="<?php //echo home_url('/category/news/') ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
        </p>
    </div>
</section>

<!-- <section class="sec bg-gray">
    <div class="container">
        <header class="sec_header">
            <h2 class="title">店舗情報<span>INFORMATION</span></h2>
        </header>

        <div class="row">
            <div class="col-md-6">
                <a href="<?php //echo get_permalink('36') ?>" class="bnr" style="background-image: url('<?php //echo get_template_directory_uri(); ?>/assets/img/home/bnr_about@2x.jpg')">
                    <div class="bnr_inner">
                        わたしたちについて<span>ABOUT</span>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="<?php //echo get_permalink('44') ?>" class="bnr" style="background-image: url('<?php //echo get_template_directory_uri(); ?>/assets/img/home/bnr_access@2x.jpg')">
                    <div class="bnr_inner">
                        アクセス<span>ACCESS</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="sec sec-bg">
    <div class="sec_inner">
        <header class="sec_header">
            <h2 class="title">お問い合わせ<span>CONTACT</span></h2>
        </header>

        <div class="sec_body contact">
            <div class="contact_icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="contact_body">
                <p>
                    お気軽にお問い合わせください
                    <span>03-1234-5678</span>
                </p>
            </div>
        </div>

        <div class="sec_btn">
            <?php //echo do_shortcode('[mwform_formkey key="81"]'); ?>

            <a href="<?php //echo home_url('/contact/') ?>" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section> -->

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>
