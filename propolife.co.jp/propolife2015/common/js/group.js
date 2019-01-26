//------------------------------------------------------------------------------------------
//
//  2015
//  PROPOLIFE
// 
//  group.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

var breakPoint = 768;

//--------------------------------------------------
//
//  GroupDescription();
//
//--------------------------------------------------
var GroupDescription = (function(){
    
    var $contents = $('#section_group');
    var $colRight = $contents.find('.col_right');
    var $desc = $contents.find('.desc');
    
    var showSpeed = 250;
    var showEasing = 'easeOutSine';

    return{
        Init: function(){
            var _this = this;
            $colRight.on('smarttouch', function(){
                var $desc = $(this).find('.desc');
                if(GL_Propolife.val.isWinSizeSmallW768){
                    _this.SwitchNav($desc);
                }
            });
            
            $(window).on('resize orientationchange', function(){
                _this.ResizeSwitchNav();
            });
        },
        
        SwitchNav: function(elm){
            var _display = (elm.parents('.col_right').hasClass('on'))? true: false;
            
            
            if(!_display){
                elm.parents('.col_right').addClass('on');
                elm.css({height: 'auto'});
                var _h = elm.height();

                elm.css({height: 0}).stop().transition({height: _h}, showSpeed, showEasing);
            }else{
                elm.parents('.col_right').removeClass('on');
                elm.stop().transition({height: 0}, showSpeed, showEasing);
            }
        },
        
        ResizeSwitchNav: function(){
            var _this = this;
            if(winSize.w > breakPoint){
                $desc.css({height: 'auto'});
                $desc.each(function(){
                    var _isOpen = ($(this).parents('.col_right').hasClass('on'))? true: false;
                    if(_isOpen){
                        $(this).removeClass('on');
                        _this.SwitchNav($(this));
                    }
                });
            }else{
                $desc.each(function(){
                    var _isOpen = ($(this).parents('.col_right').hasClass('on'))? true: false;
                    if(!_isOpen){ $(this).css({height: 0}); }
                });
            }
        }
    }
})();

//--------------------------------------------------
//
//  DisabledClick()
//
//--------------------------------------------------
function DisabledClick(){
    $('#section_group').find('.col_right').on('mousedown', function(){
        return false;
    });
}


//--------------------------------------------------
//
//  Common Function
//
//--------------------------------------------------
function Update(){
    winSize = {w: $(window).width(), h: $(window).height() }
}

function Run(){
    GroupDescription.Init();
    DisabledClick();
    Update();
}

//--------------------------------------------------
//
//  Add Event
//
//--------------------------------------------------
$(window).on('resize', function(){
    Update();
});

$(window).on('scroll', function(){
    scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }
});

$(window).on('load', function(){
    Update();
});

Run();

});
})(jQuery);