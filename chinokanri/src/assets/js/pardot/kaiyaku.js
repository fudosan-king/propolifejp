(function() {
    if (!String.prototype.includes) {
        String.prototype.includes = function(search, start) {
            if (typeof start !== 'number') {
                start = 0;
            }

            if (start + search.length > this.length) {
                return false;
            } else {
                return this.indexOf(search, start) !== -1;
            }
        };
    }
    if (!String.prototype.includes) {
        String.prototype.includes = function(search, start) {
            if (typeof start !== 'number') {
                start = 0;
            }

            if (start + search.length > this.length) {
                return false;
            } else {
                return this.indexOf(search, start) !== -1;
            }
        };
    }
    var queryString = function(){
        var search = window.location.search;
        var res = {};
        var str = search.substr(1);
        var params = str.split("&");
        params.forEach(function(data){
            var obj = data.split("=");
            res[obj[0]] = obj[1];
        });
        return res;
    }
    if (typeof queryString()['finish'] !== 'undefined' && queryString()['finish'] == '1'){
        [].slice.call(document.querySelectorAll('.steps li')).forEach(function (step)  {
            if (step.id == 'finish') {
                step.classList.add('active')
            } else {
                step.classList.remove('active')
            }
        })
    } else {
        processForm()
    }
    function processForm() {
        window.addEventListener('load', function() {
            var btnAgree = document.getElementById('btnAgree')
            var btnBack = document.getElementById('btnBack')
            var btnSubmit = document.getElementById('btnSubmit')
            var form = document.getElementById('form-kaiyaku')
            var inputForm = form.querySelector('#input-form')
            var confirmForm = form.querySelector('#confirm-form')
            var steps =  document.querySelectorAll('.steps li')
            var current_step = 'input'
            var formControlElements = form.querySelectorAll('input, textarea, select')
            var errorElements = []
            var datepickerElements = form.querySelectorAll('.form-control.datepicker')

            document.getElementById('contractor_same_resident_ckb').addEventListener('click', function() {
                if (this.checked == true) {
                    var $resident_kanji_family_name =  document.querySelectorAll('input[name="resident_kanji_family_name"')[0]
                    $resident_kanji_family_name.value = document.querySelectorAll('input[name="contractor_kanji_family_name"')[0].value

                    var $resident_kanji_name =  document.querySelectorAll('input[name="resident_kanji_name"')[0]
                    $resident_kanji_name.value = document.querySelectorAll('input[name="contractor_kanji_name"')[0].value

                    var $resident_furigana_family_name =  document.querySelectorAll('input[name="resident_furigana_family_name"')[0]
                    $resident_furigana_family_name.value = document.querySelectorAll('input[name="contractor_furigana_family_name"')[0].value

                    var $resident_furigana_name =  document.querySelectorAll('input[name="resident_furigana_name"')[0]
                    $resident_furigana_name.value = document.querySelectorAll('input[name="contractor_furigana_name"')[0].value
                }

            }, false);

                [].slice.call(datepickerElements).forEach(function (datepickerElement){
                $(datepickerElement).datepicker({
                    language: 'ja',
                    autoclose: true,
                    disableTouchKeyboard: true,
                    beforeShowDay: function (date) {
                        var oneMonth = new Date()
                        oneMonth.setMonth(oneMonth.getMonth() + 1)
                        if (date.getTime() <= oneMonth.getTime())
                            return false;

                        return true
                    },
                });
            })

            btnBack.addEventListener('click', function() {
                var hideConfirmForm = new Promise(function(resolve, reject) {
                    hide(confirmForm)
                    resolve()
                }).then(function () {
                    show(inputForm)
                }).then(function () {
                    goInputStep()
                    if (errorElements.length > 0) {
                        showFormErrors()
                    } else {
                        document.getElementById('form-title').scrollIntoView({behavior: "smooth"})
                    }
                })
            }, false)

            btnAgree.addEventListener('click', function() {
                validateForm()
                if (errorElements.length > 0) {
                    showFormErrors()
                } else {
                    new Promise(function(resolve,reject) {
                        updataDataConfirmForm()
                        hide(inputForm)
                        resolve()
                    }).then(function () {
                        show(confirmForm)
                        goConfirmStep()
                        document.getElementById('form-title').scrollIntoView({behavior: "smooth"})
                    })
                }
            }, false)

            btnSubmit.addEventListener('click', function() {
                validateForm()
                if (errorElements.length <= 0) {
                    btnSubmit.disabled = true
                    form.submit()
                }
            }, false)


            function validateForm() {
                var ERROR_NO_INPUT = '値を入力してください';
                var isValid = true
                errorElements = [];
                [].slice.call(formControlElements).forEach(function (formElement) {
                    formElement.value = sanitizeHtml(formElement.value)
                });
                [].slice.call(formControlElements).forEach(function (formElement) {
                    console.log(formElement.name);
                    formElement.classList.remove('is-invalid')
                    if (!formElement.classList.contains('required')) {
                        return
                    }
                    var elementName = formElement.getAttribute('name')
                    var elementVal = formElement.value
                    var elementType = formElement.getAttribute('type')
                    if (['radio','checkbox'].indexOf(elementType) >= 0) {
                        if (document.querySelectorAll('[name="' + elementName + '"]:checked').length <= 0) {
                            isValid = false
                            errorElements.push(formElement)
                        }

                    } else if (elementType == "email"){
                        var email_re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                        if (!email_re.test(elementVal)) {
                            isValid = false
                            errorElements.push(formElement)
                        }
                    } else {
                        if (elementVal == '') {
                            isValid = false
                            errorElements.push(formElement)
                        }
                    }

                    if(elementName == 'bank_account_number'){
                        var reg = new RegExp('^[0-9]+$');
                        if(!reg.test(elementVal)){
                            isValid = false
                            errorElements.push(formElement)
                        }
                    }

                    if(elementName == 'bank_account_holder'){
                        if(!wanakana.isKatakana(elementVal)){
                            isValid = false
                            errorElements.push(formElement)
                        }
                    }

                });

                        [].slice.call(errorElements).forEach(function (element) {
                    element.classList.add('is-invalid')
                })
                return isValid
            }
            function show(element)
            {
                element.style.display = "block";
            }
            function hide(element)
            {
                element.style.display = "none";
            }

            function goConfirmStep()
            {
                changeStep("confirm")
            }

            function showFormErrors()
            {
                event.preventDefault();
                event.stopPropagation();

                var errorElements = form.querySelectorAll('.is-invalid');
                if (errorElements.length > 0) {
                    errorElements[0].scrollIntoView({behavior: 'smooth', block: 'center'})
                }
            }

            function goInputStep()
            {
                changeStep("input")
            }

            function changeStep(new_step)
            {
                [].slice.call(steps).forEach(function (step) {
                    if (step.id == new_step) {
                        step.classList.add('active')
                    } else {
                        step.classList.remove('active')
                    }
                })
                current_step=new_step
            }

            function updataDataConfirmForm()
            {
                [].slice.call(formControlElements).forEach(function (element) {
                    var elementName = element.getAttribute('name')
                    if (elementName.includes('[]') === false) {
                        if (document.getElementById(elementName)) {
                            document.getElementById(elementName).innerHTML = ''
                        }
                    } else {
                        elementName = elementName.replace('[]','');
                        if (document.getElementById(elementName)) {
                            document.getElementById(elementName).innerHTML = '';
                        }
                    }
                });

                    [].slice.call(formControlElements).forEach(function (element) {
                    var elementName = element.getAttribute('name')
                    if ($(element).is(':radio')) {
                        var elementVal = $('input[name="wish_attend"]:checked').val();
                    } else {
                        var elementVal = element.value
                    }
                    if (elementName.includes('[]') === false) {
                        if (document.getElementById(elementName)) {
                            document.getElementById(elementName).innerHTML = elementVal
                        }
                    } else {
                        elementName = elementName.replace('[]','');
                        if (element.checked) {
                            if (document.getElementById(elementName)) {
                                document.getElementById(elementName).innerHTML += (elementVal + '<br>');
                            }
                        }
                    }
                })
            }



            function mapCheckboxToHidden(checkboxName, hiddenName, valueOnChecked, valueOnUnchecked) {
                var checkbox = document.querySelector('input[type="checkbox"][name="' + checkboxName + '"]')
                var hidden = document.querySelector('input[type="hidden"][name="' + hiddenName + '"]')
                if (checkbox !== null && hidden !== null) {
                    if (checkbox.checked) {
                        hidden.value = valueOnChecked
                    } else {
                        hidden.value = valueOnUnchecked
                    }

                    checkbox.addEventListener('change', function() {
                        if (this.checked) {
                            hidden.value = valueOnChecked
                        } else {
                            hidden.value = valueOnUnchecked
                        }
                    }, false)
                }
            }

            mapCheckboxToHidden('contract_detached_house_ckb', 'contract_detached_house', 'あり', 'なし')
            mapCheckboxToHidden('contract_detached_house_ckb_2', 'contract_detached_house_2', 'あり', 'なし')
            mapCheckboxToHidden('contractor_same_resident_ckb', 'contractor_same_resident', 'あり', 'なし')
            mapCheckboxToHidden('delegate_all_settlement_ckb', 'delegate_all_settlement', 'あり', 'なし')
            var contractDetachedHouseCkb = document.querySelector('input[type="checkbox"][name="contract_detached_house_ckb"]')
            var contractDetachedHouseCkb_2 = document.querySelector('input[type="checkbox"][name="contract_detached_house_ckb_2"]')
            var contractEstateNameInp = document.querySelector('input[name="contract_estate_name"]')
            var relocation_estate_name = document.querySelector('input[name="relocation_estate_name"]')
            var contractEstateRoomNumberInp = document.querySelector('input[name="contract_estate_room_number"]')
            var relocation_room_number = document.querySelector('input[name="relocation_room_number"]')
            if (contractDetachedHouseCkb.checked) {
                contractEstateNameInp.style.backgroundColor = "#e9ecef";
                contractEstateNameInp.disabled = true
                contractEstateNameInp.value = ''
                contractEstateNameInp.classList.remove('required')
                contractEstateRoomNumberInp.style.backgroundColor = "#e9ecef"
                contractEstateRoomNumberInp.disabled = true
                contractEstateRoomNumberInp.value = ''
                contractEstateRoomNumberInp.classList.remove('required')
            }
            contractDetachedHouseCkb.addEventListener("change", function () {
                if (contractDetachedHouseCkb.checked) {
                    contractEstateNameInp.style.backgroundColor = "#e9ecef";
                    contractEstateNameInp.disabled = true
                    contractEstateNameInp.value = ''
                    contractEstateNameInp.classList.remove('required')
                    contractEstateRoomNumberInp.style.backgroundColor = "#e9ecef"
                    contractEstateRoomNumberInp.disabled = true
                    contractEstateRoomNumberInp.value = ''
                    contractEstateRoomNumberInp.classList.remove('required')
                } else {
                    contractEstateNameInp.style.backgroundColor = "#fff";
                    contractEstateNameInp.removeAttribute('disabled')
                    contractEstateNameInp.classList.add('required')
                    contractEstateRoomNumberInp.style.backgroundColor = "#fff"
                    contractEstateRoomNumberInp.removeAttribute('disabled')
                    contractEstateRoomNumberInp.classList.add('required')
                }
            })


            if (contractDetachedHouseCkb_2.checked) {
                relocation_estate_name.style.backgroundColor = "#e9ecef";
                relocation_estate_name.disabled = true
                relocation_estate_name.value = ''
                relocation_estate_name.classList.remove('required')
                relocation_room_number.style.backgroundColor = "#e9ecef"
                relocation_room_number.disabled = true
                relocation_room_number.value = ''
                relocation_room_number.classList.remove('required')
            }
            contractDetachedHouseCkb_2.addEventListener("change", function () {
                if (contractDetachedHouseCkb_2.checked) {
                    relocation_estate_name.style.backgroundColor = "#e9ecef";
                    relocation_estate_name.disabled = true
                    relocation_estate_name.value = ''
                    relocation_estate_name.classList.remove('required')
                    relocation_room_number.style.backgroundColor = "#e9ecef"
                    relocation_room_number.disabled = true
                    relocation_room_number.value = ''
                    relocation_room_number.classList.remove('required')
                } else {
                    relocation_estate_name.style.backgroundColor = "#fff";
                    relocation_estate_name.removeAttribute('disabled')
                    relocation_estate_name.classList.add('required')
                    relocation_room_number.style.backgroundColor = "#fff"
                    relocation_room_number.removeAttribute('disabled')
                    relocation_room_number.classList.add('required')
                }
            })
        }, false)
    }
})();
function demo()
{
    var formControlElements = document.querySelectorAll('input, textarea, select');
        [].slice.call(formControlElements).forEach(function (element) {
        if (element.tagName == "SELECT") {
            element.selectedIndex = 1
        } else if (['radio', 'checkbox'].indexOf(element.getAttribute('type')) > -1) {
            document.querySelector('[name="' + element.getAttribute('name') + '"]').checked = true
        }
        else if (!element.value) {
            element.value = "test"
        }
    })
}