'use strict';


// ＝＝＝フッター＝＝＝

// ポポじろう・トップへ戻るボタンを、スクロールしたら表示させる

$(function() {
    var topBtn = $('.foot_scroll');
    topBtn.hide();
    //スクロールが200に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });

});


// トップへ戻るボタンを押したらトップへ戻る！

$(document).ready(function(){
    $(".foot_top").click(function() {
        $("body,html").animate({scrollTop:0},800); // 800msかけて上に戻る
    });
});


// ポポを押すと吹き出しが出て、もう一度押すと２秒かけて消える

$(function() {

  // ボタンをクリックしたら発動
    $('.popo').click(function() {

    // 連打で暴走しないようにstop()も設定
    $('.popo_commentset').stop().slideToggle(-100);

    });
});


// ポポをクリックする度に「現れてしゃべる」と「隠れる」を交互に繰り返す

$.fn.clickToggle = function (a, b) {
    return this.each(function () {
    var clicked = false;
    $(this).on('click', function () {
        clicked = !clicked;
        if (clicked) {
        return a.apply(this, arguments);
    }
    return b.apply(this, arguments);
    });
});
};

$('.popo').clickToggle(function () {
//   // １回目のクリック
    $(".popo").animate({ "marginLeft": "+=60px", }, 500);
    $(".popo").animate({ "rotate": "0deg", }, 500);
}, function () {
//   // ２回目のクリック
    $(".popo").animate({ "marginLeft": "-=60px", }, 500);
    $(".popo").animate({ "rotate": "45deg", }, 500);
});


// // ランダムに豆知識を表示させる

// function mame() {
//     // let mame = [
//     //     "公園の砂場は英語で“sand box”<br>「砂の箱」って言うんだって！",
//     //     "お茶わんいっぱい(150グラム)の<br>ごはんには、やく3000つぶのお米が<br>",
//     //     "お茶わんいっぱい(150グラム)の<br>ごはんには、やく3000つぶのお米が<br>はいっているんだって！",
//     //     "「Z世代」ってことばがあるけど、<br>現在(2022年時点)で、小学生以下の世代は<br>「a(アルファ)世代」といわれるんだって！",
//     //     "ぶらんこの豆知識ぽぽ", ,
//     //     "すべりだいの豆知識ぽぽ"
//     // ];

//     // 変数mameに配列を代入
//     //変数ｒに、0以上1以下のランダムな数字とmameのlength(5）を掛けた結果（小数点を切り捨てた数字）を代入
//     let r = Math.floor(Math.random() * mames.length);

//     document.getElementById("popo_comment").innerHTML = mames[r]; //上の式で出た結果をHTMLで"popo_comment"に表示する
// }


// 公園詳細ページのslickスライダー
// $('.slider').slick({
//     autoplay:true,
//     autoplaySpeed: 5000,
//     arrows:true,
//     dots:true,
// });
