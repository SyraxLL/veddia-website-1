/**
 * MASSIVE PARTICLE NETWORK - 600 Particles
 * No stars, pure network visualization
 */

const canvas = document.getElementById('hero-canvas');
const ctx = canvas.getContext('2d');

let width, height;
let mouseX = 0, mouseY = 0;
let targetMouseX = 0, targetMouseY = 0;

// Resize handler
function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width;
    canvas.height = height;
}
window.addEventListener('resize', resize);
resize();

// Mouse tracking
canvas.addEventListener('mousemove', (e) => {
    targetMouseX = e.clientX;
    targetMouseY = e.clientY;
});

// Smooth mouse update
function updateMouse() {
    mouseX += (targetMouseX - mouseX) * 0.05;
    mouseY += (targetMouseY - mouseY) * 0.05;
}

// Particle Class
class Particle {
    constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * 0.5;
        this.vy = (Math.random() - 0.5) * 0.5;
        this.radius = Math.random() * 2 + 1;
        this.opacity = Math.random() * 0.5 + 0.3;
        this.hue = Math.random() * 60 + 180; // Blue to cyan
    }

    update() {
        this.x += this.vx;
        this.y += this.vy;

        // Bounds
        if (this.x < 0 || this.x > width) this.vx *= -1;
        if (this.y < 0 || this.y > height) this.vy *= -1;

        // Mouse attraction
        const dx = mouseX - this.x;
        const dy = mouseY - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < 150) {
            this.x += dx * 0.01;
            this.y += dy * 0.01;
        }

        // Button attraction
        attractionPoints.forEach(point => {
            const pdx = point.x - this.x;
            const pdy = point.y - this.y;
            const pdist = Math.sqrt(pdx * pdx + pdy * pdy);
            if (pdist < 300) {
                this.x += pdx * point.strength * 0.02;
                this.y += pdy * point.strength * 0.02;
            }
        });
    }

    draw() {
        ctx.fillStyle = `hsla(${this.hue}, 80%, 60%, ${this.opacity})`;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fill();

        // Glow
        ctx.fillStyle = `hsla(${this.hue}, 80%, 60%, ${this.opacity * 0.3})`;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius * 3, 0, Math.PI * 2);
        ctx.fill();
    }
}

// Create 250 particles
const particles = [];
for (let i = 0; i < 250; i++) {
    particles.push(new Particle());
}

// Draw connections
function drawConnections() {
    for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const dist = Math.sqrt(dx * dx + dy * dy);

            if (dist < 150) {
                const opacity = (1 - dist / 150) * 0.5;
                const gradient = ctx.createLinearGradient(
                    particles[i].x, particles[i].y,
                    particles[j].x, particles[j].y
                );
                gradient.addColorStop(0, `hsla(${particles[i].hue}, 80%, 60%, ${opacity})`);
                gradient.addColorStop(1, `hsla(${particles[j].hue}, 80%, 60%, ${opacity})`);

                ctx.strokeStyle = gradient;
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(particles[i].x, particles[i].y);
                ctx.lineTo(particles[j].x, particles[j].y);
                ctx.stroke();
            }
        }
    }
}

// Button attraction points
let attractionPoints = [];

// Track button clicks
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn-space-1, .btn-space-2, .btn-gradient');

    buttons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const rect = btn.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;

            attractionPoints.push({
                x: centerX,
                y: centerY,
                strength: 0.3,
                life: 120
            });
        });
    });
});

// Update attraction points
function updateAttractionPoints() {
    attractionPoints = attractionPoints.filter(point => {
        point.life--;
        point.strength *= 0.98;
        return point.life > 0;
    });
}

// Animation loop
function animate() {
    ctx.fillStyle = 'rgba(0, 0, 0, 1)';
    ctx.fillRect(0, 0, width, height);

    updateMouse();
    updateAttractionPoints();

    // Update particles
    particles.forEach(particle => particle.update());

    // Draw network
    drawConnections();

    // Draw particles
    particles.forEach(particle => particle.draw());

    requestAnimationFrame(animate);
}

animate();
