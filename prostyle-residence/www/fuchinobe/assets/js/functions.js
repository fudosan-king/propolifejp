$(function($) {
    isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }

    if(isMobile){
        $('a.nav-link.dropdown-toggle').on('click touch touchstart', function(event) {
            event.preventDefault();

            if(!$(this).hasClass('show')){
                $(this).addClass('show');
                $(this).closest('.nav-item').find('.dropdown-menu').slideDown(300);
            }else{
                $(this).removeClass('show');
                $(this).closest('.nav-item').find('.dropdown-menu').slideUp(300);
            }
        });
    }

    $('.nav-link').click(function(event) {
        /* Act on the event */
        $target = $(this).attr('target') == '_blank' ? '_blank' : '_self';
        window.open($(this).attr('href'), $target);
    });

    $('.nav-item.dropdown').mouseover(function(event) {
        /* Act on the event */
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    });

    $('.nav-item.dropdown').mouseleave(function(event) {
        /* Act on the event */
        if($(this).hasClass('show')){
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        }

    });


    $('.nav a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    $('#footer .naviUl li:has(ul) p').click(function(e){
        if($(window).width() < 768){
            $(this).children('a').toggleClass('on');
            $(this).next('ul').slideToggle();
            return false;
        }
    });

    $('a.none-href, a.box_cate_img').click(function(event) {
        /* Act on the event */
        event.preventDefault();
    });


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
jQuery(function($){
    var hash = document.location.hash;
    if (hash) {
        $('.nav-tabs a[href="'+hash+'"]').tab('show');
        setTimeout(function () {
            var cat = $('#myTabContent .tab-pane.show').data('cat-id');
            var pageNumber = 0;
            var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&action=get_ajax_posts';
            call_ajax_homepage(pageNumber, str, $('#myTabContent .tab-pane.show .row'));
        }, 300);
    } else {
        var cat = $('#myTabContent .tab-pane.show').data('cat-id');
        var pageNumber = 0;
        var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&action=get_ajax_posts';
        call_ajax_homepage(pageNumber, str, $('#myTabContent .tab-pane.show .row'));
    }

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var cat = $('#myTabContent .tab-pane.show').data('cat-id');
        var pageNumber = 0;
        var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&action=get_ajax_posts';
        call_ajax_homepage(pageNumber, str, $('#myTabContent .tab-pane.show .row'));
    });

    $(document).on('click', '.misha_loadmore', (function(e){
        e.preventDefault();
        var cat = $(this).data('cat');
        var pageNumber = $(this).attr('data-current-page');
        var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&action=get_ajax_posts';
        $.ajax({
            context: this,
            url : 'wp-admin/admin-ajax.php',
            data: str,
            type : 'POST',
            beforeSend : function ( xhr ) {
                $(this).text('LOADING...');
            },
            success : function( data ){
                data = $.parseJSON(data);
                if( data['html'] ) {
                    pageNumber++;
                    $(this).html(data['html']);
                    $(this).attr('data-current-page', pageNumber);
                    $(this).parent('.text-center').prev().append(data['html']);
                    $('html, body').animate({
                        scrollTop: $(this).offset().top - 463*data['count'] - 200
                    }, 500);
                    $(this).text('MORE');
                    if (!data['more']) {
                        $(this).remove();
                    }
                } else {
                    $(this).remove();
                }
            }
        });
    }));
});

function call_ajax_homepage(pageNumber, str, content) {
    $.ajax({
        context: content,
        url : 'wp-admin/admin-ajax.php',
        data: str,
        type : 'POST',
        success : function( data ){
            data = $.parseJSON(data);
            if( data['html'] ) {
                pageNumber++;
                $(this).html(data['html']);
            }
            $(this).next('.text-center').remove();
            if (data['more']) {
                $(this).after('<div class="text-center"><a href="#" class="btn btnmore misha_loadmore" data-cat="'+data['cat']+'" data-current-page="2">MORE</a></div>')
            }
        }
    });
}

var sticky = new Sticky('[data-sticky]', {
    stickyClass: 'added-sticky'
});

$(window).scroll(function () {
    if ($('#wpadminbar').length && $('.sidebar-banner-sticky').hasClass('added-sticky')) {
        $('.sidebar-banner-sticky').addClass('add-top');
    } else {
        $('.sidebar-banner-sticky').removeClass('add-top');
    }
})
