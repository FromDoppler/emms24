'use strict';

import {
    customError,
    getUrlWithParams,
    submitFormFetch,
    submitWithoutForm,
} from './common/index.js';



document.addEventListener('DOMContentLoaded', () => {
    const digitalForm = document.getElementById('digitalForm');
    const digitalTrendsBtns = document.querySelectorAll('.digitalTrendsBtn');

    if (digitalForm) {
        const submitForm = async (e) => {

            e.preventDefault();

            await submitFormFetch(digitalForm, 'digital-trends24').then(({ fetchResp: resp }) => {
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

        digitalForm.querySelector('button').addEventListener('click', submitForm);
    }
    if (digitalTrendsBtns.length > 0) {
        const submitEvent = async (btn) => {
            btn.classList.add('button--loading');
            await submitWithoutForm('digital-trends24').then(({ fetchResp: resp }) => {
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
