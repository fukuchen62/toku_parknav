<!-- カード1つ分 -->
<div class="card_wrap">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <?php if (has_post_thumbnail()) :
        ?>
        <?php the_post_thumbnail('thumbnail')
            ?>
        <?php else :
        ?>
        <img src="<?php echo get_template_directory_uri();
                        ?>/assets/img/news1080_720" alt="お知らせ">
        <?php
            // echo '<img src="';
            // echo  get_template_directory_uri();
            // echo '/assets/img/news1080_720"' . ' alt="お知らせ"';
            ?>
        <?php endif;
        ?>

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <!-- メインタイトル -->
            <div class="card_ttl">
                <h2>
                    <a href="<?php the_permalink(); ?>">
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
                    </a>
                </h2>
            </div>
            <!-- 記事本文 -->
            <div class="card_txt ">
                <a href="<?php the_permalink(); ?>">
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
                </a>
            </div>
        </div>

    </a>
</div>