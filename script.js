// FILE: script.js

document.addEventListener('DOMContentLoaded', () => {

    // 1. Smooth scrolling untuk link navigasi (jika Anda ingin menambahkannya)
    // (Saat ini CSS 'scroll-behavior: smooth' sudah menanganinya,
    // tapi ini adalah cara JS jika diperlukan)

    // 2. Animasi Intersection Observer untuk 'reveal-fade'
    const revealElements = document.querySelectorAll('.reveal-fade');

    const observerOptions = {
        root: null, // relatif terhadap viewport
        rootMargin: '0px',
        threshold: 0.1 // 10% dari elemen harus terlihat
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Berhenti mengamati setelah terlihat
            }
        });
    }, observerOptions);

    // Amati setiap elemen
    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

});