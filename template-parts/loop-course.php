<!-- カード1つ分 -->
<div class="card_wrap animate">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <!-- <?php //$img = get_field('course_image1');
                ?>
        <img class="card_img" src="<?php //echo $img['sizes']['medium'];
                                    ?>" alt="<?php echo $img['alt']; ?>"> -->

        <?php if (has_post_thumbnail()) :
        ?>
        <?php the_post_thumbnail('thumbnail');
            ?>
        <?php endif; ?>


        <!-- 文章部分の枠 -->
        <div class="card_container">
            <!-- メインタイトル -->
            <div class="card_ttl">
                <h2>
                    <?php
                    // 文字数制限の設定
                    $ttl = get_the_title();
                    if (mb_strlen($ttl) >= 18) {
                        $title = mb_substr($ttl, 0, 20) . "…";
                    } else {
                        $title = $ttl;
                    }
                    echo $title;
                    ?>
                </h2>
            </div>

            <!-- 記事本文 -->
            <div class="card_txt">
                <p>
                    <?php
                    // 文字数制限の設定
                    $exc = get_the_excerpt();
                    if (mb_strlen($exc) >= 75) {
                        $except = mb_substr($exc, 0, 75) . "…";
                    } else {
                        $except = $exc;
                    }
                    echo $except;
                    ?>
                </p>
            </div>
        </div>
    </a>
</div>