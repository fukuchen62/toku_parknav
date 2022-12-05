<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <?php if (has_post_thumbnail()) :
        ?>
        <div class="card_img1"><?php the_post_thumbnail('thumbnail') ?></div>


        <?php else :
        ?>
        <img class="card_img" src="<?php echo get_template_directory_uri();
                                        ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
        <?php endif;
        ?>

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