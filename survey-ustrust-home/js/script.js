$(function(){
	var param = $(location).attr('search');
	if(param!=="" && param.indexOf('id=') != -1){
		param = param.substr(4);
		if(param.indexOf('&') != -1){
			param = param.substr(0, param.indexOf('&'));
		}
		$('input[name=email]').val(param);
	}
	
	$('.branch-01 select').change(function() {
		var val = $(this).val();
		var nextQ = $(this).parent().parent().next("dl");
		if(val=="おすすめ物件情報" || val=="水面下物件（一足早い情報です）"){
			$(nextQ).slideDown();
			//$(nextQ).find("select").addClass("validate[required]");
		}else{
			$(nextQ).slideUp();
			$(nextQ).find("select").val("");
			//$(nextQ).find("select").removeClass("validate[required]");
		}
	});
});
function getCookie(name){
    if (name === undefined) { throw 'argument missing!'; }
    var strResult = null;
    if (navigator.cookieEnabled && document.cookie) {
        var strParamName = name + '=';
        var strCookie = document.cookie;
        var iKeyStart = strCookie.indexOf(strParamName);
        if(iKeyStart != -1){
            var iValStart = iKeyStart + strParamName.length;
            var iValEnd = strCookie.indexOf(';', iValStart);
            if(iValEnd == -1) { iValEnd = strCookie.length; }
            strResult = '' + decodeURIComponent(strCookie.substring(iValStart, iValEnd));
        }
    }
    return strResult;
}