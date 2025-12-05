// ========================================
// MINIMAL 3D EFFECTS - Three.js (REBUILT)
// ========================================

// Hero Canvas - STARS ONLY
function initHero3D() {
    const canvas = document.getElementById('hero-canvas');
    if (!canvas) return;

    const scene = new THREE.Scene();
    // PURE BLACK background
    scene.background = new THREE.Color(0x000000);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 3.5;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        alpha: false,
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    // =========================================
    // 1. STARS (Background)
    // =========================================
    const starsGeometry = new THREE.BufferGeometry();
    const starsCount = 1500;
    const starsPos = new Float32Array(starsCount * 3);

    for (let i = 0; i < starsCount * 3; i++) {
        starsPos[i] = (Math.random() - 0.5) * 100;
    }
    starsGeometry.setAttribute('position', new THREE.BufferAttribute(starsPos, 3));

    const starsMaterial = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 0.15,
        transparent: true,
        opacity: 0.8,
        sizeAttenuation: true
    });
    const stars = new THREE.Points(starsGeometry, starsMaterial);
    scene.add(stars);

    // =========================================
    // ANIMATION
    // =========================================
    let mouseX = 0;
    let mouseY = 0;
    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX - windowHalfX) * 0.00005;
        mouseY = (e.clientY - windowHalfY) * 0.00005;
    });

    function animate() {
        requestAnimationFrame(animate);

        // Mouse Parallax for Stars
        stars.rotation.y -= 0.0001 + (mouseX * 0.1);
        stars.rotation.x += mouseY * 0.1;

        renderer.render(scene, camera);
    }
    animate();

    // Resize
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}

// Showcase Cube (Kept simple)
function initShowcase3D() {
    const container = document.getElementById('showcase-3d-container');
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
    camera.position.z = 4;
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    container.appendChild(renderer.domElement);

    const geo = new THREE.BoxGeometry(2, 2, 2);
    const mat = new THREE.MeshBasicMaterial({ color: 0x8B5CF6, wireframe: true });
    const cube = new THREE.Mesh(geo, mat);
    scene.add(cube);

    function animate() {
        requestAnimationFrame(animate);
        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;
        renderer.render(scene, camera);
    }
    animate();
}

document.addEventListener('DOMContentLoaded', () => {
    initHero3D();
    initShowcase3D();
});
