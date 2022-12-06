<!-- ヘッダー -->
<?php get_header(); ?>

<!-- キービジュアルのダミーブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_park_search.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>


<main>
    <p class="pkz"><?php //echo do_shortcode('[flexy_breadcrumb]');
                    ?></p>

    <form class="search_wrap">
        <input type="hidden" name="search_type" value="park">
        <input type="hidden" name="s" value="">
        <!-- <div class="search_wrap"> -->
        <h2 class="search_ttl">公園詳細検索</h2>

        <div class="search_container">
            <!-- 検索項目「地域別」 -->
            <div class="item item_area">
                <h3 class="item_ttl i_ttl_1">地域</h3>
                <ul>
                    <li>
                        <input type="checkbox" name="area[]" value="east" id="area_1">
                        <label for="area_1">東部</label>
                    </li>
                    <li>
                        <input type="checkbox" name="area[]" value="south" id="area_2">
                        <label for="area_2">南部</label>
                    </li>
                    <li>
                        <input type="checkbox" name="area[]" value="west" id="area_3">
                        <label for="area_3">西部</label>
                    </li>
                </ul>
            </div>

            <!-- 検索項目「目的別」 -->
            <div class="item item_pur">
                <h3 class="item_ttl i_ttl_2">目的</h3>
                <ul>
                    <li>
                        <input type="checkbox" name="purpose[]" value="bbq" id="pur_1">
                        <label for="pur_1">BBQ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="purpose[]" value="picnic" id="pur_2">
                        <label for="pur_2">ピクニック</label>
                    </li>
                    <li>
                        <input type="checkbox" name="purpose[]" value="ballplay" id="pur_3">
                        <label for="pur_3">ボール遊び</label>
                    </li>
                    <li>
                        <input type="checkbox" name="purpose[]" value="watergame" id="pur_4">
                        <label for="pur_4">水遊び</label>
                    </li>
                    <li>
                        <input type="checkbox" name="purpose[]" value="daycamp" id="pur_5">
                        <label for="pur_5">デイキャンプ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="purpose[]" value="playground" id="pur_6">
                        <label for="pur_6">遊具遊び</label>
                    </li>
                </ul>
            </div>


            <!-- 検索項目「遊具別」 -->
            <div class="item item_tool">
                <h3 class="item_ttl i_ttl_3">遊具</h3>
                <ul class="c_tool_flex">
                    <li>
                        <input type="checkbox" name="playground[]" value="slide" id="tool_1">
                        <label for="tool_1">すべり台</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="swing" id="tool_2">
                        <label for="tool_2">ぶらんこ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="chin_up_bar" id="tool_3">
                        <label for="tool_3">鉄棒</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="climbing_pole" id="tool_4">
                        <label for="tool_4">上り棒</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="monkey_bar" id="tool_5">
                        <label for="tool_5">うんてい</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="seesaw" id="tool_6">
                        <label for="tool_6">シーソー</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="spring_rider" id="tool_7">
                        <label for="tool_7">スイング<br><span>（スプリング遊具）</span></label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="jungle_gym" id="tool_8">
                        <label for="tool_8"><span>ジャングルジム</span></label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="playground_equipment_small" id="tool_9">
                        <label for="tool_9">複合遊具（小）</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="playground_equipment_big" id="tool_10">
                        <label for="tool_10">複合遊具（大）</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="roller_slide" id="tool_11">
                        <label for="tool_11"><span>ローラーすべり台</span></label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="zipline" id="tool_12">
                        <label for="tool_12"><span>ターザンロープ</span></label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="sandbox" id="tool_13">
                        <label for="tool_13">砂場</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="water" id="tool_14">
                        <label for="tool_14">水遊び場</label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="climbing" id="tool_15">
                        <label for="tool_15"><span>ザイルクライミング</span></label>
                    </li>
                    <li>
                        <input type="checkbox" name="playground[]" value="unique" id="tool_16">
                        <label for="tool_16"><span>ユニークな遊具</span></label>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 「リセット」と「検索」ボタン -->
        <div class="search_btn_wrap">
            <input type="reset" value="リセット" class="search_btn search_btn_reset">
            <input type="submit" value="検索" class="search_btn search_btn_search">
        </div>
        <!-- </div> -->
    </form>
    <!-- 詳細検索部分終わり -->

    <!-- カードとページをまとめるdiv -->
    <div class="card_wrap_set">
        <!-- ↓ここに選んだカテゴリ名が入る。 -->
        <h2 class="h2_under">検索結果一覧</h2>
        <?php
        if (isset($_GET['area'])) {
            $selected_area = $_GET['area'];
            //print_r($selected_area);
        }

        if (isset($_GET['purpose'])) {
            $selected_purpose = $_GET['purpose'];
            //print($selected_purpose);
        }

        if (isset($_GET['playground'])) {
            $selected_playground = $_GET['playground'];
            //print_r($selected_playground);
        }


        $args = array(
            'post_type' => 'park',
            'posts_per_page' => -1,
        );
        $taxquerysp = array('relation' => 'AND');

        if (!empty($selected_area)) {
            $taxquerysp[] = array(
                'taxonomy' => 'area',
                'terms' => $selected_area,
                'field' => 'slug',
            );
        };

        if (!empty($selected_purpose)) {
            $taxquerysp[] = array(
                'taxonomy' => 'purpose',
                'terms' => $selected_purpose,
                'field' => 'slug',
            );
        }

        $metaquerysp = array('relation' => 'AND');
        if (!empty($selected_playground)) {
            foreach ($selected_playground as $key => $value) {
                $metaquerysp[] = array(
                    'key' => 'playground_list',
                    'value' => trim($value),
                    'type' => 'CHAR',
                    'compare' => 'LIKE'
                );
            }
        }
        ?>

        <div class="card_flex">
            <?php
            $args['tax_query'] = $taxquerysp;
            $args['meta_query'] = $metaquerysp;

            // print_r($args);

            $query = new WP_Query($args);
            ?>

            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>

            <?php get_template_part('template-parts/loop', 'park'); ?>

            <?php endwhile; ?>

            <?php else : ?>
            <!-- no data -->
            <p>検索結果がありません</p>

            <?php endif; ?>
        </div>

        <!-- ページネーション -->
        <?php wp_pagenavi(); ?>

    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>