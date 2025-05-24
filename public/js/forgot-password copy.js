let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);



const email_reg = /\S+@\S+\.\S+/;

function checkEmail(data) {
    return email_reg.test(data);
}

function checkPassword(str, len = 8) {

    if (str.length >= len && str[0] === str[0].toUpperCase()) {
        return true;
    }

    return false;
}

class ForgotPassword {
    constructor(form) {

        this.form = form;
        this.inputs = this.form.querySelectorAll('input');

        this.preloader = document.querySelector('.forgot-preloader');
        this.forgotSuccess = document.querySelector('.forgot-success');
        this.messageError = this.form.querySelector('.message-errors');
        this.currentFormGroup = null;
        this.btnsShowPass = this.form.querySelectorAll('.pass-btn');
        this.btnSend = this.form.querySelector('.btn-send');
        this.inputPassword = this.form.querySelector('#password-forgot');

        this.value = null;

        this.flagSend = false;
        this.objSendData = {};
        this.url = this.form.getAttribute('action');
        this.objData = null;

        this.init();
    }
    init() {
        console.log('init ForgotPassword');
        console.log(this.btnsShowPass);
        this.defaultForm();
        this.events();
    }
    defaultForm() {

        this.preloader.style.display = 'none';
        this.forgotSuccess.style.display = 'none';

        this.messageError.style.display = 'none';
        this.messageError.innerHTML = '';

        this.inputs.forEach(input => {

            this.currentFormGroup = input.parentNode;

            this.currentFormGroup.classList.remove('error');
        })

        // this.btnSend.setAttribute('disabled', '');

    }

    events() {
        this.form.addEventListener('submit', e => {
            e.preventDefault();
        });

        this.inputs.forEach(input => {
            input.addEventListener('input', () => {


                this.value = input.value.trim();
                this.currentFormGroup = input.parentNode;

                if (input.name === 'email') {

                    // if (this.value.length > 0) {
                    //     this.currentFormGroup.classList.remove('error');
                    // }

                    if (checkEmail(this.value)) {
                        this.currentFormGroup.classList.remove('error');
                        this.currentFormGroup.classList.add('valid');
                    } else {
                        this.currentFormGroup.classList.remove('valid');
                    }

                } else if (input.name === 'password' || input.name === 'password_confirmation') {

                    // if (this.value.length > 0) {
                    // }

                    if (checkPassword(this.value)) {
                        this.currentFormGroup.classList.remove('error');
                        this.currentFormGroup.classList.add('valid');
                    } else {
                        this.currentFormGroup.classList.remove('valid');
                    }
                }

            });



        });

        if (this.btnsShowPass.length > 0) {
            this.btnsShowPass.forEach(btn => {
                btn.addEventListener('click', () => {

                    btn.classList.toggle('show');
                    const input = btn.parentNode.querySelector('input');
                    if (btn.closest('.show')) {
                        input.setAttribute('type', 'text');
                    } else {
                        input.setAttribute('type', 'password');

                    }

                });
            })
        }

        this.btnSend.addEventListener('click', () => {
            this.validation();


            if (this.flagSend) {
                console.log('input valid... send');
                this.defaultForm();
                this.preloader.style.display = 'flex';
                this.getFormData();
                this.send();
            }
        })
    }
    validation() {

        this.flagSend = true;

        this.inputs.forEach(input => {
            this.value = input.value.trim();
            this.currentFormGroup = input.parentNode;

            if (input.name === 'email') {


                if (checkEmail(this.value)) {
                    this.currentFormGroup.classList.remove('error');
                    this.currentFormGroup.classList.add('valid');
                } else {
                    this.flagSend = false;
                    this.currentFormGroup.classList.remove('valid');
                    this.currentFormGroup.classList.add('error');
                }

            } else if (input.name === 'password') {

                if (checkPassword(this.value)) {
                    this.currentFormGroup.classList.remove('error');
                    this.currentFormGroup.classList.add('valid');
                } else {
                    this.flagSend = false;
                    this.currentFormGroup.classList.remove('valid');
                    this.currentFormGroup.classList.add('error');
                }
            } else if (input.name === 'password_confirmation') {
                if (checkPassword(this.value) && this.inputPassword.value == this.value) {
                    this.currentFormGroup.classList.remove('error');
                    this.currentFormGroup.classList.add('valid');
                } else {
                    this.flagSend = false;
                    this.currentFormGroup.classList.remove('valid');
                    this.currentFormGroup.classList.add('error');
                }
            }

        });

    }


    getFormData() {
        this.objSendData = {};
        this.inputs.forEach(input => {
            this.objSendData[input.name] = input.value;
        });

        console.log('this.objSendData: ', this.objSendData);

    }


    resSuccess() {
        if (this.objData['forgot']) {
            this.preloader.style.display = 'none';
            this.form.style.display = 'none';
            this.forgotSuccess.style.display = 'flex';
        }
    }


    resError() {

        console.log('resError()');




        if (this.objData['status'] == 429 || this.objData['status'] == 419 || this.objData['status'] == 422) {

            this.preloader.style.display = 'none';

            this.messageError.innerHTML = '';
            this.messageError.innerHTML = this.objData.message;
            this.messageError.style.display = 'flex';

            return;
        }


        this.errors = this.objData['errors'];

        if (this.errors) {
            this.html = '';
            for (const key in this.errors) {
                this.html += `<span>${this.errors[key]}</span>`;

                console.log(this.errors[key]);

            }

            this.messageError.innerHTML = this.html;
            this.preloader.style.display = 'none';
            this.messageError.style.display = 'flex';


            this.inputs.forEach(input => {
                const name = input.name;
                if (this.errors[name]) {
                    this.currentFormGroup = input.parentNode;
                    this.currentFormGroup.classList.remove('valid');
                    this.currentFormGroup.classList.add('error');
                }
            })
        }

        this.messageError.style.display = 'flex';
    }


    send() {
        if (this.flagSend) {

            this.flagSend = false;

            this.objData = null;


            const options = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(this.objSendData)

            };

            fetch(this.url, options)
                .then(async response => {
                    if (!response.ok) {
                        if (response.status === 422) {
                            const errorData = await response.json();
                            throw { status: 422, errors: errorData };
                        } else {
                            if (response.status === 419) {
                                const errorData = await response.json();
                                throw { status: 419, errors: errorData };
                            }
                            if (response.status === 429) {
                                const errorData = await response.json();
                                throw { status: 429, errors: errorData };
                            }
                            throw new Error(`HTTP error, status = ${response.status}`);
                        }
                    }

                    return response.json();
                })
                .then(result => {

                    this.objData = result;

                    if (result.status == 'ok') {
                        this.resSuccess();
                    } else {
                        this.resError();

                    }

                    this.flagSend = true;

                })
                .catch(error => {


                    if (error.status === 419 || error.status === 429 || error.status === 422) {
                        this.objData = {
                            'status': error.status,
                            'message': error.errors.message,
                        }
                        console.log(this.objData);

                        this.resError();
                    }

                    console.error('Fetch error:', error);

                    this.flagSend = true;
                });

        }
    }
}

const forgotForm = document.querySelector('#forgot-form');
if (forgotForm) {
    new ForgotPassword(forgotForm);
}