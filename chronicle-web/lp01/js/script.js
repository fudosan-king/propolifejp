$(function() {

    $('#btnAddNode').click(function(event) {
        /* Act on the event */

        var identity = $('.drag-wrapper').length + 1;

        $('.imageCanvas').append('<div id="item-drag-'+identity+'" class="drag-wrapper"><i class="fas fa-tag new"></i></div>');
        $( "#item-drag-" + identity ).draggable({
            containment: ".imageCanvas", 
            scroll: false
        });

        $( "#item-drag-" + identity ).on('mouseenter', function(event) {
            event.preventDefault();
            /* Act on the event */
            $(this).find('.svg-inline--fa.fa-tag').removeClass('new');
        });
    });

    // ESTIMATION BEGIN

    var DATA_MAP;
    var RULES;

    var LABEL_JP = {
        'oak': 'オーク',
        'birch': '樺桜',
        'walnut': 'ウォルナット',
        'cheek': 'チーク',
        'amgis': 'アムギス',
    }

    $.ajax({
        type: "GET",  
        url: "data/data.csv",
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
        url: "data/rules.csv",
        dataType: "text",       
        success: function(response)  
        {
            RULES = $.csv.toObjects(response)[0];
            // console.log(RULES);
        }   
    });

    const rawRoomPrice = new AutoNumeric('#iRoomPrice', {decimalPlaces:'0'});
    const rawMonthlyLoan = new AutoNumeric('#iMonthlyLoan', {decimalPlaces:'0'});
    const rawTotalPrice = new AutoNumeric('#iTotalPrice', {decimalPlaces:'0'});

    /* Functions */
    function generateSelectRoomArea(DataRow){
        $.each(DataRow, function(index, row) {
            var strValue = row.room_area + ' m²';
            var html = '<option value="' + row.room_area + '">' + strValue + '</option>';
            $('#iRoomArea').append(html);
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
                                            <img src="data/img/'+ label +'.jpg" alt="" class="img-fluid"> \
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
        /* Act on the event */
        if(!checkValidate())
            return false;

        var roomAreaValue = $('#iRoomArea').val();
        var roomPriceValue = parseFloat(rawRoomPrice.rawValue)*10000;
        var materialValue = $('input[name="nMaterial"]:checked').val();

        var dataIdentity = getRoomAreaDATA(roomAreaValue);
        var renovationPriceValue = parseFloat(dataIdentity[materialValue]);

        var totalPriceValue = roomPriceValue + renovationPriceValue;

        var formulaRateValue = Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) / (Math.pow((1 + parseFloat(RULES.interest_rate)), RULES.repayment_period) - 1);
        var monthlyLoanValue = totalPriceValue * parseFloat(RULES.interest_rate) * formulaRateValue;


        rawTotalPrice.set(totalPriceValue/10000);
        rawMonthlyLoan.set(monthlyLoanValue);
        // console.log(formulaRateValue);
    });

});