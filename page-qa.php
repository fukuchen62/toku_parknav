<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアルの下層ページのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>./assets/img/key-under/key_under_question.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>


<main>
    <!-- パンくずリストを読み込む -->
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <h2 class="h2_under">Q&A</h2>
    <div class="q_a_wrap">
        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_innerwrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_q.png" alt="クエスチョン画像">
                <h3>質問事項が入ります。質問事項が入ります。質問事項が入ります。</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">
                    解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
                </p>
            </div>
        </div>

        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_wrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_q.png" alt="クエスチョン画像">
                <h3>質問事項が入ります。質問事項が入ります。質問事項が入ります。</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">
                    解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
                </p>
            </div>
        </div>

        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_wrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_q.png" alt="クエスチョン画像">
                <h3>質問事項が入ります。質問事項が入ります。質問事項が入ります。</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>./assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">
                    解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。解答が入ります。
                </p>
            </div>
        </div>

        <div class="q_a_supt">
            <h2 class="h2_under">掲載されている公園の管理者様へ</h2>
            <p>テキストがはいります。テキストがはいります。テキストが入ります。テキストがはいります。テキストがはいります。テキストが入ります。テキストがはいります。テキストがはいります。テキストが入ります。テキストがはいります。テキストがはいります。テキストが入ります。テキストがはいります。テキストがはいります。テキストが入ります。
            </p>
        </div>

        <!-- お問い合わせボタン -->
        <div class="contact_btn_wrap">
            <h3>ご不明な点があればこちらへ</h3>
            <div class="contact_btn">
                <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
            </div>
        </div>
    </div>

</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>