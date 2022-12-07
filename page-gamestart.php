<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<!-- 見出し -->
<section>
    <div class="gamestart_area1">
        <div class="game_titlestyle">
            <h2>
                <img class="game_title_img" src="" alt="ぽぽじろうとむしキャッチ">
            </h2>
        </div>
    </div>
</section>

<!-- どんなゲーム -->
<section>
    <div class="gamestart_ex1_backCream">
        <div class="gamestart_ex1_2_skyblue">
            <h3><span class="game_h2line">どんなゲームなの？</span></h3>
            <div class="gamestart_explanation">
                <div>
                    <div class="gamestart_explanation_img"></div>
                </div>
                <div class="gamestart_popospeech_1">
                    <p>せいげんじかんまでにたくさん虫をタップしてつかまえるポポ！<br>
                        虫をつかまえるとじかんがちょっとふえるポ。でもおじゃまムシをつかまえるとじかんがへるポポ。
                    </p>
                </div>
            </div>
            <div class="gamestart_tips1">
                <h4>ゲームの操作について</h4>
                <p>
                    このゲームはマウスでもあそぶことが出来ますが、<br>
                    タブレットやスマートフォン等のタッチパネルを搭載したデバイスでのプレイを推奨します。</p>
            </div>
        </div>
    </div>
</section>

<!-- 的紹介 -->
<section>
    <div class="gamestart_ex1_backCream">
        <div class="gamestart_ex1_2_green">
            <h3><span class="game_h2line">どんな虫がいるの？</span></h3>
            <div class="gamestart_tgt">
                <div>
                    <p>虫はぜんぶで6しゅるいいるポ！<br>
                        はやくたくさん虫をつかまえるとせいげんじかんによゆうができるポ！</p>
                </div>
                <div class="gamestart_tgt_imgbox">
                    <div class="gamestart_tgtimgbox1"></div>
                    <div class="gamestart_tgtimgbox2"></div>
                    <div class="gamestart_tgtimgbox3"></div>
                    <div class="gamestart_tgtimgbox4"></div>
                    <div class="gamestart_tgtimgbox5"></div>
                    <div class="gamestart_tgtimgbox6"></div>
                </div>
            </div>
            <div class="gamestart_tips2">
                <h4>特別保護地区</h4>
                <p>公園によっては、特別保護地区に指定されている場合があります。<br>
                    その場合、昆虫採集などが禁止されていることがありますので、<br>
                    虫取りの予定等がおありでしたらお出かけの際にご確認をお願いします。</p>
            </div>
        </div>
    </div>
</section>

<!-- 狙ってはいけない的 -->
<section>
    <div class="gamestart_ex1_backCream">
        <div class="gamestart_ex1_2_orange">
            <h3><span class="game_h2line">おじゃまむしはさわっちゃダメ！</span></h3>
            <div class="gamestart_dontaim">
                <div>

                    <div class="gamestart_dontaim_style_p">
                        <p>おじゃまむしをつかまえるとじかんがへるポポ。<br>
                            かんきょうをこわしたり、つよい毒をもっているキケンな生き物だポ！</p>
                    </div>
                </div>
                <!-- 画像 -->
                <div class="gamestart_tgt_imgbox">
                    <div class="gamestart_dontaim_img_text">
                        <div class="gamestart_dontaim_img1"></div>
                        <p>セアカゴケグモ</p>
                    </div>
                    <div class="gamestart_dontaim_img_text">
                        <div class="gamestart_dontaim_img2">
                        </div>
                        <p>アメリカザリガニ</p>
                    </div>
                    <div class="gamestart_dontaim_img_text">
                        <div class="gamestart_dontaim_img3">
                        </div>
                        <p>ヒアリ</p>
                    </div>
                </div>

            </div>
            <div class="gamestart_tips3">
                <h4>特定外来生物とは？</h4>
                <p>飼育、栽培、保管及び運搬することが法律により禁止されている生物のことです。<br>
                    特定の施設でしか飼うことが出来ず、持って帰ることも禁止されています。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 遊ぶボタン -->
<!-- <div class="gamestart_startbtn">
        <div class="gamestart_startbtn_style"><a href="./gameplay.html">ゲームであそぶ</a></div>
    </div> -->
<div class="gamestart_startbtn_style">
    <a target="_blank" href="<?php echo home_url('/gameplay/'); ?> ">ゲームであそぶ</a>
</div>

<!-- スクリプト -->
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/common.js"></script>
<script src="./assets/js/top.js"></script>
</body>

</html>