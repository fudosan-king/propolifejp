$(function () {
    //初期は非表示
    $("#bt").hide();
    $(window).scroll(function () {
        //100pxスクロールしたら
        if ($(this).scrollTop() > 100) {
            //フェードインで表示
            $('#bt').fadeIn();
        } else {
            $('#bt').fadeOut();
        }
    });
	//ボタン(id:move-page-top)のクリックイベント
   $('#bt').click(function(){
      //ページトップへ移動する
      $('html,body').animate({scrollTop:0},'slow');
   });
});