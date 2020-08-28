$(function($) {

	$('.owl_gallerys').owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: true,
	    dots: false,
	    items: 1
	});

  $('.owl_topbanner').owlCarousel({
      loop: false,
      margin: 10,
      nav: false,
      dots: false,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      animateOut: 'fadeOut'
  });

	$('.nav a').click(function() {
	    $('.navbar-collapse').collapse('hide');
	});

	AOS.init();

    $('#scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 400);
        return false;
    });

    $(document).ready(function() {
        return $(window).scroll(function() {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function() {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    });

    var $carousel = $('.carousel_topbanner').flickity({
      autoPlay: 5000,
      pauseAutoPlayOnHover: false,
      prevNextButtons: false,
      fade: true,
      pageDots: false,
      contain: true,
    });

    var flkty = Flickity.data( $('.carousel_topbanner')[0] );

    $carousel.on( 'settle.flickity', function() {
      if(flkty.selectedIndex === 3){
         // console.log("last!")
         $carousel.flickity('stopPlayer');
      }
    });



});



(function(d) {
var config = {
    kitId: 'asf7xon',
    scriptTimeout: 3000,
    async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

$(function($) {
    var data = {"2048": {"1": [1, 13], "2": [11, 23, 24], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [20], "8": [11], "9": [21, 22, 22], "10": [12], "11": [3, 23]}, "2049": {"1": [1, 11], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [19], "8": [11], "9": [20, 22], "10": [11], "11": [3, 23]}, "2020": {"1": [1, 13], "2": [11, 23, 24], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [23, 24], "8": [10], "9": [21, 22], "11": [3, 23]}, "2021": {"1": [1, 11], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [19], "8": [11], "9": [20, 23], "10": [11], "11": [3, 23]}, "2022": {"1": [1, 10], "2": [11, 23], "3": [21], "4": [29], "5": [3, 4, 5], "7": [18], "8": [11], "9": [19, 23], "10": [10], "11": [3, 23]}, "2023": {"1": [1, 2, 9], "2": [11, 23], "3": [21], "4": [29], "5": [3, 4, 5], "7": [17], "8": [11], "9": [18, 23], "10": [9], "11": [3, 23]}, "2024": {"1": [1, 8], "2": [11, 12, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [15], "8": [11, 12], "9": [16, 22, 23], "10": [14], "11": [3, 4, 23]}, "2025": {"1": [1, 13], "2": [11, 23, 24], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [21], "8": [11], "9": [15, 23], "10": [13], "11": [3, 23, 24]}, "2026": {"1": [1, 12], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [20], "8": [11], "9": [21, 22, 23], "10": [12], "11": [3, 23]}, "2027": {"1": [1, 11], "2": [11, 23], "3": [21, 22], "4": [29], "5": [3, 4, 5], "7": [19], "8": [11], "9": [20, 23], "10": [11], "11": [3, 23]}, "2028": {"1": [1, 10], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [17], "8": [11], "9": [18, 22], "10": [9], "11": [3, 23]}, "2029": {"1": [1, 8], "2": [11, 12, 23], "3": [20], "4": [29, 30], "5": [3, 4, 5], "7": [16], "8": [11], "9": [17, 23, 24], "10": [8], "11": [3, 23]}, "2030": {"1": [1, 14], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [15], "8": [11, 12], "9": [16, 23], "10": [14], "11": [3, 4, 23]}, "2031": {"1": [1, 13], "2": [11, 23, 24], "3": [21], "4": [29], "5": [3, 4, 5, 6], "7": [21], "8": [11], "9": [15, 23], "10": [13], "11": [3, 23, 24]}, "2032": {"1": [1, 12], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [19], "8": [11], "9": [20, 22], "10": [11], "11": [3, 23]}, "2033": {"1": [1, 10], "2": [11, 23], "3": [20, 21], "4": [29], "5": [3, 4, 5], "7": [18], "8": [11], "9": [19, 23], "10": [10], "11": [3, 23]}, "2034": {"1": [1, 2, 9], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [17], "8": [11], "9": [18, 23], "10": [9], "11": [3, 23]}, "2035": {"1": [1, 8], "2": [11, 12, 23], "3": [21], "4": [29, 30], "5": [3, 4, 5], "7": [16], "8": [11], "9": [17, 23, 24], "10": [8], "11": [3, 23]}, "2036": {"1": [1, 14], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [21], "8": [11], "9": [15, 22], "10": [13], "11": [3, 23, 24]}, "2037": {"1": [1, 12], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [20], "8": [11], "9": [21, 22, 23], "10": [12], "11": [3, 23]}, "2038": {"1": [1, 11], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [19], "8": [11], "9": [20, 23], "10": [11], "11": [3, 23]}, "2039": {"1": [1, 10], "2": [11, 23], "3": [21], "4": [29], "5": [3, 4, 5], "7": [18], "8": [11], "9": [19, 23], "10": [10], "11": [3, 23]}, "2040": {"1": [1, 2, 9], "2": [11, 23], "3": [20], "4": [29, 30], "5": [3, 4, 5], "7": [16], "8": [11], "9": [17, 22], "10": [8], "11": [3, 23]}, "2041": {"1": [1, 14], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [15], "8": [11, 12], "9": [16, 23], "10": [14], "11": [3, 4, 23]}, "2042": {"1": [1, 13], "2": [11, 23, 24], "3": [20], "4": [29], "5": [3, 4, 5, 6], "7": [21], "8": [11], "9": [15, 23], "10": [13], "11": [3, 23, 24]}, "2043": {"1": [1, 12], "2": [11, 23], "3": [21], "4": [29], "5": [3, 4, 5, 6], "7": [20], "8": [11], "9": [21, 22, 23], "10": [12], "11": [3, 23]}, "2044": {"1": [1, 11], "2": [11, 23], "3": [20, 21], "4": [29], "5": [3, 4, 5], "7": [18], "8": [11], "9": [19, 22], "10": [10], "11": [3, 23]}, "2045": {"1": [1, 2, 9], "2": [11, 23], "3": [20], "4": [29], "5": [3, 4, 5], "7": [17], "8": [11], "9": [18, 22], "10": [9], "11": [3, 23]}, "2046": {"1": [1, 8], "2": [11, 12, 23], "3": [20], "4": [29, 30], "5": [3, 4, 5], "7": [16], "8": [11], "9": [17, 23, 24], "10": [8], "11": [3, 23]}, "2047": {"1": [1, 14], "2": [11, 23], "3": [21], "4": [29], "5": [3, 4, 5, 6], "7": [15], "8": [11, 12], "9": [16, 23], "10": [14], "11": [3, 4, 23]}};
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
                if(data[date.getFullYear()][(date.getMonth() + 1)].includes(date.getDate()))
                    return false;
            }
            return true;
        },
    });
});
// BUTTON SET SUBMIT FORM ACTION
$('#goSubmit').click(function() {
    if (invalidCheck()) {
        // ADD STORE NAME AND EMAIL TO LOCAL STORAGE
        localStorage.setItem('reservation_surname', $('input[name="first-name"]').val());
        localStorage.setItem('reservation_name', $('input[name="last-name"]').val());
        localStorage.setItem('reservation_email', $('input[name="email"]').val());
        // RE-SET VALUE ON FINAL TURN
        $('form input[type="text"]').each(function() {
            if ($(this).val() == '')
                $(this).val('null');
        });

        $('form textarea').each(function() {
            if ($(this).val() == '')
                $(this).val('null');
        });

        $('.frm_onlineservices').submit();
    }
});

// VALIDATE FORM DATA
function invalidCheck() {

    var isValid = true;
    var invalidColor = 'rgba(255,0,0,0.15)';
    var validFlagColor = '#F8B102';

    $.each($('.require-flag'), function(index, val) {
        /* iterate through array or object */
        $(val).css('background-color', validFlagColor);
    });

    $('.error-text').css('display', 'none');

    // EMPTY CHECK

    var elemsChk = [
        $('input[name="surname"]'),
        $('input[name="name"]'),
        $('input[name="date"]'),
        $('#time'),
    ];

    $.each(elemsChk, function(key, elem) {

        if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'checkbox') {
            if (!$(this).is(':checked')) {
                $(this).closest('.checkbox').css('color', '#ff0700');
                isValid = false;


                if (elem.prop('name') == 'secret-info') {

                    $('.require-flag.secret-info').css('background-color', '#ff0700');
                }

            } else {
                $(this).closest('.checkbox').css('color', 'initial');

            }
        }  else {
            if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'select') {
                if (elem.prop('name') == 'time') {
                    $('.require-flag.email').css('background-color', '#ff0700');
                }
            }

            if (typeof($(this)) !== 'undefined' && $(this).prop('type') == 'radio') {

                if (elem.prop('name') == 'first-impression') {

                    if (!$(this).is(':checked')) {
                        $(this).closest('.radio').css('color', '#ff0700');

                        isValid = false;


                        $('.require-flag.first-impression').css('background-color', '#ff0700');
                    } else {
                        $(this).closest('.radio').css('color', 'initial');

                    }
                }

            } else {
                if (typeof(elem.val()) === 'undefined' || elem.val() == "" || elem.val() == "null") {

                    // if(elem.prop('name') != 'job-style-desc' && elem.prop('name') != 'first-impression-etc'){
                    if (elem.prop('name') != 'first-impression-etc') {
                        elem.css({
                            'background-color': invalidColor,
                            'border-color': '#ff0700'
                        });
                        isValid = false;

                        // Set error text
                        if (elem.prop('name') == 'surname' || elem.prop('name') == 'name') {

                            $('.require-flag.name').css('background-color', '#ff0700');
                        }


                        if (elem.prop('name') == 'email') {
                            $('.require-flag.email').css('background-color', '#ff0700');
                        }
                    }

                } else {
                    elem.css({
                        'background-color': 'initial',
                        'border-color': '#ccc'
                    });

                }
            }
        }

    });

    // EMAIL CHECK
    var emailPattern = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

    if (!emailPattern.test($('input[name="email"]').val())) {
        $('input[name="email"]').css({
            'background-color': invalidColor,
            'border-color': '#ff0700'
        });

        isValid = false;


        $('.require-flag.email').css('background-color', '#ff0700');

    } else {
        $('input[name="email"]').css({
            'background-color': 'initial',
            'border-color': '#ccc'
        });
    }

    return isValid;
}
