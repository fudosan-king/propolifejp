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
    if (typeof Array.prototype.forEach != 'function') {
        Array.prototype.forEach = function (callback) {
            for (var i = 0; i < this.length; i++) {
                callback.apply(this, [this[i], i, this]);
            }
        };
    }
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
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
        [].slice.call(document.querySelectorAll('.steps li')).forEach(function (step) {
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
            var form = document.getElementById('form-bunjyo')
            var inputForm = form.querySelector('#input-form')
            var confirmForm = form.querySelector('#confirm-form')
            var steps =  document.querySelectorAll('.steps li')
            var current_step = 'input'
            var formControlElements = form.querySelectorAll('input, textarea, select')
            var errorElements = []

            var btnAutoFillCheck = document.getElementById('auto-fill-checked-box')
            var contactWaysCkbs = document.querySelectorAll('[name="contact_ways[]"]')

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

            contactWaysCkbs.forEach(function(contactWaysCkb) {
                contactWaysCkb.addEventListener('click', function(event) {
                    var targetCkbId = this.id
                    if (this.checked) {
                        document.querySelectorAll('[name="contact_ways[]"]:checked').forEach(function(checkedContactWayElement) {
                            if (checkedContactWayElement.id !== targetCkbId) {
                                checkedContactWayElement.checked = false
                            }
                        })
                    }
                })
            })

            function validateForm() {
                var ERROR_NO_INPUT = '値を入力してください';
                var isValid = true
                errorElements = [];
                [].slice.call(formControlElements).forEach(function (formElement) {
                    formElement.value = sanitizeHtml(formElement.value)
                });
                [].slice.call(formControlElements).forEach(function (formElement) {
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
                    var elementVal = element.value
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

            function changeStep(new_step)
            {
                [].slice.call(steps).forEach(function (step){
                    if (step.id == new_step) {
                        step.classList.add('active')
                   } else {
                        step.classList.remove('active')
                   }
                })
                current_step=new_step
            }
        }, false)
    }
})();
function demo()
{
    var formControlElements = document.querySelectorAll('input, textarea, select');
        [].slice.call(formControlElements).forEach(function (element){
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