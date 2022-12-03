<!-- カテゴリバー -->
<div class="sidebar_box">
    <aside class="sidebar">
        <h3 class="category_ttl">カテゴリ一覧</h3>
        <ul>
            <?php
            $args = array(
                'title_li' => '',
                'orderby' => 'count',
                'order' => 'DESC',
                'hide_empty' => false,
                'show_count' => true,
            );
            wp_list_categories($args);
            ?>
        </ul>
    </aside>
</div>
</div>

<!-- <aside class="archive">
    <h2 class="archive_title">カテゴリ 一覧</h2>
    <ul class="archive_list">
        <?php
        //$args = array(
        //'title_li' => '',
        //'orderby' => 'count',
        //'order' => 'DESC',
        //'hide_empty' => false,
        //'show_count' => true,
        //);
        //wp_list_categories($args);
        ?>
    </ul>
</aside> -->