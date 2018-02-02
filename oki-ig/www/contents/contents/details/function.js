jQuery = jQuery.noConflict();

jQuery(document).ready(function() {

    jQuery('.thumbnail-frame').each(function(){
            jQuery('a',this).attr({
                'href' : jQuery('a img',this).attr('src').replace(/thumb/i,'full'),
                'rel' : 'prettyPhoto[gallery]',
            });
        });
          jQuery(document).ready(function(){
            jQuery("a[rel^='prettyPhoto']").prettyPhoto();
          });
});


