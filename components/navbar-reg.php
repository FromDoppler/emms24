<header class="emms__header">
  <div class="emms__container--lg emms__fade-in">
    <div class="emms__header__logo emms__header__logo--digital-trends">
      <a href="/registrado"><img src="src/img/logos/logo-emms.png" alt="Emms Digital Trends 2024"></a>
    </div>
    <a class="emms__header__nav--mb" id="btn-burger"></a>
    <nav class="emms__header__nav emms__header__nav--hidden" id="nav-mb">
      <ul class="emms__header__nav__menu" id="navMenu">
        <li><a href="/registrado">home</a></li>
        <li><a href="/digital-trends-registrado">digital trends</a></li>
        <li><a href="/sponsors">biblioteca de recursos</a></li>
        <li class="emms__header__nav__menu__dropdown"><a href="/ediciones-anteriores">Qué es el EMMS</a>
          <ul class="emms__header__nav__submenu">
            <li><a href="/ediciones-anteriores#sobre-emms">Sobre el EMMS</a></li>
            <li><a href="/ediciones-anteriores#ediciones-anteriores">Revive ediciones anteriores</a></li>
          </ul>
        </li>
        <li><a href="/sponsors-promo">sponsors</a></li>
      </ul>
    </nav>
  </div>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('#navMenu a');
    let activeFound = false;

    navLinks.forEach(link => {
      if (link.getAttribute('href') === currentPath || link.getAttribute('href') === currentPath.split('#')[0]) {
        link.classList.add('active');
        activeFound = true;
      } else if (link.getAttribute('href') !== '/' && currentPath.startsWith(link.getAttribute('href'))) {
        link.classList.add('active');
        activeFound = true;
      }
    });

    if (!activeFound) {
      document.querySelector('#navMenu a[href="/"]').classList.add('active');
    }
  });
</script>
