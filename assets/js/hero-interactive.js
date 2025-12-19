/**
 * HERO INTERACTIVE FEATURES
 * - Typing Effect
 * - Animated Counters
 * - Mouse Parallax
 * - Floating Icons Orbit
 */

document.addEventListener('DOMContentLoaded', function () {

    // ========================================
    // 1. TYPING EFFECT
    // ========================================
    const typingElement = document.querySelector('.typing-text');
    if (typingElement) {
        const text = typingElement.getAttribute('data-text') || typingElement.textContent;
        typingElement.textContent = '';
        typingElement.style.borderRight = '2px solid var(--dw-accent)';

        let charIndex = 0;
        function typeChar() {
            if (charIndex < text.length) {
                typingElement.textContent += text.charAt(charIndex);
                charIndex++;
                setTimeout(typeChar, 80);
            } else {
                // Blink cursor after typing complete
                typingElement.style.animation = 'blink-cursor 0.7s infinite';
            }
        }

        // Start after a small delay
        setTimeout(typeChar, 500);
    }

    // ========================================
    // 2. ANIMATED COUNTERS
    // ========================================
    const counters = document.querySelectorAll('.counter-value');

    const countUp = (el) => {
        const target = parseInt(el.getAttribute('data-count')) || 0;
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                el.textContent = target;
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current);
            }
        }, 16);
    };

    // Use IntersectionObserver for scroll trigger
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    entry.target.classList.add('counted');
                    countUp(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // Mouse Parallax Effect - REMOVED by user request

    // ========================================
    // 4. FLOATING ICONS ORBIT
    // ========================================
    const orbitContainer = document.querySelector('.orbit-container');
    if (orbitContainer) {
        const icons = orbitContainer.querySelectorAll('.orbit-icon');
        const totalIcons = icons.length;

        icons.forEach((icon, index) => {
            const angle = (360 / totalIcons) * index;
            icon.style.setProperty('--orbit-delay', `-${(index / totalIcons) * 20}s`);
            icon.style.setProperty('--orbit-angle', `${angle}deg`);
        });
    }

    // ========================================
    // 5. BUTTON RIPPLE EFFECT
    // ========================================
    document.querySelectorAll('.dw-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            const rect = btn.getBoundingClientRect();
            const ripple = document.createElement('span');
            ripple.className = 'btn-ripple';
            ripple.style.left = `${e.clientX - rect.left}px`;
            ripple.style.top = `${e.clientY - rect.top}px`;
            btn.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });

});

// Cursor blink animation
const style = document.createElement('style');
style.textContent = `
    @keyframes blink-cursor {
        0%, 100% { border-right-color: var(--dw-accent); }
        50% { border-right-color: transparent; }
    }
    .btn-ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,0.4);
        transform: scale(0);
        animation: ripple-effect 0.6s ease-out;
        pointer-events: none;
    }
    @keyframes ripple-effect {
        to { transform: scale(4); opacity: 0; }
    }
`;
document.head.appendChild(style);
