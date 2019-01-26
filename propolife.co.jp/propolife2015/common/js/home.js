//------------------------------------------------------------------------------------------
//
//  2015
//  PROPOLIFE
//
//  home.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){
var winSize = {w: $(window).width(), h: $(window).height() }
var scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }
var currentSection = 0;
var minHeight = 320;

//--------------------------------------------------
//
//  BackgroundImage
//
//--------------------------------------------------
var BackgroundImage = (function(){

    var $contentsInner = $('#contents_inner');
    var $section = $contentsInner.find('.section');
    var $sectionInner = $section.find('.section_inner');
    var $background = $('#background').find('#pic');
    var $backgroundFrame;

    // Contents
    var headerH = $('#header').height();

    // Background
    var bgFrame = 76;
    var bgPath = '/wordpress/wp-content/themes/propolife2015/common/images/home/bg_anim/';
    var bgHeight = 638;
    var adjustSize = 0;
    var currentNum = 0;
    var fadeSpeed = 50;
    var fadeEase = 'easeInSine';

    var imgLoadNum = 0;
    var loadTimeout = false;
    var isLoadEnd = false;
    var timeoutTimer = 10000;

    return{
        Init: function(){
            var _this = this;

            /*
                add background picture
            */
            var _bgHtml = '';
            for(var i = 0; i < bgFrame; i ++){
                var _img = (i < 9)? '00' + (i + 1) + '.png': '0' + (i + 1) + '.png';
                var _imgPath = bgPath + _img;
                _bgHtml += '<li><span><img src="' + _imgPath + '" alt=""></span></li>';
                _this.ImgLoader(_imgPath);
            }

            $background.html('<ul></ul>');
            $background.find('ul').append(_bgHtml);
            $backgroundFrame = $background.find('li');
            $backgroundFrame.css({visibility: 'hidden'}).eq(currentNum).css({visibility: 'visible'});

            loadTimeout = setTimeout(function(){
                if(!isLoadEnd){
                    OpeningAnimation();
                    isLoadEnd = true;
                }
            }, timeoutTimer);

        },

        ImgLoader: function(_path){
            var _img = new Image();
            _img.src = _path;
            _img.onload = function(){
                imgLoadNum ++;
                if(imgLoadNum == bgFrame){
                    if(!isLoadEnd){
                        OpeningAnimation();
                        isLoadEnd = true;
                    }
                }
            }
        },

        SetContentSize: function(){
            $background.find('li').css({width: winSize.w, height: winSize.h});
            this.SwitchBgImg();
        },

        SwitchBgImg: function(){
            var _nextNum = 0;
            var _contentHeight = $contentsInner.outerHeight(true);

            if(!GL_Propolife.val.isWinSizeSmallW768){
                var _average = (_contentHeight - winSize.h*2) / bgFrame;
                for(var i = 0; i < bgFrame; i ++){
                    if(scrollPos.top - winSize.h >= _average * i){
                        _nextNum = i;
                    }
                }
            }else{
                var _average = (_contentHeight - winSize.h*2.2) / bgFrame;
                for(var i = 0; i < bgFrame; i ++){
                    if(scrollPos.top - winSize.h * 1.5 >= _average * i){
                        _nextNum = i;
                    }
                }
            }

            if(currentNum != _nextNum){
                $backgroundFrame.eq(currentNum).stop().css({opacity: 0}).hide();
                $backgroundFrame.eq(_nextNum).show().css({visibility: 'visible', opacity: 1});
                currentNum = _nextNum;
            }
        }
    }

})();


