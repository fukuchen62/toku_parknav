'use strict';

//全体を管理するための変数
let game_flg = 0;
let executionInterval = 1000;
let game_stopflg = 0; //0動いている 1止まっている

// スタートのカウント
let startCount = 4;


// 配列
let tgtID = [
    'JSclm1_1', 'JSclm1_2', 'JSclm1_3', 'JSclm1_4', 'JSclm1_5', 'JSclm1_6',
    'JSclm2_1', 'JSclm2_2', 'JSclm2_3', 'JSclm2_4', 'JSclm2_5', 'JSclm2_6',
    'JSclm3_1', 'JSclm3_2', 'JSclm3_3', 'JSclm3_4', 'JSclm3_5', 'JSclm3_6',];


// クラスを取得するための変数
let classname = 0;

let tgtArray_1 = [
    0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 0,
    0, 0, 0, 0, 0, 0
];
// ############各種IDの取得##########
let JSgame = document.getElementById('JS_game');
//let JSgame2 = document.getElementById('JS_game2');
//let JSgame3 = document.getElementById('JS_game3');
// スコアを囲む要素
let JSgamewrap = document.getElementById('JSgamewrap');
// スコアの要素取得
let jsgamescore = document.getElementById('JSgamascore');
// 制限時間の要素取得
let jstimelimit = document.getElementById('js_timelimit');
//let JStimelimitLabel = document.getElementById('JStimelimitLabel');
// スタートカウントの要素取得
let jsstartCount = document.getElementById('JS_startCount');
// スタート画面の要素
let JSgamestart = document.getElementById('JS_game_start');

// #################ゲームオーバー時の要素#################
let JSgameover = document.getElementById('JS_gameover');
let JSgameoverLabel = document.getElementById('JS_gameoverLabel');
let JSgameoverdontaimLabel = document.getElementById('JS_gameover_dontaimLabel');

// ゲームオーバー時のスコア要素
let JSgameoverScore = document.getElementById('JS_gameover_score');
// ゲームオーバー時のおじゃまムシスコア
let JSgameoverDontaimScore = document.getElementById('JS_gameover_dontaimScore');
// ゲームオーバー時の称号
let JSgameoverLv = document.getElementById('JS_gameover_Lv');
// ゲームオーバー時のメダル表示
let JSgameoverMedal = document.getElementById('JS_gameover_Medal');
// ゲームオーバー時の選択
let JSgameoverchoice = document.getElementById('JSgameover_choice');
let JSchoiceReload = document.getElementById('JSchoice_reload');

// 現在のスコア
let score = 0;

//おじゃまムシのスコア
let dontaim_score = 0;
// 制限時間
// 初期の時間は10
let timelimit = 10;

// 乱数設定用
let random = 0;

let tgtimg_random = 0;
let dontaimimg_random = 0;

// そのIDがある要素の中のクラスを取得
// let classList = JSclm1_1.classList;

// スタートのカウントダウンの処理
function gameStartCount() {
    // game_flgが0のときに実行される
    if (game_flg == 0) {
        if (startCount >= 1) {
            startCount = startCount - 1;
        } else if (startCount == 0) {
            game_flg = 1;
        }
    }
    jsstartCount.innerHTML = startCount;
}



// 制限時間を減らす処理
function timelimitCountdown() {
        if (timelimit >= 1) {
            timelimit = timelimit - 1;
        } else if (timelimit <= 0) {
            // 制限時間が０になったら
            game_flg = 2;
        }
    jstimelimit.innerHTML = timelimit;
}

// 更新時間の変更
function executionIntervalUpdate() {
    if (score <= 20) {
        executionInterval = 1000;
    } else if (score > 20 && score <= 50) {
        executionInterval = 100;
    } else if (score > 50) {
        executionInterval = 10;
    }
}

