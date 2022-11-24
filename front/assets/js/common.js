'use strict';

// 2022/11/23 追加
// #########################ハンバーガーメニューの処理#########################
//############################################################################
// それぞれのIDを取得
// クラスを切り替える箇所のIDを取得
let hbgMenu = document.getElementById('JShbg_menu');
// ハンバーガーメニューのボタンを判定するIDを格納
let hbgMenubtn = document.getElementById('JShbg_menu_btn');
// 閉じる処理用のIDを変数に格納
let hbgMenubtnclose = document.getElementById('hbgMenubtn_close');
// そのIDがある要素の中のクラスを取得
let classList = hbgMenu.classList;


// クリックしたとき
hbgMenubtn.addEventListener('click', () => {
        hbgMenu.classList.add('JS_head_gnav_hbgmenu_menudisplay_block');
        hbgMenu.classList.remove('JS_head_gnav_hbgmenu_menudisplay_none');
		// 動作OK
        console.log('ハンバーガーメニューのボタンをクリックした。');
	});

hbgMenubtnclose.addEventListener('click', () => {

        hbgMenu.classList.add('JS_head_gnav_hbgmenu_menudisplay_none');
        hbgMenu.classList.remove('JS_head_gnav_hbgmenu_menudisplay_block');
		// 動作OK
    console.log('ハンバーガーメニューの閉じるボタンをクリックした。');
});

// ############################### ↑ここまで###########################


let totop = document.getElementById('js_totop');
//要素に設定されているclassの一覧を取得する
let list = totop.classList;

// ページが読み込まれたときに一度だけ実行される処理
// トップへ戻るボタンを非表示にして初期化
window.onload = function(){
// ページ読み込み時に実行したい処理
    totop.classList.add('JS_totopbtn_none');
        totop.classList.remove('JS_totopbtn_posi');
}

// 2022/11/23追加
// #############トップへ戻るボタン###################################
// ################################################################
// スクロールされた時、現在の縦方向のスクロール位置をコンソールに出力する
window.addEventListener('scroll', () => {

    // コンソール値を表示
    const y = window.scrollY;

    if (y < 400) {
        totop.classList.add('JS_foot_totopbtn_none');
        totop.classList.remove('JS_foot_totopbtn_posi');
    }else if(y >= 400)  {
        totop.classList.add('JS_foot_totopbtn_posi');
        totop.classList.remove('JS_foot_totopbtn_none');
    }

    console.log(y);
});


// 要素をクリックしたら上までスクロールする処理
totop.addEventListener("click", scroll_top);
// IDのjs_totopが格納されたtotopをクリックしたらページ上部へスムーズに移動するための関数
function scroll_top() {
window.scroll({ top: 0, behavior: "smooth" });
}


// #########↑トップに戻るボタンここまで#######
