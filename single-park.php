<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php get_template_part('template-parts/breadcrumb'); ?>

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
            <span><?php the_field('playground_name1'); ?></span>
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
                        <span><?php the_field('facility'); ?></span>
                        <?php
								if (get_field('facility')) {
									$msg = '必要あり';
								} else {
									$msg = '必要なし';
								}
								?>
                        <span><?php echo $msg; ?></span>
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





<!-- 近くの公園（３つ）カード型を呼び出す -->
<!-- 以下参考コード、あとで修正 -->

<?php
// おすすめの記事一覧を取得
$posts = get_field('recommend');
if( $posts ):
?>
<div class="post-wrapper">
    <?php foreach( $posts as $post ): ?>
        <div class="post-list">
        <a href="<?php echo get_permalink( $post->ID ); ?>">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
        <?php echo get_the_title( $post->ID ); ?>
        </a>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>




<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>