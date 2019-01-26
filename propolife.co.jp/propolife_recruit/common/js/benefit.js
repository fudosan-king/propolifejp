//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  benefit.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

//--------------------------------------------------
//
//  ImgSlider()
//
//--------------------------------------------------
var ImgSlider = (function(){
    
    // selector
    var $imgSlider = $('.img_slider');
    var $sliderNav, $arrowLeft, $arrowRight, $navDot;
    var $currentSliderList;
    var $nextSlideList;
        
    // var
    var defImgW = 649;
    var defImgH = 397;
    var defImgRatio = defImgW / defImgH;
    
    var currentNum = [];
    var imgLength = [];
    var moveAvailable = [];
    
    var navHtml = '';
    navHtml += '<div class="img_slider_nav">';
    navHtml += '<p class="slide_arrow_left"></p><p class="slide_arrow_right"></p>';
    navHtml += '<ul class="nav_dot"></ul>';
    navHtml += '</div>';
    
    var autoSlideSetTimeout = [];
    var isAutoSlideOn = [];
    var autoSlideTime = 3000;
    var slideSpeed = 400;
    
    return{
        Init: function(){
            var _this = this;
            $imgSlider.each(function(i){
                $(this).append(navHtml);
                $(this).data('snum', i);
                $(this).find('li').eq(0).css({position: 'relative'});
                currentNum[i] = 0;
                imgLength[i] = $(this).find('li').length;
                moveAvailable[i] = true;
                autoSlideSetTimeout[i] = false;
                isAutoSlideOn[i] = $(this).hasClass('auto_slide');
                for(var j = 0; j < imgLength[i]; j ++){
                    $(this).find('.nav_dot').append('<li></li>');
                }
                $(this).find('.nav_dot').find('li').eq(0).addClass('current');
                 _this.AutoSlider(i);
            });
            
            $sliderNav = $('.img_slider_nav');
            $arrowLeft = $('.slide_arrow_left');
            $arrowRight = $('.slide_arrow_right');
            $navDot = $('.nav_dot');
            
            if(imgLength[0] == 1){
                $sliderNav.hide();
            }
            
            this.SetSize();
            this.AddEvent();
        },
        
        OnLoad: function(){
            $imgSlider.find('.img_inner').find('li').eq(0).stop().animate({opacity: 1}, slideSpeed);
        },
        
        AddEvent: function(){
            var _this = this;
            var $imgSliderList = $imgSlider.children('ul').children('li');
            
            // Arrow Navigation
            $arrowLeft.on('click', function(){
                var _index = $(this).parents('.img_slider').data('snum');
                _this.Change(_index, 'left');
            });
            
            $arrowRight.on('click', function(){
                var _index = $(this).parents('.img_slider').data('snum');
                _this.Change(_index, 'right');
            });
            
            // Dot Navigation
            $navDot.find('li').on('click', function(){
                var _dotIndex = $(this).index();
                var _index = $(this).parents('.img_slider').data('snum');
                var _direction = (_dotIndex < currentNum[_index])? 'left': 'right';
                _this.Change(_index, _direction, true, _dotIndex);
            });
        },
        
        Change: function(_index, _direction, _navDot, _dotIndex, _touch, _autoSlide){
            var _this = this;

            if(moveAvailable[_index]){
                moveAvailable[_index] = false;
                var $current = $imgSlider.eq(_index).find('li').eq(currentNum[_index]);
                
                // NavArrow
                if(!_navDot){
                    if(_direction == 'left'){
                        var $next = $imgSlider.eq(_index).find('li').eq((currentNum[_index] - 1 < 0)? imgLength[_index] - 1: currentNum[_index] - 1);
                        currentNum[_index] -= 1;
                        if(currentNum[_index] < 0){ currentNum[_index] = imgLength[_index] - 1; }
                    }
                    if(_direction == 'right'){
                        var $next = $imgSlider.eq(_index).find('li').eq((currentNum[_index] + 1 == imgLength[_index])? 0: currentNum[_index] + 1);
                        currentNum[_index] += 1;
                        if(currentNum[_index] == imgLength[_index]){ currentNum[_index] = 0; }
                    }
                }
                
                // NavDot
                if(_navDot){
                    var $next = $imgSlider.eq(_index).find('li').eq(_dotIndex);
                    currentNum[_index] = _dotIndex;
                }
                
                // Move Transition
                clearTimeout(autoSlideSetTimeout[_index]);
                autoSlideSetTimeout[_index] = false;
                
                // Fade Slide
                $current.stop().animate({opacity: 0}, slideSpeed);
                $next.stop().animate({opacity: 1}, slideSpeed, function(){
                    moveAvailable[_index] = true;
                    _this.AutoSlider(_index);
                });
                
                // NavDot Change Current
                $imgSlider.eq(_index).find('.nav_dot').find('li').removeClass('current').eq(currentNum[_index]).addClass('current');
            }
        },
        
        AutoSlider: function(_index){
            var _this = this;
            
            if(isAutoSlideOn[_index]){
                autoSlideSetTimeout[_index] = setTimeout(function(){
                    _this.Change(_index, 'right', false, false, false, true);
                    _this.AutoSlider(_index);
                    clearTimeout(autoSlideSetTimeout[_index]);
                    autoSlideSetTimeout[_index] = false;
                }, autoSlideTime);
            }
        },
        
        SetSize: function(){
            $imgSlider.each(function(i){
                // Pic Height
                var _imgW = $(this).find('.img_inner').find('li').eq(0).find('img').width();
                var _setH = _imgW / defImgRatio;
                $(this).find('.img_inner').find('li').find('.pic').css({height: _setH});
                
                $(this).find('.img_inner').find('li').each(function(i){
                    var _picH = $(this).find('.pic').height();
                    var _imgH = $(this).find('img').height();
                    $(this).find('img').css({top: _picH/2 - _imgH/2});
                });
                
                // Nav Position
                $sliderNav.find('.slide_arrow_left, .slide_arrow_right').css({top: _setH/2});
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
    $(window).on('load', function(){;
        ImgSlider.SetSize();
        ImgSlider.OnLoad();
    });
}

function Update(){
    ImgSlider.SetSize();
}

function Run(){
    ImgSlider.Init();
    Update();
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