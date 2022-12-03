<!-- カード1つ分 -->
<div class="card_wrap">
    <a class="test" href="<?php the_permalink(); ?>">
        <!-- 記事画像 -->
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail') ?>
        <?php else : ?>
        <img class="card_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/C-rainbow/P-rainbow-eyecatchig.JPG" alt="ダミー画像">
        <?php endif; ?>

        <!-- 文章部分の枠 -->
        <div class="card_container">
            <div class="card_inner">

                <!-- サブタイトル(地域表示) -->
                <h3 class="card_subttl">
                    <?php
                    $taxonomy_slug = 'area'; // 任意のタクソノミースラッグを指定
                    $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                    if (!empty($category_terms)) { // 変数が空でなければ true
                        if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true
                            echo '<ul>';
                            foreach ($category_terms as $category_term) { // タームのループを開始
                                echo  $category_term->name;
                            } // ループの終了
                            echo '</ul>';
                        }
                    }
                    ?>
                </h3>

                <!-- メインタイトル（公園名） -->
                <h2 class="card_ttl "><?php the_title(); ?></h2>

                <!-- 記事本文 -->
                <div class="card_txt ">
                    <?php //the_content();
                    ?>
                    <?php the_excerpt(); ?>
                    <!-- <p>2022年8月にリニューアルされたレインボーオアシスパーク。吉野川ハイウェイオアシスに併設されているため、旅の途中でも寄りや…
    </p> -->
                </div>
            </div>
        </div>
    </a>
</div>
