'use strict';

import {
    customError,
    getUrlWithParams,
    submitFormFetch,
    submitWithoutForm,
} from './common/index.js';
import { alreadyAccountListener, swichFormListener } from './common/switchForm.js';
import { eventsType } from './enums/eventsType.enum.js';



const ecommerceForm = document.getElementById('ecommerceForm');
const ecommerceBtns = document.querySelectorAll('.ecommerceBtn');

const redirectToRegisteredPage = () => {
    window.location.href = getUrlWithParams('/ecommerce-registrado');
    if (window.location.pathname === '/sponsors') {
        window.location.href = getUrlWithParams('/sponsors-registrado');
    }
}

const handleSubmissionError = (error) => {
    customError('Error en la solicitud', error);
}


const submitForm = async (e) => {

    e.preventDefault();

    try {
        const { fetchResp: resp } = await submitFormFetch(ecommerceForm, eventsType.ECOMMERCE);
        if (!resp.ok) throw new Error('Error en el servidor', resp?.status);

        redirectToRegisteredPage();
    } catch (error) {
        handleSubmissionError(error);
    }


}



const submitEvent = async (btn) => {
    btn.classList.add('button--loading');
    try {
        const { fetchResp: resp } = await submitWithoutForm(eventsType.ECOMMERCE);
        if (!resp.ok) throw new Error('Error en el servidor', resp?.status);

        btn.classList.remove('button--loading');
        redirectToRegisteredPage();
    } catch (error) {
        handleSubmissionError(error);
    }
}





const activeFormListeners = () => {


    swichFormListener(ecommerceForm);

    document.addEventListener('DOMContentLoaded', () => {

        if (ecommerceForm) {
            ecommerceForm.querySelector('button').addEventListener('click', submitForm);
        }
        if (ecommerceBtns.length > 0) {
            ecommerceBtns.forEach(btn => btn.addEventListener('click', () => { submitEvent(btn) }));
        }

        alreadyAccountListener();

    });

}


activeFormListeners();
