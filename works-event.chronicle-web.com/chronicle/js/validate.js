jQuery(function($) {
    if($('#place0_0').length && ('#showroom1_0').length){
        $('#publish').click(function(event) {
            /* Act on the event */
            if(!checkValidate()){
                event.preventDefault();
                return false;
            }
        });
    }   

    function checkValidate(){
        var isValidate = true;
        var errorText = '';
        if($('#place0_0').length && ('#showroom1_0').length){
            if(typeof($('#place0_0')) === 'undefined' || $('#place0_0').val() == ''){
                $('#place0_0').addClass('validate-error');
                isValidate = false;
                errorText += '- 場所は値を入力する必要があります!\n';
            }
            if(typeof($('#showroom1_0')) === 'undefined' || $('#showroom1_0').val() == ''){
                $('#showroom1_0').addClass('validate-error');
                isValidate = false;
                errorText += '- ショールームは値を入力する必要があります!\n';
            }
        }

        if(errorText)
            alert(errorText);
        
        return isValidate;
    }
});