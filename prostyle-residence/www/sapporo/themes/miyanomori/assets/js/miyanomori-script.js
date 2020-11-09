function miyanomori() {

    this.ready = function() {
        const _this = this;
        $(document).ready(function() {
            _this.slide();
            // _this.scrollToEle();
            // _this.slideTextillate();
            _this.hoverShowInfoPlanPage();
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

    this.scrollToEle = function() {

        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            const  currentTarget  = e.currentTarget;
            const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0,
                offset = 2;
            const targetHeight = target.outerHeight();
            const headHeight = $('.slide-home').height();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();
            // var winTop = $(window).scrollTop();
            if( docHeight === headHeight ) {
                $('html, body').animate({
                    scrollTop: (docHeight - targetToTop)
                }, 800,'linear');
            } 
            $('html, body').animate({
                scrollTop: headHeight
            }, 800);
          
        });
    };

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
        },4000);

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