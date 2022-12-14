<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- キービジュアルのダミーブロック -->
<div class="key_wrap">
    <img class="key_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/key-under/key_under_nursing.jpg" alt="キービジュアル">
    <div class="key_circle"></div>
</div>


<main>
    <p class="pkz"><?php echo do_shortcode('[flexy_breadcrumb]'); ?></p>

    <!-- タイトル -->
    <div class="nur_ttl">
        <h2>「公園での遊びは<br>
            より自然に近い形で<span class="nurttl_c_p">楽しみながら</span><br>
            <span class="nurttl_c_b">感覚統合を鍛える</span>こと！」
        </h2>
        <p>とくしまGo!Go!パークなびでは、公園の遊具や遊び方に注目し、児童発達支援事業を経営する新田昌宏先生にお話を聞いてみました。
            先生のお話によると子どもの発達の代表的なものに<span class="txt_mark">感覚統合</span>というものがあり、発達段階においてはとても大切です。公園での遊びはより自然に近い形で楽しみながら感覚統合を鍛えることができるそうですので、ぜひ公園での遊びの参考にしてみてくださいね。</p>
    </div>

    <div class="nur_session_list">
        <!-- 1 -->
        <div class="nur_list">
            <div class="title_flex">
                <img class="popo_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_circle_50.png" alt="ぽぽ次郎アイコン">
                <h3>公園を利用するメリットは何でしょうか？</h3>
            </div>

            <div class="row_flex">
                <img class="park_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/R-swing1.JPG" alt="運動療育写真1枚目">

                <div class="column_flex">
                    <p class="txt">我々だって霊長類、哺乳類の動物です。しかし現代では子供たちが自由に遊べる空き地や里山などがありません。そもそも親が育った環境もすでにその状況で、親ですら外遊びの経験が乏しいのです。<span class="txt_mark">特に四つ這い姿勢やロープを引くような腕や肩、背中を連動させる遊び</span>が発達段階においてはとても大切です。公園での遊びは<span class="txt_mark">より自然に近い形で楽しみながら体を動かせるメリット</span>があります。</p>
                </div>
            </div>
        </div>



        <!-- カードとページをまとめるdiv -->
        <div>

            <h2 class="h2_under">遊具紹介</h2>
            <div class="card_flex">

                <!-- すべり台 -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_slide.jpg" alt="すべり台画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">すべり台</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>着地時の動作を予測して足が着く瞬間に体を起こします。目で確認し起こりそうな事を予測する力が身につきます。</p>
                        </div>
                    </div>
                </div>

                <!-- ローラーすべり台 -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_roller_slide.jpg" alt="ローラーすべり台画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">ローラーすべり台</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>楽しいだけかと思いきや、ローラー滑り台が止まったらレールを掴んで引っ張るので背中の筋肉を使います。</p>
                        </div>
                    </div>
                </div>

                <!-- うんてい -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_monkey_bar.jpg" alt="うんてい画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">うんてい</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>うんていを使った運動中はコアコントロールといって体を動かす必要もあるので、上級ですが、握力、腕力などが身に付きます。</p>
                        </div>
                    </div>
                </div>

                <!-- ジャングルジム -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_junglegym.jpg" alt="ジャングルジム画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">ジャングルジム</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>しっかりと掴むことで尺側（手の小指側）をたくさん使う。鉛筆の持ち方がよくなり筆圧が強くなる。</p>
                        </div>
                    </div>
                </div>

                <!-- 複合遊具 -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_playground_equipment.JPG" alt="複合遊具画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">複合遊具</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>複合遊具はベーシック遊具の組み合わせで、子どもが楽しめる要素がたくさん詰まっています。
                                備わっている遊具の種類によって、はう、くぐる、掴む、ぶら下がる、渡る能力を鍛えられます。</p>
                        </div>
                    </div>
                </div>

                <!-- ブランコ -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_swing.jpg" alt="ブランコ画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">ブランコ</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>ブランコではバランス感覚を養います。また前庭感覚（揺れを感じ取る感覚）が刺激されます。行ったり来たりする一定のリズム感を生むためには、お腹に力を入れないと続けることができないので、日常生活では少ない「継続して力を入れること」が体験できます。</p>
                        </div>
                    </div>
                </div>

                <!-- ザイルクライミング -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_climbing.JPG" alt="ザイルクライミング画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">ザイルクライミング</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>しっかりと棒を掴むことで尺側（手の小指側）をたくさん使います。小さい子どもはぶら下がったり、体が大きくなるにつれてより高いところまで登れます。利用者が多いと揺れやすいのでバランス感覚が身に付きます。</p>
                        </div>
                    </div>
                </div>

                <!-- 鬼ごっこ・ボール遊び -->
                <div class="card_wrap">
                    <!-- 記事画像 -->
                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/nur_kidsplay.jpg" alt="ボール遊び画像">
                    <!-- 文章部分の枠 -->
                    <div class="card_container">

                        <!-- メインタイトル -->
                        <h2 class="card_ttl">鬼ごっこ・ボール遊び</h2>
                        <!-- 記事本文 -->
                        <div class="card_txt">
                            <p>感覚統合の一つであるビジョントレーニング（眼球運動）と、手先の訓練は「鬼ごっこ」と「ボール遊び」をすることで育ちます。たくさん公園で遊ぶ子どもは運動時に目をたくさん動かすし、公園の遊具での遊びで手をたくさん使いますから、自然と身についていきます。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- 2 -->
        <div class="nur_list">
            <div class="title_flex">
                <img class="popo_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_circle_50.png" alt="ぽぽ次郎アイコン">
                <h3>ゲームやテレビを見る時間が増えて、子供の外遊び時間は減り、体力の低下につながると言われてますが。
                </h3>
            </div>

            <div class="row_flex">
                <img class="park_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/R-look.JPG" alt="運動療育写真2枚目">

                <div class="column_flex">
                    <p class="txt">いくらゲームやTVが面白くても、子どもは自然の中につれていくと、夢中になって遊んでくれるはずです。<span class="txt_mark">大切なのは、親御さんが自然の中に子どもをつれていくこと</span>だと思います。<br>

                        徳島県にはたくさん山があり、森の中で拾った枝で遊んだり、虫を捕ったり木登りができます。<span class="txt_mark">親御さんが虫嫌いで虫取りに出かけないと、子どもも虫が苦手になってしまいます。</span>まずは親御さんがやってみると、子どもは親御さんの行動に興味を持つでしょう。
                    </p>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="nur_list">
            <div class="title_flex">
                <img class="popo_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/popo_circle_50.png" alt="ぽぽ次郎アイコン">
                <h3>公園での遊びの中で、一番大切なこととはなんでしょう？</h3>
            </div>

            <div class="row_flex">
                <img class="park_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/R-swing2.JPG" alt="運動療育写真3枚目">

                <div class="column_flex">
                    <p class="txt">大切なことは親が干渉しないことです。<span class="txt_mark">「遊び」は子供の学びの時間なのに親が「あれをこんな風に使いなさい」というのが最もいけません。</span>子供は公園に遊びに来ているのに親だけがが鼻息荒く「よーしここで体を鍛えてやるぞ！」なんて考えたらシラケるだけです。子供が使いたい遊具を使いたいだけ使わせてあげましょう。
                    </p>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div class="nur_list">

            <p class="txt">本ページで紹介している広場は「ギフテッド＆トレラグループ」の利用者様用のスペースです。本ページでは紹介しきれなかった新田昌広先生の放課後デイサービス等発達支援に関する詳細な情報は下記のバナーリンクから確認できます。お子さまの発達にご不安やご心配がある方は、まずは<span class="txt_mark">通われている保育園、幼稚園、学校の先生に相談</span>して、そこから<span class="txt_mark">教育センターや総合療育センターにつないでもらう</span>と良いでしょう。<span class="txt_mark">お住まいの自治体にある障がい福祉課へ相談</span>に行かれるのもよいと思います。また<span class="txt_mark">療育施設の種類によっては必要な申請方法や提出書類が違います</span>のでご自身が気になる、通わせたいと思う事業所があれば直接そこへ行き、現在の悩みや不安を相談してみるのもお勧めです。<br>
                ギフテッド、トレラ各事業所の見学なども随時受付をしていますので、是非参考にしてみてください。
            </p>
        </div>
    </div>

    <!-- プロフィール -->
    <div class="nur_profile_wrap">
        <div class="nur_profile_flex">
            <img class="nur_profile_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/R-gifted-profile.jpg" alt="先生のプロフィール写真">
            <div class="nur_pro_txt">
                <h4>新田 昌広（にった まさひろ）先生</h4>
                <p>株式会社高徳 代表取締役　ギフテッド代表<br>
                    徳島市出身、芦屋大学教育学部児童教育学科卒<br>
                    平成26年春、ギフテッドを板野町大寺にオープン。<br>
                    現在はギフテッド板野に加えて、南二軒屋、藍住、板野町内に運動指導を中心とする4つの事業所を経営
                </p>
            </div>
        </div>

        <!-- ギフテッドのリンク -->
        <div class="gifted_wrap">
            <p>↓ギフテッドのHPへ↓</p>
            <div class="gifted_link">
                <a href="https://www.kt-gifted.com/" class="gifted_btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nursing/R-gifted-logo.jpg" alt="ギフテッドのリンク">
                </a>
            </div>
        </div>
    </div>
</main>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>