document.addEventListener('DOMContentLoaded', function () {
    // --- Slider Logic ---
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.prev-slide');
    const nextBtn = document.querySelector('.next-slide');
    let currentSlide = 0;
    let slideInterval;
    const intervalTime = 6500; // 6.5s

    function showSlide(index) {
        // Wrap around
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }

        // Remove active class from all
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Auto play
    function startSlideTimer() {
        slideInterval = setInterval(nextSlide, intervalTime);
    }

    function stopSlideTimer() {
        clearInterval(slideInterval);
    }

    // Event Listeners
    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopSlideTimer();
            startSlideTimer();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopSlideTimer();
            startSlideTimer();
        });
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            stopSlideTimer();
            startSlideTimer();
        });
    });

    // Pause on hover over slider container
    const sliderContainer = document.querySelector('.hero-slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopSlideTimer);
        sliderContainer.addEventListener('mouseleave', startSlideTimer);
    }

    // Initialize
    if (slides.length > 0) {
        startSlideTimer();
    }

    // --- Parallax Effect for Mockup ---
    const heroSection = document.querySelector('.hero-premium-kurumsal');
    const mockupContainer = document.querySelector('.mockup-container');

    if (heroSection && mockupContainer && window.matchMedia('(min-width: 992px)').matches) {
        heroSection.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            // Calculate rotation values (small range)
            const rotateX = (y - 0.5) * 10; // -5 to 5 degrees
            const rotateY = (x - 0.5) * -10; // 5 to -5 degrees

            mockupContainer.style.transform = `translateY(-6px) rotate3d(1, -1, 0, 6deg) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        heroSection.addEventListener('mouseleave', () => {
            // Reset to default hover state or base state
            mockupContainer.style.transform = '';
        });
    }
});
