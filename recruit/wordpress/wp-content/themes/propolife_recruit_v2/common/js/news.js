//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  news.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

var MenuArchives = (function(){
    
    var $menuArchives = $('#menu_archives');
    var $yearCurrent = $menuArchives.find('.current');
    var $yearCurrentInner = $yearCurrent.find('.inner');
    
    var archiveHeight;
    
    return{
        Init: function(){
            
            // SetCurrent
            if(parseInt($yearCurrentInner.text()) == 0){
                var recently = $menuArchives.find('li').eq(0).text();
                $yearCurrentInner.html(recently);
            }
            $yearCurrent.css({visibility: 'visible'});
            
            // RemoveList
            $menuArchives.find('li').each(function(){
                if(parseInt($(this).text()) == parseInt($yearCurrentInner.text())){
                    $(this).remove();
                }
            });
            
            // SetBackgroundColor
            $menuArchives.find('li').each(function(i){
                if(i % 2 == 1){
                    $(this).addClass('bg');
                }
            });
            
            archiveHeight = $menuArchives.find('ul').height();
            this.AddEvent();
        },
        
        AddEvent: function(){
            $yearCurrent.on('mouseenter smarttouch', function(){
                if(!$(this).hasClass('on')){
                    $yearCurrent.addClass('on');
                    $menuArchives.find('ul').css({visibility: 'visible', opacity: 0}).stop().transition({opacity: 1}, 300);
                }else{
                    $yearCurrent.removeClass('on');
                    $menuArchives.find('ul').stop().transition({opacity: 0}, 150, function(){
                        if(!$yearCurrent.hasClass('on')){
                            $yearCurrent.removeClass('on');
                            $(this).css({visibility: 'hidden'});
                        }
                    });
                }
            });

            $menuArchives.on('mouseleave', function(){
                $yearCurrent.removeClass('on');
                $menuArchives.find('ul').stop().transition({opacity: 0}, 150, function(){
                    if(!$yearCurrent.hasClass('on')){
                        $yearCurrent.removeClass('on');
                        $(this).css({visibility: 'hidden'});
                    }
                });
            });
        }
    }
})();

//--------------------------------------------------
//
//  Common Function
//
//--------------------------------------------------
function Update(){

}

function Run(){
    MenuArchives.Init();
    Update();
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