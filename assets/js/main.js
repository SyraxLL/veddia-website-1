document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true
        });
    }

    // Sticky Header
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.classList.remove('scrolled');
            navbar.style.background = 'rgba(255, 255, 255, 0.9)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
        }
    });

    // Dropdown Hover on Desktop
    const dropdowns = document.querySelectorAll('.dropdown');
    const mediaQuery = window.matchMedia('(min-width: 992px)');

    function handleDropdownHover() {
        if (mediaQuery.matches) {
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseenter', () => {
                    const toggle = dropdown.querySelector('.dropdown-toggle');
                    const menu = dropdown.querySelector('.dropdown-menu');
                    if (toggle && menu) {
                        toggle.classList.add('show');
                        menu.classList.add('show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });

                dropdown.addEventListener('mouseleave', () => {
                    const toggle = dropdown.querySelector('.dropdown-toggle');
                    const menu = dropdown.querySelector('.dropdown-menu');
                    if (toggle && menu) {
                        toggle.classList.remove('show');
                        menu.classList.remove('show');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        }
    }

    handleDropdownHover();
    window.addEventListener('resize', handleDropdownHover);

    // Mobile Menu Toggle
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', () => {
            navbarCollapse.classList.toggle('show');
        });
    }

    // Mobile Dropdown Toggles
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth < 992) {
                e.preventDefault();
                const parent = toggle.closest('.dropdown');
                const menu = parent.querySelector('.dropdown-menu');
                if (menu) {
                    menu.classList.toggle('show');
                    toggle.setAttribute('aria-expanded', menu.classList.contains('show'));
                }
            }
        });
    });

});
