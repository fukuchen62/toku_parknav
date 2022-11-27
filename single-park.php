<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- ループの開始 -->
<?php //if (have_posts()) :
?>
<?php //while (have_posts()) :
?>
<!-- 記事を取得して$postに代入 -->
<?php //the_post();
?>

<main class="main">
    <section class="sec">
        <div class="container">
            <div class="article article-menu">
                <div class="row">
                    <div class="col-12 col-md-6">


                        <!-- 公園タイトル、概要テキスト、写真を読み込む -->
                        <h2 class="article_title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php the_field('discription'); ?>


                    <div class="col-12 col-md-6">
                        <div class="article_pic">
                            <?php
                            $pic = get_field('park_image_1');
                            // 大サイズ画像URL
                            $pic_url = $pic['sizes']['large'];
                            ?>
                            <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--遊具の名前、写真、説明、療育コメントを読み込む  -->
        <div class="col-12 col-md-6">
            <h3><?php the_field('playground_name1'); ?></h3>
            <div class="article_pic">
                <?php
                $pic = get_field('playground_image1');
                // 大サイズ画像URL
                $pic_url = $pic['sizes']['large'];
                ?>
                <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
            </div>
        </div>

        <li>
            <b>療育コメント</b>
            <span><?php the_field('playground_comment1'); ?></span>
        </li>
        <li>
            <b>遊具の説明</b>
            <span><?php the_field('playground_description1'); ?></span>
        </li>



        <div class="col-12 col-md-6">
            <h3><?php the_field('playground_name2'); ?></h3>
            <div class="article_pic">
                <?php
                $pic = get_field('playground_image2');
                // 大サイズ画像URL
                //$pic_url = $pic['sizes']['large'];
                ?>
                <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
            </div>
        </div>

        <li>
            <b>療育コメント</b>
            <span><?php the_field('playground_comment2'); ?></span>
        </li>
        <li>
            <b>遊具の説明</b>
            <span><?php the_field('playground_description2'); ?></span>
        </li>



        <div class="col-12 col-md-6">
            <h3><?php the_field('playground_name3'); ?></h3>
            <div class="article_pic">
                <?php
                $pic = get_field('playground_image3');
                // 大サイズ画像URL
                //$pic_url = $pic['sizes']['large'];
                ?>
                <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
            </div>
        </div>

        <li>
            <b>療育コメント</b>
            <span><?php the_field('playground_comment3'); ?></span>
        </li>
        <li>
            <b>遊具の説明</b>
            <span><?php the_field('playground_description3'); ?></span>
        </li>




        <!-- 公園のデータを読み込む -->
        <div class="info">
            <div class="container">
                <ul class="info_list">
                    <li>
                        <b>公園名</b>
                        <span><?php the_field('park_name'); ?></span>
                    </li>
                    <li>
                        <b>住所</b>
                        <span><?php the_field('address'); ?></span>
                    </li>
                    <li>
                        <b>利用・営業時間</b>
                        <span><?php the_field('business_hours'); ?></span>
                    </li>
                    <li>
                        <b>敷地面積</b>
                        <span><?php the_field('sitearea'); ?></span>
                    </li>
                    <li>
                        <b>管理会社</b>
                        <span><?php the_field('organizer'); ?></span>
                    </li>
                    <li>
                        <b>電話番号</b>
                        <span><?php the_field('tel'); ?></span>
                    </li>
                    <li>
                        <b>E-mail</b>
                        <span><?php the_field('email'); ?></span>
                    </li>
                    <li>
                        <b>公式HP</b>
                        <span><?php the_field('url'); ?></span>
                    </li>
                    <li>
                        <b>設備など</b>
                        <span>
                            <?php
                            $facility = get_field('facility');
                            echo implode('、', $facility);
                            ?></span>
                    </li>
                    <li>
                        <b>地図</b>
                        <span><?php the_field('iflame'); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <!-- モデルコースへのリンク -->
    <div class="col-12">
        <div class="sec_btn">
            <a href="<?php echo get_permalink(115); ?>" class="btn btn-default">モデルコースのカード型<i class="fas fa-angle-right"></i></a>
        </div>
    </div>


    <!-- 近くの公園（３つ）カード型を呼び出す -->
    <!-- 以下参考コード、あとで修正 -->
    <?php
    // おすすめの記事一覧を取得
    //$posts =// get_field('recommend');
    //if ($posts) :
    //
    ?>
    <div class="post-wrapper">
        <?php //foreach ($posts as $post) :
        ?>
        <div class="post-list">
            <a href="<?php //echo get_permalink($post->ID);
                        ?>">
                <img src="<?php //echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            ?>">
                <?php //echo get_the_title($post->ID);
                ?>
            </a>
        </div>
        <?php //endforeach;
        ?>
    </div>
    <? php // endif;
    ?>
</main>

<!--参考その２  -->

<?php
//$args = array(
//'post_type' => 'park', // 投稿タイプを指定
//'orderby' => 'rand', // ランダムで表示
//'posts_per_page' => 3, // 表示する記事数
//'post__not_in' => array($post->ID) // 現在表示している記事を除外
//);
//$post_query = new WP_Query($args);
//if ($post_query->have_posts()) :
//while ($post_query->have_posts()) : $post_query->the_post();
//
?>

<!-- ここにhtml -->
<? php // endwhile;
//else :
//
?>
<!-- <p>記事は見つかりませんでした</p> -->
<? //php
//endif;
//wp_reset_postdata();
?>





<?php //endwhile;
?>
<!-- ループの終了 -->
<?php //endif;
?>


<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>