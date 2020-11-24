function logrenoveScripts() {

    this.ready = function() {
        const _this = this;
        $(document).ready(function(){
            
            _this.bootstrapDatepicker();
            _this.jsSelectCss();
            _this.setPaddingFooterNotscrollhome();
            _this.showScollHome();
        });
    }

    this.showScollHome = function (){
        const target = $('.service-lp_slides .btn-lp-turquoise');
        const targetToTop = ( target.length > 0 ) ? target.offset().top : 0;
        const targetHeight = target.outerHeight();
        let scrollTop = $(window).scrollTop();
        if( scrollTop > (targetToTop+targetHeight)  ){
            $('.scroll-home').css('display','block');
        } else {
            $('.scroll-home').css('display','none');
        }
        $(window).scroll(function(e){
            scrollTop = $(window).scrollTop();
            if( scrollTop > (targetToTop+targetHeight)  ){
                $('.scroll-home').css('display','block');
            } else {
                $('.scroll-home').css('display','none');
            }
        });
    
    }

    this.setPaddingFooterNotscrollhome = function(){
        if( $('.scroll-home').length == 0 ){
            $('footer').css('padding-bottom',30);
        }
    }

    this.jsSelectCss = function () {
        $('.form-lp select').on('change',function(e){
            const currentTarget = e.currentTarget;
            if ( $(currentTarget).val() == ''){
                $(currentTarget).removeClass('active');
            } else {
                $(currentTarget).addClass('active');
            }
        });  
    }

    this.bootstrapDatepicker = function (){
        const _this = this;
        var date = new Date();
        date.setDate(date.getDate()+1);
        $('.datepicker').datepicker({
            language: 'ja',
            startDate: date,
        });
    }

    this.scrollToEle = function() {
        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            const currentTarget = e.currentTarget;
            const elem = $(currentTarget).attr("rel");
            const eleID = elem.replace('#', '');
            const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0,
                offset = 2;
            const targetHeight = target.outerHeight();
            const docHeight = $(document).outerHeight();
            const winHeight = $(window).outerHeight();
            const navHight = ($('.navbar').outerHeight() != undefined) ? $('.navbar').outerHeight() : 0;
            $('html, body').animate({
                scrollTop: targetToTop
            }, 1000);

        });
    }

}

$(window).on('load', function() {
    var target = window.location.href;
    var elemID = target.split('#').pop();
    var option = '<option value="">時間を選択</option>';
    for(var i=10;i<=20;i++) {
        option += '<option value="'+i+':00">'+i+':00</option>';
        if(i<20) option += '<option value="'+i+':30">'+i+':30</option>';
    }
    $('select[name=time]').html(option);
})

function documentLoaded(){
    this.ready = function(){
        const _this = this;
        window.addEventListener('DOMContentLoaded', (event) => {
            _this.scrollToEle();
        });
    }
    // this.scrollToEle = function() {
    //     const _this = this;
    //     $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
    //         const currentTarget = e.currentTarget;
    //         const elem = $(currentTarget).attr("rel");
    //         const eleID = elem.replace('#', '');
    //         const target = $($(currentTarget).attr("rel")),
    //             targetToTop = target.offset().top ? target.offset().top : 0,
    //             offset = 2;
    //         const targetHeight = target.outerHeight();
    //         const docHeight = $(document).outerHeight();
    //         const winHeight = $(window).outerHeight();
    //         const navHight = ($('.navbar').outerHeight() != undefined) ? $('.navbar').outerHeight() : 0;
    //         $('html, body').animate({
    //             scrollTop: targetToTop
    //         }, 250);

    //     });
    // }
    this.scrollToEle = function() {
        const _this = this;
        $("body").on("click", 'a[rel^="#"], a[rel^="."]', function(e) {
            $('img').each(function(i,ele){
                const link = $(ele).data('src');
                if( link !== '' && link !== undefined ){
                    $(ele).attr('src',link);
                }
            });
            setTimeout(function(){
                const currentTarget = e.currentTarget;
                const target = $($(currentTarget).attr("rel")),
                targetToTop = target.offset().top ? target.offset().top : 0;
                $('html, body').animate({
                    scrollTop: targetToTop
                }, 1000);
            },100)
        });
    }
}

const loaded = new documentLoaded();
loaded.ready();

const run = new logrenoveScripts();
run.ready();
