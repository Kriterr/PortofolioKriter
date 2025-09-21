// Smooth scroll for navigation links
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    let target = document.querySelector(this.getAttribute('href'));
    if(target){
      window.scrollTo({
        top: target.offsetTop - 55,
        behavior: 'smooth'
      });
    }
  });
});

// Navbar shadow on scroll
window.addEventListener('scroll', function() {
  const nav = document.querySelector('nav');
  if(window.scrollY > 10){
    nav.style.boxShadow = "0 2px 12px rgba(36,37,130,0.08)";
  } else {
    nav.style.boxShadow = "none";
  }
});