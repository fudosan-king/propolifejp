/* Author: Khanh Nguyen PPL */
/* Description: Process estimation and contact form */
/* Published: 2020 */

$(function() {

    /* MODULE: ESTIMATION BEGIN */

    $('head').append('<style>.validate-error {box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important; border-color: #ff0000!important;}</style>');

    var DATA_MAP;
    var RULES;
    var S3_AWS = 'https://propolife.s3-ap-northeast-1.amazonaws.com/release/cost-estimate';

    var LABEL_JP = {
        'oak': 'オーク',
        'birch': '樺桜',
        'walnut': 'ウォルナット',
        'cheek': 'チーク',
        'amgis': 'アムギス',
    }

    $.ajax({
        type: "GET",  
        url: S3_AWS + "/data.csv",
        dataType: "text",       
        success: function(response)  
        {
            DATA_MAP = $.csv.toObjects(response);
            // console.log(DATA_MAP[0]);
            // $.each(DATA_MAP, function(index, row) {
            //     console.log(row.room_area);
            // });
            generateSelectRoomArea(DATA_MAP);
            generateRadioMaterial(DATA_MAP);
        }   
    });

    $.ajax({
        type: "GET",  
        url: S3_AWS + "/rules.csv",
        dataType: "text",       
        success: function(response)  
        {
            RULES = $.csv.toObjects(response)[0];
            // console.log(RULES);
        }   
    });

    // const rawRoomPrice = new AutoNumeric('#iRoomPrice', {decimalPlaces:'0', minimumValue:0});
    const rawMonthlyLoan = new AutoNumeric('#iMonthlyLoan', {decimalPlaces:'0', minimumValue:0});
    const rawTotalPrice = new AutoNumeric('#iTotalPrice', {decimalPlaces:'0', minimumValue:0});

    /* Functions */
    function generateSelectRoomArea(DataRow){
        var count = 0;
        $.each(DataRow, function(index, row) {
            var selected = count == 0 ? 'selected' : '';
            var strValue = row.room_area + '';
            var html = '<option value="' + row.room_area + '" '+selected+'>' + strValue + '</option>';
            $('#iRoomArea').append(html);
            count++;
        });
    }

    function generateRadioMaterial(DataRow){
        var FirstRow = DataRow[0];
        var count = 0;
        $.each(FirstRow, function(label, data) {
            if (label == 'room_area')
                return;
            else{
                var checked = count == 0 ? 'checked' : '';
                var active = count == 0 ? 'active' : '';
                // var strCapitalizeLable = label.substr(0,1).toUpperCase()+label.substr(1);
                var jpLabel = LABEL_JP[label]
                var html = '<li class="' + active + '"> \
                                <div class="radio"> \
                                    <label for="iMaterial-'+ label +'"> \
                                        <span class="box_material_wood"> \
                                            <img src="' + S3_AWS + '/img/' + label +'.jpg" alt="" class="img-fluid"> \
                                        </span> \
                                        <p>' + jpLabel + '</p> \
                                    </label> \
                                    <input type="radio" id="iMaterial-'+ label +'" name="nMaterial" value="'+ label +'" ' + checked + '> \
                                </div> \
                            </li>';
                $('#iMaterial-wrapper').append(html);

                $('#iMaterial-' + label).change(function() {
                    $('#iMaterial-wrapper').find('li[class="active"]').removeClass('active');
                    $(this).closest('li').addClass('active');
                });

                count++;
            }
        });


    }

    function checkValidate(){
        var isValidate = true;
        var roomAreaValue = $('#iRoomArea').val();
        var roomPriceValue = $('#iRoomPrice').val();

        if(typeof($('#iRoomArea')) === 'undefined' || !roomAreaValue){
            isValidate = false;
            $('#iRoomArea').addClass('validate-error');
        }else{
            $('#iRoomArea').removeClass('validate-error');
        }

        if(typeof($('#iRoomPrice')) === 'undefined' || !roomPriceValue){
            isValidate = false;
            $('#iRoomPrice').addClass('validate-error');

        }else{
            $('#iRoomPrice').removeClass('validate-error');
        }

        if(!isValidate){
            rawTotalPrice.set('');
            rawMonthlyLoan.set('');
        }

        

        // console.log(roomAreaValue);
        // console.log(roomPriceValue);
        // console.log(isValidate);

        return isValidate;
    } 

    function getRoomAreaDATA(RoomAreaValue){
        var result;
        $.each(DATA_MAP, function(index, row) {
            if(row.room_area == RoomAreaValue)
                result = row;
        });
        return result;
    }

    /* Action & Event */
    $('#iEstimate').click(function(event) {
        event.preventDefault();
        /* Act on the event */
        if(!checkValidate())
            return false;

        var roomAreaValue = $('#iRoomArea').val();
        var roomPriceValue = parseFloat($('#iRoomPrice').val())*10000;
        var materialValue = $('input[name="nMaterial"]:checked').val();

        var dataIdentity = getRoomAreaDATA(roomAreaValue);
        var renovationPriceValue = parseFloat(dataIdentity[materialValue]);

        

        var totalPriceValue = roomPriceValue + renovationPriceValue;

        var formulaRateValue = Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) / (Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) - 1);
        var monthlyLoanValue = totalPriceValue * parseFloat(RULES.interest_rate) * formulaRateValue;

        rawTotalPrice.set(totalPriceValue/10000);
        rawMonthlyLoan.set(monthlyLoanValue);
        // $('#iTotalPrice').val(totalPriceValue/10000)
        // $('#iMonthlyLoan').val(monthlyLoanValue)

        console.log('Room Area: ' + dataIdentity);
        console.log('Room Price:' + roomPriceValue);
        console.log('Renovation Price: ' + renovationPriceValue);
        console.log('Total Price: ' + (totalPriceValue/10000));
        console.log('Monthly Loan: ' + monthlyLoanValue);

        // console.log(formulaRateValue);
        $('html, body').animate({
            scrollTop: $(".renovation_fee").offset().top
        }, 700);
    });

});
