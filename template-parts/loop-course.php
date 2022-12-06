<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <?php $img = get_field('course_image1'); ?>
        <img class="card_img" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <div class="card_inner">
                <!-- メインタイトル -->
                <h2 class="card_ttl "><?php the_title(); ?></h2>
                <!-- 記事本文 -->
                <div class="card_txt ">
                    <?php the_excerpt(); ?>
                    <!-- <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                    </p> -->
                </div>
            </div>
        </div>
    </a>
</div>