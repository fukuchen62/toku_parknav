<!-- カード1つ分 -->
<div class="card_wrap animate">
    <a href="<?php the_permalink(); ?>">

        <!-- 記事画像 -->
        <?php $img = get_field('park_image_1'); ?>
        <img class="card_img" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <div class="card_inner">

                <!-- サブタイトル(地域表示) -->
                <!-- <h3 class="card_subttl">
                    <?php
                    // $taxonomy_slug = 'area'; // 任意のタクソノミースラッグを指定
                    // $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                    // if (!empty($category_terms)) { // 変数が空でなければ true
                    //     if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true
                    //         echo '<ul>';
                    //         foreach ($category_terms as $category_term) { // タームのループを開始
                    //             echo  $category_term->name;
                    //         } // ループの終了
                    //         echo '</ul>';
                    //     }
                    // }
                    ?>
                </h3> -->

                <!-- メインタイトル（公園名） -->
                <div class="card_ttl">
                    <h2>
                        <?php
                        // 文字数制限の設定
                        $ttl = get_the_title();
                        if (mb_strlen($ttl) >= 20) {
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
                        ?></p>
                </div>
            </div>
        </div>
    </a>
</div>