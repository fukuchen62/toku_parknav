<?php //headerの呼び出し ?>
<?php get_header(); ?>

<?php //パンくずリスト ?>
<?php echo do_shortcode( '[flexy_breadcrumb]'); ?>


<?php //sidebar-purpose.php 呼び出し ?>
<!-- サイドバーのサブカテゴリーの作成方法を考える -->
<?php get_sidebar('purpose'); ?>

<?php //カテゴリー（サイドバーと同じ）?>
<!--
<?php $purpose = get_terms(array('taxonomy' => 'purpose'));?>
<?if(!empty($purpose)):?>
    <? foreach($terms as $term) {
    echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
} ?>
<? endforeach; ?>
<? endif; ?>
?> -->

<?php //記事のループ ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <?php get_template_parts('template-parts/loop','course'); ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php //footerの呼び出し ?>
<?php get_footer(); ?>
