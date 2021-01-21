jQuery(document).ready(function($){

    // Perform AJAX login on form submit
    $('form#frm_login').on('submit', function(e){
        e.preventDefault();
        $('form#frm_login p.status').show().text(ajax_miyanomori_object.txtPlsWait);
        $('form#frm_login p.status').append('<br>'+ajax_miyanomori_object.loadingmessage);
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_miyanomori_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#frm_login #username').val(), 
                'password': $('form#frm_login #password').val(), 
                'security': $('form#frm_login #security').val() },
            success: function(data){
                $('form#frm_login p.status').text();
                $('form#frm_login p.status').text(data.message_jp);
                $('form#frm_login p.status').append('<br>'+data.message);

                if (data.loggedin == true){
                    document.location.href = ajax_miyanomori_object.redirecturl;
                }
            }
        });
    });

    // Perform AJAX login on form submit
    $('form#frm_regiter').on('submit', function(e){
        e.preventDefault();
        $('form#frm_regiter p.status').show().text(ajax_miyanomori_object.txtPlsWait);
        $('form#frm_regiter p.status').append('<br>'+ajax_miyanomori_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_miyanomori_object.ajaxurl,
            data: { 
                'action'   : 'ajaxregister', //calls wp_ajax_nopriv_ajaxlogin
                'userlogin': $('form#frm_regiter #userlogin').val(), 
                'useremail': $('form#frm_regiter #useremail').val(), 
                'security' : $('form#frm_regiter #security').val() },
            success: function(data){

                if (data.loggedin == true){
                    $('form#frm_regiter p.status').text();
                    $('form#frm_regiter p.status').text(data.message_jp);
                    $('form#frm_regiter p.status').append('<br>'+data.message);
                }else{
                    var message = "";
                    var message_jp = "";
                    $.each( data.message, function( key, value ) {
                        message  = message + value;
                    });
                    $.each( data.message_jp, function( key, value ) {
                        message_jp  = message_jp + value;
                    });
                    console.log(message,message_jp);
                    $('form#frm_regiter p.status').html(message_jp);
                    $('form#frm_regiter p.status').append('<br>'+message);
                } 
            }
        });
    });

    // Perform AJAX login on form submit
    $('form#form_forgot_password').on('submit', function(e){
        e.preventDefault();
        $('form#form_forgot_password p.status').show().text(ajax_miyanomori_object.txtPlsWait);
        $('form#form_forgot_password p.status').append('<br>'+ajax_miyanomori_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_miyanomori_object.ajaxurl,
            data: { 
                'action'    : 'ajaxforgotpassword', //calls wp_ajax_nopriv_ajaxlogin
                'user_login': $('form#form_forgot_password #forgot_email').val(), 
                'security'  : $('form#form_forgot_password #security').val() },
            success: function(data){
                if (data.status == true){
                    $('form#form_forgot_password p.status').text();
                    $('form#form_forgot_password p.status').text(data.message_jp);
                    $('form#form_forgot_password p.status').append('<br>'+data.message);
                }else{
                    var message = "";
                    var message_jp = "";
                    $.each( data.message, function( key, value ) {
                        message  = message + value;
                    });
                    $.each( data.message_jp, function( key, value ) {
                        message_jp  = message_jp + value;
                    });

                    $('form#form_forgot_password p.status').html(message_jp);
                    $('form#form_forgot_password p.status').append('<br>'+message);
                } 
            }
        });
    });

    // Perform AJAX login on form submit
    // $('form#form_reset_password').on('submit', function(e){
    //     e.preventDefault();
    //     $('form#form_reset_password p.status').show().text(ajax_miyanomori_object.loadingmessage);
    //     $.ajax({
    //         type: 'POST',
    //         dataType: 'json',
    //         url: ajax_miyanomori_object.ajaxurl,
    //         data: { 
    //             'action'    : 'ajaxforgotpassword', //calls wp_ajax_nopriv_ajaxlogin
    //             'user_login': $('form#form_reset_password #forgot_email').val(), 
    //             'security'  : $('form#form_reset_password #security').val() },
    //         success: function(data){
    //             if (data.status == true){
    //                 $('form#form_reset_password p.status').text(data.message);
    //             }else{
    //                 var message = "";

    //                 $.each( data.message, function( key, value ) {
    //                     message  = message + value;
    //                 });

    //                 $('form#form_reset_password p.status').html(message);
    //             } 
    //         }
    //     });
    // });

});