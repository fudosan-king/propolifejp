
/* -------- TOP PC・メインビジュアル　画像切り替え -------- */
/* TAB */
$(function(){
  $("#topmain .boxSlidetabs").tabs("#topmain .boxItem", {effect: 'fade'});
});

/* SlideShow */
$(function() {
  $("#topmain .boxSlidetabs").tabs("#topmain .boxContWrap > .boxItem", {
    // enable "cross-fading" effect
    effect: 'fade',
    fadeInSpeed: "slow",
    fadeOutSpeed: "slow",

    // start from the beginning after the last tab
    rotate: true

  // use the slideshow plugin. It accepts its own configuration
  }).slideshow({
    // スライドショープラグインの追加
    next: ".forward",           // 前ボタンのクラス名
    prev: ".backward",          // 次ボタンのクラス名
    disabledClass: "disabled",  // 無効化した時のクラス名
    autoplay: true,            // 自動再生の初期値
    autopause: true,            // ロールオーバーで自動再生を停止するか
    interval: 4000,             // 自動再生速度（ミリ秒）
    clickable: false,           // パネル自身をクリック可能にするか
    api: false
  });
});

/* -------- TOP スマホ・メインビジュアル　画像切り替え -------- */
$(function() {
    $("#topmainSmp .boxSelectBtn li").click(function() {
        var num = $("#topmainSmp .boxSelectBtn li").index(this);
        $("#topmainSmp .boxContWrap").hide();
        $("#topmainSmp .boxContWrap").eq(num).fadeIn('slow');
        $("#topmainSmp .boxSelectBtn > li").removeClass('on');
        $(this).addClass('on')
    });
});