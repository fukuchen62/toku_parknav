<!-- <section class="menu">
    <a href="<?php //the_permalink();
                ?>">
        <figure class="menu_pic">
            <?php //if (has_post_thumbnail()) :
            ?>
            <?php //the_post_thumbnail('medium')
            ?>
            <?php //else :
            ?>
            <img src="<?php //echo get_template_directory_uri();
                        ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
            <?php //endif;
            ?>
        </figure>
        <h3 class="menu_title"><?php //the_title();
                                ?></h3>
        <div class="menu_desc">
            <?php //the_excerpt();
            ?>
        </div>
    </a>
</section> -->


<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail') ?>
        <?php else : ?>


        <!-- 記事画像 -->
        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">

        <?php endif; ?>

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