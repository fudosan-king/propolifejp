$(function($) {

	$('.owl_gallerys').owlCarousel({
	    loop: false,
        rewind: true,
	    margin: 10,
	    nav: true,
	    dots: false,
	    items: 1
	});

	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

	/* khanhnp - Customize Fancybox3 Layout */
    $('[data-fancybox="gallery-pc"]').fancybox({
        idleTime: false,
        
        // Base template for layout
        baseTpl:
            '<div class="fancybox-container" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-infobar">Image <span data-fancybox-index></span>&nbsp;of&nbsp;<span data-fancybox-count></span></div>' +
            '<div class="fancybox-toolbar">{{buttons}}</div>' +
            '<div class="fancybox-navigation">{{arrows}}</div>' +
            '<div class="fancybox-stage customize"></div>' +
            '<div class="fancybox-caption"></div>' +
            "</div>" +
            "</div>",

        afterLoad : function( instance, current ) {
            // console.log(instance);
            // console.log( current);
            if ( instance.group.length > 1 && current.$content ) {
                current.$content.append('<div class="fancybox-infobar">Image ' + (current.index + 1) + '&nbsp;of&nbsp;' + instance.group.length + '</div>');
                current.$content.append('<div class="fancybox-navigation"><button data-fancybox-prev="" class="fancybox-button fancybox-button--arrow_left" title="Previous"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"></path></svg></div></button><button data-fancybox-next="" class="fancybox-button fancybox-button--arrow_right" title="Next"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"></path></svg></div></button></div>');
                current.$content.append('<div class="fancybox-caption fancybox-caption--separate"><div class="fancybox-caption__body">' + current.opts.caption + '</div></div>');
            }
        }
    });

    $('[data-fancybox="gallery-sp"]').fancybox({
        idleTime: false,
        
        // Base template for layout
        baseTpl:
            '<div class="fancybox-container" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-infobar">Image <span data-fancybox-index></span>&nbsp;of&nbsp;<span data-fancybox-count></span></div>' +
            '<div class="fancybox-toolbar">{{buttons}}</div>' +
            '<div class="fancybox-navigation">{{arrows}}</div>' +
            '<div class="fancybox-stage customize"></div>' +
            '<div class="fancybox-caption"></div>' +
            "</div>" +
            "</div>",
        afterLoad : function( instance, current ) {
            // console.log(instance);
            // console.log(current);
            if ( instance.group.length > 1 && current.$content ) {
                current.$content.append('<div class="fancybox-infobar">Image ' + (current.index + 1) + '&nbsp;of&nbsp;' + instance.group.length + '</div>');
                current.$content.append('<div class="fancybox-caption fancybox-caption--separate"><div class="fancybox-caption__body">' + current.opts.caption + '</div></div>');
            }
        }
    });
});

$(document).ready(function() {
	/* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $(".btnVideo").attr('data-src');
    
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#video").attr('src', '');
	
	/* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#modal_video").on('shown.bs.modal', function(){
        $("#video").attr('src', url);
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#modal_video").on('hide.bs.modal', function(){
        $("#video").attr('src', '');
    });
    
    // AJAX CHECK LOGIN SECURE AUTH
    if($('form[name="infoAuth"]').length){
        $('form[name="infoAuth"]').on('submit', function(e){
            var values = {};
            $.each($(this).serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });

            $('.loginRequire .txt').html('処理要求。');

            $.ajax({
                url: '/api',
                type: 'POST',
                dataType: 'json',
                data: {type: 'secure', _name: 'checkInfoLogin', urpass: values['passcode_secret_info'],},
            })
            .done(function(response) {
                
                if(response.data.iscorrect == 'true'){
                    $('.loginRequire .txt').html('お待ちください。');
                    $('.loginRequire .txt').css({color: '#A5753F'});
                    location.reload();
                }else{
                    $('input[name="passcode_secret_info"]').val('');
                    $('.loginRequire .txt').html('パスワードが間違っています。');
                    $('.loginRequire .txt').css({color: 'red'});
                }
                
            })
            .fail(function() {
                $('.loginRequire .txt').html('error');
                $('.loginRequire .txt').css({color: 'red'});
            })
            

            return false;
        })
    }

});

$(function() {
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