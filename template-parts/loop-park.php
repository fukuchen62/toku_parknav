<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium') ?>
        <?php else : ?>

        <!-- 記事画像 -->
        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
        <?php endif; ?>

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <div class="card_inner">
                <!-- サブタイトル(地域表示) -->
                <h3 class="card_subttl"><?php //single_term_title();
                                        //echo $term;
                                        //echo $term_name
                                        echo $term->name.
                                        ?></h3>

                <!-- メインタイトル（公園名） -->
                <h2 class="card_ttl "><?php the_title(); ?></h2>
                <!-- 記事本文 -->
                <div class="card_txt ">
                    <?php the_content(); ?>
                    <!-- <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
                    </p> -->
                </div>
            </div>
        </div>
    </a>
</div>