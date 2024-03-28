// Tabs

const tab = document.querySelector('.emms__calendar__tabs');
const tabButtons = tab.querySelectorAll('[role="tab"]');
const tabPanels = Array.from(tab.querySelectorAll('[role="tabpanel"]'));
function tabClickHandler(e) {
	//Hide All Tabpane
	tabPanels.forEach(panel => {
		panel.hidden = 'true';
	});

	//Deselect Tab Button
	tabButtons.forEach( button => {
		button.setAttribute('aria-selected', 'false');
	});

	//Mark New Tab
	e.currentTarget.setAttribute('aria-selected', 'true');

	//Show New Tab
	const { id } = e.currentTarget;

	const currentTab = tabPanels.find(
		panel => panel.getAttribute('aria-labelledby') === id
	);

	currentTab.hidden = false;
}

tabButtons.forEach(button => {
	button.addEventListener('click', tabClickHandler);
})


// Show/Hide Biography Speaker

const btnsBio = document.querySelectorAll(".emms__calendar__list__item__card__btn-bio");
const btnBioHide = document.querySelectorAll(".emms__calendar__list__item__card__btn-bio-hide");
const classBioShow = "emms__calendar__list__item__card__bio--show";

btnsBio.forEach(btn => {
    btn.addEventListener("click", () => {
        hideAllBios();
        btn.parentNode.querySelector(".bio-speaker").classList.toggle(classBioShow);
    });
})

btnBioHide.forEach(btnHide => {
    btnHide.addEventListener("click", () => {
        btnHide.parentNode.classList.toggle(classBioShow);
    });
})

function hideAllBios() {
    document.querySelectorAll(".bio-speaker").forEach(bio => {
        bio.classList.remove(classBioShow);
    })
}
