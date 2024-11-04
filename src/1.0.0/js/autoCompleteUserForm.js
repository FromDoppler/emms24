import { searchUrlParam } from "./common/utm.js";


const FormAutoComplete = {
    getUserValues() {
        return {
            email: searchUrlParam('email'),
            name: searchUrlParam('name'),
            phone: searchUrlParam('phone'),
        }
    },
    completeForm() {
        const { email, phone, name } = this.getUserValues();
        const form = document.querySelector('form');
        if (!form) {
            console.error('No form found on the page.');
            return;
        };

        const inputs = form.querySelectorAll('input');

            inputs.forEach(input => {
                switch (input.name) {
                    case 'email':
                        input.value = email;
                        break;
                    case 'name':
                        input.value = name;
                        break;
                    case 'phone':
                        input.value = phone;
                        break;
                }
            });


    },
    init() {
        window.addEventListener('load', () => {
            this.completeForm();
        })
    }
};

FormAutoComplete.init();