//--------------------------------------------------
//
//  KeyVisual()
//
//--------------------------------------------------
var KeyVisual = (function(){

    var $mainVisual = $('#main_visual');
    var $mainVisualInner = $('#main_visual_inner');
    var $main_copy = $mainVisual.find('.main_copy');

    var headerH = $('#header').height();
    var sideMargin = 60;
    var defImgW = 1200;
    var defImgH = 562;
    var defImgRatio = defImgW / defImgH;

    return{
        Init: function(){
            this.SetSize();
            this.ScrollSetPosSizing();
        },

        SetSize: function(){
            var _width = (!GL_Propolife.val.isWinSizeSmallW768)? winSize.w - sideMargin: winSize.w;
            var _height = (!GL_Propolife.val.isWinSizeSmallW768)? _width / defImgRatio: winSize.h;
            var _left = (!GL_Propolife.val.isWinSizeSmallW768)? winSize.w/2 - _width/2: 0;
            var _top = (!GL_Propolife.val.isWinSizeSmallW768)? winSize.h/2 - _height/2 - headerH: 0;

            $mainVisualInner.css({width: _width, height: _height, left: _left, top: _top});
        },

        ScrollSetPosSizing: function(){

            // PC
            if(!GL_Propolife.val.isWinSizeSmallW768){
                $mainVisual.stop().css({top: -scrollPos.top});
            }

            // SP
            if(GL_Propolife.val.isWinSizeSmallW768){
                var _maxH = winSize.h - headerH;
                var _fixedH = Math.round(winSize.w / defImgRatio);
                var _imgW = Math.round(_maxH * defImgRatio);

                var _average = (_maxH - _fixedH) / (winSize.h / 4);
                var _setH = _maxH - (scrollPos.top * _average);

                $mainVisual.css({top: 0});

                if(_maxH <= _fixedH){
                    _average = Math.abs((_maxH - _fixedH) / (winSize.h / 4));
                     _setH = Math.abs(_maxH - (scrollPos.top * _average));
                }

                $mainVisualInner.css({width: winSize.w, height: _fixedH, marginTop: headerH});

                if(_maxH >= _fixedH){
                    if(scrollPos.top > winSize.h * 1){
                        var _average = _fixedH / ((winSize.h/2) - headerH);
                        var _pos = (scrollPos.top - winSize.h * 1) * _average;
                        $mainVisual.css({top: -_pos});
                    }
                }else{
                    $mainVisual.stop().css({top: -scrollPos.top});
                }

                if(_setH > _fixedH){
                    $mainVisualInner.css({width: winSize.w, height: _setH, marginTop: headerH});
                }
            }
        }
    }
})();


//--------------------------------------------------
//
//  ContentsSection()
//
//--------------------------------------------------
var ContentsSection = (function(){

    var $background = $('#background');
    var $contentsInner = $('#contents_inner');
    var $section = $contentsInner.find('.section');
    var $sectionInner = $contentsInner.find('.section_inner');

    var sectionLength = $section.length * 2;
    var sectionNum = $section.length;
    var sectionMinWidth = $sectionInner.width();

    var minWidth = 880;
    var contentMargin = 60;

    var moveSpeed = 60;
    var moveEasing = 'easeOutSine';

    var isBgShow = true;

    var sectionBtnDefaultMargin = [];
    for(var i = 0; i < sectionNum; i ++){
        sectionBtnDefaultMargin[i] = parseInt($sectionInner.find('.btn_more').css('margin-top'));
    }

    return{
        Init: function(){
            var _this = this;
            _this.Update();
        },

        Update: function(){
            this.SetSize();
            this.SetPosition();
            this.SetCurrentNum();
            this.MoveSection();
            if(GL_Propolife.val.isSP){
                this.ShowHideBackground();
            }
        },

        SetCurrentNum: function(){
            for(var i = 0; i < sectionLength * 4 + 2; i ++){
                if(scrollPos.top > winSize.h/2 * i && scrollPos.top < winSize.h/2 * (i + 1)){
                    if(currentSection != i){
                        currentSection = i;
                    }
                }
            }
        },

        SetSize: function(){
            var contentHeight = winSize.h * sectionLength * 1.5;
            var sectionWidth = (winSize.w > minWidth + contentMargin)? minWidth - contentMargin: winSize.w - contentMargin * 2;

            if(GL_Propolife.val.isWinSizeSmallW768){ sectionWidth = 450;}
            if(GL_Propolife.val.isWinSizeSmallW480){ sectionWidth = 290;}

            $sectionInner.css({width: sectionWidth});

            if(!GL_Propolife.val.isWinSizeSmallW768){
                $section.css({height: winSize.h});
                $contentsInner.css({width: winSize.w, height: contentHeight, paddingTop: winSize.h*2, marginTop: 0});
            }else{
                $section.css({height: 'auto'});
                $contentsInner.css({width: winSize.w, height: '100%', marginTop: winSize.h * 2.5});
            }
        },

        SetPosition: function(){
            if(!GL_Propolife.val.isWinSizeSmallW768){
                $section.css({top: winSize.h});
                $sectionInner.each(function(){
                    var _height = $(this).height();
                    var _posTop = winSize.h/2 - _height/2;
                    $(this).css({top: _posTop, left: 0});
                });
            }else{
                $section.css({top: 0});
                $sectionInner.css({top: 0, left: 0});
            }
        },

        MoveSection: function(){
            var _up = 1;
            var _stop = 4;
            var _forward = 1.5;

            if(!GL_Propolife.val.isWinSizeSmallW768){
                for(var i = 0; i < sectionNum; i ++){
                    var _u = _up + i * 3;
                    var _s = (_stop + (i * 6)) +1;
                    var _f = (_u + .5 + .5);

                    var _posH3 = (scrollPos.top - winSize.h * _u > winSize.h)? winSize.h: scrollPos.top - winSize.h * _u;
                    var _posPic = (scrollPos.top - winSize.h * _u > winSize.h)? winSize.h: scrollPos.top - winSize.h * _u;
                    var _posBtn = (scrollPos.top - winSize.h * _u > winSize.h)? winSize.h: scrollPos.top - winSize.h * _u;

                    var _posH3L = (scrollPos.top - winSize.h * _u > winSize.h)? winSize.h: scrollPos.top - winSize.h * _u;
                    var _posBtnT = (scrollPos.top - winSize.h * _u > winSize.h)? winSize.h: scrollPos.top - winSize.h * _u;


                    if(currentSection > _s){
                        _posH3 = scrollPos.top - winSize.h * _f;
                        _posPic = scrollPos.top - winSize.h * _f;
                        _posBtn = scrollPos.top - winSize.h * _f;
                    }

                    var _h3PosLeft = (i % 2 == 0)? winSize.h -_posH3L: -winSize.h +_posH3L;

                    $section.eq(i).find('h3').stop().animate({top: -_posH3, left: _h3PosLeft * .3}, moveSpeed/1, moveEasing);
                    $section.eq(i).find('.pic').stop().animate({top: -_posPic}, moveSpeed*2, moveEasing);
                    $section.eq(i).find('.btn_more').stop().animate({top: -_posBtn, left: _h3PosLeft * -.2}, moveSpeed, moveEasing);
                }
            }else{
                $section.find('h3').css({top: 0, left: 0});
                $section.find('.pic').css({top: 0, left: 0});
                $section.find('.btn_more').css({top: 0, left: 0});
            }
        },

        ShowHideBackground: function(){
            if(scrollPos.top + winSize.h > $('body').height() * .8){
                if(isBgShow){
                    isBgShow = false;
                    $background.hide();
                }
            }else{
                if(!isBgShow){
                    isBgShow = true;
                    $background.show();
                }
            }
        }

    }
})();

