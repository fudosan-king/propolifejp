//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  point.js
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
    var $sliderNav;
    
    var fadeSpeed = 600;
    var autoSliderTime = 3000;
    var autoSliderId = [];
    var imgLength = [];
    
    return{
        Init: function(){
            var _this = this;
            var _navHtml = '<div class="slider_nav"><ul></ul></div>';
            $imgSlider.each(function(i){
                $(this).append(_navHtml);
                $(this).find('.img_inner').find('li').each(function(j){
                    $(this).parents('.img_slider').find('.slider_nav').find('ul').append('<li></li>');
                    if(j == 0){
                        $(this).css({opacity: 1, position: 'relative'});
                    }
                });
                
                $(this).data('s_num', i);
                autoSliderId[i] = false;
                imgLength[i] = $(this).find('.img_inner').find('li').length;
                
                if(imgLength[i] == 1){ $(this).find('.slider_nav').hide(); }
                
                _this.AutoSlide(i);
            });
            
            $sliderNav = $('.slider_nav');
            $sliderNav.each(function(){ $(this).find('li').eq(0).addClass('current'); });
            
            this.SetSize();
            this.AddEvent();
        },
        
        AddEvent: function(){
            var _this = this;
            $sliderNav.find('li').on('click', function(){
                var _elm = $(this).parents('.img_slider');
                var _index = $(this).index();
                var _hasCurrent = $(this).hasClass('current');
                var _s_num = _elm.data('s_num');
                if(!_hasCurrent){
                    _this.Change(_elm, _index, _s_num);
                }
            });
        },
        
        Change: function(_elm, _index, s_num){
            _elm.find('.slider_nav').find('li').removeClass('current').eq(_index).addClass('current');
                    
            var s_num = _elm.data('s_num');
            var _elmImg = _elm.find('.img_inner').find('li');
            _elmImg.stop().animate({opacity: 0}, fadeSpeed);
            _elmImg.eq(_index).stop().animate({opacity: 1}, fadeSpeed);
            
            clearTimeout(autoSliderId[s_num]);
            autoSliderId[s_num] = false;
            this.AutoSlide(s_num);
        },
        
        AutoSlide: function(s_num){
            var _this = this;
            autoSliderId[s_num] = setTimeout(function(){
                var _elm = $imgSlider.eq(s_num);
                var _index = _elm.find('.current').index();
                _index = (_index == imgLength[s_num] - 1)? 0: _index + 1;
                _this.Change(_elm, _index, s_num);
            }, autoSliderTime);
        },
        
        SetSize: function(){
            $imgSlider.each(function(){
                var _w = $(this).find('img').eq(0).width();
                var _h = $(this).find('img').eq(0).height();
                
                $(this).find('.img_inner').find('li').css({height: _h});
                $(this).css({height: _h});
            });
        }
    }

})();


//--------------------------------------------------
//
//  ContentAccordion()
//
//--------------------------------------------------
/*
var ContentAccordion = (function(){
    
    var $sectionInner = $('.section_inner');
    var $btnMore = $('.btn_detail');
    var defaultNum = 0;
    var openSpeed = 500;
    
    return{
        Init: function(){
            $sectionInner.eq(defaultNum).css({height: 'auto'});
            $btnMore.eq(defaultNum).addClass('on');
            this.AddEvent();
        },
        
        AddEvent: function(){
            var _this = this;
            
            $btnMore.on('click', function(){
                var _hasOn = $(this).hasClass('on');
                var _elm = $(this).prev('.section_inner');
                if(!_hasOn){
                    $(this).addClass('on');
                    _this.Open(_elm);
                }else{
                    $(this).removeClass('on');
                    _this.Close(_elm);
                }
            });
        },
        
        Open: function(_elm){
            _elm.css({height: 'auto', visibility: 'hidden'});
            var _setH = _elm.height();
            _elm.css({visibility: 'visible', height: 0}).stop().animate({height: _setH}, openSpeed, function(){
                $(this).css({height: 'auto'});
            });
            var _offset = _elm.parents('.section').offset().top;
            this.ScrollWindow(_offset);
        },
        
        Close: function(_elm){
            _elm.stop().animate({height: 0});
            var _offset = _elm.parents('.section').offset().top;
            this.ScrollWindow(_offset);
        },
        
        ScrollWindow: function(_offset){
            var _pos = (!GL_Propolife.val.isWinSizeSmallW768)? _offset - 100: _offset - 70;
            $('body, html').stop().animate({scrollTop: _pos}, openSpeed);
        }
    }
    
})();
*/

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
    ContentAccordion.Init();
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