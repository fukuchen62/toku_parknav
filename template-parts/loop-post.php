<!-- <article class="news"> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('news test'); ?>>
    <!-- アイキャッチ画像 -->
    <div class="news_pic">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail() ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
            <?php endif; ?>
        </a>
    </div>
    <div class="news_meta">
        <!-- カテゴリー -->
        <?php the_category(); ?>
        <!-- 投稿日時 -->
        <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time('Y年m月d日'); ?>
        </time>
    </div>
    <!-- 記事のタイトル -->
    <h2 class="news_title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <!-- 記事の概要 -->
    <div class="news_desc">
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>
