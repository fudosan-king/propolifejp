//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  recruit.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

var MenuArchives = (function(){
    
    var $menuArchives = $('#menu_archives');
    var $menuCurrent = $menuArchives.find('.current');
    var $menuCurrentInner = $menuCurrent.find('.inner');
    
    var archiveHeight;
    
    return{
        Init: function(){
            $menuCurrent.css({visibility: 'visible'});

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
            $menuCurrent.on('mouseenter smarttouch', function(){
                if(!$(this).hasClass('on')){
                    $menuCurrent.addClass('on');
                    $menuArchives.find('ul').css({visibility: 'visible', opacity: 0}).stop().transition({opacity: 1}, 300);
                }else{
                    $menuCurrent.removeClass('on');
                    $menuArchives.find('ul').stop().transition({opacity: 0}, 300, function(){
                        if(!$menuCurrent.hasClass('on')){
                            $menuCurrent.removeClass('on');
                            $(this).css({visibility: 'hidden'});
                        }
                    });
                }
            });
            
            $menuArchives.on('mouseleave', function(){
                $menuCurrent.removeClass('on');
                $menuArchives.find('ul').stop().transition({opacity: 0}, 300, function(){
                    if(!$menuCurrent.hasClass('on')){
                        $menuCurrent.removeClass('on');
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