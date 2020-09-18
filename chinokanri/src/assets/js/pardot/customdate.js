$(function($) {
    $('.datepickerCancel').datepicker({
        language: 'ja',
        disableTouchKeyboard: true,
        startDate: '+1m',
    });
    $(".datepickerCancel").datepicker("setDate", new Date($('.datepickerCancel').datepicker('getStartDate')));
    $('.datepickerCancel').val(moment($('.datepickerCancel').datepicker('getStartDate')).format('YYYY/MM/DD'))
});