'use strict';

import {
    customError,
    getUrlWithParams,
    submitFormFetch,
    submitWithoutForm,
} from './common/index.js';



document.addEventListener('DOMContentLoaded', () => {

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
            const { fetchResp: resp } = await submitFormFetch(ecommerceForm, 'ecommerce');
            if (!resp.ok) throw new Error('Error en el servidor', resp?.status);

            redirectToRegisteredPage();
        } catch (error) {
            handleSubmissionError(error);
        }


    }

    if (ecommerceForm) {
        ecommerceForm.querySelector('button').addEventListener('click', submitForm);
    }

    const submitEvent = async (btn) => {
        btn.classList.add('button--loading');
        try {
            const { fetchResp: resp } = await submitWithoutForm('ecommerce');
            if (!resp.ok) throw new Error('Error en el servidor', resp?.status);

            btn.classList.remove('button--loading');
            redirectToRegisteredPage();
        } catch (error) {
            handleSubmissionError(error);
        }
    }

    if (ecommerceBtns.length > 0) {
        ecommerceBtns.forEach(btn => btn.addEventListener('click', () => { submitEvent(btn) }));
    }

});