//--------------------------------------------------
//
//  BtmBannerPosition()
//
//--------------------------------------------------
var BtmBannerPosition = (function(){

    var $btmBanner = $('#btm_banner');
    var $btmBannerList = $btmBanner.find('ul');

    var btmBannerListLength = $btmBanner.find('li').length;
    var btmBannerMargin = 20;
    var contentMargin = 0;
    var minW = 1080;

    return{
        Init: function(){
            this.SetPosition();
        },

        SetPosition: function(){
            var btmBannerW = $btmBanner.find('li').outerWidth(true);

            if(!GL_Propolife.val.isWinSizeSmallW480){
                var _listNum = parseInt((winSize.w - 60) / btmBannerW);
                _listNum = (_listNum > btmBannerListLength)? btmBannerListLength: _listNum;
                var _listWidth = _listNum * btmBannerW;

                $btmBannerList.css({width: _listWidth});
            }else{
                $btmBannerList.css({width: 320});
            }
        }
    }
})();


//--------------------------------------------------
//
//  SmoothScroll()
//
//--------------------------------------------------
var SmoothScroll = (function(){

    var $contents = $('#contents');

    var scrollVal = 8;
    var scrollSpeed = 400;
    var scrollEase = 'easeOutSine';
    var _currentPos = 0;
    var accel = 0;
    var direction = 'forward';
    var accelTimeout = false;

    return{
        SetCurrentPos: function(){
            _currentPos = scrollPos.top;
        },

        Event: function(e){
            var contentH = $('body').height() - $('#header').height();

            if(e.deltaY >= 1){
                accel = (direction == 'back')? accel += 1: accel = 0;
                // Back
                direction = 'back';
                accel += 1;
                _currentPos -= scrollVal * Math.abs(e.deltaY * 2.5);
                if(_currentPos < 0){ _currentPos = 0; }
            }else{
                // Forward
                accel = (direction == 'forward')? accel += 1: accel = 0;
                direction = 'forward';
                _currentPos += scrollVal * Math.abs(e.deltaY * 2.5);
                if(_currentPos > contentH){ _currentPos = contentH; }
            }

            /*
            clearTimeout(accelTimeout);
            accelTimeout = setTimeout(function(){
                accel = 0;
                accelTimeout = false;
            }, 60);
            */

            $('body, html').stop().animate({scrollTop: _currentPos}, scrollSpeed, scrollEase, function(){
                accel = 0;
            });
        }
    }
})();

