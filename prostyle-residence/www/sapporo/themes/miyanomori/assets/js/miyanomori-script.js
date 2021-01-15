function miyanomori() {

    this.getDevice = function() {
        const ua = navigator.userAgent;
        if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
            return 'sp';
        } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
            return 'tab';
        } else {
            return 'other';
        }
    };

    isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
        isMobile = true;
    }

    this.ready = function() {
        const _this = this;
        $(document).ready(function() {
            _this.slide();
            _this.scrollToEle();
            // _this.slideTextillate();
            _this.flashIntroMobile();
            _this.menuOpenClose();
            _this.jsSelectCss();
            _this.onOffContactForm();
            _this.hoverShowInfoPlanPage();
            _this.placeholderText();
            _this.slickSlider();
            _this.callBack();
            _this.view360();
            _this.interactiveImages();
            _this.showHidePassword();
        });
    }

    this.showHidePassword = function(){
        if($('#modal_forgot_password .i-password').hasClass('dashicons-visibility')){
            $('#modal_forgot_password .i-password').prev().attr('type','text');
        } else {
            $('#modal_forgot_password .i-password').prev().attr('type','password');
        }
        $('#modal_forgot_password').on('click','.i-password',function(e){
            const currentTarget = e.currentTarget;
            if($(currentTarget).hasClass('dashicons-visibility')){
                $(currentTarget).removeClass('dashicons-visibility');
                $(currentTarget).addClass('dashicons-hidden');
                $(currentTarget).prev().attr('type','password');
            } else {
                $(currentTarget).addClass('dashicons-visibility');
                $(currentTarget).removeClass('dashicons-hidden');
                $(currentTarget).prev().attr('type','text');
            }
        });
    }

    this.sub_hoverShowInfoPlanPage = function(e){
        const currentTarget = e.currentTarget;
        const apartmentCode = $(currentTarget).data('shape-title');
        const elePlanPage_NeedShow = $(currentTarget).parents('.js_img-map').prevAll('.'+apartmentCode);
        // const eleDetailPage_NeedShow = $(currentTarget).parents('.js_img-map').prev().find('.'+apartmentCode);
        const s301Default = $(currentTarget).parents('.js_img-map').prevAll('.S301');
        const planDetailDefault = $(currentTarget).parents('.js_img-map').prevAll('.js_info-default');

        if(apartmentCode === '') return;

        if ( $('.box_infoview_content').find('.col-lg-5').hasClass('js_info-default') && elePlanPage_NeedShow.hasClass('js_info-default') ){
            elePlanPage_NeedShow.removeAttr('style');
            return;
        }

        if ( $('.box_infoview_content').find('.col-lg-5').hasClass('js_info-default') ){
            elePlanPage_NeedShow.removeAttr('style');
            planDetailDefault.css('display','none');
            return;
        }

        if( elePlanPage_NeedShow.hasClass('col-lg-5') && apartmentCode === 'S301' ){
            elePlanPage_NeedShow.removeAttr('style');
            elePlanPage_NeedShow.css({
                opacity:1,
            });
            return;
        }

        if( elePlanPage_NeedShow.length !== 0 ){
            elePlanPage_NeedShow.removeAttr('style');
            s301Default.css('display','none');
            elePlanPage_NeedShow.css({
                opacity:1,
            });
        } 
        
    }

    this.sub_hoverHideInfoPlanPage = function(e){

        if ( $('.box_infoview_content').find('.col-lg-5').hasClass('js_info-default') ){
            $('.box_infoview_content').find('.col-lg-5').removeAttr('style');
            $('.box_infoview_content').find('.col-lg-5').css('display','none');  
            $('.box_infoview_content').find('.js_info-default').removeAttr('style');
            return;
        }

        if($(window).width() <= 992 ){
            $('.box_infoview_content').find('.col-lg-5').removeAttr('style');
            $('.box_infoview_content').find('.col-lg-5').css('display','none');
        } else {
            $('.box_infoview_content').find('.col-lg-5').removeAttr('style');
            $('.box_infoview_content').find('.col-lg-5').css('display','none');  
            $('.box_infoview_content').find('.col-lg-5.S301').removeAttr('style');
        }

    }

    this.hoverShowInfoPlanPage = function(){
        const _this = this;
        const eleParent =  '';
        if( $(window).width() <= 992 ){
            $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','none');
        } 

        $('.box_infoview_content').on('mouseover','[data-shape-title]',function (e) {
            _this.sub_hoverShowInfoPlanPage(e);
        });

        $('.box_infoview_content').on('mouseout','[data-shape-title]',function (e) {
            _this.sub_hoverHideInfoPlanPage(e);
        });
        
        $(window).resize(function(){
            if ( $('.box_infoview_content').find('.col-lg-5').hasClass('js_info-default') ) return;
            if($(window).width() >= 992 ){
                $('.box_infoview_content').find('.col-lg-5.S301').removeAttr('style');
            } else{
                $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','none');
            }
        });

    }

    this.interactiveImages = function(){
        const _this = this;
        _this.calcInteractiveImages();

        $('#planvr-tab').on('shown.bs.tab', function (e) {
            _this.calcInteractiveImages();
        });

        $(window).resize(function(){
            _this.calcInteractiveImages();
        });

        _this.accessPageTouchImage(); 
    }

    this.accessPageTouchImage = function(){

        let touchMovePos = 0;
        let touchObject = {moved:0};
        let touches;
        let speedx = 0;
        let moved = 0;

            $('.section_access .box_map_img').on('touchstart mousedown',function(e){
                if (e.originalEvent !== undefined && e.originalEvent.touches !== undefined) {
                    touches = e.originalEvent.touches[0];
                }
                touchObject.startX = touches !== undefined ? touches.pageX : e.clientX;
                touchObject.startY = touches !== undefined ? touches.pageY : e.clientY;
            });

            $('.section_access .box_map_img').on('touchmove',function(e){

                let eleWidth;
                if ( (1200 - e.target.clientWidth) === 0 ) {
                    return;
                } else {
                    eleWidth  = (1200 - e.target.clientWidth);
                }

                touches = e.originalEvent !== undefined ? e.originalEvent.touches : null;
                touchObject.curX = touches !== undefined ? touches[0].pageX : e.clientX;
                touchObject.curY = touches !== undefined ? touches[0].pageY : e.clientY;

                touchObject.swipeLength = Math.round(Math.sqrt(
                Math.pow(touchObject.curX - touchObject.startX, 2)));

                verticalSwipeLength = Math.round(Math.sqrt(
                Math.pow(touchObject.curY - touchObject.startY, 2)));

                //Hold move
                if(touchObject.startX >= touchObject.curX ){
                    moved =  touchObject.moved+(touchObject.swipeLength)*-1;
                } else {
                    moved =  touchObject.moved+touchObject.swipeLength;
                }

                if( parseFloat(moved) >= 0 ){
                    moved = 0;
                    $('.section_access .box_map_img').css({ 'background-position': moved + 'px ' + 0 + 'px' });
                    return;
                }

                if( parseFloat(moved) <= parseFloat(-eleWidth) ){ 
                    moved = -eleWidth;
                    $('.section_access .box_map_img').css({ 'background-position': moved + 'px ' + 0 + 'px' });
                    return;
                }

                $('.section_access .box_map_img').css({ 'background-position': moved + 'px ' + 0 + 'px' });

            });

            $('.section_access .box_map_img').on('touchend mouseup', function(e) {

                let eleWidth;
                if ( (1200 - e.target.clientWidth) === 0 ) {
                    return;
                } else {
                    eleWidth  = (1200 - e.target.clientWidth);
                }

                touches = e.originalEvent !== undefined ? e.originalEvent.touches : null;
                if ( touches == undefined && touchObject.swipeLength == undefined ){
                    touchObject.curX = event.clientX;
                    touchObject.swipeLength = Math.round(Math.sqrt(
                    Math.pow(touchObject.curX - touchObject.startX, 2)));
                } 
                   
                if(touchObject.startX >= touchObject.curX ){
                    touchMovePos = touchMovePos + (touchObject.swipeLength) * -1;
                } else {
                    touchMovePos = touchMovePos + touchObject.swipeLength;
                }

                if( parseFloat(touchMovePos) >= 0 ){
                    touchMovePos = 0;
                }

                if( parseFloat(touchMovePos) <= parseFloat(-eleWidth) ){ 
                    touchMovePos = -eleWidth;
                }
                
                touchObject.moved = touchMovePos;

                $('.section_access .box_map_img').css({ 'background-position': touchMovePos + 'px ' + 0 + 'px' });

            });
    }

    this.calcInteractiveImages = function (){
        const eleBoxImgVR = $('#planvr').find('.box_plan_detail_img');
        const eleBoxImgVR_Img = $('#planvr').find('.box_plan_detail_img img');
        const eleIconVR = $('#planvr .box_plan_detail_img').find('a i');
        const w = $(window);

        const posIconVRs = [
            {   name:'s301', 
                l1:{top:74,left:334},
                l2:{top:326,left:150},
                l3:{top:477,left:585},
                l4:{top:532,left:136},
            },
            {
                name:'s601', 
                l1:{top:20,left:238},
                l2:{top:127,left:267},
                l3:{top:295,left:250},
            },
            {
                name:'n302',
                l1:{top:63,left:354},
                l2:{top:215,left:525},
                l3:{top:424,left:600},
            },
        ];

        if(eleBoxImgVR.offset() !== undefined) {
            const eleBoxImgVR_Y = eleBoxImgVR.offset().top ?  eleBoxImgVR.offset().top : 0;
            const eleBoxImgVR_X = eleBoxImgVR.offset().left ?  eleBoxImgVR.offset().left : 0;
            const theImage = new Image();
            theImage.src = eleBoxImgVR_Img.attr("src");
            const realWidth = theImage.width;
            const realHeight = theImage.height;
            const eleBoxImgVR_Height = eleBoxImgVR_Img.height();
            const eleBoxImgVR_Width =  eleBoxImgVR_Img.width();
            const eleBoxImgVR_ChangeHeight = (realHeight - eleBoxImgVR_Height)/realHeight;
            const eleBoxImgVR_ChangeWidth = (realWidth - eleBoxImgVR_Width)/realWidth;  

            eleIconVR.each(function(i,ele){
                const iconVR_Y = $(ele).offset().top;
                const iconVR_X = $(ele).offset().left;
                const originX_IconVR = parseInt( $(ele).css('left').replace('px','') );
                const originY_IconVR = parseInt( $(ele).css('top').replace('px','') );
                let keyPlan = $(ele).data('plan');
                let keyPlanLength = keyPlan.length;
                let posKeyPlan = keyPlan.indexOf('-');
                let getKey = keyPlan.substring(0,posKeyPlan);
                let getPos = keyPlan.substring(posKeyPlan+1,keyPlanLength);

                $.each(posIconVRs,function(i,val){
                    if( val.name == getKey ){
                        const vrIntoBoxImg_Y = val[getPos].top - ( val[getPos].top*eleBoxImgVR_ChangeHeight );
                        const vrIntoBoxImg_X = val[getPos].left - ( val[getPos].left*eleBoxImgVR_ChangeWidth );
                        $(ele).css({
                            top: vrIntoBoxImg_Y,
                            left: vrIntoBoxImg_X, 
                        });
                    } 
                });                
            });
        }
    }

    this.view360 = function() {
        const _this = this;
        const getDevice = _this.getDevice();
        let speed = 0;
        let imgX = 0;
        let f_moveView = false;

        if (getDevice == 'sp' || getDevice == 'tab') {
            $('#btn_control_left').bind("touchstart", function() {
                speed = 5;
            });
            $('#btn_control_left').bind("touchend", function() {
                speed = 0;
            });
            $('#btn_control_right').bind("touchstart", function() {
                speed = -5;
            });
            $('#btn_control_right').bind("touchend", function() {
                speed = 0;
            });

            $('#block_carousel_view').bind("touchstart", function() {
                f_moveView = false;
                mouseDown = true;
            });
            $('.section.num2').bind('touchmove', function() {
                mouseDownX = event.changedTouches[0].pageX;
            });
            $('#block_carousel_view').bind('touchmove', function() {
                if (mouseDown && mouseDownX - event.changedTouches[0].pageX < 30 && mouseDownX - event.changedTouches[0].pageX > -30) {
                    imgX = imgX + (mouseDownX - event.changedTouches[0].pageX) * -1;
                    $('#block_carousel_view').css({ 'background-position': imgX + 'px ' + 0 + 'px' });
                }
            });
            $('#block_carousel_view').bind("touchend", function() {
                f_moveView = true;
                mouseDown = false;
            });

        } else if (getDevice == 'other') {
            $('#btn_control_left').hover(function() {
                speed = 1.2;
            }, function() {
                speed = 0;
            });
            $('#btn_control_left').bind("dragend", function() {
                speed = 0;
            });
            $('#btn_control_right').hover(function() {
                speed = -1.2;
            }, function() {
                speed = 0;
            });
            $('#btn_control_right').bind("dragend", function() {
                speed = 0;
            });
        }

        f_moveView = true;
        setInterval(function(){
            if(f_moveView) {
                imgX += speed;
                $('#block_carousel_view').css({'background-position': imgX + 'px ' + 0 + 'px'});
            }
        }, 1);


        $('#btn_day').on('click',function () {
            $("#btn_night").removeClass('active');
            $(this).addClass('active');
            $("#block_carousel_view").addClass('carousel_view_day').removeClass('carousel_view_night');
        });
        
        $('#btn_night').on('click',function () {
            $("#btn_day").removeClass('active');
            $(this).addClass('active');
            $("#block_carousel_view").addClass('carousel_view_night').removeClass('carousel_view_day');
        });
    }

    this.callBack = function(){
        const _this = this;

        $('#plandesign3-tab').on('shown.bs.tab', function (e) {
            const $carousel = $('.carousel').flickity();
            $carousel.flickity('destroy');
            $carousel.flickity({'prevNextButtons': false});
        });

        $('#plandesign4-tab').on('shown.bs.tab', function (e) {
            $('.ct-slider').slick('unslick');
            $('.ct-slider').slick({
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
            });
        });

        $('[data-fancybox=images]').on('click',function(){});
        $('.js-img-zoom').on('click',function(){
            $('[data-fancybox=images]').trigger( "click" );
        });
    }

    this.slickSlider = function(){
        $('.js-auto-slider').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
        });

        $('.ct-slider').slick({
            slidesToShow: 1,
            infinite: true,
            dots: true,
            arrows: false,
        });
    }

    this.placeholderText = function (){
        $('textarea').on('input propertychange',function(e){
           const currentTarget = e.currentTarget;
           const val = $(currentTarget).val();
           if( $(currentTarget).prev().hasClass('placeholder') ){
                $(currentTarget).prev().toggleClass('hidden',val !== '');
           }
        });
    }

    this.onOffContactForm = function(){
        const _this = this;
        if( $('#customCheck9').is(':checked') ){
            $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').prop('checked',false);
            $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').next().addClass('all-time');
        } else {
            $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').next().removeClass('all-time');
        }
        $('#customCheck9').on('change',function(e) {
            const currentTarget = e.currentTarget;
            if( $(currentTarget).is(':checked') ){
                $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').prop('checked',false);
                $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').next().addClass('all-time');
            } else {
                $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').next().removeClass('all-time');
            }
        });
        $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').on('change',function(e){
            const currentTarget = e.currentTarget;
            if( $('#customCheck9').is(':checked') ){
                $('#customCheck9').prop('checked',false);
                $('#customCheck10,#customCheck11,#customCheck12,#customCheck13').next().removeClass('all-time');
            }
        });

        $('#customCheck1,#customCheck2,#customCheck3_,#customCheck4_').each(function(i,ele){
      
            const isChecked = $(ele).is(':checked');
            const isIdName = $(ele).attr('id');
            console.log(isIdName);
            if ( isChecked === true ) {
                
                switch (isIdName) {
                    case 'customCheck1':
                        $('.materials').addClass('active');
                    break;
                    
                    case 'customCheck2':
                        $('.reservation').addClass('active');
                    break;

                    case 'customCheck3_':
                        $('.contact_sale').addClass('active');
                    break;
                  
                    case 'customCheck4_':
                         $('.order-other').addClass('active');
                    break;
                }
            }
        });

        $('#customCheck1,#customCheck2,#customCheck3_,#customCheck4_').on('change',function(e){
           const currentTarget = e.currentTarget;
           const isChecked = $(currentTarget).is(':checked');
           const isIdName = $(currentTarget).attr('id');

           if ( isChecked === true ) {
                switch (isIdName) {
                    case 'customCheck1':
                        $('.materials').addClass('active');
                    break;
                    
                    case 'customCheck2':
                        $('.reservation').addClass('active');
                    break;

                    case 'customCheck3_':
                        $('.contact_sale').addClass('active');
                    break;
                  
                    case 'customCheck4_':
                         $('.order-other').addClass('active');
                    break;
                }
           } else {
                switch (isIdName) {
                    case 'customCheck1':
                        $('.materials').removeClass('active');
                        $('.materials select').removeClass('active');
                        $('.materials select,.materials input').val('');
                    break;

                    case 'customCheck2':
                        $('.reservation').removeClass('active');
                        $('.reservation select').removeClass('active');
                        $('.reservation select,.reservation input').val('');
                        $('.reservation textarea').val('');
                        $('.reservation textarea').prev().removeClass('hidden');
                    break;

                    case 'customCheck3_':
                            $('.contact_sale').removeClass('active');
                            $('.contact_sale .custom-checkradio input').prop('checked',false);
                            $('.contact_sale .custom-checkradio:first-of-type input').prop('checked',true);
                            $('.contact_sale .custom-checkbox input').prop('checked',false);
                            $('.contact_sale .custom-checkbox:first-of-type input').prop('checked',true);
                            $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').prop('checked',false);
                            $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').next().addClass('all-time');
                            $('.contact_sale textarea').val('');
                            $('.contact_sale textarea').prev().removeClass('hidden');
                    break;
                        
                    case 'customCheck4_':
                        $('.order-other').removeClass('active');
                        $('.order-other textarea').val('');
                    break;
                } 
            }
        });
    }

    this.jsSelectCss = function () {
        $('.section_contactus select').on('change',function(e){
            const currentTarget = e.currentTarget;
            if ( $(currentTarget).val() == ''){
                $(currentTarget).removeClass('active');
            } else {
                $(currentTarget).addClass('active');
            }
        });  
    }

    this.menuOpenClose = function(){
        const headerHeight = $('header').outerHeight();
        const win = $(window);
        const doc = $(document);
        const _header = $('header');
        let winHeight;
        //Header Scroll
        if( win.scrollTop() >= headerHeight ){
            _header.addClass('js_animation-scroll');    
        } else {
            _header.removeClass('js_animation-scroll');    
        }

        $(window).on('load resize', function(){
            winHeight = window.innerHeight;
            if( win.width() < 1280 && $('body').hasClass('menu-show') ){
                $('.menu-list').height(winHeight - 93);
            }
        });

        $(window).scroll(function(e){
            if( $('body').hasClass('menu-show') ) return;
            if( win.scrollTop() >= headerHeight ){
                _header.addClass('js_animation-scroll');    
            } else {
                _header.removeClass('js_animation-scroll');    
            }
        });
        //Header On/Off
        $(window).on('load resize',function(e){
            if(win.width() > 1280){
                $('body').removeClass('menu-show');
                $('.menu-list').removeClass('js_in-animation');
                $('.btn-action button').removeClass('active');
            }
        });
        $('.menu').on('click', function (e) {
            const currentTarget = e.currentTarget;
            const $_this = $(currentTarget);
            winHeight = window.innerHeight;

            if( !$_this.hasClass('active') ){
                //Heigh Menu Scroll
                $('.menu-list').height(winHeight - 93);
                $_this.addClass('active');
                $('body').addClass('menu-show');
                //Menu fixed scroll
                _header.removeClass('js_animation-scroll');
                //Menu Open
                $('.js-menuAnimation').each(function(i,el){
                    $(el).css({ transition: "opacity .4s cubic-bezier(.420, .000, .580, 1.000) " + (0.5 + 0.07 * (i + 1)) + "s, transform .4s cubic-bezier(.420, .000, .580, 1.000) " + (0.5 + 0.07 * (i + 1)) + "s" });
                });
                setTimeout(function(){
                    $('.menu-list').addClass('js_in-animation')
                },200);
            } else{
                //Hide Or Show Header Scroll
                if( win.scrollTop() <= headerHeight ){
                    _header.removeClass('js_animation-scroll');
                } else {
                    _header.addClass('js_animation-scroll');
                }
                //Heigh Menu Scroll
                $('.menu-list').removeAttr('style');
                //Menu fixed scroll
                $('.menu-list').removeClass('js_in-animation')
                //Menu close
                $_this.removeClass('active');
                $('body').removeClass('menu-show');
                $('.js-menuAnimation').each(function(i,el){     
                    $(el).css({ transition: "none" });
                });
            }
        });
    }

    this.flashIntroMobile = function () {
        const _this = this;
        const html = '<div class="flash-response"></div>';
        $('body').addClass('is-innerMiya');
        if( $(window).width() <= 991 ){
            if( !$('body').hasClass('is-enterConcept') ){
                $('body').addClass('is-enterConcept');
            }
        }
        $(window).on('resize',function(e){
            let win = $(e.target);
            if(win.width() <= 991){
                if( !$('body').hasClass('is-enterConcept') && $('.flash-response').length == 0 ){
                    $('#page').after(html);
                    setTimeout(function(){
                        $('body').addClass('is-enterConcept');
                    },30);
                    setTimeout(function(){
                        $('.flash-response').remove();
                    },300);
                }
            } 
            if(win.width() > 991){
                if( $('body').hasClass('is-enterConcept') ){
                    $('body').removeClass('is-enterConcept');
                }
            }
        });
    }
    
    this.scrollToEle = function() {
        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            const  currentTarget  = e.currentTarget;
            const elem = $(currentTarget).attr("rel");
            const eleID = elem.replace('#', '');
            console.log(elem);
            const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0,
                offset = 2;
            const targetHeight = target.outerHeight();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();
            const navHight = ($('.navbar').outerHeight() != undefined)?$('.navbar').outerHeight():0;
            $('html, body').animate({
                scrollTop: targetToTop - navHight
            }, 1000);
          
        });
    }

    this.slideTextillate = function() {
        $('.js-tlt p:nth-child(1)').textillate({ initialDelay: 1300, autoStart: !0, in: { effect: "fadeInUp", delayScale: 1 } });
        $('.js-tlt p:nth-child(2)').textillate({ initialDelay: 1500, autoStart: !0, in: { effect: "fadeInUp", delayScale: 1 } });
        $('.js-tlt p:nth-child(3)').textillate({ initialDelay: 1700, autoStart: !0, in: { effect: "fadeInUp", delayScale: 1 } });
        $('.js-tlt p.small').textillate({ initialDelay: 1900, autoStart: !0, in: { effect: "fadeInUp", delayScale: 1 } })
        .on("inAnimationBegin.tlt", function () {
            setTimeout(function () {
            $('.menu_box-list,.menu_box-logo,.slideScroll').addClass('is-fire');
        }, 1200);
        });
    };

    this.slide = function() {

        setTimeout(function(){ 
            $('.intro').addClass('is-complete');
        },1500);

        setTimeout(function(){ 
            $('.intro').addClass('is-introEnd');
        },2000);
        setTimeout(function(){ 
            $('.intro').remove();
        },2500);

        $('.slideContent').on('init', function(event, slick, currentSlide, nextSlide){
            $('.slide').eq(0).addClass('animated');  

        });

        $('.slideContent').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 3000,
            fade: true,
            autoplay: true,
            autoplaySpeed: 5000,
            touchThreshold: 100,
            pauseOnFocus: false,
            pauseOnHover: false,
        });
        $('.slideContent').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('.slide').eq(nextSlide).addClass('animated');
        });
        $('.slideContent').on('afterChange', function(event, slick, currentSlide){
            $('.slide').eq(currentSlide).addClass('animated');
            const slideLast = $('.slide').length;
            if(currentSlide == 0){
                $('.slide').eq(slideLast-1).removeClass('animated');
            } else {
                $('.slide').eq(currentSlide-1).removeClass('animated');
            }
            if(currentSlide !== 0){
                $('.slide').eq(0).removeClass('slide-init');
            }
        });

    };
}
const run = new miyanomori();
run.ready();






