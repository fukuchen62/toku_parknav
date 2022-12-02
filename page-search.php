<?php get_header(); ?>

<!-- パンくずリストを読み込む -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<!-- <h2 class="pageTitle">公園検索</h2> -->

<!-- 詳細検索フォーム -->
<form class="search_wrap">
    <input type="hidden" name="search_type" value="park">
    <input type="hidden" name="s" value="">
    <h2 class="search_ttl">公園詳細検索</h2>

    <div class="search_container">
        <!-- 検索項目「地域別」 -->
        <div class="item item_area">
            <h3 class="item_ttl i_ttl_1">地域</h3>
            <ul>
                <li>
                    <input type="checkbox" name="area[]" value="東部" id="area_1">
                    <label for="area_1">東部</label>
                </li>
                <li>
                    <input type="checkbox" name="area[]" value="南部" id="area_2">
                    <label for="area_2">南部</label>
                </li>
                <li>
                    <input type="checkbox" name="area[]" value="西部" id="area_3">
                    <label for="area_3">西部</label>
                </li>
            </ul>
        </div>

        <!-- 検索項目「目的別」 -->
        <div class="item item_pur">
            <h3 class="item_ttl i_ttl_2">目的</h3>
            <ul>
                <li>
                    <input type="checkbox" name="purpose[]" value="BBQ" id="pur_1">
                    <label for="pur_1">BBQ</label>
                </li>
                <li>
                    <input type="checkbox" name="purpose[]" value="ピクニック " id="pur_2">
                    <label for="pur_2">ピクニック</label>
                </li>
                <li>
                    <input type="checkbox" name="purpose[]" value="ボール遊び" id="pur_3">
                    <label for="pur_3">ボール遊び</label>
                </li>
                <li>
                    <input type="checkbox" name="purpose[]" value="水遊び" id="pur_4">
                    <label for="pur_4">水遊び</label>
                </li>
                <li>
                    <input type="checkbox" name="purpose[]" value="デイキャンプ" id="pur_5">
                    <label for="pur_5">デイキャンプ</label>
                </li>
                <li>
                    <input type="checkbox" name="purpose[]" value="遊具遊び" id="pur_6">
                    <label for="pur_6">遊具遊び</label>
                </li>
            </ul>
        </div>


        <!-- 検索項目「遊具別」 -->
        <div class="item item_tool">
            <h3 class="item_ttl i_ttl_3">遊具</h3>
            <ul class="c_tool_flex">
                <li>
                    <input type="checkbox" name="playground[]" value="すべり台" id="tool_1">
                    <label for="tool_1">すべり台</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ぶらんこ" id="tool_2">
                    <label for="tool_2">ぶらんこ</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="鉄棒" id="tool_3">
                    <label for="tool_3">鉄棒</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="上り棒" id="tool_4">
                    <label for="tool_4">上り棒</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="うんてい" id="tool_5">
                    <label for="tool_5">うんてい</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="シーソー" id="tool_6">
                    <label for="tool_6">シーソー</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="スイング" id="tool_7">
                    <label for="tool_7">スイング<br><span>（スプリング遊具）</span></label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ジャングルジム" id="tool_8">
                    <label for="tool_8"><span>ジャングルジム</span></label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="複合遊具（小）" id="tool_9">
                    <label for="tool_9">複合遊具（小）</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="複合遊具（大）" id="tool_10">
                    <label for="tool_10">複合遊具（大）</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ローラーすべり台" id="tool_11">
                    <label for="tool_11"><span>ローラーすべり台</span></label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ターザンロープ" id="tool_12">
                    <label for="tool_12"><span>ターザンロープ</span></label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="砂場" id="tool_13">
                    <label for="tool_13">砂場</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="水遊び場" id="tool_14">
                    <label for="tool_14">水遊び場</label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ザイルクライミング" id="tool_15">
                    <label for="tool_15"><span>ザイルクライミング</span></label>
                </li>
                <li>
                    <input type="checkbox" name="playground[]" value="ユニークな遊具" id="tool_16">
                    <label for="tool_16"><span>ユニークな遊具</span></label>
                </li>
            </ul>
        </div>
    </div>

    <!-- 「リセット」と「検索」ボタン -->
    <div class="search_btn_wrap">
        <input type="reset" name="reset" value="リセット" class="search_btn search_btn_reset">
        <input type="submit" name="submimt" value="検索" class="search_btn search_btn_search">
    </div>
</form>


<!-- 詳細検索 結果一覧 -->
<main class="main">



    <h2 class="pageTitle">公園検索 結果一覧</h2>

    <?php

    // $selected_terms_area = $_GET['area'];
    // $selected_terms_purpose = $_GET['purpose'];
    // $selected_terms_playground = $_GET['playground'];

    // print_r($selected_terms_area);
    // print_r($selected_terms_purpose);
    // print_r($selected_terms_playground);

    // $args = array(
    //     'post_type' => 'park',
    //     'post_per_page' => -1,
    // );

    // if (!empty($selected_terms_area)) {
    //     $taxquery_area = array('relation' => 'AND');
    //     $taxquery_area[] = array(
    //         'taxonomy' => 'area',
    //         'term' => $selected_terms_area,
    //         'field' => 'slug',
    //     );
    // };

    // if (!empty($selected_terms_purpose)) {
    //     $taxquery_purpose = array('relation' => 'AND');
    //     $taxquery_purpose[] = array(
    //         'taxonomy' => 'purpose',
    //         'term' => $selected_terms_purpose,
    //         'field' => 'slug',
    //     );
    // }

    // if (!empty($selected_terms_playground)) {
    //     $metaquery = array('relation' => 'AND');
    //     $metaquery[] = array(
    //         'key' => 'playground_slug',
    //         'value' => $selected_terms_playground,
    //         'type' => 'CHAR',
    //     );
    // }

    // $args = array(
    //     'post_type' => 'park',
    //     'posts_per_page' => -1,
    //     's' => get_search_query(),
    //     'tax_query' => array(
    //         'relation' => 'AND',
    //         $taxquery_area,
    //         $taxquery_purpose,
    //         $metaquery
    //     ),
    // );

    // $args['tax_query']
    //     = $taxquery_area;

    // $query = new WP_Query($args);

    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'park') ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>