'use strict';

import {
    customError,
    getUrlWithParams,
    setEventInLocalStorage,
    setUserNotExistError,
    submitFormFetch,
    submitWithoutForm,
    toHex,
    validateSimpleForm,
} from './common/index.js';
import { swichFormListener } from './common/switchForm.js';
import { eventsType } from './enums/eventsType.enum.js';





const ecommerceForm = document.getElementById('ecommerceForm');
const ecommerceAlreadyAccountForm = document.getElementById('alreadyAccountForm');
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



const getUserByEmail = async () => {


    const url = './services/getRegisteredByEmail.php';
    const formData = new FormData(ecommerceAlreadyAccountForm);
    const userEmail = formData.get('email');


    try {

        const resp = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email: userEmail })
        });

        if (!resp.ok) {
            throw new Error(`Error try getUserByEmail: ${resp.status}`);
        }

        const userResponse = await resp.json();
        return userResponse;

    } catch (error) {
        console.error('Error in getUserByEmail:', error);

    }
}


const filterEvents = (events) => {
    return Object.entries(events)
        .filter(([eventName, eventValue]) => eventValue === 1)
        .map(([eventName, _]) => eventName);
}

const setMultipleEvents = (events) => {
    events.forEach(event => {
        setEventInLocalStorage(event, toHex(email));
    })
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

        ecommerceAlreadyAccountForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            if (!validateSimpleForm(ecommerceAlreadyAccountForm)) return;
            ecommerceAlreadyAccountForm.querySelector('button').classList.add('button--loading');

            const resp = await getUserByEmail();
            const events = filterEvents(resp);

            if (resp.email) {
                setMultipleEvents(events);
                redirectToRegisteredPage();
            } else {
                setUserNotExistError(ecommerceAlreadyAccountForm);
            }
            ecommerceAlreadyAccountForm.querySelector('button').classList.remove('button--loading');
        })

    });

}


activeFormListeners();
