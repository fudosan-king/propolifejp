jQuery(document).ready(function($){
	var custom_uploader,action;
	var getButtonMethod = function(m){
		switch(m){
			case 'set_confirm_button': return 'confirm';break;
			case 'set_send_button': return 'send';break;
			case 'set_back_button': return 'back';break;
			case 'set_confirm_on_button': return 'confirm_on';break;
			case 'set_send_on_button': return 'send_on';break;
			case 'set_back_on_button': return 'back_on';break;
			default: return 'confirm';break;
		}
	}
	$('#set_confirm_button,#set_send_button,#set_back_button,#set_confirm_on_button,#set_send_on_button,#set_back_on_button').on('click',function(e) {
		action = getButtonMethod($(this).attr('id'));
		e.preventDefault();
		if (custom_uploader) {
			custom_uploader.open();
			return;
		} 
		custom_uploader = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
			},  
			multiple: false
		}); 
		custom_uploader.on('select', function() {
			var images = custom_uploader.state().get('selection');
			images.each(function(file){
				$('#set_' + action + '_button').css({'display':'none'});
				$('#' + action + '_button_image').html('<img src="'+file.toJSON().url+'" /><span class="preview_button_delete_button"></span>');
				$('#hny_jsa_' + action + '_button').attr('value',file.toJSON().id);
			});
		}); 
		custom_uploader.open();
	});
	$('.preview_button_image').each(function(){
		if($(this).find('img').length){
			$(this).append('<span class="preview_button_delete_button"></span>');
		}
	});
	$('.preview_button_image').on('click','.preview_button_delete_button',function(){
		var p = $(this).closest('div.clearfix');
		p.find('.preview_button_image').html('');
		p.find('input').attr('value','');
		p.find('button').css({'display':'block'});
	});
});
