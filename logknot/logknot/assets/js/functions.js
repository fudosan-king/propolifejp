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

    $('.navbar-nav .nav-link[href^="#"]').on('click', function (e) {
        e.preventDefault();
      
        var targetEle = this.hash;
        var $targetEle = $(targetEle);
      
        $('html, body').stop().animate({
            'scrollTop': $targetEle.offset().top
        }, 800, 'swing', function () {
            window.location.hash = targetEle;
        });
    });

    $('.navbar-nav .nav-link[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var offset = 0;
        if ($(this).data('offset') != undefined) offset = $(this).data('offset');
        $.scrollTo(target, 800, { offset: - 93 });
    });

    $('#ibtnGoSubmit').click(function(event){
        if(invalidCheck()){
            $('.frm_contact').submit();
        }
    });

    // VALIDATE FORM DATA
    function callErrorMessage(elem, message){
        var htmlError = '<section class="error-box"><div class="icon"></div><p>' + message + '</p></section>';
        var formGroup = $(elem).closest('.form-group');
        formGroup.append(htmlError);
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

        var ERROR_NO_INPUT = '値を入力してください';
        var isValid = true
        errorElements = []
        var isValid = true;

        $('.error-text').css('display', 'none');

        // EMPTY CHECK
        var requireInputText = $('input[type="text"][required]');
        $.each(requireInputText, function(i, e){
          if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
                setErrorClass(e);
                // callErrorMessage($(e), ERROR_NO_INPUT);
                isValid = false;
            }
        });

     
        if ($("#customCheck1").is(':checked')){
            setErrorClass($('#customCheck1'));
            //callErrorMessage($('#customCheck1'), ERROR_NO_INPUT);
            isValid = false;
        }else{
            removeErrorClass($('#customCheck1'));
            //removeErrorMessage($('#customCheck1'));
        }

        // EMAIL CHECK
        // if(typeof($('input[name="your_email"]').val()) === 'undefined' || $('input[name="your_email"]').val() == "" || $('input[name="your_email"]').val() == "null"){
        //     setErrorClass($('input[name="your_email"]'));
        //     callErrorMessage($('input[name="your_email"]'), ERROR_NO_INPUT);
        //     isValid = false;
        // }else{
        //     removeErrorClass($('input[name="your_email"]'));
        //     removeErrorMessage($('input[name="your_email"]'));

        //     var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
        //     if (!emailPattern.test($('input[name="your_email"]').val())) {
        //         setErrorClass($('input[name="your_email"]'));
        //         callErrorMessage($('input[name="your_email"]'), ERROR_MAIL_FORMAT);
        //         isValid = false;
        //     } else {
        //         removeErrorClass($('input[name="your_email"]'));
        //         removeErrorMessage($('input[name="your_email"]'));
        //     }
        // }

        return isValid;
    }


});

$(function($) {

	$(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
});
