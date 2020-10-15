jQuery(function($){
    $('.misha_loadmore').click(function(e){
        e.preventDefault();
        var cat = $(this).data('cat');
        var pageNumber = $(this).attr('data-current-page');
        var str = '&cat=' + cat + '&pageNumber=' + pageNumber + '&action=get_ajax_posts';
        $.ajax({
            context: this,
            url : misha_loadmore_params.ajaxurl,
            data: str,
            type : 'POST',
            beforeSend : function ( xhr ) {
                $(this).text('LOADING...');
            },
            success : function( data ){
                if( data ) {
                    pageNumber++;
                    $(this).attr('data-current-page', pageNumber);
                    $(this).parent('.text-center').prev().append(data);
                    $(this).text('MORE');
                } else {
                    $(this).text('MORE');
                    $(this).off('click');
                    $(this).removeAttr('href');
                    $(this).css('cursor', 'default');
                }
            }
        });

    });
});