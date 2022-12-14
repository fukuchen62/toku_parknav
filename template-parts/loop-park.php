<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <?php $img = get_field('park_image_1'); ?>
        <img class="card_img" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <!-- メインタイトル（公園名） -->
            <div class="card_ttl">
                <h2>
                    <?php
                    // 文字数制限の設定
                    $ttl = get_the_title();
                    if (mb_strlen($ttl) >= 18) {
                        $title = mb_substr($ttl, 0, 18) . "…";
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
                    ?></p>
            </div>
        </div>
    </a>
</div>