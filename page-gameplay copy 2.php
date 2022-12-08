<?php //ヘッダーテンプレートファイルを読み込む
?>
<?php get_header(); ?>

<div class="game_warp">
    <div class="game_backimage">
        <!-- ゲーム範囲調整 -->
        <div class="game_size">
            <!-- ぽぽじろう -->
            <div class="game_popo"> </div>
            <!-- オブジェクトの基準位置 -->
            <div class=" game_posi">
                <!-- スタート画面 d-none で要素そのものを非表示 -->
                <!-- 親要素にflex-startuiを設定してボタンの位置を設定 -->
                <div id="JS_game_start" class="game_start ">
                    <!-- スタートのカウント -->
                    <div id="JS_startCount" class="game_startcountdown_style"></div>
                </div>

                <!-- ゲームオーバー処理 -->
                <!-- 制限時間０でこの要素を表示する -->
                <div id="JS_gameover" class="gameover_position gameover_top">
                    <!-- つかまえたむし -->
                    <div id="JS_gameoverLabel" class="gameoverLabelstyle">
                        つかまえたむし：
                        <span id="JS_gameover_score"></span>ひき
                    </div>
                    <!-- つかまえたおじゃまムシ -->
                    <div id="JS_gameover_dontaimLabel" class="gameover_dontaimLabelstyle">
                        つかまえたおじゃまむし：
                        <span id="JS_gameover_dontaimScore"></span>ひき
                    </div>
                    <!-- レベル表示 -->
                    <div><span id="JS_gameover_Lv"></span></div>
                    <!-- メダル表示 -->
                    <div id="JS_gameover_Medal" class="gameover_medalstyle"></div>
                    <div id="JSgameover_choice" class="gameover_choice ">
                        <div id="JSchoice_reload" class="gameover_morebtn">もういちどあそぶ</div>
                    </div>
                </div>

                <!-- ゲーム処理用 -->
                <!-- フレックスでオブジェクトの表示位置を指定する -->
                <!-- それ自体は隠しておく -->
                <div class="game_wrap ">
                    <!-- スコア -->
                    <div id="JSgamewrap" class="gama_score">
                        スコア：<span id="JSgamascore"></span>
                        　のこりじかん：<span id="js_timelimit"></span>
                    </div>

                    <div id="JS_game" class="game_flex ">
                        <!-- 1列目 -->
                        <div class="clm">
                            <div id="JSclm1_1" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm1_2" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm1_3" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm1_4" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm1_5" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm1_6" class=""></div>
                        </div>

                        <!--PC幅 2列目 -->
                        <div class="clm">
                            <div id="JSclm2_1" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm2_2" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm2_3" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm2_4" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm2_5" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm2_6" class=""></div>
                        </div>

                        <!--PC幅 3列目 -->
                        <div class="clm">
                            <div id="JSclm3_1" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm3_2" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm3_3" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm3_4" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm3_5" class=""></div>
                        </div>
                        <div class="clm">
                            <div id="JSclm3_6" class=""></div>
                        </div>
                    </div>
                    <!-- 残り時間 -->

                </div>

            </div>
            <!-- ゲームの大きさ指定 -->
        </div>
        <!-- warp終了 -->

    </div>
    <!-- ↑画像ここまで -->
</div>

<?php //フッターテンプレートファイルを読み込む
?>
<?php get_footer(); ?>