<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- お気に入り一覧 -->
<section>
    <h2>お気に入り一覧</h2>
    <?php
    $favorites = get_user_favorites();
    if (isset($favorites) && !empty($favorites)) :
        foreach ($favorites as $favorite) :
        <!-- // echo '<div>' . get_the_title($favorite) . get_favorites_button($favorite) . '</div>'; -->
        if($favorite->have_post()):
            while($favorite->have_post()):
            $favorite->the_post();?>
        <div>
            <?php get_template_part('template-parts/loop','park') ?>
        </div>
        <?php
            endwhile;
        endforeach;
    //else :
        // No Favorites
        //echo '<p class="text-center">お気に入りがありません。</p>';
    endif;
    ?>
</section>

<!-- マップ表示 -->
<?php
    $favorites = [];
    $parks = [];

    $favorites = get_user_favorites();
    if (isset($favorites) && !empty($favorites)) :
        foreach ($favorites as $favorite) :
            $lat = get_field('lattitude'),
            $lng = get_field('longtitude'),
            $name = get_field('park_name'),
?>

<section class="map-box content">
    <h2 class="ta-a h2 mb30 map-sub">MAP</h2>
    <div id="map" style="width:620px; height:400px"></div>
</section>

<script type="text/javascript">
    function initMap() {

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

        // 例
        // spots[0] = {
        //     lat: 34.06505,
        //     lng: 134.56786,
        //     text: "みなと公園",
        //     color: "black",
        //     fontFamilt: 'Kosugi Maru',
        //     fontSize: "14px",
        //     fontWeight: "bold",
        // };
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
