$(function($) {
	$.ajax({
		url: '/assets/data/jp_national_holidays_min.json',
		dataType: 'json',
	})
	.always(function(data) {
		var holidays = data[(new Date()).getFullYear()];
		$('.datepicker').datepicker({
			language: 'ja',
			disableTouchKeyboard: true,
	        autoclose:true,
	        todayHighlight: true,
	        ignoreReadonly: true,
	        beforeShowDay: function (date) {

	            if(date.getTime() <= (new Date()).getTime() )
	                return false;

	            if (date.getDay() == 3 || date.getDay() == 0)
	                return false;

	            if(data &&  data[date.getFullYear()][(date.getMonth() + 1)]){
	            	if(data[date.getFullYear()][(date.getMonth() + 1)].indexOf(date.getDate()))
	            		return false;
	            }
	            
	            return true;
	        },
		});
	})
	.fail(function(e) {
		console.log(e);
	})

});
