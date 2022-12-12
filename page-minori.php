<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアルの下層ページのブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_minori.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>

<main>

    <!-- パンくずリストを読み込む -->
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <div class="minori_wrap">
        <!-- サイト制作にあたって -->
        <h2 class="h2_under">サイト制作にあたって</h2>
        <p>このサイトは、国の求職者支援制度に基づく、株式会社QLIPインターナショナル（クリッププログラミングスクール）WEBシステム開発実践科第5期生『実（みのり）』班が、2022年に制作したウェブサイトです。（以下「本サイト」と言います）</p>

        <!-- なぜ、このサイトを作成したか -->
        <h3>「とくしまGo!Go!パークなび」ができたワケ</h3>
        <div class="minori_reason">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minori.jpg" alt="実班集合写真">
            <p>実班のリーダーは子育て中。自身が体験した公園を検索する際の不便さなど、多くの子育て当事者が抱える悩みなどの解決を目指して本サイトは企画されました。
                チームメンバーはイラスト、ゲーム開発、記事執筆の経験者もおりますが全員がプログラミング初心者です。職業訓練で学んだノウハウが本サイトの制作にいかされています。さらに、療育の専門家と一緒に記事を制作しております。
                これらメンバーの力を結集して、子どもとのおでかけ時に知っておけばより一層公園利用が便利で楽しくなる情報を発信していきます。</p>
            <!-- <img src="./assets/img/key-under/key_under (5).jpg" alt="集合写真"> -->
        </div>

        <!-- 関係者の皆様 -->
        <div class="minori_co_txt_wrap">
            <h2 class="h2_under">サイト制作に協力していただいた関係者の皆様</h2>
            <p class="minori_co_txt">この度は本サイト制作に際して、ご協力いただき誠にありがとうございます。</p>
        </div>
        <ul>
            <li>・藍住町役場生活環境課</li>
            <li>・あすたむらんど徳島</li>
            <li>・阿南市役所特定事業部まちづくり推進課阿南西部公園管理棟</li>
            <li>・ギフテッド・トレラグループ</li>
            <li>・公益財団法人徳島県建設技術センター公園管理事務所（大神子病院しあわせの里テニスセンター）</li>
            <li>・公益財団法人徳島県スポーツ協会</li>
            <li>・新町公園うだつアリーナ</li>
            <li>・つるぎ町半田支所産業経済課</li>
            <li>・徳島市役所公園緑地課</li>
            <li>・鳴門市役所公園緑地課</li>
            <!-- <li>・吉野川市役所</li> -->
            <li>・吉野川市役所商工観光課</li>
            <li>・吉野川ハイウェイオアシス</li>
            <li>・Jパワー&よんでんWaンダーランド</li>
            <li>・JAアグリあなん運動公園</li>
        </ul>
        <p>（50音順）</p>

        <!-- 参考サイト一覧 -->
        <!-- <h3>参考サイト一覧</h3>
            <div class="ref_wrap">
                <a href="">・リンク先が入ります</a><br>
                <a href="">・リンク先が入ります</a><br>
                <a href="">・リンク先が入ります</a><br>
                <a href="">・</a><br>
                <a href="">・</a><br>
                <a href="">・</a><br>
            </div> -->
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>