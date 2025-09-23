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
                
                // Hapus .active dari semua link
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                // Tambahkan .active ke link yang sesuai
                const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    };

    const scrollObserver = new IntersectionObserver(highlightNav, {
        root: null,
        rootMargin: '-50% 0px -50% 0px', // Aktif saat section berada di tengah layar
        threshold: 0
    });

    allSections.forEach(section => {
        // Kita amati semua section termasuk profile
        scrollObserver.observe(section);
    });
    
    // (Tidak ada kode menu hamburger di versi ini)

}); // <-- Ini adalah penutup dari DOMContentLoaded