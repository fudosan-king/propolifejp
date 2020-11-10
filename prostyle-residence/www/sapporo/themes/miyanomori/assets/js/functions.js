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
      formGroup.find('.error-required').remove();
  }

  function setErrorClass(elem){
      $(elem).addClass('error-required');
  }

  function removeErrorClass(elem){
    var formGroup = $(elem).parents('.form-group');
    formGroup.find('.error-required').remove();
  }

  function invalidCheckInput(elem)
  {
    var ERROR_NO_INPUT = 'この項目は必須です。';
    var isValid = true;
    if(typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null"){
      callErrorMessage(elem, ERROR_NO_INPUT);
      isValid = false;
    }else{
      removeErrorClass(elem);
    }
    return isValid;
  }

  function invalidCheckSelect(elem)
  {
      var ERROR_NO_INPUT = 'この項目は必須です。';
      var isValid = true;

     if(typeof(elem.find('option:selected').val()) === 'undefined' || elem.find('option:selected').val() == "" || elem.find('option:selected').val() == "null"){
        callErrorMessage(elem, ERROR_NO_INPUT);
        isValid = false;
      }else{
        removeErrorClass(elem);
      }
      return isValid;
  }

  function invalidCheck() {

      var ERROR_NO_INPUT = 'この項目は必須です。';
      var isValid = true;
      errorElements = []
      
      // $('.error-required').css('display', 'none');

      // EMPTY CHECK
      var requireInputText = $('input.required');
      var requireSelect    = $('select.required');
      
      $.each(requireInputText, function(i, e){
        if(!invalidCheckInput($(e)))
        {
            isValid = false;
        }
      }); 

      var ischecked      = $('input[name="contact_item[]"]:checked').length > 0;

      if (ischecked == false){
          callErrorMessage('#customCheck1', ERROR_NO_INPUT);
          isValid = false;
       }else{
          removeErrorClass('#customCheck1');                  
      }

      if($('.contact_item_document:checked').length > 0)
      {
        if(!invalidCheckInput($('input[name="postal_code"]')))
        {
           isValid = false;
        }

        if(!invalidCheckInput($('input[name="city"]')))
        {
          isValid = false;
        }

        if(!invalidCheckSelect($('select[name="prefecture"]')))
        {
          isValid = false;
        }

      }

      if($('.contact_item_meet:checked').length > 0)
      {
          var ischeckedMeeting = true;

          if(!invalidCheckInput($('input[name="date_meeting_1"]')))
          {
               isValid = false;
               ischeckedMeeting = false;
          }

          if(!invalidCheckInput($('input[name="date_meeting_2"]')))
          {
               isValid = false;
               ischeckedMeeting = false;
          }

          if(!invalidCheckSelect($('select[name="time_meeting_1"]')))
          {
             isValid = false;
             ischeckedMeeting = false;
          }

          if(!invalidCheckSelect($('select[name="time_meeting_2"]')))
          {
            isValid = false;
            ischeckedMeeting = false;
          }

          if(!ischeckedMeeting)
          {
            callErrorMessage('input[name="date_meeting_1"]', ERROR_NO_INPUT);
          }
      }


      if($('.contact_item_staff:checked').length > 0)
      {
          var ischecked = $('input[name="contact_gmt[]"]:checked').length > 0;

          if (ischecked == false){
              callErrorMessage('#customCheck10', ERROR_NO_INPUT);
              isValid = false;
           }else{
              removeErrorClass('#customCheck10');                  
          }
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

