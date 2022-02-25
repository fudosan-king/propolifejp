$(function() {

    function checkValidate(){
        var isValidate = true;

        var form = $('.frm_contact')[0];
        var formIsValid = form.checkValidity();
        if (!formIsValid) {
            isValidate = false;
        }

        return isValidate;
    }

	$('.btnSend').click(function(event) {
		/* Act on the event */
        var form = $('.frm_contact')[0];

        if (!checkValidate()) {
            event.preventDefault();
            event.stopPropagation();

            form.classList.add('was-validated');
            $("html, body").animate({ scrollTop: $($('.was-validated .form-control:invalid').first()).offset().top - 150 }, 300);
        }
        
        // return false; // For testing only to stay on this page

	});
});