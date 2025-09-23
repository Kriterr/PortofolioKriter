// script.js
document.addEventListener('DOMContentLoaded', () => {

    // Gunakan Intersection Observer untuk animasi fade-in saat scroll
    const cards = document.querySelectorAll('.card');

    const observerOptions = {
        root: null, // relative to the viewport
        rootMargin: '0px',
        threshold: 0.1 // 10% dari kartu harus terlihat
    };

    const observerCallback = (entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Tambahkan delay kecil untuk efek staggered (muncul satu per satu)
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100); // delay 100ms per kartu
                
                // Berhenti mengamati kartu ini setelah animasinya jalan
                observer.unobserve(entry.target);
            }
        });
    };

    const cardObserver = new IntersectionObserver(observerCallback, observerOptions);

    // Amati setiap kartu
    cards.forEach(card => {
        cardObserver.observe(card);
    });

    console.log('Portfolio script loaded. Observing portfolio cards.');
});