//tgtを表示させる処理
function tgtArray_control() {
    // 配列をforで回す
    if (game_flg == 1) {
        for (let i = 0; i < 18; i++) {
            // 0～11迄の数を掛けて
            // 配列をforでまわして乱数を
            let clmID = document.getElementById(tgtID[i]);
            let random = Math.floor(Math.random() * 11);
            tgtArray_1[i] = random;
            // 新処理 scoreで制御
            if (score < 20) {
                if (tgtArray_1[i] == 4 || tgtArray_1[i] == 5 || tgtArray_1[i] == 6) {
                    tgtimageSet();
                    // tgtArray_1が2か3のとき
                } else if (tgtArray_1[i] == 2 || tgtArray_1[i] == 3) {
                    // tgtArray_1が1でも2でも3でもないのとき
                    dontaimimageSet();
                } else {
                    dNone();
                }
            } else if (score >= 20 && score < 30) {
                if (tgtArray_1[i] == 5 || tgtArray_1[i] == 6) {
                    tgtimageSet();
                    // tgtArray_1が2か3のとき
                } else if (tgtArray_1[i] >= 2 && tgtArray_1[i] <= 4) {
                    // tgtArray_1が1でも2でも3でもないのとき
                    dontaimimageSet();
                } else {
                    dNone();
                }
            } else if (score >= 30 && score < 50) {
                if (tgtArray_1[i] == 1) {
                    tgtimageSet();
                    // tgtArray_1が2か3のとき
                } else if (tgtArray_1[i] == 2 || tgtArray_1[i] == 3 || tgtArray_1[i] == 4 || tgtArray_1[i] == 5) {
                    // tgtArray_1が1でも2でも3でもないのとき
                    dontaimimageSet();
                } else {
                    dNone();
                }
            } else if (score >= 50 && score < 80) {
                if (tgtArray_1[i] == 0) {
                    tgtimageSet();
                    // tgtArray_1が2か3のとき
                } else if (tgtArray_1[i] >= 1 && tgtArray_1[i] <= 9) {
                    // tgtArray_1が1でも2でも3でもないのとき
                    dontaimimageSet();
                } else {
                    dNone();
                }
            } else if (score >= 80) {
                if (tgtArray_1[i] == 0) {
                    tgtimageSet();
                    // tgtArray_1が2か3のとき
                } else if (tgtArray_1[i] >= 1 && tgtArray_1[i] <= 9) {
                    // tgtArray_1が1でも2でも3でもないのとき
                    dontaimimageSet();
                } else {
                    dNone();
                }
            }
            // N秒ごとに乱数をリセット
            //setInterval(reset_Random, 500);

            //let interval = function tgtArray_interval() {
            if (i >= 18) {
                //    function reset_Random() {
                i = 0;
                random = Math.floor(Math.random() * 11);
            }
            // }
            //}
    // ###############TGT表示用の関数##################
    // tgt表示用の乱数
        function tgtimageSet() {
                // 乱数生成 tgtの種類分計算する 実際の最大数+1
                tgtimg_random = Math.floor(Math.random() * 6);
                // 0 clm_tgt_aimを表示
                if (tgtimg_random === 0) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt2_aim');
                    clmID.classList.remove('clm_tgt3_aim');
                    clmID.classList.remove('clm_tgt4_aim');
                    clmID.classList.remove('clm_tgt5_aim');
                    clmID.classList.remove('clm_tgt6_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
                }
                else if (tgtimg_random === 1) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt2_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt_aim');
                    clmID.classList.remove('clm_tgt3_aim');
                    clmID.classList.remove('clm_tgt4_aim');
                    clmID.classList.remove('clm_tgt5_aim');
                    clmID.classList.remove('clm_tgt6_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
                }
                else if (tgtimg_random === 2) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt3_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt_aim');
                    clmID.classList.remove('clm_tgt2_aim');
                    clmID.classList.remove('clm_tgt4_aim');
                    clmID.classList.remove('clm_tgt5_aim');
                    clmID.classList.remove('clm_tgt6_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
                }
                else if (tgtimg_random === 3) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt4_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt_aim');
                    clmID.classList.remove('clm_tgt2_aim');
                    clmID.classList.remove('clm_tgt3_aim');
                    clmID.classList.remove('clm_tgt5_aim');
                    clmID.classList.remove('clm_tgt6_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
                }
                else if (tgtimg_random === 4) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt5_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt_aim');
                    clmID.classList.remove('clm_tgt2_aim');
                    clmID.classList.remove('clm_tgt3_aim');
                    clmID.classList.remove('clm_tgt4_aim');
                    clmID.classList.remove('clm_tgt6_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
            }
            else if (tgtimg_random === 5) {
                    // 追加するtgt
                    clmID.classList.add('clm_tgt6_aim');
                    // 消すtgt
                    clmID.classList.remove('clm_tgt_aim');
                    clmID.classList.remove('clm_tgt2_aim');
                    clmID.classList.remove('clm_tgt3_aim');
                    clmID.classList.remove('clm_tgt4_aim');
                    clmID.classList.remove('clm_tgt5_aim');
                    // 消すdontaim
                    clmID.classList.remove('clm_tgt_dontaim');
                    clmID.classList.remove('clm_tgt_dontaim2');
                    clmID.classList.remove('clm_tgt_dontaim3');
                    // 消す非表示
                    clmID.classList.remove('clm_tgt_dnone');
                }
        }

        //###########狙ってはいけない敵############
        function dontaimimageSet() {
            dontaimimg_random = Math.floor(Math.random() * 3);
            if (dontaimimg_random === 0) {
                // 追加するtgt
                clmID.classList.add('clm_tgt_dontaim');
                // 消す要素 他に設定している要素は全て消す
                clmID.classList.remove('clm_tgt_aim');
                clmID.classList.remove('clm_tgt2_aim');
                clmID.classList.remove('clm_tgt3_aim');
                clmID.classList.remove('clm_tgt4_aim');
                clmID.classList.remove('clm_tgt5_aim');
                clmID.classList.remove('clm_tgt6_aim');
                clmID.classList.remove('clm_tgt_dontaim2');
                clmID.classList.remove('clm_tgt_dontaim3');
                clmID.classList.remove('clm_tgt_dnone');
            } else if (dontaimimg_random === 1) {
                // 追加するtgt
                clmID.classList.add('clm_tgt_dontaim2');
                // 消す要素 他に設定している要素は全て消す
                clmID.classList.remove('clm_tgt_aim');
                clmID.classList.remove('clm_tgt2_aim');
                clmID.classList.remove('clm_tgt3_aim');
                clmID.classList.remove('clm_tgt4_aim');
                clmID.classList.remove('clm_tgt5_aim');
                clmID.classList.remove('clm_tgt6_aim');
                clmID.classList.remove('clm_tgt_dontaim');
                clmID.classList.remove('clm_tgt_dontaim3');
                clmID.classList.remove('clm_tgt_dnone');
            }else if (dontaimimg_random === 2) {
                // 追加するtgt
                clmID.classList.add('clm_tgt_dontaim3');
                // 消す要素 他に設定している要素は全て消す
                clmID.classList.remove('clm_tgt_aim');
                clmID.classList.remove('clm_tgt2_aim');
                clmID.classList.remove('clm_tgt3_aim');
                clmID.classList.remove('clm_tgt4_aim');
                clmID.classList.remove('clm_tgt5_aim');
                clmID.classList.remove('clm_tgt6_aim');
                clmID.classList.remove('clm_tgt_dontaim');
                clmID.classList.remove('clm_tgt_dontaim2');
                clmID.classList.remove('clm_tgt_dnone');
            }
        }

            // 的の要素を消す関数
        function dNone() {
            clmID.classList.add('clm_tgt_dnone');
            clmID.classList.remove('clm_tgt_aim');
            clmID.classList.remove('clm_tgt2_aim');
            clmID.classList.remove('clm_tgt3_aim');
            clmID.classList.remove('clm_tgt4_aim');
            clmID.classList.remove('clm_tgt5_aim');
            clmID.classList.remove('clm_tgt6_aim');
            clmID.classList.remove('clm_tgt_dontaim');
            clmID.classList.remove('clm_tgt_dontaim2');
            clmID.classList.remove('clm_tgt_dontaim3');
        }
        }
    }

}

    // スコアを代入する処理
