<div class="emms__calendar__tabs">
    <div class="emms__calendar__tab__list">
        <?php if ($digitalTrendsStates['isPre']) : ?>
            <button class="emms__calendar__tab" role="tab" aria-selected="true" id="day1">26 de Noviembre</button>
            <button class="emms__calendar__tab" role="tab" aria-selected="false" id="day2">27 de Noviembre</button>
        <?php endif ?>
        <?php if ($digitalTrendsStates['isLive']) : ?>
            <button class="emms__calendar__tab" role="tab" aria-selected="false" id="day1">26 de Noviembre - finalizado</button>
            <button class="emms__calendar__tab" role="tab" aria-selected="true" id="day2">27 de Noviembre</button>
        <?php endif ?>
        <?php if ($digitalTrendsStates['isPost'] || $digitalTrendsStates['isTransition']) : ?>
            <button class="emms__calendar__tab" role="tab" aria-selected="true" id="day1">26 de Noviembre - finalizado</button>
            <button class="emms__calendar__tab" role="tab" aria-selected="false" id="day2">27 de Noviembre - finalizado</button>
        <?php endif ?>
    </div>
    <?php
    include('showSpeakersByDay.php');
    ?>
</div>

<script>
    const tab = document.querySelector('.emms__calendar__tabs');
    const tabButtons = tab.querySelectorAll('[role="tab"]');
    const tabPanels = Array.from(tab.querySelectorAll('[role="tabpanel"]'));

    function tabClickHandler(e) {
        //Hide All Tabpane
        tabPanels.forEach(panel => {
            panel.hidden = 'true';
        });

        //Deselect Tab Button
        tabButtons.forEach(button => {
            button.setAttribute('aria-selected', 'false');
        });

        //Mark New Tab
        e.currentTarget.setAttribute('aria-selected', 'true');

        //Show New Tab
        const {
            id
        } = e.currentTarget;

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
</script>
