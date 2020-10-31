jQuery(document).ready(function($) {

  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top
    }, 500);
  }
  $('[data-scroll]').on('click', scrollToSection);

  $('.datepicker').datepicker({
    language: 'ja',
  });

  $('#ibtnGoSubmit').on('click', function(e) {
        e.preventDefault();
        if(invalidCheck()){
            $('.frm_contact').submit();
        }

        return $("html,body").animate({
                scrollTop: "200"
        })
  });
 // VALIDATE FORM DATA
  function callErrorMessage(elem, message){
      var htmlError = '<span class="error-required" style="color: red">' + message + '</span>';
      var formGroup = $(elem).parents('.form-group');

      if(formGroup.find('.error-required').length)
      {
         formGroup.find('.error-required').html(message);

      }else{
          formGroup.find('.label_required').append(htmlError);
      } 
  }

  function removeErrorMessage(elem){
      var formGroup = $(elem).closest('.form-group');
      formGroup.find('.error-box').remove();
  }

  function setErrorClass(elem){
      $(elem).addClass('error-required');
  }

  function removeErrorClass(elem){
    var formGroup = $(elem).parents('.form-group');
    formGroup.find('.label_required').removeClass('error-required');
  }

  function invalidCheck() {

      var ERROR_NO_INPUT = 'この項目は必須です。';
      var isValid = true;
      errorElements = []
      
      $('.error-text').css('display', 'none');

      // EMPTY CHECK
      var requireInputText = $('input.required');
      var requireSelect    = $('select.required');
      
      $.each(requireInputText, function(i, e){
        if(typeof($(e).val()) === 'undefined' || $(e).val() == "" || $(e).val() == "null"){
          callErrorMessage($(e), ERROR_NO_INPUT);
          isValid = false;
        }else{
          removeErrorClass($(e));
        }
      }); 

      $.each(requireSelect, function(i, e){

        if(typeof($(e).find('option:selected').val()) === 'undefined' || $(e).find('option:selected').val() == "" || $(e).find('option:selected').val() == "null"){
          callErrorMessage($(e), ERROR_NO_INPUT);
          isValid = false;
        }else{
          removeErrorClass($(e));
        }
      });

      if ($('input[name="contact_item[]"]').is(':checked') == false){
          callErrorMessage('input[name="contact_item[]', ERROR_NO_INPUT);
          isValid = false;
       }else{
          removeErrorClass('input[name="contact_item[]');                  
      }

      if ($('input[name="contact_ways[]"]').is(':checked') == false){
          callErrorMessage('input[name="contact_ways[]', ERROR_NO_INPUT);
          isValid = false;
      }else{
          removeErrorClass('input[name="contact_ways[]');                  
      }

      if ($('input[name="contact_gmt[]"]').is(':checked') == false){
          callErrorMessage('input[name="contact_gmt[]', ERROR_NO_INPUT);
          isValid = false;
      }else{
          removeErrorClass('input[name="contact_gmt[]');                  
      }

      return isValid;
  }

  $.ajax({
    url: ajax_miyanomori_object.jp_national_holidays_min,
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
                if(data[date.getFullYear()][(date.getMonth() + 1)].indexOf(date.getDate()) != -1)
                  return false;
              }
              
              return true;
          },
    });
  })
  .fail(function(e) {
    console.log(e);
  })

}(jQuery));


$(function($) {
	 AOS.init();

	$(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
});

