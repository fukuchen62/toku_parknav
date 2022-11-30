<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<main>
    <!-- お気に入り一覧表示 -->
    <section>
        <h2>お気に入り一覧</h2>

        <!-- データの取得 -->
        <?php
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
                $longtitude = get_field('longtitude');
                // 公園名の取得
                $text = esc_html(get_field('park_name'));

                $parks = [];

                $parks['lat'][] = $latitude;
                $parks['lng'][] = $longtitude;
                $parks['text'][] = $text;
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
                    <?php the_content(); ?>
                </div>
            </a>
        </div>

        <?php
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

    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
    var opts = {
        zoom: 9.2,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // マップ生成
    var map = new google.maps.Map(document.getElementById("map"), opts);

    // マーカー生成
    // フォント変えられる
    let courses = [];

    // 経度、緯度、公園名を取得
    <?php
        for ($i = 0; $i < $course_count; $i++) {
            echo "courses[${i}]={lat:";
            echo $courses[$i]['lat'];
            echo ', lng:';
            echo $courses[$i]['lng'];
            echo ', text:"';
            echo $courses[$i]['text'];
            echo "\",
                color: \"#AD7000\",
                fontFamilt: 'Kosugi Maru',
                    fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>


    // マップ上にマーカーの生成
    var marker = new google.maps.Marker();
    for (let i = 0; i < courses.length; i++) {
        marker = new google.maps.Marker({
            position: courses[i],
            label: courses[i],
            map: map
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