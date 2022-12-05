'use strict';

// スクロールに合わせて要素を標示させる

$(function () {
  const fade_bottom = 100; // 画面下からどの位置でフェードさせるか(px)
  const fade_move = 100; // どのぐらい要素を動かすか(px)
  const fade_time = 800; // フェードの時間(ms)
  // フェード前のcssを定義
    $(".fade_up").css({
    opacity: 0,
    transform: "scale(0.5)",
    transition: fade_time + "ms",
    });
  // スクロールまたはロードするたびに実行
    $(window).on("scroll load", function () {
    const scroll_top = $(this).scrollTop();
    const scroll_bottom = scroll_top + $(this).height();
    const fade_position = scroll_bottom - fade_bottom;
    $(".fade_up").each(function () {
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
