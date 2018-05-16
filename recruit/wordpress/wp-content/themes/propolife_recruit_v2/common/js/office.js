//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  office.js
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
    var $sliderNav, $arrowLeft, $arrowRight, $navThumb, $thumbArrowLeft, $thumbArrowRight;
    var $currentSliderList;
    var $nextSlideList;
        
    // var
    var defImgW = 680;
    var defImgH = 360;
    var defImgRatio = defImgW / defImgH;
    
    var thumbWidth;
    var thumbMaxWidth;
    var thumbLength = 5;
    var thumbPos = 0;
    
    var currentNum = [];
    var imgLength = [];
    var moveAvailable = [];
    
    var navHtml = '';
    navHtml += '<div class="img_slider_nav">';
    navHtml += '<p class="slide_arrow_left"></p><p class="slide_arrow_right"></p>';
    navHtml += '<div class="img_slider_nav_thumb">';
    navHtml += '<p class="slide_thumb_arrow_left"></p><p class="slide_thumb_arrow_right"></p>';
    navHtml += '<div class="img_slider_nav_thumb_inner">';
    navHtml += '<ul class="nav_thumb"></ul>';
    navHtml += '</div>';
    navHtml += '</div>';
    navHtml += '</div>';
    
    var autoSlideSetTimeout = [];
    var isAutoSlideOn = [];
    var autoSlideTime = 3000;
    var slideSpeed = 400;
    
    var navScrollSpeed = 300;
    
    return{
        Init: function(){
            var _this = this;
            $imgSlider.each(function(i){
                $(this).append(navHtml);
                $(this).data('snum', i);
                $(this).find('li').eq(0).css({opacity: 1, position: 'relative'});
                currentNum[i] = 0;
                imgLength[i] = $(this).find('li').length;
                moveAvailable[i] = true;
                autoSlideSetTimeout[i] = false;
                isAutoSlideOn[i] = $(this).hasClass('auto_slide');
                for(var j = 0; j < imgLength[i]; j ++){
                    var _img = $(this).find('li').eq(j).find('img').attr('src');
                    $(this).find('.nav_thumb').append('<li><img src="' + _img + '" alt=""></li>');
                }
                $(this).find('.nav_thumb').find('li').eq(0).addClass('current');
                _this.AutoSlider(i);
            });
            
            $sliderNav = $('.img_slider_nav');
            $arrowLeft = $('.slide_arrow_left');
            $arrowRight = $('.slide_arrow_right');
            $thumbArrowLeft = $('.slide_thumb_arrow_left');
            $thumbArrowRight = $('.slide_thumb_arrow_right');
            $navThumb = $('.nav_thumb');
            thumbWidth = $navThumb.find('li').eq(0).outerWidth(true);
            thumbMaxWidth = (thumbWidth * imgLength[0]) - (thumbWidth * thumbLength);
            
            this.SetSize();
            this.AddEvent();
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
            
            $thumbArrowLeft.on('click', function(){
                _this.ThumbNavigation('left');
            });
            
            $thumbArrowRight.on('click', function(){
                _this.ThumbNavigation('right');
            });
            
            // Dot Navigation
            $navThumb.find('li').on('click', function(){
                var _thumbIndex = $(this).index();
                var _index = $(this).parents('.img_slider').data('snum');
                var _direction = (_thumbIndex < currentNum[_index])? 'left': 'right';
                _this.Change(_index, _direction, true, _thumbIndex);
            });
        },
        
        Change: function(_index, _direction, _navThumb, _thumbIndex){
            var _this = this;

            if(moveAvailable[_index]){
                moveAvailable[_index] = false;
                var _width = $imgSlider.eq(_index).find('li').width();
                var $current = $imgSlider.eq(_index).find('li').eq(currentNum[_index]);
                
                // NavArrow
                if(!_navThumb){
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
                
                // navThumb
                if(_navThumb){
                    var $next = $imgSlider.eq(_index).find('li').eq(_thumbIndex);
                    currentNum[_index] = _thumbIndex;
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
                
                // navThumb Change Current
                $imgSlider.eq(_index).find('.nav_thumb').find('li').removeClass('current').eq(currentNum[_index]).addClass('current');
                if(!_navThumb){
                    var _navThumbPos = (thumbWidth * currentNum[_index] < thumbMaxWidth)? thumbWidth * currentNum[_index]: thumbMaxWidth;
                    $navThumb.stop().animate({left: -_navThumbPos}, navScrollSpeed);
                }
            }
        },
        
        ThumbNavigation: function(_direction){
            
            if(_direction == 'right'){
                thumbPos += thumbWidth * thumbLength;
                if(thumbPos >= thumbMaxWidth){ thumbPos = thumbMaxWidth; }
            }
            
            if(_direction == 'left'){
                thumbPos -= thumbWidth * thumbLength;
                if(thumbPos <= 0){ thumbPos = 0; }
            }
            
            $navThumb.stop().animate({left: -thumbPos}, navScrollSpeed);
        },
        
        AutoSlider: function(_index){
            var _this = this;
            
            if(isAutoSlideOn[_index]){
                autoSlideSetTimeout[_index] = setTimeout(function(){
                    _this.Change(_index, 'right', false, false);
                    _this.AutoSlider(_index);
                    clearTimeout(autoSlideSetTimeout[_index]);
                    autoSlideSetTimeout[_index] = false;
                }, autoSlideTime);
            }
        },
        
        SetSize: function(){
            $imgSlider.each(function(i){
                // Pic Height
                var _imgH = $(this).children('ul').find('li').eq(0).find('img').height();
                // Nav Position
                $sliderNav.find('.slide_arrow_left, .slide_arrow_right').css({top: _imgH/2});
            });
            
            var _thumbSetW = $('#page_office').width() / 5;
            
            $navThumb.find('li').css({width: _thumbSetW - 6});
            
            thumbWidth = $navThumb.find('li').eq(0).outerWidth(true);
            thumbMaxWidth = (thumbWidth * imgLength[0]) - (thumbWidth * thumbLength);
            var _navThumbPos = (thumbWidth * currentNum[0] < thumbMaxWidth)? thumbWidth * currentNum[0]: thumbMaxWidth;
            $navThumb.stop().animate({left: -_navThumbPos}, 0);
            var thumbHeight = $navThumb.find('li').eq(0).find('img').height();
            $navThumb.css({height: thumbHeight});
            
            $sliderNav.find('.slide_thumb_arrow_left, .slide_thumb_arrow_right').css({top: thumbHeight/2});
        }
    }
})();


//--------------------------------------------------
//
//  Common Function
//
//--------------------------------------------------
function Update(){
    ImgSlider.SetSize();
}

function Run(){
    ImgSlider.Init();
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