$(function($) {
    var current = moment(new Date());
    var next_month_object = current.add(1, 'months');
    var next_month_fm = next_month_object.format('YYYY-MM-DD hh:mm');
    var end_of_month = moment(next_month_fm).endOf('month');
    var day = next_month_object;
    if (day < end_of_month) {
        var day_off = day.format('YYYY-MM-DD hh:mm');
    } else {
        var day_off = end_of_month.format('YYYY-MM-DD hh:mm')
    }
    $('.datepickerCancel').val(moment(day_off).format('YYYY/MM/DD'))
    $('.datepickerCancel').datepicker({
        language: 'ja',
        disableTouchKeyboard: true,
        startDate: new Date(day_off),
    });
});
