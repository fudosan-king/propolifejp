$(function($) {
    AOS.init();

    // var masterslider = new MasterSlider();
    // masterslider.setup("masterslider", {
    //     width           : 1366,
    //     height          : 768,
    //     minHeight       : 0,
    //     space           : 0,
    //     start           : 1,
    //     grabCursor      : false,
    //     swipe           : false,
    //     mouse           : false,
    //     keyboard        : true,
    //     layout          : "fullscreen",
    //     wheel           : false,
    //     autoplay        : false,
    //     instantStartLayers:true,
    //     loop            : false,
    //     shuffle         : false,
    //     preload         : 0,
    //     heightLimit     : true,
    //     autoHeight      : false,
    //     smoothHeight    : true,
    //     endPause        : false,
    //     overPause       : false,
    //     fillMode        : "fill",
    //     centerControls  : true,
    //     startOnAppear   : false,
    //     layersMode      : "center",
    //     autofillTarget  : "",
    //     hideLayers      : false,
    //     fullscreenMargin: 80,
    //     speed           : 20,
    //     dir             : "v",
    //     parallaxMode    : 'swipe',
    //     view            : "basic"
    // });

    // masterslider.api.addEventListener(MSSliderEvent.INIT, function(event){
    //     var api = event.target;
      
    //     var $close = jQuery('.ms-burger-close');
        
    //     jQuery('.ms-burger').click(function(){
    //         jQuery(this).hide();
    //         $close.show();
    //     });
      
    //     $close.click(function(){
    //         jQuery(this).hide();
    //         jQuery('.ms-burger').show();
    //     });
      
    // } );

    // $('.navbar-nav .nav-link[href^="#"]').on('click', function (e) {
    //     e.preventDefault();
      
    //     var targetEle = this.hash;
    //     var $targetEle = $(targetEle);
      
    //     $('html, body').stop().animate({
    //         'scrollTop': $targetEle.offset().top
    //     }, 800, 'swing', function () {
    //         window.location.hash = targetEle;
    //     });
    // });

    $('.navbar-nav .nav-link[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var offset = 0;
        if ($(this).data('offset') != undefined) offset = $(this).data('offset');
        $.scrollTo(target, 800, { offset: -93 });
    });

    // set offset for anchor when redirect
    var anchorLink = $(window.location.hash);
    if ( anchorLink.length ) {
        var offsetSize = 70;
        $("html, body").animate({scrollTop: anchorLink.offset().top - offsetSize }, 10);
    }

    $('#ibtnGoSubmit').on('click', function(e) {
        e.preventDefault();
        if(invalidCheck()){
            $('.frm_contact').submit();
        }
    });

    // VALIDATE FORM DATA
    function callErrorMessage(elem, message){
        var htmlError = '<span class="error-required">' + message + '</span>';
        var formGroup = $(elem).parent('.form-group');

        if(formGroup.find('.error-required').length)
        {
           formGroup.find('.error-required').html(message);

        }else{
            formGroup.find('label').append(htmlError);
        } 
    }
    function removeErrorMessage(elem){
        var formGroup = $(elem).closest('.form-group');
        formGroup.find('.error-box').remove();
    }
    function setErrorClass(elem){
        $(elem).addClass('error-required');
    }
    function removeErrorClass(elem){
        $(elem).removeClass('error-required');
    }

    function invalidCheck() {

        var ERROR_NO_INPUT = 'この項目は必須です。';
        var isValid = true;
        errorElements = []
        

        $('.error-text').css('display', 'none');

        // EMPTY CHECK
        var requireInputText = $('input.required');
        console.log(requireInputText);
        $.each(requireInputText, function(i, e){
          if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                //setErrorClass(e);
                callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }
        });

        return isValid;
    }

    $('.bsnav-mobile .navbar').bind('DOMNodeInserted DOMNodeRemoved', function(event) {
        $('.bsnav-mobile .nav-link').click(function(event) {
            
            $('.btn_menu.navbar-toggler').click();
            var target = $(this).attr('href');
            var offset = 70;
            if ($(this).data('offset') != undefined) offset = $(this).data('offset');
            $.scrollTo(target, 10,{ offset: -65 });

        });
    });
});

$(function($) {

    // $(document).ready(function() {

 //        $('html,body').animate({
 //          scrollTop: $(window.location.hash).offset().top-93
 //        }, 800, 'swing');

 //        return $(window).scroll(function() {
 //            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
 //        }), $("#back-to-top").click(function() {
 //            return $("html,body").animate({
 //                scrollTop: "0"
 //            })
 //        })
 //    })
});
