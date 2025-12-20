/**
 * Why Gloddia Section - Scroll Card Switcher
 * Only one card visible at a time, switches based on scroll position
 */

document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('.why-gloddia-section');
    if (!section) return;

    const wrapper = section.querySelector('.why-gloddia-wrapper');
    const cards = section.querySelectorAll('.wg-big-card');
    const dots = section.querySelectorAll('.wg-dot');

    if (!wrapper || cards.length === 0) return;

    // Mobile check - disable scroll switching
    if (window.innerWidth <= 992) {
        cards.forEach(card => card.classList.add('active'));
        return;
    }

    const totalCards = cards.length;
    let currentCard = -1;

    function updateActiveCard() {
        const rect = wrapper.getBoundingClientRect();
        const scrollTop = -rect.top;
        const scrollHeight = wrapper.offsetHeight - window.innerHeight;

        // Calculate progress 0 to 1
        let progress = scrollTop / scrollHeight;
        progress = Math.max(0, Math.min(0.9999, progress));

        // Which card should be active
        const cardIndex = Math.floor(progress * totalCards);

        if (cardIndex !== currentCard) {
            // Update cards
            cards.forEach((card, i) => {
                if (i === cardIndex) {
                    card.classList.add('active');
                } else {
                    card.classList.remove('active');
                }
            });

            // Update dots
            dots.forEach((dot, i) => {
                if (i === cardIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });

            currentCard = cardIndex;
        }
    }

    // Scroll listener
    let ticking = false;
    window.addEventListener('scroll', function () {
        if (!ticking) {
            requestAnimationFrame(function () {
                updateActiveCard();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // Initial update
    updateActiveCard();

    // Dot click
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const scrollTo = wrapper.offsetTop + (index / totalCards) * (wrapper.offsetHeight - window.innerHeight);
            window.scrollTo({
                top: scrollTo,
                behavior: 'smooth'
            });
        });
    });

    // Handle resize
    window.addEventListener('resize', function () {
        if (window.innerWidth <= 992) {
            cards.forEach(card => card.classList.add('active'));
        } else {
            updateActiveCard();
        }
    });
});
