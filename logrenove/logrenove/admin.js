// (function($){
//     $('.components-button.editor-post-publish-button').click(function(event) {
//         event.preventDefault();

//         alert('here');
//         return false;
//     });

// })(jQuery);



jQuery(document).ready(function($) {

    /* Args from WP : php_obj */
    /* default_category */

    var isActivate = false;
    var loopDetect;

    function isGutenberg() {
        return ($('.block-editor-writing-flow').length > 0 && $('.edit-post-sidebar').length > 0);
    }

    function checkImageReturnWarningMessageOrEmpty() {
        if (isGutenberg()) {
            var $img = $('.editor-post-featured-image').find('img');
        } else {
            var $img = $('#postimagediv').find('img');
        }
        if ($img.length === 0) {
            return 'This entry has no <b>featured image</b>';
        }
        // if (featuredImageIsTooSmall()) {
        //     return '<strong>This entry has a featured image that is too small</b>.';
        // }
        return '';
    }

    function disablePublishAndWarn(errors) {
        createMessageAreaIfNeeded();
        $('#nofeature-message').addClass("error")

        var htmlMessage = '';
        $.each(errors, function(index, message) {
            htmlMessage += '<p>'+message+'</p>';
        });

        $('#nofeature-message').html(htmlMessage);
    }

    function createMessageAreaIfNeeded() {
        if ($('body').find("#nofeature-message").length === 0) {
            if (isGutenberg()) {
                $('.components-notice-list').append('<div id="nofeature-message"></div>');
            } else {
                $('#post').before('<div id="nofeature-message"></div>');
            }
        }
    }

    function clearWarningAndEnablePublish() {
        $('#nofeature-message').remove();
        if (isGutenberg()) {
            $('.editor-post-publish-panel__toggle').removeAttr('disabled');
        } else {
            $('#publish').removeAttr('disabled');
        }
    }

    function validateCheck(){
        var errors = [];
        var isValidated = false;

        if (isGutenberg()) {
            // CHECK IMAGE EMPTY OR NOT
            var $img = $('.editor-post-featured-image').find('img');
            if ($img.length === 0) {
                 errors.push('This entry has no <b>"Featured Image"</b>');
            }

            // CHECK YOAST SEO EMPTY OR NOT
            // if( typeof($('#focus-keyword-input-metabox')) !== 'undefined'){
            //     if($('#focus-keyword-input-metabox').val() == null || $('#focus-keyword-input-metabox').val() == "") {
            //         errors.push('This entry has no <b>"Focus keyphrase"</b>');
            //     }

            //     if($('.public-DraftStyleDefault-block.public-DraftStyleDefault-ltr').length == 0){
            //         errors.push('This entry has no <b>"SEO title"</b> or <b>"Meta description"</b>');
            //     }
            // } 
                
        }
        isValidated = (errors.length == 0);

        if(!isValidated){
            disablePublishAndWarn(errors);
        }else{
            clearWarningAndEnablePublish();
        }

        return isValidated;
    }

    function initScript() {
        if(isGutenberg()){
            
            // CODE HERE

            if( $('.editor-post-taxonomies__hierarchical-terms-list .components-checkbox-control__input:checked').length == 0)
                $.each($('.components-checkbox-control__label'), function(index, el) {
                     if($(el).html() == php_obj.default_category_name){
                        $(el).closest('.components-base-control__field').find('input').click();
                     }
                });


            $('.components-button.editor-post-publish-button, .components-button.editor-post-publish-panel__toggle').on('click', function(event) {
                event.preventDefault();
                $('.edit-post-sidebar__panel-tab').first().click();
                // result = validateCheck();
                if(result){
                    clearWarningAndEnablePublish();
                }
                return result;
            });

            $('.editor-post-taxonomies__hierarchical-terms-list .components-checkbox-control__input, .editor-post-taxonomies__hierarchical-terms-list .components-checkbox-control__label').on('mousedown', function(e){
                var $identity = $(this).attr('id');
                $('.editor-post-taxonomies__hierarchical-terms-list .components-checkbox-control__input:checked').click();
            });

            // clearInterval(loopDetect);
        }
    }

    loopDetect = setInterval(initScript, 1000);

});