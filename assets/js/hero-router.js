/**
 * GLODDIA SERVICE ROUTER HERO LOGIC
 * Handles category switching and dynamic content updates for the hero-plus section.
 */

const heroData = {
    'webtasarim': {
        title: 'E-Ticaret & Web',
        valueText: 'Sepet akışı + ödeme güveni + performans',
        flow: ['Ziyaret', 'Ürün', 'Sepet', 'Ödeme'],
        kpis: [
            { label: 'CTR', value: '3.8%' },
            { label: 'CPC', value: '₺4.12' },
            { label: 'Dönüşüm', value: '2.1%' },
            { label: 'ROAS', value: '4.6x' }
        ],
        bundle: 'Önerilen: Google Reklam + SEO'
    },
    'dijitalpazarlama': {
        title: 'Lead & Performans',
        valueText: 'Niyet odaklı trafik + form kalitesi + ölçüm',
        flow: ['Arama', 'İlan', 'Landing', 'Form'],
        kpis: [
            { label: 'CTR', value: '5.1%' },
            { label: 'CPC', value: '₺6.40' },
            { label: 'Lead', value: '78/hf' },
            { label: 'CPA', value: '₺92' }
        ],
        bundle: 'Önerilen: Landing Page + CRM'
    },
    'sosyalmedya': {
        title: 'Topluluk & Marka',
        valueText: 'Etkileşim + takipçi sadakati + marka bilinirliği',
        flow: ['Keşfet', 'İçerik', 'Profil', 'Takip'],
        kpis: [
            { label: 'Erişim', value: '150K' },
            { label: 'Etkileşim', value: '%8.4' },
            { label: 'Video', value: '45K' },
            { label: 'Büyüme', value: '+%12' }
        ],
        bundle: 'Önerilen: Video Prodüksiyon + Reklam'
    },
    'grafiktasarim': {
        title: 'Görsel Kimlik',
        valueText: 'Kurumsal hafıza + profesyonel algı + güven',
        flow: ['Brief', 'Eskiz', 'Tasarım', 'Baskı'],
        kpis: [
            { label: 'Memnuniyet', value: '%100' },
            { label: 'Revize', value: 'Min.' },
            { label: 'Teslim', value: '3 Gün' },
            { label: 'Format', value: 'Tümü' }
        ],
        bundle: 'Önerilen: Kurumsal Kimlik Kitapçığı'
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const catButtons = document.querySelectorAll('.cat-btn');
    const consoleTitle = document.getElementById('console-title');
    const valueLine = document.getElementById('value-line');
    const flowContainer = document.getElementById('flow-container');
    const kpiContainer = document.getElementById('kpi-container');

    // Default active
    updateConsole('webtasarim');

    catButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // UI Active State
            catButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Update Function
            const key = btn.dataset.key;
            updateConsole(key);
        });
    });

    function updateConsole(key) {
        const data = heroData[key];

        // 1. Update Texts with Fade
        animateTextChange(consoleTitle, data.title);
        animateTextChange(valueLine, data.valueText);

        // 2. Update Flow Steps
        flowContainer.innerHTML = '';
        data.flow.forEach((step, index) => {
            const div = document.createElement('div');
            div.className = `flow-step ${index === data.flow.length - 1 ? 'active' : ''}`;
            div.textContent = step;
            div.style.animation = `fadeIn 0.3s ease forwards ${index * 0.1}s`;
            flowContainer.appendChild(div);
        });

        // 3. Update KPIs
        kpiContainer.innerHTML = '';
        data.kpis.forEach((kpi, index) => {
            const chip = document.createElement('div');
            chip.className = 'kpi-chip';
            chip.innerHTML = `
                <span class="kpi-val">${kpi.value}</span>
                <span class="kpi-lbl">${kpi.label}</span>
            `;
            chip.style.animation = `fadeIn 0.4s ease forwards ${index * 0.1}s`;
            kpiContainer.appendChild(chip);
        });
    }

    function animateTextChange(element, newText) {
        element.style.opacity = 0;
        setTimeout(() => {
            element.textContent = newText;
            element.style.opacity = 1;
        }, 200);
    }

    // 4. DIAGNOSTIC BAR LOGIC (Added)
    const diagBtn = document.querySelector('.btn-diag');
    const diagInput = document.querySelector('.diag-input');

    if (diagBtn && diagInput) {
        diagBtn.addEventListener('click', () => {
            const domain = diagInput.value.trim();

            if (!domain) {
                // Shake effect for error
                diagInput.style.border = '1px solid #ef4444';
                diagInput.placeholder = 'Lütfen site adresi girin...';
                setTimeout(() => {
                    diagInput.style.border = '1px solid #E2E8F0';
                }, 2000);
                return;
            }

            // Loading State
            const originalText = diagBtn.textContent;
            diagBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Teşhis Sürüyor...';
            diagBtn.style.opacity = '0.7';
            diagBtn.disabled = true;

            // Simulate Analysis (2s delay)
            setTimeout(() => {
                diagBtn.innerHTML = '<i class="fas fa-check"></i> Tamamlandı!';
                diagBtn.style.background = '#10b981'; // Success Green

                setTimeout(() => {
                    // Redirect to contact with pre-filled param
                    window.location.href = `contact.php?analysis=${encodeURIComponent(domain)}`;
                }, 800);
            }, 2000);
        });

        // Enter key support
        diagInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') diagBtn.click();
        });
    }
});

// Add Keyframes for JS animations
const styleSheet = document.createElement("style");
styleSheet.innerText = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(styleSheet);
