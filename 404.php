<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_contact.jpg" alt="キービジュアル写真">
    <div class="key_circle"></div>
</div>

<main>
    <h2 class="h2_under">404 NOT FOUND</h2>

    <section>
        <p class="txt">お探しのページが見つかりませんでした。</p>
        <p class="txt">申し訳ございませんが、<a href="<?php echo home_url('/'); ?>" class="privacy_link">こちらのリンク</a>からトップページにお戻りください。</p>
    </section>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>