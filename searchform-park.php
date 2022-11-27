<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <ul>
    <!-- エリア検索 -->
    <?php
        $areas = get_terms('area');
        foreach ( $areas as $area ) :
    ?>
        <li>
            <label>
                <input type="checkbox" name="area[]" value="<?php echo $area->slug; ?>"><?php echo $area->name; ?>
            </label>
        </li>
    <?php endforeach; ?>

    <!-- 目的別検索 -->
    <?php
        $purposes = get_terms('purpose');
        foreach ( $purposes as $purpose ) :
    ?>
        <li>
            <label>
                <input type="checkbox" name="purpose[]" value="<?php echo $purpose->slug; ?>"><?php echo $purpose->name; ?>
            </label>
        </li>
    <?php endforeach; ?>

    <!-- 遊具検索 -->
    <?php
        $playgrounds = get_terms('playground');
        foreach ( $playgrounds as $playground ) :
    ?>
        <li>
            <label>
                <input type="checkbox" name="playground[]" value="<?php echo $playground->slug; ?>"><?php echo $playground->name; ?>
            </label>
        </li>
    <?php endforeach; ?>

    </ul>
    <input type="hidden" name="s" value="<?php the_search_query(); ?>">
    <input type="submit" value="検索する">
</form>
