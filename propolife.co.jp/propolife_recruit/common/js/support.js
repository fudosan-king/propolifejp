//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  support.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

// FixedHeight
var FixedHeight = (function(){
    var $supportList = $('.support_list').find('li');
    
    return{
        SetSize: function(){
            $supportList.each(function(){
                var _imgH = $(this).find('img').height();
                $(this).css({minHeight: _imgH});
            });
        }
    }
})();


//--------------------------------------------------
//
//  Common Function
//
//--------------------------------------------------
function OnLoadFunction(){
    $(window).on('load', function(){
        FixedHeight.SetSize();
    });
}

function Update(){
    if(!GL_Propolife.val.isWinSizeSmallW768){
        FixedHeight.SetSize();
    }
}

function Run(){
    FixedHeight.SetSize();
    OnLoadFunction();
}

//--------------------------------------------------
//
//  Add Event
//
//--------------------------------------------------
$(window).on('resize orientationchange', function(){
    Update();
});

$(window).on('scroll', function(){
});

$(window).on('load', function(){
    Update();
});

Run();


});
})(jQuery);