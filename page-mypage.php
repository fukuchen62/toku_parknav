<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<main>
    <!-- お気に入り一覧表示 -->
    <section>
        <h2>お気に入り一覧</h2>

        <!-- データの取得 -->
        <?php
        // データ保存
        $parks = [];
        $parks_count = 0;

        if (function_exists('get_user_favorites')) {
            $favorites = get_user_favorites();
            krsort($favorites);

            //sprint_r($favorites);
        }

        // サブクエリの発行
        if ($favorites) {
            $args = array(
                'post_type' => 'park',
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true,
                'post__in' => $favorites,
                'orderby' => 'post__in',
            );

            $the_query = new WP_Query($args);
        }
        ?>

        <!-- カード表示 -->
        <?php
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();


                // マップに使用
                // フィールドから経度の取得
                $latitude = get_field('latitude');
                // フィールドから緯度の取得
                $longitude = get_field('longitude');
                // 公園名の取得
                $text = esc_html(get_field('park_name'));

                // フィールドから取得したデータを配列$parksに格納
                $parks['lat'][] = $latitude;
                $parks['lng'][] = $longitude;
                $parks['text'][] = $text;

                //print_r($parks);
        ?>

        <div class="menu">
            <a href="<?php the_permalink(); ?>">
                <figure class="menu_pic">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium') ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
                    <?php endif; ?>
                </figure>
                <h3 class="menu_title"><?php the_title(); ?></h3>
                <div class="menu_desc">
                    <?php the_excerpt(); ?>
                </div>
            </a>
        </div>

        <?php
                $parks_count++;
            //print_r($parks_count);

            endwhile;
            wp_reset_postdata();

        else :
            // No Favorites
            echo '<p class="text-center">お気に入りがありません。</p>';

        endif;

        ?>
    </section>

    <!-- マップ表示 -->
    <!-- グーグルマップAPI使用 -->
    <section class="map-box content">
        <h2 class="ta-a h2 mb30 map-sub">MAP</h2>
        <div id="map" style="width:620px; height:400px"></div>
    </section>
</main>

<script type="text/javascript">
function initMap() {
    // 表示設定
    const color = "black"; // ラベルの色
    const font_family = 'Kosugi Maru' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    const font_weight = "bold"

    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
    var opts = {
        // 地図のズームを指定
        zoom: 9.2,
        // 地図の中心を指定
        center: latlng,
        // マップタイプの設定
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // マップ生成
    // 地図を生成 → #mapに埋め込み
    var map = new google.maps.Map(document.getElementById("map"), opts);

    // console.log(map);

    // マーカー生成
    let parks = [];

    //console.log("確認表示");

    // 経度、緯度、公園名を配列$parksから取り出す
    //
    <?php
        for ($i = 0; $i < $parks_count; $i++) {
            echo "parks[${i}]={lat:";
            echo $parks['lat'][$i];
            echo ', lng:';
            echo $parks['lng'][$i];
            echo ', text:"';
            echo $parks['text'][$i];
            echo "\",
                color: \"#AD7000\",
                font_family: 'Kosugi Maru',
                    font_size: \"14px\",
                font_weight: \"bold\",};";

            echo "\n";
        }
        ?>

    //console.log("かくにん");

    //マップ上にマーカーの生成
    var marker = new google.maps.Marker();

    for (let i = 0; i < parks.length; i++) {
        marker = new google.maps.Marker({
            position: parks[i],
            label: parks[i],
            map: map,
        });
    }

    // マーカー表示
    marker.setMap(map);
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>


<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>