//--------------------------------------------------
//
//  FacebookPage()
//
//--------------------------------------------------
var FacebookPage = (function(){
    var $fbPage = $('.fb-page');
    var isLangJa = $('body').hasClass('ja');
    var defSize = (isLangJa)? 300: 500;
    var fbPageContent = '<div class="fb-page" data-href="https://www.facebook.com/propolife" data-tabs="timeline" data-width="' + defSize + '" data-height="403" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/propolife"><a href="https://www.facebook.com/propolife">株式会社プロポライフ</a></blockquote></div></div>'

    var currentSize = 0;
    var setTimer = false;

    return{
        SwitchSize: function(){
            if(!setTimer){
                if(winSize.w > 1080 && currentSize != defSize){
                    currentSize = defSize;
                    FacebookPage.Parse(currentSize);
                }

                if((winSize.w < 1080 && winSize.w > 580) && currentSize != 500){
                    currentSize = 500;
                    FacebookPage.Parse(currentSize);
                }

                if(winSize.w < 580 && currentSize != 290){
                    currentSize = 290;
                    FacebookPage.Parse(currentSize);
                }
            }
        },

        Parse: function(currentSize){
            clearTimeout(setTimer);
            var fbPageContent = '<div class="fb-page" data-href="https://www.facebook.com/propolife" data-tabs="timeline" data-width="' + currentSize + '" data-height="403" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/propolife"><a href="https://www.facebook.com/propolife">株式会社プロポライフ</a></blockquote></div></div>';
            $fbPage.html(fbPageContent);

            setTimer = setTimeout(function(){
                if(window.FB){
                    FB.XFBML.parse();
                    setTimer = false;
                }
            }, 200);
        }
    }
})();


//--------------------------------------------------
//
//  AnimalBg()
//
//--------------------------------------------------
var AnimalBg = (function(){
    var $lion = $('#animal').find('.lion').find('img');
    var $rino = $('#animal').find('.rino').find('img');

    var lionMaxW = 500;
    var rinoMaxW = 690;

    var minW = 1080;

    return{
        SetSize: function(){
            if(winSize.w < minW){
                var _scale = (minW - winSize.w) / 2;
                var _sizeLion = lionMaxW - _scale;
                var _sizeRino = rinoMaxW - _scale;
                $lion.css({width: _sizeLion});
                $rino.css({width: _sizeRino, left: _scale/4});
            }else{
                $lion.css({width: lionMaxW});
                $rino.css({width: rinoMaxW, left: 0});
            }
        }
    }
})();


//--------------------------------------------------
//
//  OpeningAnimation()
//
//--------------------------------------------------
$('body').prepend('<p class="loading"></p>');
function OpeningAnimation(){
    $('body').css({overflowY: 'auto'});
    $('body, html').css({height: 'auto'}).stop().animate({scrollTop: 0}, 100);
    $('.loading').stop().transition({opacity: 0}, 300, function(){ $(this).hide(); });
    $('#wrap, #footer').stop().transition({opacity: 1}, 1000);

    FacebookPage.SwitchSize();
}

//--------------------------------------------------
//
//  DisabledClick()
//
//--------------------------------------------------
function DisabledClick(){
    $('#background').on('mousedown', function(){
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
    winSize.h = (winSize.h < minHeight)? minHeight: winSize.h;
    ContentsSection.SetPosition();
    ContentsSection.Update();
    BackgroundImage.SetContentSize();
    KeyVisual.SetSize();
    KeyVisual.ScrollSetPosSizing();
    FacebookPage.SwitchSize();
}

function Run(){
    $('body, html').stop().animate({scrollTop: 0}, 100);
    ContentsSection.Init();
    BackgroundImage.Init();
    KeyVisual.Init();
    AnimalBg.SetSize();
    BtmBannerPosition.Init();
    DisabledClick();
    Update();
}

//--------------------------------------------------
//
//  Add Event
//
//--------------------------------------------------
$(window).on('resize orientationchange', function(){
    AnimalBg.SetSize();
    BtmBannerPosition.SetPosition();
    Update();
});

/*
    $(window).on('mousewheel', function(e){
        scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }
        e.preventDefault();
        SmoothScroll.Event(e);
    });
*/

$(window).on('scroll touchmove', function(){
    scrollPos = {top: $(window).scrollTop(), left: $(window).scrollLeft() }
    SmoothScroll.SetCurrentPos();
    ContentsSection.SetCurrentNum();
    ContentsSection.MoveSection();
    BackgroundImage.SwitchBgImg();
    KeyVisual.ScrollSetPosSizing();
    Update();
});

$(window).on('load', function(){
    SmoothScroll.SetCurrentPos();
    Update();
});

Run();

});
})(jQuery);