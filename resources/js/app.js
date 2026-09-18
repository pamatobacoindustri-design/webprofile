import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

// ─── AOS Init ──────────────────────────────────────────
AOS.init({
    duration: 700,
    once: true,
    easing: 'ease-out-cubic',
    offset: 60,
});

// ─── Navbar Scroll Behavior ─────────────────────────────
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) {
            navbar.classList.add('navbar-scrolled');
            navbar.classList.remove('navbar-transparent');
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.classList.add('navbar-transparent');
        }
    });
}

// ─── Mobile Menu Toggle ─────────────────────────────────
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const icon = menuBtn.querySelector('svg');
        icon.classList.toggle('rotate-90');
    });
}

// ─── Smooth scroll for anchor links ─────────────────────
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// ─── Counter Animation ──────────────────────────────────
const counters = document.querySelectorAll('[data-counter]');
const countObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.dataset.counter);
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(current).toLocaleString('id-ID');
            }, 16);
            countObserver.unobserve(el);
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => countObserver.observe(counter));
