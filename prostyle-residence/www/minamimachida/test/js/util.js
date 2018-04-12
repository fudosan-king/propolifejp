//スムーススクロール
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var sc_speed = 200; // ミリ秒
      // アンカーの値取得
      var sc_href= $(this).attr('href');
      // 移動先を取得
      var sc_target = $(sc_href == '#' || sc_href == '' ? 'html' : sc_href);
      // 移動先を数値で取得
      var sc_position = sc_target.offset().top - 54;
      // スクロールしないアンカーの取得
      var noScroll = $(this).attr('class');
      // スムーススクロール
      if(noScroll != 'noSc') {
        $('body,html').animate({scrollTop:sc_position}, sc_speed, 'swing');
        return false;
      }
   });
});

// fadeImg
$(function(){
  $(".fadeImg").hover(function(){
        $(this).fadeTo(0,0.7);
    },
    function(){
        $(this).fadeTo(200,1.0);
    });
});

//SP表示でレイアウト変更
function SPLayout() {
  if (window.matchMedia("(max-width: 600px)").matches) {
    $('#present_detail #itemE .wrap').after($('#present_detail #itemE .read'));
  } else {
    $('#present_detail #itemE .tit_sp').after($('#present_detail #itemE .read'));
  }
}

$(window).load(function() {
  SPLayout();
});

var timer = false;
$(window).resize(function() {
  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    SPLayout();
  }, 100);
});


function newWindown_map(){
  window.open("map.html","map","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=750,height=600");
}

function parentlink(url) {
  window.opener.location.href = url;
  window.close();
}