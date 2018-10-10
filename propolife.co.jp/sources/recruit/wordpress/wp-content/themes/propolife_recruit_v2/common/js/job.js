//------------------------------------------------------------------------------------------
//
//  2016
//  PROPOLIFE_RECRUIT
//
//  job.js
//
//------------------------------------------------------------------------------------------

(function($){
$(function(){

// SmoothScroll
var SmoothScroll = (function(){
    
    var $btnMovie = $('.btn_movie');
    var $jobMovie = $('#job_movie');
    
    var _gap = 100;
    
    return{
        Init: function(){
            $btnMovie.on('click', function(){
                var _pos = $jobMovie.offset().top - _gap;
                $('body, html').animate({scrollTop: _pos}, 300);
                return false;
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
}

function Update(){

}

function Run(){
    SmoothScroll.Init();
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