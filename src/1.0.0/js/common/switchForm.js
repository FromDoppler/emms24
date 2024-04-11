
const swichFormListener = (form) => {
    const alreadyAccountForm = document.getElementById('alreadyAccountForm');
    const swichForm = () => {
        alreadyAccountForm.classList.toggle('dp--none');
        form.classList.toggle('dp--none');
    }
    const switchButton = document.getElementById('swith');
    switchButton.addEventListener('click', swichForm);
}
export { swichFormListener }
