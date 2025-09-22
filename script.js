// Kode Intersection Observer Anda yang sudah ada
document.addEventListener('DOMContentLoaded', () => {
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

    // ===== KODE BARU UNTUK HIGHLIGHT NAVBAR =====
    const navLinks = document.querySelectorAll('.nav-link');
    const allSections = document.querySelectorAll('.section');

    const highlightNav = (entries, scrollObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Dapatkan ID dari section yang terlihat (cth: "about")
                const id = entry.target.getAttribute('id');
                
                // Hapus kelas 'active' dari semua link
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                // Temukan link yang sesuai (cth: href="#about") dan tambahkan 'active'
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
        // Jangan amati section profile untuk highlight
        if (section.id !== 'profile') {
            scrollObserver.observe(section);
        }
    });
    // ===== AKHIR KODE BARU =====
});