document.addEventListener('DOMContentLoaded', function () {
    const timelineSection = document.querySelector('.timeline-section');
    const timelineProgress = document.querySelector('.timeline-progress');
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineDots = document.querySelectorAll('.timeline-dot');

    if (!timelineSection) return;

    // 1. Scroll Animation for Cards (Intersection Observer)
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const cardObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const card = entry.target.querySelector('.timeline-card');
                const dot = entry.target.querySelector('.timeline-dot');

                if (card) card.classList.add('visible');
                if (dot) dot.classList.add('active');

                // Unobserve after animating in
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    timelineItems.forEach(item => {
        cardObserver.observe(item);
    });

    // 2. Timeline Progress Bar Animation
    function updateProgress() {
        const sectionRect = timelineSection.getBoundingClientRect();
        const start = sectionRect.top;
        const height = sectionRect.height;
        const windowHeight = window.innerHeight;

        // Calculate how much of the section has been scrolled past the center of the viewport
        // We want the line to fill as we scroll down

        let percentage = 0;

        // Start filling when section top hits middle of screen
        const triggerPoint = windowHeight / 2;

        if (start < triggerPoint) {
            const scrolled = triggerPoint - start;
            percentage = (scrolled / height) * 100;
        }

        // Clamp between 0 and 100
        percentage = Math.max(0, Math.min(100, percentage));

        if (timelineProgress) {
            timelineProgress.style.height = `${percentage}%`;
        }

        // Trigger burst on dots as line passes them
        timelineItems.forEach(item => {
            const dot = item.querySelector('.timeline-dot');
            if (!dot) return;

            const itemTop = item.offsetTop;
            const itemHeight = item.offsetHeight;
            // Calculate where this item is relative to the section height (approximate)
            // A better way is to check if the progress height (in pixels) has passed the dot's position

            const progressPixelHeight = (percentage / 100) * height;

            // The dot is roughly in the middle of the item vertically, or we can use offsetTop
            // But offsetTop is relative to parent. The axis is absolute 0 to bottom.
            // So item.offsetTop is the distance from top of section.

            // We want to trigger when progress line passes the dot
            // Add a small buffer so it triggers just as it hits
            if (progressPixelHeight >= itemTop && progressPixelHeight <= itemTop + 50) {
                if (!dot.classList.contains('pulse-burst') && !dot.classList.contains('burst-fired')) {
                    dot.classList.add('pulse-burst');
                    dot.classList.add('burst-fired'); // Ensure it only fires once per scroll down (optional, or remove to allow re-fire)
                }
            }

            // Optional: Reset if scrolled back up?
            if (progressPixelHeight < itemTop) {
                dot.classList.remove('burst-fired');
                dot.classList.remove('pulse-burst');
            }
        });
    }

    window.addEventListener('scroll', () => {
        requestAnimationFrame(updateProgress);
    });

    // 3. 3D Tilt Effect (Desktop Only)
    if (window.matchMedia("(min-width: 992px)").matches) {
        const cards = document.querySelectorAll('.timeline-card');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                // Calculate rotation based on mouse position
                // Center is (0,0)
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -3; // Max 3 deg
                const rotateY = ((x - centerX) / centerX) * 3; // Max 3 deg

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
                // Note: The hover effect in CSS might conflict slightly with inline styles, 
                // but since we set transform directly here, it overrides.
                // We reset to scale(1) but CSS hover is scale(1.02). 
                // To fix, we can remove the inline style on mouseleave to let CSS take over if still hovering (unlikely on leave)
                // or just reset to identity.
                card.style.transform = '';
            });
        });
    }
});
