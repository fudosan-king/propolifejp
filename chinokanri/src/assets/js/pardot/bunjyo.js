(function() {
    'use strict';
    
    window.addEventListener('load', function() {
        var btnAgree = document.getElementById('btnAgree')
        var btnBack = document.getElementById('btnBack')
        var form = document.getElementById('form-bunjyo')
        var steps =  document.querySelectorAll('.steps li')
        var current_step = 'input'
        var formControlElements = form.querySelectorAll('input, textarea, select')
        var disabledElementArr = ['radio', 'checkbox']

        var btnAutoFillCheck = document.getElementById('auto-fill-checked-box')

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
    }, false)
})();
