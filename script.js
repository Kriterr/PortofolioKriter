document.addEventListener('DOMContentLoaded', () => {
    // Fungsi untuk menambahkan kelas 'fade-in' saat elemen terlihat
    const fadeInOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    };

    // Buat observer
    const observer = new IntersectionObserver(fadeInOnScroll, {
        root: null,
        rootMargin: '0px',
        threshold: 0.3 // Elemen akan terlihat saat 30% dari bagiannya muncul di layar
    });

    // Ambil semua elemen section
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.classList.add('fade-in'); // Tambahkan kelas awal
        observer.observe(section);
    });
});