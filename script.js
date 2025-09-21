// Animasi fade-in saat scroll
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section, .card, .exp");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("fade-in");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  sections.forEach(sec => observer.observe(sec));
});
