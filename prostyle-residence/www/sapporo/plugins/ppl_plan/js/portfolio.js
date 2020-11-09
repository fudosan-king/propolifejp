jQuery(document).ready(function() {
    // PPL Plan Filtering
    jQuery('.nimble-ppl_plan-filter ul li a').click(function() {
        jQuery(this).css('outline','none');
        jQuery('.nimble-ppl_plan-filter ul .current').removeClass('current');
        jQuery(this).parent().addClass('current');
        var filterVal = jQuery(this).attr('rel');
        if(filterVal == 'all') {
            jQuery('.nimble-ppl_plan ul li.hidden').fadeIn('normal').removeClass('hidden');
        } else {
            jQuery('.nimble-ppl_plan ul li').each(function() {
                if(!jQuery(this).hasClass(filterVal)) {
                    jQuery(this).fadeOut('slow').addClass('hidden');
                } else {
                    jQuery(this).fadeIn('slow').removeClass('hidden');
                }
            });
        }
        // Apply lightbox gallery only to current items
        jQuery("a[rel^='lightbox'], a[rel^='youtube'], a[rel^='fancybox']", ".nimble-ppl_plan ul li:not(.hidden)" ).prettyPhoto();
        return false;
    });
    // PrettyPhoto Lightbox
    jQuery("a[rel^='lightbox'], a[rel^='youtube'], a[rel^='fancybox']").prettyPhoto();
});
