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
      if(document.URL.match(/equipment/)) {
        var sc_position = sc_target.offset().top;
      }
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


// pageTop
$(window).scroll(function(){
  var s = $(this).scrollTop();
  var m = 100;
  setTimeout(function(){
    //console.log(s);
  },1000);
  if(s > m){
    $('.pageTop').fadeIn('fast');
  } else if(s < m) {
    $('.pageTop').fadeOut('fast');
  }
});

//SP表示でレイアウト変更
function SPLayout() {
  if (window.matchMedia("(max-width: 600px)").matches) {
    $('#present_detail #itemE .wrap').after($('#present_detail #itemE .read'));
  } else {
    $('#present_detail #itemE .tit_sp').after($('#present_detail #itemE .read'));
  }
  if (window.matchMedia("(max-width: 1140px)").matches) {
    $('#equipment #bath1 .titCol').after($('#equipment #bath1 .itemCol'));
  } else {
    $('#equipment #bath1 .titCol').before($('#equipment #bath1 .itemCol'));
  }
  if (window.matchMedia("(max-width: 599px)").matches) {
    $('.woodFeature .plan .Etype .txt').insertBefore($('.woodFeature .plan .Etype .planImg'));
  } else {
    $('.woodFeature .plan .Etype .txt').insertAfter($('.woodFeature .plan .Etype .planImg'));
  }
  if (window.matchMedia("(max-width: 710px)").matches) {
    //ヘッダー固定
    $('#main').css("marginTop", $('header').height());

  } else{
    $('#main').css("marginTop", "");
  }
}


$(window).load(function() {
  SPLayout();
});

var timer = false;
$(window).resize(function() {
    console.log(timer);
  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    SPLayout();
  }, 300);
});


//ハンバーガーメニュー
$(function(){
  $('header nav .menu').hide();
  $('.navToggleBtn a').on('click', function() {
    //メニュー位置
    var globalMenuPosition = $('.proStyleLogo').outerHeight();
    $('nav ul.menu').css("top", globalMenuPosition);

    $('header nav .menu').slideToggle();
    return false;
  });
  $(document).on('click', function() {
    $('header nav .menu').slideUp();
  });
});

 //トップページメインビジュアル
$(function() {
  $(window).on('load resize', function() {
    var imgHeight = $('#main.topPage .mainImg img:first-child').height();
    $('#main.topPage .mainImg').css({'height':imgHeight+'px'});
  });
  // $('#main.topPage .mainImg img:gt(0)').hide();
  // var mainImageIntervalTime;
  // mainImageInterval();

  // function mainImageInterval(){
  //   if($('#main.topPage .mainImg :first-child').hasClass("slow")){
  //     mainImageIntervalTime = 10000;
  //   }else if($('#main.topPage .mainImg :first-child').hasClass("fast")){
  //     mainImageIntervalTime = 2500;
  //   }else{
  //     mainImageIntervalTime = 5000;
  //   }

  //   $('#main.topPage .mainImg :first-child').addClass("current");

  //   if($('#main.topPage .mainImg :first-child').hasClass("end")){
  //     return false;
  //   }else{
  //     setTimeout(function(){
  //       $('#main.topPage .mainImg :last-child').removeClass("current");
  //       $('#main.topPage .mainImg :first-child')
  //         .fadeOut()
  //         .next('img').fadeIn()
  //         .end().appendTo('.mainImg')
  //         mainImageInterval();
  //     },mainImageIntervalTime);
  //   }
  // }
});

//スマホで電話をかける
$(function(){
  var device = navigator.userAgent;
  if((device.indexOf('iPhone') > 0 && device.indexOf('iPad') == -1) || device.indexOf('Android') > 0){
    $(".tel.contact > img").wrap('<a href="tel:0120334030" onclick="ga(\'send\', \'event\', \'click\', \'tel-tap\');"></a>');
  }else{
        $(".headerTelBtn").hide();
  }
});

//スマホの場合印刷ボタン非表示
$(function(){
    var ua = navigator.userAgent.toUpperCase();
    if(ua.indexOf('IPHONE') != -1 || (ua.indexOf('ANDROID') != -1 && ua.indexOf('MOBILE') != -1)){
        $(".btnStyle.print").hide();
    }
});

//地図ポップアップウィンドウ制御
function newWindown_map(){
  window.open("map.html","map","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=750,height=600");
}

//間取りポップアップウィンドウ制御
function newWindown_planA(){
  var window_planA = window.open("plan_a.html","planA","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planA.focus();
}

function newWindown_planAg(){
  var window_planC = window.open("plan_ag.html","planAg","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planC.focus();
}

function newWindown_planB(){
  var window_planB = window.open("plan_b.html","planB","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planB.focus();
}

function newWindown_planC(){
  var window_planC = window.open("plan_c.html","planC","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planC.focus();
}

function newWindown_planD(){
  var window_planD = window.open("plan_d.html","planD","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planD.focus();
}

function newWindown_planE(){
  var window_planE = window.open("plan_e.html","planE","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=840");
  window_planE.focus();
}

function parentlink(url) {
  window.opener.location.href = url;
  window.close();
}

//トップページフローティングウィンドウ
$(function(){
  var flag="0";
  $('.topPage .cpBnr01').on('click', function() {
    $('#cp1609Bg').fadeIn();
    $('#cp1609').fadeIn();
    flag="1";
    console.log(flag);
  });
  $('#cp1609Bg,#cp1609 .btn_close').on('click touchend', function() {
    if (flag == "1") {
      $('#cp1609Bg').fadeOut();
      $('#cp1609').fadeOut();
      flag="0";
      console.log(flag);
    }
  });
  $('.topPage .cpBnr02').on('click', function() {
    $('#cp1612_03Bg').fadeIn();
    $('#cp1612_03').fadeIn();
    flag="1";
    console.log(flag);
  });
  $('#cp1612_03Bg,#cp1612_03 .btn_close').on('click touchend', function() {
    if (flag == "1") {
      $('#cp1612_03Bg').fadeOut();
      $('#cp1612_03').fadeOut();
      flag="0";
      console.log(flag);
    }
  });
  $('.topPage .galleryBnr, .topPage .galleryBnr_sp').on('click', function() {
    $('#gallery_Bg').fadeIn();
    $('#gallery').fadeIn();
    flag="1";
    console.log(flag);
  });
  $('#gallery_Bg, #gallery .btn_close').on('click touchend', function() {
    if (flag == "1") {
      $('#gallery_Bg').fadeOut();
      $('#gallery').fadeOut();
      flag="0";
      console.log(flag);
    }
  });
});

//メインイメージ上バナー制御
$(function(){
  $('#main.topPage .solidWoodBnr .close').on('click touchend',function(){
    $('#main.topPage .solidWoodBnr').fadeOut();
  });
  $('#main.topPage .galleryBnr .close').on('click touchend',function(){
    event.stopPropagation();
    $('#main.topPage .galleryBnr').fadeOut();
  });
});


//プランポップアップフローティングウィンドウ
$(function(){

  $('.plan_popup_btn').on("click", function(event){
    event.preventDefault();
    $("#plan_description").fadeIn();
    var plan_popup_description_content_targetId = $(this).attr("id").replace(/btn/g,'window');
    $("#"+plan_popup_description_content_targetId).css("display", "block");
  });

  $('.plan_description_contents').on("click", function(){
    return false;
  });
  $('#plan_description, .plan_description_contents_closeBtn').on("click", function(event){
    $("#plan_description").fadeOut();
    $('.plan_description_contents').css("display", "");
  });

});
