'use strict';

// ＝＝＝フッター＝＝＝

// ポポじろう・トップへ戻るボタンを、FV抜けたら表示させる

$(function() {
    // 対象コンテンツのIDまたはクラス
    var topHeader = $('.hoge');

    // 要素は消しておく
    topHeader.hide();

    $(window).scroll(function () {
        // 画面の高さを取得
        var windowHeight = $(window).height();

        // スクロール位置を取得
        var scroll = $(window).scrollTop();

        // スクロール位置を取得
        if (scroll >= windowHeight) {
            // フルスクリーン分スクロールされた処理
            topHeader.fadeIn();
        } else {
            // フルスクリーン分スクロールされてない処理
            topHeader.fadeOut();
        }
    });
});

// トップへ戻るボタンを押したらトップへ戻る！

$(document).ready(function(){
    $(".foot_top").click(function() {
        $("body,html").animate({scrollTop:0},800); // 800msかけて上に戻る
    });
});


// ポポを押したら吹き出しが出る

$(document).ready(function(){
    //デフォルトで表示する要素を指定
    $('.popo_commentset').show();
    $('.popo_commentset').hide();

    //ポポがクリックされたら処理を実行
    $('.popo').click(function () {

         //toggleClassでshowのclassを追加または削除
        $('.popo_trivia').toggleClass('show');

        //#appがshowのclassを持っていれば
        if($('.popo_trivia').hasClass('show')){

             //要素の表示を切り替える
            $('.popo_commentset').hide();
            $('.popo_commentset').show();
        }else{

             //要素の表示を切り替える
            $('.popo_commentset').show();
            $('.popo_commentset').hide();
        }
    });
});

// ランダムに豆知識を表示させる

function mame() {
    let mame = [
        "公園の砂場は英語で“sand box”<br>「砂の箱」って言うんだって！",
        "お茶わんいっぱい(150グラム)の<br>ごはんには、やく3000つぶのお米が<br>",
        "お茶わんいっぱい(150グラム)の<br>ごはんには、やく3000つぶのお米が<br>はいっているんだって！",
        "「Z世代」ってことばがあるけど、<br>現在(2022年時点)で、小学生以下の世代は<br>「a(アルファ)世代」といわれるんだって！",
        "ぶらんこの豆知識ぽぽ", ,
        "すべりだいの豆知識ぽぽ"
    ];
    //変数mameに配列を代入
    let r = Math.floor(Math.random() * mame.length); //変数ｒに、0以上1以下のランダムな数字とmameのlength(5）を掛けた結果（小数点を切り捨てた数字）を代入
    document.getElementById("popo_comment").innerHTML = mame[r]; //上の式で出た結果をHTMLで"popo_comment"に表示する
}
