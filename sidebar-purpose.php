<!-- 目的別サイドバー(仮) -->
<?php
$terms = get_terms('purpose');
foreach($terms as $terms) {
    echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
}
?>
