'use strict';

// // スクロールに合わせて要素を表示させる(h2)

$(function () {
  const fade_bottom = 100; // 画面下からどの位置でフェードさせるか(px)
  const fade_move = 100; // どのぐらい要素を動かすか(px)
  const fade_time = 400; // フェードの時間(ms)
  // フェード前のcssを定義
    $(".zoom_in").css({
    opacity: 0,
    transform: "scale(0.5)",
    transition: fade_time + "ms",
    });
  // スクロールまたはロードするたびに実行
    $(window).on("scroll load", function () {
    const scroll_top = $(this).scrollTop();
    const scroll_bottom = scroll_top + $(this).height();
    const fade_position = scroll_bottom - fade_bottom;
    $(".zoom_in").each(function () {
        const this_position = $(this).offset().top;
        if (fade_position > this_position) {
        $(this).css({
            opacity: 1,
            transform: "scale(1)",
        });
        }
    });
    });
});


// スクロール値をとってフェードインさせる

$(function(){
  $(".fade_in").css({opacity:"0"});
  $(window).scroll(function (){
    $(".fade_in").each(function(){
      var ePos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > ePos - windowHeight + windowHeight/5){
        $(this).animate({ opacity: 1 }, { duration: 600, easing: 'swing'})
      }
    });
  });
});

// 左から順番に表示（カード）

$(function() {
  $(window).on('scroll resize', function() {
    var setHeight = 100;
    var wHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    $('.animate').each(function() {
      var targetPosition = $(this).offset().top;
      if(scrollTop > targetPosition - wHeight + setHeight) {
        $(this).addClass('show');
      }
    })
  });
});


// slickスライダー

$(function () {
            $('#JS_slider').slick({
                autoplay: true, // 自動でスクロール
                autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
                speed: 5000, // スライドが流れる速度を設定
                cssEase: "linear", // スライドの流れ方を等速に設定
                arrows: true, // 前・次のボタンを表示する
                dots: true, // ドットナビゲーションを表示する
                appendDots: $('.slider_dots'), // ドットナビゲーションの生成位置を変更
                slidesToShow: 1, // 表示させるスライド数
                centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
                variableWidth: true, // スライド幅の自動計算を無効化
            });
});

//SP幅（770以下）はslick、TB幅以上は並べて静止画表示

$(function(){
    function sliderSetting(){

        var width = $(window).width();

        if(width <= 770){
            $('.slider').not('.slick-initialized').slick({
                autoplay: true,
                fade: true,
                dots: true,
                arrows: false
            });
        } else {
            $('.slider.slick-initialized').slick('unslick');
        }
    }

    sliderSetting();

    $(window).resize( function() {
        sliderSetting();
    });
});
