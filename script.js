document.addEventListener('DOMContentLoaded', () => {
    
    // ===== FUNGSI FADE-IN ON SCROLL =====
    const fadeInOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(fadeInOnScroll, {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    });

    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        observer.observe(section);
    });

    // ===== KODE UNTUK HIGHLIGHT NAVBAR =====
    const navLinks = document.querySelectorAll('.nav-link');
    const allSections = document.querySelectorAll('.section');

    const highlightNav = (entries, scrollObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
a             });
                const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    };

    const scrollObserver = new IntersectionObserver(highlightNav, {
        root: null,
        rootMargin: '-50% 0px -50% 0px', 
        threshold: 0
    });

    allSections.forEach(section => {
        if (section.id !== 'profile') {
            scrollObserver.observe(section);
        }
    });
    
    // ===== KODE UNTUK MENU HAMBURGER (MOBILE) =====
    const menuIcon = document.getElementById('menu-icon');
    const navMenu = document.getElementById('nav-menu');

    menuIcon.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        const icon = menuIcon.querySelector('i');
        if (navMenu.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                const icon = menuIcon.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });

}); // <-- Ini adalah penutup dari DOMContentLoaded