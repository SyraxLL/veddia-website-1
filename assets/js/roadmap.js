/**
 * Roadmap Section - Corner-Based Stepped Path
 * Cards are positioned AT the corners of the path
 * Path: Right → Down → Left → Down → Right → Down...
 */

document.addEventListener('DOMContentLoaded', function () {
    const roadmapSection = document.querySelector('.roadmap-section');
    if (!roadmapSection) return;

    const roadmapContainer = document.querySelector('.roadmap-container');
    const roadmapSteps = document.querySelectorAll('.roadmap-step');

    if (!roadmapContainer || roadmapSteps.length === 0) return;

    // Only create SVG path on desktop
    if (window.innerWidth <= 768) {
        initMobileAnimation();
        return;
    }

    // Create SVG container
    const pathContainer = document.createElement('div');
    pathContainer.className = 'roadmap-path-container';

    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('class', 'roadmap-path-svg');
    svg.setAttribute('preserveAspectRatio', 'none');

    // Create gradient definition
    const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
    const gradient = document.createElementNS('http://www.w3.org/2000/svg', 'linearGradient');
    gradient.setAttribute('id', 'pathGradient');
    gradient.setAttribute('x1', '0%');
    gradient.setAttribute('y1', '0%');
    gradient.setAttribute('x2', '0%');
    gradient.setAttribute('y2', '100%');

    const stop1 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
    stop1.setAttribute('offset', '0%');
    stop1.setAttribute('stop-color', '#06b6d4');

    const stop2 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
    stop2.setAttribute('offset', '50%');
    stop2.setAttribute('stop-color', '#0891b2');

    const stop3 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
    stop3.setAttribute('offset', '100%');
    stop3.setAttribute('stop-color', '#0e7490');

    gradient.appendChild(stop1);
    gradient.appendChild(stop2);
    gradient.appendChild(stop3);
    defs.appendChild(gradient);
    svg.appendChild(defs);

    // Create path elements
    const pathBg = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    pathBg.setAttribute('class', 'roadmap-path-bg');

    const pathGlow = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    pathGlow.setAttribute('class', 'roadmap-path-glow');

    const pathProgress = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    pathProgress.setAttribute('class', 'roadmap-path-progress');

    svg.appendChild(pathBg);
    svg.appendChild(pathGlow);
    svg.appendChild(pathProgress);
    pathContainer.appendChild(svg);

    // Insert before roadmap-steps
    const stepsContainer = roadmapContainer.querySelector('.roadmap-steps');
    roadmapContainer.insertBefore(pathContainer, stepsContainer);

    let pathLength = 0;

    /**
     * Calculate corner-based stepped path
     * Pattern:
     * Card 1 (left) → path goes RIGHT, then DOWN to Card 2
     * Card 2 (right corner) → path goes LEFT, then DOWN to Card 3
     * Card 3 (left corner) → path goes RIGHT, then DOWN to Card 4
     * And so on...
     */
    function calculatePath() {
        const containerRect = roadmapContainer.getBoundingClientRect();
        const containerWidth = containerRect.width;

        // Define horizontal positions for left and right sides
        const leftX = containerWidth * 0.15;  // Left side position
        const rightX = containerWidth * 0.85; // Right side position
        const centerX = containerWidth * 0.5;  // Center for final step

        // Collect card vertical positions
        const cardData = [];

        roadmapSteps.forEach((step, index) => {
            const card = step.querySelector('.roadmap-card');
            if (!card) return;

            const cardRect = card.getBoundingClientRect();
            const stepRect = step.getBoundingClientRect();

            // Vertical center of each step relative to container
            const stepCenterY = (stepRect.top - containerRect.top) + (stepRect.height / 2);
            const stepBottomY = (stepRect.bottom - containerRect.top);

            const isLeft = step.classList.contains('step-left');
            const isRight = step.classList.contains('step-right');
            const isCenter = step.classList.contains('step-center');

            cardData.push({
                index,
                y: stepCenterY,
                bottomY: stepBottomY,
                isLeft,
                isRight,
                isCenter
            });
        });

        if (cardData.length < 2) return;

        // Build the stepped path
        // Start from first card, zigzag to each corner
        let pathD = '';
        let currentX = leftX; // Start at left (card 1)

        for (let i = 0; i < cardData.length; i++) {
            const current = cardData[i];
            const next = cardData[i + 1];

            if (i === 0) {
                // START at card 1's Y position, left side
                pathD = `M ${leftX} ${current.y}`;
            }

            if (next) {
                // Determine where next card is
                let nextX;
                if (next.isRight) {
                    nextX = rightX;
                } else if (next.isLeft) {
                    nextX = leftX;
                } else if (next.isCenter) {
                    nextX = centerX;
                }

                // HORIZONTAL: Go to next card's X position
                pathD += ` H ${nextX}`;

                // VERTICAL: Go down to next card's Y position
                pathD += ` V ${next.y}`;

                currentX = nextX;
            }
        }

        // Set path data
        pathBg.setAttribute('d', pathD);
        pathGlow.setAttribute('d', pathD);
        pathProgress.setAttribute('d', pathD);

        // Get total path length
        pathLength = pathProgress.getTotalLength();

        // Set up stroke-dasharray for animation
        pathProgress.style.strokeDasharray = pathLength;
        pathProgress.style.strokeDashoffset = pathLength;
        pathGlow.style.strokeDasharray = pathLength;
        pathGlow.style.strokeDashoffset = pathLength;

        // Update SVG viewBox
        const stepsRect = stepsContainer.getBoundingClientRect();
        const totalHeight = stepsRect.height + 50;
        svg.setAttribute('viewBox', `0 0 ${containerWidth} ${totalHeight}`);
        svg.style.height = totalHeight + 'px';
        svg.style.width = containerWidth + 'px';
    }

    /**
     * Animate path drawing and card appearance on scroll
     */
    function animateOnScroll() {
        if (pathLength === 0) return;

        const stepsRect = stepsContainer.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Calculate scroll progress
        const sectionTop = stepsRect.top;
        const sectionHeight = stepsRect.height;
        const triggerStart = windowHeight * 0.75;
        const triggerEnd = windowHeight * 0.25;

        // Progress from 0 to 1 as user scrolls through section
        const scrollProgress = (triggerStart - sectionTop) / (sectionHeight + triggerStart - triggerEnd);
        const clampedProgress = Math.max(0, Math.min(1, scrollProgress));

        // Apply easing to prevent slowdown at the end (easeOut curve)
        const easedProgress = 1 - Math.pow(1 - clampedProgress, 1.5);

        // Animate path: reduce dashoffset as progress increases
        const dashOffset = pathLength * (1 - easedProgress);
        pathProgress.style.strokeDashoffset = dashOffset;
        pathGlow.style.strokeDashoffset = dashOffset;

        // Calculate which segments are complete for card visibility
        const progressPerStep = 1 / roadmapSteps.length;

        roadmapSteps.forEach((step, index) => {
            if (index === 0) {
                // First card is ALWAYS visible - it's the starting point
                step.classList.add('visible');
            } else {
                // Other cards appear slightly BEFORE path reaches them
                // This creates a smoother visual flow
                const cardTrigger = ((index - 1) * progressPerStep) + (progressPerStep * 0.7);

                if (clampedProgress >= cardTrigger) {
                    step.classList.add('visible');
                }
            }
        });
    }

    /**
     * Mobile animation - simple vertical stack
     */
    function initMobileAnimation() {
        function checkVisibility() {
            const triggerPoint = window.innerHeight * 0.75;

            roadmapSteps.forEach((step) => {
                const stepRect = step.getBoundingClientRect();
                if (stepRect.top < triggerPoint) {
                    step.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', throttle(checkVisibility, 16), { passive: true });
        checkVisibility();
    }

    /**
     * Throttle utility
     */
    function throttle(func, limit) {
        let inThrottle;
        return function () {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    /**
     * Debounce utility for resize
     */
    function debounce(func, wait) {
        let timeout;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }

    // Initialize
    function init() {
        setTimeout(() => {
            calculatePath();
            animateOnScroll();
        }, 150);
    }

    // Event listeners
    window.addEventListener('scroll', throttle(animateOnScroll, 16), { passive: true });
    window.addEventListener('resize', debounce(() => {
        if (window.innerWidth <= 768) {
            pathContainer.style.display = 'none';
            initMobileAnimation();
        } else {
            pathContainer.style.display = 'block';
            calculatePath();
            animateOnScroll();
        }
    }, 250));

    // Run init
    init();

    // Recalculate after full page load
    window.addEventListener('load', () => {
        calculatePath();
        animateOnScroll();
    });
});
