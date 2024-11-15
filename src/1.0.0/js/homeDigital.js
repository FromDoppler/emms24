'use strict';

import {
    customError,
    getUrlWithParams,
    submitFormFetch,
    submitWithoutForm,
    validateForm,
} from './common/index.js';
import { alreadyAccountListener, swichFormListener } from './common/switchForm.js';
import { eventsType } from './enums/eventsType.enum.js';

const digitalForm = document.getElementById('digitalForm');
const digitalWithoutForms = document.querySelectorAll('.digitalWithoutForm');
const digitalTrendsBtns = document.querySelectorAll('.digitalTrendsBtn');
const submitForm = async (e) => {

    e.preventDefault();
    const isValidForm = validateForm(digitalForm);
    if (isValidForm) {
        await submitFormFetch(digitalForm, eventsType.DIGITALTRENDS).then(({ fetchResp: resp }) => {
            if (!resp.ok) throw new Error('Server error on digital fetch', resp?.status);

            window.location.href = getUrlWithParams('/digital-trends-registrado');
            if (window.location.pathname === '/sponsors') {
                window.location.href = getUrlWithParams('/sponsors-registrado');
            }
        })
            .catch((error) => {
                customError('Digital post error', error);
            });

    }
}

const submitDtWithoutForm = (digitalWithoutForm) => {
    digitalWithoutForm.classList.add('button--loading');
    submitWithoutForm(eventsType.DIGITALTRENDS).then(() => {
        window.location.href = getUrlWithParams('/digital-trends-registrado');
    });
}

document.addEventListener('DOMContentLoaded', () => {

    if (digitalForm) {
        digitalForm.querySelector('button').addEventListener('click', submitForm);
    }
    if (digitalTrendsBtns.length > 0) {
        const submitEvent = async (btn) => {
            btn.classList.add('button--loading');
            await submitWithoutForm(eventsType.DIGITALTRENDS).then(({ fetchResp: resp }) => {
                btn.classList.remove('button--loading');
                if (!resp.ok) throw new Error('Server error on digital fetch', resp?.status);

                window.location.href = getUrlWithParams('/digital-trends-registrado');
                if (window.location.pathname === '/sponsors') {
                    window.location.href = getUrlWithParams('/sponsors-registrado');
                }
            });
        }
        digitalTrendsBtns.forEach(btn => btn.addEventListener('click', () => { submitEvent(btn) }));
    }

});

const activeFormListeners = () => {


    swichFormListener(digitalForm);

    document.addEventListener('DOMContentLoaded', () => {

        if (digitalForm) {
            digitalForm.querySelector('button').addEventListener('click', submitForm);
        }
        if (digitalTrendsBtns.length > 0) {
            digitalTrendsBtns.forEach(btn => btn.addEventListener('click', () => { submitEvent(btn) }));
        }
        if (digitalWithoutForms) {
            digitalWithoutForms.forEach((digitalWithoutForm) => {
                digitalWithoutForm.addEventListener('click', () => {
                    submitDtWithoutForm(digitalWithoutForm)
                })
            })
        }
        alreadyAccountListener();
    });

}


activeFormListeners();
