<!-- ヘッダー -->
<?php get_header(); ?>

<!-- キービジュアル -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_img.jpg" alt="">
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

        <!-- <form class="form">
            <div class="form_row">
                <label class="form_label" for="fullname">お名前　<span>必須</span></label>
                <div class="form_content">
                    <input type="text" name="fullname" id="fullname" placeholder="徳園 公子">
                </div>
            </div>

            <div class="form_row">
                <label class="form_label" for="email">メールアドレス　<span>必須</span></label>
                <div class="form_content">
                    <input type="email" name="email" id="email" placeholder="tokushima_park_love@tmail.com">
                </div>
            </div>

            <div class="form_row">
                <label class="form_label message_ttl" for="message">メッセージ本文</label>
                <div class="form_content">
                    <textarea name="message" id="message" placeholder="お問い合わせ内容をご入力ください"></textarea>
                </div>
            </div>

            <div class="attention">
                <p><a href="<?php echo home_url('/privacy/'); ?>">個人情報の取扱い</a>について</p>
                <input type="checkbox" value="consent"><span>同意する</span>
            </div>

            <div class="contact_btn_wrap">
                <div class="contact_btn">
                    <a href="./contact.html">送信</a>
                </div>
            </div>
        </form> -->

    </section>

</main>

<!-- フッター -->
<?php get_footer(); ?>