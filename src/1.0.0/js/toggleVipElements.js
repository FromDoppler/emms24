import { eventsType } from "./enums/eventsType.enum.js";

const isEcommerceVipUser = () => {
    let localStorageEvents = localStorage.getItem('events');
    localStorageEvents = JSON.parse(localStorageEvents);
    return localStorageEvents.some(event => event === eventsType.ECOMMERCEVIP);
}


const toggleVipElements = () => {
    const vipElements = document.querySelectorAll('.hidden--vip, .show--vip');
    vipElements.forEach(element => {
        element.classList.add('toogle');
    })

}

const toggleVipEcommerceElements = () => {
    console.log('Called');
    const isEcommerceVip = isEcommerceVipUser();
    const academyBanner = document.getElementById('speacial-flikity');
    if (isEcommerceVip) {
        console.log('TOOGLE');
        toggleVipElements();
    } else {
        if (academyBanner) {
            academyBanner.style.display = 'none';
        }
    }
}

export { toggleVipEcommerceElements }
