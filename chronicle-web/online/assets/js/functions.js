$(function($) {

    today = new Date();
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    var meetday = today;

    if(today.getDay() == 2)
        meetday = moment(today).add(2, 'day');
    if(today.getDay() == 3)
        meetday = moment(today).add(1, 'day');

    $('#datepicker').datepicker({
        // todayHighlight: true,
        format: 'yyyy年mm月dd',
        language: 'ja',
        autoclose:true,
        beforeShowDay: function (date) {
            if(date.getTime() < (new Date()).getTime() )
                return false;
            if (date.getDay() == 2 || date.getDay() == 3)
                return false;

            return true;
        }
    });
    $('#datepicker').datepicker('setDate', meetday.format('YYYY/MM/DD'));
});