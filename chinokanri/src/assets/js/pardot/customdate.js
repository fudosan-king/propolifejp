$(function($) {
    function GetIEVersion() {
        var sAgent = window.navigator.userAgent;
        var Idx = sAgent.indexOf("MSIE");
        if (Idx > 0)
            return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));
        else if (!!navigator.userAgent.match(/Trident\/7\./))
            return 11;
        else
            return 0;
    }
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
    if (GetIEVersion() > 0) {
        var day_off = new Date(moment(day_off).format('YYYY-MM-DD'));
        Date.prototype.addDays = function(days) {
            var dat = new Date(this.valueOf())
            dat.setDate(dat.getDate() + days);
            return dat;
        }
        function getDates(startDate, stopDate) {
            var startDate = new Date(startDate);
            var stopDate  = new Date(stopDate);
            var dateArray = [];
            var currentDate = startDate;
            while (currentDate <= stopDate) {
                dateArray.push(currentDate.getFullYear()+'-'+(currentDate.getMonth()+1)+'-'+currentDate.getDate())
                currentDate = currentDate.addDays(1);
            }
            return dateArray;
        }
        var day_past = new Date(day_off.getTime());
        var pastYear = day_past.getFullYear() - 10;
        day_past.setFullYear(pastYear);
        var dateArray = getDates(day_past.getFullYear()+'-'+(day_past.getMonth()+1)+'-'+day_past.getDate(), day_off.getFullYear()+'-'+(day_off.getMonth()+1)+'-'+day_off.getDate());

        $('.datepickerCancel').datepicker({
            language: 'ja',
            disableTouchKeyboard: true,
            datesDisabled: dateArray,
        });
    } else {
        $('.datepickerCancel').datepicker({
            language: 'ja',
            disableTouchKeyboard: true,
            startDate: new Date(day_off),
        });
    }
});
