<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<main>
    <!-- お気に入り一覧表示 -->
    <section>
        <?php
        $favorites = get_user_favorites();

        print_r($favorites);

        if ($favorites) :
            $args[] = array(
                'post_type' => 'park',
                'post_per_page' => -1,
                'ignore_sticky_posts' => true,
                'post__in' => $favorites,
                'orderby' => 'post__in',
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_post()) :
                while ($the_query->have_post()) :
                    $the_query->the_post(); ?>

        <div class="col-md-3">
            <?php //get_template_part('template-parts/loop', 'park')
                        ?>
        </div>

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

        <?php endwhile;
            else :
                // No Favorites
                echo '<p class="text-center">お気に入りがありません。</p>';
            endif;
        endif; ?>
    </section>

    <!-- マップ表示 -->
    <!-- グーグルマップAPI使用 -->
    <section class="map-box content">
        <h2 class="ta-a h2 mb30 map-sub">MAP</h2>
        <div id="map" style="width:620px; height:400px"></div>
    </section>
</main>

<!-- <script type="text/javascript">
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
</script> -->


<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>