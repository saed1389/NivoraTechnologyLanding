// ========================================
// MODERN JAVASCRIPT - NIVORA TECHNOLOGY
// ========================================

// 1. SAFE GLOBAL STATE
// We use 'window.nivora' to store variables so we don't redeclare them
if (typeof window.nivora === 'undefined') {
    window.nivora = {
        cursor: null,
        cursorDot: null,
        isGlobalInitialized: false
    };
}

// 2. INITIALIZE PAGE SPECIFIC ELEMENTS
function initModernUI() {
    // RE-SELECT CURSOR ELEMENTS (Crucial for Livewire Navigation)
    // We update the properties on our global object
    window.nivora.cursor = document.getElementById('custom-cursor');
    window.nivora.cursorDot = document.getElementById('cursor-dot');

    initMobileMenu();
    initCursorHoverEffects();
    initAnimations();
    initStats();
    init3DCards();
    initRippleEffect();
    checkScroll();
}

function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        // Clone button to remove old listeners
        const newBtn = btn.cloneNode(true);
        if (btn.parentNode) {
            btn.parentNode.replaceChild(newBtn, btn);
        }

        // Toggle Menu
        newBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('hidden');
            updateMenuIcon(newBtn, menu);
        });

        // Close when clicking links inside
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                updateMenuIcon(newBtn, menu);
            });
        });
    }
}

function updateMenuIcon(btn, menu) {
    const icon = btn.querySelector('i');
    if (icon) {
        if (menu.classList.contains('hidden')) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        } else {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    }
}

function initCursorHoverEffects() {
    // We use the global window.nivora.cursor variable here
    const interactiveElements = document.querySelectorAll('a, button, input, textarea, .hover-trigger');

    if (window.nivora.cursor) {
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                window.nivora.cursor.style.transform += ' scale(1.5)';
                window.nivora.cursor.style.borderColor = '#005FAF';
                window.nivora.cursor.style.backgroundColor = 'rgba(0, 95, 175, 0.1)';
            });
            el.addEventListener('mouseleave', () => {
                window.nivora.cursor.style.transform = window.nivora.cursor.style.transform.replace(' scale(1.5)', '');
                window.nivora.cursor.style.borderColor = '#0072CE';
                window.nivora.cursor.style.backgroundColor = 'transparent';
            });
        });
    }
}

function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('section, .animate-on-scroll').forEach(section => {
        if (section.style.opacity !== '1') {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(section);
        }
    });
}

function initStats() {
    const statsSections = document.querySelectorAll('#home, #about');
    if (statsSections.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.font-display');
                counters.forEach(counter => {
                    if (!counter.dataset.counted) {
                        const textContent = counter.textContent.replace(/[^0-9]/g, '');
                        const target = parseInt(textContent);
                        if (!isNaN(target) && target > 0) {
                            counter.dataset.counted = 'true';
                            animateCounter(counter, target);
                        }
                    }
                });
            }
        });
    }, { threshold: 0.5 });

    statsSections.forEach(section => observer.observe(section));
}

function animateCounter(element, target) {
    let current = 0;
    const duration = 2000;
    const increment = target / (duration / 16);
    const suffix = element.textContent.replace(/[0-9]/g, '');

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + suffix;
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current) + suffix;
        }
    }, 16);
}

function init3DCards() {
    const cards = document.querySelectorAll('.glass-morphism-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 25;
            const rotateY = (centerX - x) / 25;
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
}

function initRippleEffect() {
    const buttons = document.querySelectorAll('.btn-primary-modern, .btn-secondary-modern');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');

            const existing = button.querySelector('.ripple');
            if (existing) existing.remove();

            button.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });
}

function checkScroll() {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.pageYOffset > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
}

// ========================================
// GLOBAL LISTENERS (Run Once)
// ========================================

// We check if we have already initialized global listeners to prevent duplication/errors
if (!window.nivora.isGlobalInitialized) {

    // 1. Global Mouse Movement (Uses window.nivora.cursor)
    document.addEventListener('mousemove', (e) => {
        if (window.nivora.cursor && window.nivora.cursorDot) {
            window.nivora.cursor.style.transform = `translate(${e.clientX - 20}px, ${e.clientY - 20}px)`;
            window.nivora.cursorDot.style.transform = `translate(${e.clientX - 4}px, ${e.clientY - 4}px)`;
        }
    });

    // 2. Global "Click Outside" to Close Menu
    document.addEventListener('click', (e) => {
        const menu = document.getElementById('mobile-menu');
        const btn = document.getElementById('mobile-menu-btn');

        if (menu && btn && !menu.classList.contains('hidden')) {
            if (!menu.contains(e.target) && !btn.contains(e.target)) {
                menu.classList.add('hidden');
                updateMenuIcon(btn, menu);
            }
        }
    });

    // 3. Scroll Listeners
    window.addEventListener('scroll', checkScroll);
    window.addEventListener('scroll', () => {
        const blobs = document.querySelectorAll('.blob');
        const scrolled = window.pageYOffset;
        blobs.forEach((blob, index) => {
            const speed = 0.2 + (index * 0.1);
            blob.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // 4. Inject Ripple CSS
    const style = document.createElement('style');
    style.textContent = `
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }
        @keyframes ripple-animation {
            to { transform: scale(4); opacity: 0; }
        }
    `;
    document.head.appendChild(style);

    console.log('%c🇪🇪 Nivora Technology', 'font-size: 32px; font-weight: bold; background: linear-gradient(135deg, #0072CE, #0095E8); -webkit-background-clip: text; color: transparent;');

    // Mark as initialized so this block doesn't run again
    window.nivora.isGlobalInitialized = true;
}

// Init on Load
document.addEventListener('DOMContentLoaded', initModernUI);

// Init on Navigation (Livewire 4)
document.addEventListener('livewire:navigated', initModernUI);