function gameScore() {
        // ゲーム中のスコア
        jsgamescore.innerHTML = score;
        // ゲーム終了時のスコア
        JSgameoverScore.innerHTML = score;
        //ゲーム終了時おじゃまムシスコア
        JSgameoverDontaimScore.innerHTML = dontaim_score;
        // 称号の制御 ver2

        if (score < 10) {
            JSgameoverLv.innerHTML = "むしキャッチビギナーレベル";
            JSgameoverLv.style.color = "green";
            JSgameoverMedal.classList.add('gameover_medal_beginner');
        } else if (score >= 10 && score < 20) {
            JSgameoverLv.innerHTML = "むしキャッチノーマルレベル";
            JSgameoverLv.style.color = "navy";
            JSgameoverMedal.classList.add('gameover_medal_nomal');
        } else if (score >= 20 && score < 40) {
            JSgameoverLv.innerHTML = "むしキャッチミドルレベル";
            JSgameoverLv.style.color = "maroon";
            JSgameoverMedal.classList.add('gameover_medal1');
        } else if (score >= 30 && score < 60) {
            JSgameoverLv.innerHTML = "むしキャッチベテランレベル";
            JSgameoverLv.style.color = "blue";
            JSgameoverMedal.classList.add('gameover_medal2');
        }else if (score >= 60 &&  score < 100){
            JSgameoverLv.innerHTML = "むしキャッチマスターレベル";
            JSgameoverLv.style.color = "red";
            JSgameoverMedal.classList.add('gameover_medal3');
        } else if (score >= 100 ) {
            JSgameoverLv.innerHTML = "むしキャッチかみさまレベル";
            JSgameoverLv.style.color = "olive";
            JSgameoverMedal.classList.add('gameover_medal4');
        }
}


