<form method="get" action="<?php echo home_url('/'); ?>">
    <h3>エリア</h3>
    <?php $terms = get_terms('area'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="radio" name="area[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <h3>目的</h3>
    <?php $terms = get_terms('purpose'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="radio" name="purpose[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <h3>遊具</h3>
    <?php $terms = get_field('playground_slug'); ?>
    <?php if ($terms) : ?>
    <ul class="terms">
        <?php foreach ($terms as $term) : ?>
        <li>
            <input type="checkbox" name="playground[]" value="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <input type="clear" value="クリア">
    <input type="hidden" name="s" value="<?php the_search_query(); ?>">
    <input type="submit" value="検索">
</form>