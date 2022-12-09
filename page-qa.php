<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアルの下層ページのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_question.jpg" alt="キービジュアル">
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
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q.png" alt="クエスチョン画像">
                <h3>駐車場やトイレはありますか？</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">
                    各公園の詳細ページに記載がありますので、そちらをご確認ください。</p>
            </div>
        </div>

        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_innerwrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q.png" alt="クエスチョン画像">
                <h3>公園の遊具の利用には年齢制限などはありますか？</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">３歳から12歳までの幼児、児童が主な対象となっています。<br>
                    幼児(3~6歳)と、児童(6~12歳)の範囲で年齢を区分しています。</p>
            </div>
        </div>

        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_innerwrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q.png" alt="クエスチョン画像">
                <h3>こちらのサイトに掲載してある遊具の写真や情報などは最新のものでしょうか？</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">こちらは2022年11月時点での情報になります。</p>
            </div>
        </div>

        <!-- Q&Aコンテンツ1個分 -->
        <div class="q_a_innerwrap">
            <!-- 質問 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q.png" alt="クエスチョン画像">
                <h3>お気に入りに登録した公園はどこで見られますか？</h3>
            </div>

            <!-- 解答 -->
            <div class="q_a_flex">
                <img class="q_a_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a.png" alt="アンサー画像">
                <p class="answer_txt">当サイトページの一番上にお気に入りリストがございますので、そちらでご確認ください。</p>
            </div>
        </div>

        <!-- お問い合わせボタン -->
        <div class="contact_btn_wrap">
            <h3>ご不明な点があればこちらへ</h3>
            <a href="<?php echo home_url('/contact/'); ?>" class="contact_btn">お問い合わせ</a>
        </div>
    </div>

</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>