// idをfor文で回して、tgtをクリックしたか判定する処理
function idLoopclick() {
        for (let i = 0; i < 18; i++) {
            // IDをクリックしただけの判定
            let element = document.getElementById(tgtID[i]);
            element.onclick = function () {
                // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                if (element.className === 'clm_tgt_aim') {
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt_aim');

                } else if (element.className === 'clm_tgt2_aim') {
                    // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt2_aim');
                }
                else if (element.className === 'clm_tgt3_aim') {
                // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt3_aim');
                }
                else if (element.className === 'clm_tgt4_aim') {
                // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt4_aim');
                }
                else if (element.className === 'clm_tgt5_aim') {
                    // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt5_aim');
                }
                else if (element.className === 'clm_tgt6_aim') {
                    // clm_tgt_aimクラスを含む要素をクリックしたときの処理
                    // スコアを＋1
                    score = score + 1;
                    timelimit = timelimit + 1;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt6_aim');
                }
//##############################狙ってはいけない的をクリックした処理#######################
                else if (element.className == 'clm_tgt_dontaim') {
                    dontaim_score = dontaim_score + 1;
                    timelimit = timelimit - 3;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt_dontaim');
                }
                else if (element.className == 'clm_tgt_dontaim2') {
                    //狙ってはいけない的をクリックした処理
                    dontaim_score = dontaim_score + 1;
                    timelimit = timelimit - 3;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt_dontaim2');
                }
                else if (element.className == 'clm_tgt_dontaim3') {
                    //狙ってはいけない的をクリックした処理
                    dontaim_score = dontaim_score + 1;
                    timelimit = timelimit - 3;
                    jstimelimit.innerHTML = timelimit;
                    // クラスの追加と削除
                    element.classList.add('clm_tgt_dnone');
                    element.classList.remove('clm_tgt_dontaim3');
                }
            }
            if (i >= 18) {
                i = 0;
            }
        }
}

