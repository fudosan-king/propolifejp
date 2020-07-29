(function() {
    'use strict';
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
        
    }, false)
    window.addEventListener('load', function() {
        var btnAgree = document.getElementById('btnAgree')
        var btnBack = document.getElementById('btnBack')
        var form = document.getElementById('form-kaiyaku')
        var steps =  document.querySelectorAll('.steps li')
        var current_step = 'input'
        var datepickerElements = document.querySelectorAll('input.datepicker')
        var formControlElements = form.querySelectorAll('input, textarea, select')
        var disabledElementArr = ['radio', 'checkbox']

        Array.from(datepickerElements).forEach((datepickerElement) => {
            datepickerElement.addEventListener('click', function() {
                if (datepickerElement.dataset.isMounted != 'true') {
                    $(datepickerElement).datepicker({
                        language: 'ja',
                        autoclose: true
                    });
                    $(datepickerElement).datepicker('show')
                    datepickerElement.dataset.isMounted = 'true'
                }
            })
        })

        btnBack.addEventListener('click', function() {
            if (current_step == "confirm") {
                new Promise(function(resolve, reject) {
                    goInputStep()
                    enableInputForm()
                    showFormErrors()
                    resolve()
                }).then(function() {
                    btnBack.style.display = 'none'
                    btnAgree.style.maxWidth = '40%'
                }) 
            }
        }, false)

        btnAgree.addEventListener('click', function() {
            if (current_step == "input") {
                if (form.checkValidity() == true) {
                    new Promise(function(resolve,reject) {
                        goConfirmStep()
                        resolve()
                    }).then(() => {
                        btnBack.style.display = 'inline-block'
                        btnAgree.style.maxWidth = '40%' 
                    })
                }
                else {
                    showFormErrors()
                }
                form.classList.add('was-validated');
            } else if (current_step == "confirm") {
                if (form.checkValidity() == true) {
                    new Promise(function(resolve, reject) {
                        enableInputForm()
                        resolve()
                    }).then(() => {
                        btnAgree.disabled = true
                        form.submit()  
                    })
                } else {
                    goInputStep()
                    enableInputForm()
                    btnBack.style.display = 'none'
                    btnAgree.style.removePropert('max- width')
                }
            }
            form.classList.add('was-validated');
        }, false)

        function goConfirmStep()
        {
            var disableFormPromis = new Promise(function(resolve, reject) {   
                disableInputForm()
                resolve()
            }).then(function() {
                changeStep("confirm")
                document.getElementById('form-title').scrollIntoView({behavior: "smooth"}) 
            })
        }
        function showFormErrors()
        {
            event.preventDefault();
            event.stopPropagation();

            var errorElements = form.querySelectorAll('input:invalid, textarea:invalid, select:invalid');
            if (errorElements.length > 0) {
                errorElements[0].scrollIntoView({behavior: 'smooth', block: 'center'}) 
            }
        }

        function goInputStep()
        {
            changeStep("input")
        }

        function disableInputForm()
        {
            Array.from(formControlElements).forEach((element) => {
                if (disabledElementArr.indexOf(element.type) > -1 || element.tagName == "SELECT") {
                    element.disabled = true
                } else {
                    element.readOnly = true
                }
            })
        }

        function enableInputForm()
        {
            Array.from(formControlElements).forEach((element) => {
                element.removeAttribute('disabled')
                element.removeAttribute('readonly')
            }) 
        }

        function changeStep(new_step) 
        {
            Array.from(steps).forEach((step) => {
                if (step.id == new_step) {
                    step.classList.add('active')
               } else {
                    step.classList.remove('active')
               }
            })
            current_step=new_step
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
        mapCheckboxToHidden('contractor_same_resident_ckb', 'contractor_same_resident', 'あり', 'なし')
        mapCheckboxToHidden('delegate_all_settlement_ckb', 'delegate_all_settlement', 'あり', 'なし')
    }, false)
})();
