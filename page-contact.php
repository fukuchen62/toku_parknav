<!-- ヘッダー -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_contact.jpg" alt="キービジュアル写真">
    <div class="key_circle"></div>
</div>

<main>
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <section>
        <h2 class="h2_under">お問い合わせ</h2>
        <p class="txt">サイトについてご不明点などございましたら、こちらからお問い合わせください。<br>個人情報の取り扱いについては<a href="<?php echo home_url('/privacy/'); ?>">こちら</a>をご覧ください。</p>

        <form class="form">
            <?php echo do_shortcode('[contact-form-7 id="281" title="お問い合わせフォーム"]'); ?>
        </form>

    </section>

</main>

<!-- フッター -->
<?php get_footer(); ?>