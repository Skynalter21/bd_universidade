// import axios from "axios";

const CreateForm = (function() {
    const Events = {
        CLICK: 'click',
        SUBMIT: 'submit',
    };

    class CreateForm {
        constructor(selector) {
            this.form = document.querySelector(`form[name='${selector}']`);

            if (this.form) {
                this.init();
                this._addEventListeners();
            }
        }

        init() {
            NodeList.prototype.fadeOut = function(time){
                processa(this, time, 0, 100);
            };
            HTMLElement.prototype.fadeOut = function(time){
                processa(this, time, 0, 100);
            };

            function processa(element, time, initial, end) {
                var increment, opc, intervalo;

                console.log(element);

                if (initial == 0) {
                    increment = 2;
                    element.style.display = "block";
                } else {
                    increment = -2;
                }

                opc = initial;

                intervalo = setInterval(function() {
                    if (opc == end) {
                        if (end == 0) {
                            element.style.display = "none";
                        }
                        clearInterval(intervalo);
                    } else {
                        opc += increment;
                        element.style.opacity = opc / 100;
                        element.style.filter = "alpha(opacity=" + opc + ")";
                    }
                }, time);
            }
        }

        serialize() {
            var i, j, form, obj = {};

            form = this.form;
            if(!form || form.nodeName !== "FORM"){
                return
            }
            
            for (i = form.elements.length-1; i >= 0; i--) {
                if (form.elements[i].name === "" || form.elements[i].name === undefined || form.elements[i].name === null) {
                    continue
                }
                
                switch (form.elements[i].nodeName) {
                    case "INPUT":
                        switch(form.elements[i].type) {
                            case "text":
                            case "hidden":
                            case "password": 
                            case "button":
                            case "reset":
                            case "submit":
                                obj[form.elements[i].name] = form.elements[i].value;
                                break;
                            case "checkbox":
                            case "radio":
                                if (form.elements[i].checked) {
                                    obj[form.elements[i].name] = form.elements[i].value;
                                }
                                break;
                            case "file":
                                break;
                        }
                        break;
                    case "TEXTAREA":
                        obj[form.elements[i].name] = form.elements[i].value;
                        break;
                    case "SELECT":
                        switch (form.elements[i].type) {
                            case "select-one":
                                obj[form.elements[i].name] = form.elements[i].value;
                                break;
                            case "select-multiple":
                                for (j = form.elements[i].options.length - 1; j >= 0; j--) {
                                    if (form.elements[i].options[j].selected) {
                                        obj[form.elements[i].name] = form.elements[i].options[j].value;
                                    }
                                }
                                break;
                        }
                        break;
                    case "BUTTON":
                        switch (form.elements[i].type) {
                            case "reset":
                            case "submit":
                            case "button":
                                obj[form.elements[i].name] = form.elements[i].value;
                                break;
                        }
                        break;
                    default:
                        break;
                }
            }
            return obj;
        };

        serializableUrl() {
            var form = this.serialize();

            if (Object.keys(form).length <= 0) {
                return this.form.action;
            }

            return this.form.action + "?" + encodeURIObject(form);
        }

        encodeURIObject(obj) {
            var params;
            
            params = obj.entries().map(
                item => encodeURIComponent(item[0] + "=" + item[1])
            );

            return params.join("&");
        }

        _addEventListeners() {
            var _this = this;
            this.form.onsubmit = function(e) {
                e.preventDefault();

                if (_this.form.method.toLowerCase() === 'post') {
                    axios.post(_this.form.action, _this.serialize()).then(function(response) {
                        _this.onSuccess(response.data);
                    }, function(error) {
                        _this.onError(error.response.data);
                    })
                } else if (_this.form.method.toLowerCase() === 'get') {
                    axios.get(_this.serializableUrl()).then(function(response) {
                        _this.onSuccess(response.data);
                    }, function(error) {
                        _this.onError(error.response.data);
                    })
                }
            }
        }

        alerts(type, message, duration = 3000) {
            var _this = this;

            if (type !== 'success' && type !== 'warning' && type !== 'error' ) {
                return;
            }

            if (type == 'error') {
                type = 'danger';
            }

            var alert = `<div class="alert alert-${type}" role="alert" style="display: block">${message}</div>`;
            this.form.innerHTML = alert + this.form.innerHTML;

            this.form.querySelectorAll('.alert').forEach(alert => {
                alert.fadeOut(duration);
            });

            setTimeout(function() {
                _this.form.querySelectorAll('.alert').forEach(alert => {
                    _this.form.removeChild(alert);
                })
            }, duration + 500);
        }

        onSuccess(response) {
            console.log(response);
            this.alerts('success', response.message);

            if (response.redirect) {
                location.replace(response.redirect);
            }
        }

        onError(error) {
            console.log(error);
            this.alerts('error', error.message);
        }
    }

    return CreateForm;
})();

export default CreateForm;