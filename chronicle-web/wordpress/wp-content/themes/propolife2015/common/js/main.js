//------------------------------------------------------------------------------------------
//
//  2015
//  PROPOLIFE
//
//  business.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

var breakPoint = 768;

//--------------------------------------------------
//
//  BusinessDescription();
//
//--------------------------------------------------
var BusinessDescription = (function(){

    var $contents = $('#contents_inner').find('.section')
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
                elm.parents('li').find('.btn_more_sp').removeClass('hidden');
                elm.css({height: 'auto'});
                var _h = elm.height();

                elm.css({height: 0}).stop().transition({height: _h}, showSpeed, showEasing);
            }else{
                elm.parents('.col_right').removeClass('on');
                elm.parents('li').find('.btn_more_sp').addClass('hidden');
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
//  AutoScrolling();
//
//--------------------------------------------------
var AutoScrolling = (function(){

    var _hash = window.location.hash;
    var showSpeed = 250;
    var showEasing = 'easeInSine';
    var moveSpeed = 300;
    var moveEasing = 'easeOutSine';

    return{
        Init: function(){
            var _this = this;
            $('#footer').find('.col_05').find('a').on('smarttouch', function(){
                _this.ScrollPosition($(this))
            });

            if(_hash){
                _this.ScrollPosition('', _hash);
            }
        },

        ScrollPosition: function(_elm, hash){
            var _href = (_elm)? _elm.attr('href'): '';
            _href = (_elm)? _href.slice(_href.indexOf('#')): hash;

            var _pos = $(_href).offset().top;

            $('body, html').stop().animate({
                scrollTop: _pos - 105
            }, moveSpeed, moveEasing);

            return false;
        }
    }
})();


//--------------------------------------------------
//
//  DisabledClick()
//
//--------------------------------------------------
function DisabledClick(){
    $('#contents_inner').find('.section').find('.col_right').on('mousedown', function(){
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
    AutoScrolling.Init();
    BusinessDescription.Init();
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