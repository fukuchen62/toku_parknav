<?php
if (is_page('contact')) {
    remove_filter('the_content', 'wpautop');
}
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_contact.jpg" alt="キービジュアル写真">
    <div class="key_circle"></div>
</div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <section>
        <h2 class="h2_under">お問い合わせありがとうございました。</h2>
        <p class="txt">ご返答まで数日お待ちいただく場合がございます。ご了承ください。</p>
        <p class="txt"><a href="<?php echo home_url('/'); ?>" class="privacy_link">こちらのリンク</a>からトップページにお戻りください。</p>
    </section>
</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>