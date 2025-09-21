// Simple fade-in animation on scroll
document.addEventListener("DOMContentLoaded", function () {
    const fadeEls = document.querySelectorAll(".portfolio-card");
    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fade-in");
                }
            });
        },
        { threshold: 0.15 }
    );
    fadeEls.forEach(el => observer.observe(el));
});