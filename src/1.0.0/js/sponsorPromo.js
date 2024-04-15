'use strict';

import {
    customError,
    validateForm,
} from './common/index.js';
import { eventsType } from './enums/eventsType.enum.js';

document.addEventListener('click', (e) => {
    e = e || window.event;
    const target = e.target || e.srcElement;


    if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'emms__register-modal') {
        if (target.hasAttribute('data-target')) {
            const m_ID = target.getAttribute('data-target');
            const dataType = target.getAttribute('data-type');
            const sponsortType = document.getElementById('sponsorType');
            sponsortType.innerText = dataType;
            document.getElementById(m_ID).classList.add('open');
            document.querySelector('body').style.overflowY = 'hidden';
            e.preventDefault();
        }
    }

    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'emms__register-modal') || target.classList.contains('emms__register-modal')) {
        const modal = document.querySelector('[class="emms__register-modal open"]');
        modal.classList.remove('open');
        document.querySelector('body').style.overflowY = 'scroll';
        e.preventDefault();
    }


    const submitForm = async (e) => {
        //TODO: Terminar el registerSponsor flow y mapear el nombre

        e.preventDefault();
        const endPoint = './services/registerSponsor.php';
        const formData = new FormData(sponsorsPromoForm);
        const dialCode = document.querySelector('.iti__selected-dial-code').innerHTML;

        const sponsorData = {
            'name': formData.get('name'),
            'email': formData.get('email'),
            'company': formData.get('company'),
            'jobPosition': formData.get('jobPosition'),
            'phone': (formData.get('phone').trim() != '') ? dialCode + formData.get('phone') : null,
            'acceptPolicies': (formData.get('privacy') === 'true') ? true : null,
            'acceptPromotions': (formData.get('promotions') === 'true') ? true : null,
            'utm_source': (searchUrlParam('utm_source') === '') ? 'direct' : searchUrlParam('utm_source'),
            'utm_campaign': searchUrlParam('utm_campaign'),
            'utm_content': searchUrlParam('utm_content'),
            'utm_term': searchUrlParam('utm_term'),
            'utm_medium': searchUrlParam('utm_medium'),
            'origin': searchUrlParam('origin'),
            //TODO: Terminar agregar el tipo
            'type': fetchType,
        };
        const isValidForm = validateForm(sponsorsPromoForm);
        if (isValidForm) {
            sponsorsPromoForm.querySelector('button').classList.add('button--loading');
            try {
                const fetchResp = await fetch(endPoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(sponsorData),
                });
                return {
                    fetchResp, encodeEmail
                };
            } catch (error) {
                customError('Fetch error', error);
            }
            sponsorsPromoForm.querySelector('button').classList.remove('button--loading');
        }
    }
    const sponsorsPromoForm = document.getElementById('sponsorsPromoForm');
    sponsorsPromoForm.addEventListener('submit', submitForm);

});
