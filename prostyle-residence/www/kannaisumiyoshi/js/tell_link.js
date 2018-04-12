// JavaScript Document

$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link').each(function(){
            if($(this).is('img')) {
                var str = $(this).attr('alt');
                $(this).wrap('<a href="tel:'+str.replace(/-/g,'')+'"></a>');
            } else {
                var str = $(this).text();
                $(this).replaceWith('<a href="tel:'+str.replace(/-/g,'')+'">' + str + '</a>');
            }
        });
    }
});