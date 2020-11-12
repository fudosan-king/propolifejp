function miyanomori() {

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

    this.hoverShowInfoPlanPage = function(){
        if( $(window).width() <= 992 ){
            $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','none');
        }
        $('.path-hover').hover(function(){
            if( $(window).width() <= 992 ){
                if( !$('.box_infoview_content').hasClass('show') ){
                    $('.box_infoview_content').addClass('show');
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('opacity',0);
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','block');
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('transition','opacity 1s cubic-bezier(0.23, 1, 0.32, 1)');
                    setTimeout(function(){
                        $('.section_plan .box_infoview_content .col-12.col-lg-5').css('opacity',1);
                    },500);
                }
            } else {
                $('.box_infoview_content').addClass('show');
            }
        });
        $('.box_infoview_content').on('mouseleave',function(event) {
            if( $(window).width() <= 992 ){
                if( $('.box_infoview_content').hasClass('show') ){
                    $('.box_infoview_content').removeClass('show');
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('opacity',0);
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','none');
                }
            } else {
                $('.box_infoview_content').removeClass('show');
            }
        });
        $("div[class^='box_premium'],div[class^='box_infoview_top']").on('touchstart', function(e){ 
            if( $(window).width() <= 992 ){
                if( $('.box_infoview_content').hasClass('show') ){
                    $('.box_infoview_content').removeClass('show');
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('opacity',0);
                    $('.section_plan .box_infoview_content .col-12.col-lg-5').css('display','none');
                }
            } else {
                $('.box_infoview_content').removeClass('show');
            }
        });
    }


    this.onOffContactForm = function(){
        
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
                        $('.reservation,.description').addClass('active');
                    break;

                    case 'customCheck3_':
                        $('.contact_sale,.description').addClass('active');
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
                        switch(true){
                            case ($('#customCheck3_').is(':checked') === true):
                                $('.reservation').removeClass('active');
                                $('.reservation select').removeClass('active');
                                $('.reservation select,.reservation input').val('');
                            break;
                            default:
                                $('.reservation,.description').removeClass('active');
                                $('.reservation select').removeClass('active');
                                $('.reservation select,.reservation input').val('');
                                $('.description textarea').val('');
                        }  
                    break;

                    case 'customCheck3_':
                        switch(true){
                            case ($('#customCheck2').is(':checked') === true):
                                $('.contact_sale').removeClass('active');
                                $('.contact_sale .custom-checkradio input').prop('checked',false);
                                $('.contact_sale .custom-checkradio:first-of-type input').prop('checked',true);
                                $('.contact_sale .custom-checkbox input').prop('checked',false);
                                $('.contact_sale .custom-checkbox:first-of-type input').prop('checked',true);
                                $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').prop('checked',false);
                                $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').next().addClass('all-time');
                            break;
                            default:
                                $('.contact_sale,.description').removeClass('active');
                                $('.contact_sale .custom-checkradio input').prop('checked',false);
                                $('.contact_sale .custom-checkradio:first-of-type input').prop('checked',true);
                                $('.contact_sale .custom-checkbox input').prop('checked',false);
                                $('.contact_sale .custom-checkbox:first-of-type input').prop('checked',true);
                                $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').prop('checked',false);
                                $('.contact_sale #customCheck10,.contact_sale #customCheck11,.contact_sale #customCheck12,.contact_sale #customCheck13').next().addClass('all-time');
                                $('.description textarea').val('');
                        }  
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
        if( $(window).width() <= 991){
            $('.js-menuAnimation.dropdown-right').removeClass('fade');
        }
        $(window).on('resize',function(e){
            let win = $(e.target);
            if(win.width() <= 991){
                $('.js-menuAnimation.dropdown-right').removeClass('fade');
            } 
            if(win.width() > 991){
                $('.js-menuAnimation.dropdown-right').addClass('fade');
            }
        });
        $('.menu').on('click', function (e) {
            const currentTarget = e.currentTarget;
            const $_this = $(currentTarget);
            if( $_this.hasClass('active') ){
                 $('.js-menuAnimation').each(function(i,el){
                    $(el).css({ transition: "opacity .4s cubic-bezier(.420, .000, .580, 1.000) " + (0.5 + 0.07 * (i + 1)) + "s, transform .4s cubic-bezier(.420, .000, .580, 1.000) " + (0.5 + 0.07 * (i + 1)) + "s" });
                });
              
            } else {
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