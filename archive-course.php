<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_img.jpg" alt="">
    <div class="key_circle"></div>
</div>

<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>


    <div class="flex_box">

        <!-- カードとページをまとめるdiv -->
        <div>
            <!-- ↓ここに選んだカテゴリ名が入る。 -->

            <h2 class="h2_under">モデルコース一覧</h2>

            <div class="card_flex">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <!-- カード型の呼び出し -->
                <?php get_template_part('template-parts/loop', 'course') ?>

                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>

            <!-- ページネーション ★あとでphp書き換え必要-->
            <ul class="pagination">
                <li class="disabled">
                    <a href="#"><i class="fas fa-angle-left"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>

        </div>

        <!-- カテゴリバー -->
        <div class="sidebar_box">
            <aside class="sidebar">
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
                <h3 class="category_ttl">カテゴリ一覧</h3>
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
            </aside>
        </div>
        <?php endif; ?>

    </div>


</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>