// 各要素の表示
// グローバル変数flgで制御するクラス
function gameflgControl() {
        if (game_flg === 0) {
            // ゲーム画面
            JSgame.classList.add('jsgame_dnone');
            JSgame.classList.remove('game_flex');
            // スコアの要素取得
            jsgamescore.classList.add('jsgame_dnone');
            JSgamewrap.classList.add('jsgame_dnone');
            // 制限時間の要素取得
            jstimelimit.classList.add('jsgame_dnone');
            //JStimelimitLabel.classList.add('jsgame_dnone');
            // スタート画面
            JSgamestart.classList.remove('jsgame_dnone');
            JSgamestart.classList.add('game_start');
            // スタートカウントの要素取得
            jsstartCount.classList.remove('jsgame_dnone');
            // ゲームオーバー時の要素
            JSgameover.classList.add('jsgame_dnone');
            JSgameover.classList.remove('gameover_position');
            JSgameoverLabel.classList.add('jsgame_dnone');
            // ゲームオーバー時のスコア要素
            JSgameoverScore.classList.add('jsgame_dnone');
            // ゲームオーバー時の称号
            JSgameoverLv.classList.add('jsgame_dnone');
            // ゲームオーバー時のメダル
            JSgameoverMedal.classList.add('jsgame_dnone');
            //ゲームオーバー時の選択
            JSgameoverchoice.classList.add('jsgame_dnone');
            JSgameoverchoice.classList.remove('gameover_choice');
            JSgameoverdontaimLabel.classList.add('jsgame_dnone');

            // 制限時間の初期化
            timelimit = 10
        } else if (game_flg === 1) {
            // ゲーム画面
            JSgame.classList.remove('jsgame_dnone');
            JSgame.classList.add('game_flex');
            // スコアの要素取得
            jsgamescore.classList.remove('jsgame_dnone');
            JSgamewrap.classList.remove('jsgame_dnone');
            // 制限時間の要素取得
            jstimelimit.classList.remove('jsgame_dnone');
            //JStimelimitLabel.classList.remove('jsgame_dnone');
            // スタート画面
            JSgamestart.classList.add('jsgame_dnone');
            JSgamestart.classList.remove('game_start');
            // スタートカウントの要素取得
            jsstartCount.classList.add('jsgame_dnone');
            // ゲームオーバー時の要素
            JSgameover.classList.add('jsgame_dnone');
            JSgameover.classList.remove('gameover_position');
            JSgameoverLabel.classList.add('jsgame_dnone');
            // ゲームオーバー時のスコア要素
            JSgameoverScore.classList.add('jsgame_dnone');
            // ゲームオーバー時の称号
            JSgameoverLv.classList.add('jsgame_dnone');
            // ゲームオーバー時のメダル
            JSgameoverMedal.classList.add('jsgame_dnone');
            //ゲームオーバー時の選択
            JSgameoverchoice.classList.add('jsgame_dnone');
            JSgameoverchoice.classList.remove('gameover_choice');
            JSgameoverdontaimLabel.classList.add('jsgame_dnone');

        } else if (game_flg === 2) {
            // ゲーム画面
            JSgame.classList.add('jsgame_dnone');
            JSgame.classList.remove('game_flex');
            // スコアの要素取得
            jsgamescore.classList.add('jsgame_dnone');
            JSgamewrap.classList.add('jsgame_dnone');
            // 制限時間の要素取得
            jstimelimit.classList.add('jsgame_dnone');
            //JStimelimitLabel.classList.add('jsgame_dnone');
            // スタート画面
            JSgamestart.classList.add('jsgame_dnone');
            JSgamestart.classList.remove('game_start');
            // スタートカウントの要素取得
            jsstartCount.classList.add('jsgame_dnone');
            // ゲームオーバー時の要素
            JSgameover.classList.remove('jsgame_dnone');
            JSgameover.classList.add('gameover_position');
            JSgameoverLabel.classList.remove('jsgame_dnone');
            // ゲームオーバー時のスコア要素
            JSgameoverScore.classList.remove('jsgame_dnone');
            // ゲームオーバー時の称号
            JSgameoverLv.classList.remove('jsgame_dnone');
            // ゲームオーバー時のメダル
            JSgameoverMedal.classList.remove('jsgame_dnone');
            //ゲームオーバー時の選択
            JSgameoverchoice.classList.remove('jsgame_dnone');
            JSgameoverchoice.classList.add('gameover_choice');
            JSgameoverdontaimLabel.classList.remove('jsgame_dnone');
        }
}

    //1秒ごとに更新する制御
    window.addEventListener('load', function () {
        setInterval(function () {
            // カウントダウン
            timelimitCountdown();
            // スタートカウントダウン
            gameStartCount();
        }, 1000);
    });

    //常に更新する処理
    window.addEventListener('load', function () {
        setInterval(function () {
            // グローバル変数flgで制御するクラス
            gameflgControl();
            // ゲームのスコア
            gameScore();
            // 的をクリックしたときの処理
            idLoopclick();
            // 制限時間の更新
            executionIntervalUpdate();
        }, 1);
    });

    //
    window.addEventListener('load', function () {
        setInterval(function () {
            // 的を更新する処理
            tgtArray_control();
        }, 900);
    });

    // リロードボタンを押した処理
    // ページをリロードする処理
    JSchoiceReload.addEventListener('click', function () {
        location.reload();
    });




    // スクロールを禁止する関数
function handle(event) {
    event.preventDefault();
}

window.onload = function() {
    document.addEventListener('touchmove', handle, { passive: false });
    document.addEventListener('mousewheel', handle, { passive: false });
}
