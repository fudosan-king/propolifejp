//------------------------------------------------------------------------------------------
//
//  2015
//  PROPOLIFE
// 
//  access.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

var AddGoogleMap = function(){
    
    var $btnMap = $('.btn_map');
    var $GMap = $('.gmap');
    
    return{
        SetMap: function(latlng, mapId, index){
            /*
            if(lang == 'ja'){
                var _this = $('.section_list').eq(index);
                var place = _this.find('.address').text();
                place = place.replace(/[\n\r]/g,"");
                GL_Propolife.func.AddGoogleMap.AddMap(place, mapId, index);
            }
            
            if(lang != 'ja'){
                $.ajax({
                    type: 'get',
                    url: '/ja/company/access/',
                    dataType: 'html',
                    success: function(data){
                        var _this = $(data).find('.section_list').eq(index);
                        var place = _this.find('.address').text();
                        place = place.replace(/[\n\r]/g,"");
                        GL_Propolife.func.AddGoogleMap.AddMap(place, mapId, index);
                    }
                });
            }
            */
            GL_Propolife.func.AddGoogleMap.AddMap(latlng, mapId, index);
        },
        
        AddMap: function(_latlng, mapId, index){
                
                    $GMap.eq(index).addClass('on');
                    $btnMap.eq(index).find('a').attr('href', 'https://www.google.co.jp/maps/place/' + _latlng);
                    $btnMap.eq(index).addClass('on');
                    
                    var map = document.getElementById(mapId);
                    var _latlng = _latlng.split(',');
                    var latlng = new google.maps.LatLng(_latlng[0], _latlng[1]);
                    var option = {
                        zoom: 17,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scaleControl: true,
                        scrollwheel: false
                    }
                    var map = new google.maps.Map(map, option);
                    
                    map.setCenter(latlng);
                    
                    var $colRight = $('#' + mapId).parents('.col_left').next('.col_right');
                    var titleJa = $colRight.find('h3').text();
                    var titleEn = $colRight.find('.en').text();
                    titleEn = titleEn.replace('/', '/<br>');

                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                      });
                    
                    var popupMarker = new google.maps.InfoWindow({
                        content: '<p class="gmap_window">' + titleJa +'<span>' + titleEn + '</span></p>',
                        position: latlng,
                        maxWidth: 600
                    });
                    
                    popupMarker.open(map);
                    setTimeout(function(){ $('.gm-style-iw').next('div').addClass('close_btn'); }, 1500);
                }


    }
}

GL_Propolife.func.AddGoogleMap = AddGoogleMap();

//--------------------------------------------------
//
//  OfficeListNavigation();
//
//--------------------------------------------------
var OfficeListNavigation = (function(){
    
    var $officeNav = $('#office_nav');
    var $officeNavList = $('#office_nav_list');
    var $officeList = $officeNav.find('li');
    var $btnList = $officeNav.find('.btn_office_list');
    
    var showSpeed = 250;
    var showEasing = 'easeInSine';
    var moveSpeed = 300;
    var moveEasing = 'easeOutSine';
    
    var listH = $officeList.height();
    var listLength = $officeList.length;
    var listBoxH = listH * listLength;
    
    return{
        Init: function(){
            var _this = this;
            $btnList.on('smarttouch', function(){
                _this.SwitchNav();
            });
            
            $officeList.find('a').on('smarttouch', function(){
                _this.SwitchNav(true);
                _this.ResizeSwitchNav();
                _this.ScrollPosition($(this));
            });
            
            $(window).on('resize orientationchange', function(){
                _this.ResizeSwitchNav();
            });
        },
        
        SwitchNav: function(_close){
            var _display = ($officeNav.hasClass('on'))? true: false;
            if(!_display){
                $officeNav.addClass('on');
                $officeNavList.stop().transition({height: listBoxH}, showSpeed*1.5, showEasing);
            }else if(_display || _close){
                $officeNav.removeClass('on');
                $officeNavList.stop().transition({height: 0}, showSpeed/2, showEasing);
                
            }
        },
        
        ResizeSwitchNav: function(){
            var _this = this;
            if(!GL_Propolife.val.isWinSizeSmallW768){
                if($officeNav.hasClass('on')){
                    _this.SwitchNav();
                }
                $officeNavList.css({height: 'auto'});
            }else{
                if(!$officeNav.hasClass('on')){
                    $officeNavList.css({height: 0});
                }
            }
        },
        
        ScrollPosition: function(_elm){
            var _href = _elm.attr('href');
            _href = _href.slice(_href.indexOf('#'));
            var _pos = $(_href).offset().top;
            
            $('body, html').stop().animate({
                scrollTop: _pos - 50
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
    $('#office_nav').on('mousedown', function(){
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
    OfficeListNavigation.Init();
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