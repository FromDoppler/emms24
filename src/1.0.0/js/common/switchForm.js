import { eventsType } from "../enums/eventsType.enum.js";
import { toHex } from "./decodeEmail.js";
import { setUserNotExistError, validateSimpleForm } from "./formsValidators.js";
import { setEventInLocalStorage } from "./submitForm.js";
import { getUrlWithParams } from "./utm.js";

const ecommerceAlreadyAccountForm = document.getElementById('alreadyAccountForm');

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

const redirectToRegisteredPage = () => {
    window.location.href = getUrlWithParams('/ecommerce-registrado');
    if (window.location.pathname === '/sponsors') {
        window.location.href = getUrlWithParams('/sponsors-registrado');
    }
}

const localEventsMap = {
    'ecommerce': eventsType.ECOMMERCE,
    'ecommerce-vip': eventsType.ECOMMERCEVIP,
    'digital-trends': eventsType.DIGITALTRENDS,
    'digital-trends-vip': eventsType.DIGITALTRENDSVIP
}


const filterEvents = (events) => {
    return Object.entries(events)
        .filter(([eventName, eventValue]) => eventValue === 1)
        .map(([eventName, _]) => localEventsMap[eventName]);
}

const setMultipleEvents = (events, userEmail) => {
    events.forEach(event => {
        setEventInLocalStorage(event, toHex(userEmail));
    })
}

const swichFormListener = (form) => {
    const alreadyAccountForm = document.getElementById('alreadyAccountForm');
    const swichForm = () => {
        alreadyAccountForm.classList.toggle('dp--none');
        form.classList.toggle('dp--none');
    }
    const switchButton = document.getElementById('swith');
    switchButton.addEventListener('click', swichForm);
}

const alreadyAccountListener = () => {
    ecommerceAlreadyAccountForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!validateSimpleForm(ecommerceAlreadyAccountForm)) return;
        ecommerceAlreadyAccountForm.querySelector('button').classList.add('button--loading');

        const resp = await getUserByEmail();
        const events = filterEvents(resp);
        const userEmail = resp.email;
        if (userEmail) {
            setMultipleEvents(events, userEmail);
            redirectToRegisteredPage();
        } else {
            setUserNotExistError(ecommerceAlreadyAccountForm);
        }
        ecommerceAlreadyAccountForm.querySelector('button').classList.remove('button--loading');
    })
}


export { swichFormListener, alreadyAccountListener }
