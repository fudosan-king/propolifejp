$(function($) {
	var availableDay = $('.datepickerCancel').val();
    $('.datepickerCancel').datepicker({
    	format: 'yyyy/mm/dd',
        language: 'ja',
        autoclose: true,
        disableTouchKeyboard: true,
        beforeShowDay: function (date) {

            if(date.getTime() < (new Date(availableDay)).getTime() )
                return false;

            return true;
        },
    });
});