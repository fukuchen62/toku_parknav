<!-- 目的別サイドバー(仮) -->
<?php
$terms = get_terms(array('taxonomy' => 'purpose'));
if(!empty($terms)):
foreach($terms as $term) {
    echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
}
endforeach;
endif;
?>
