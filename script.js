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

    // ===== KODE UNTUK HIGHLIGHT NAVBAR =====
    const navLinks = document.querySelectorAll('.nav-link');
    const allSections = document.querySelectorAll('.section');

    const highlightNav = (entries, scrollObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });
                const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                } // Karakter 'A' yang error sudah dihapus dari sini
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
        // Ganti ikon bars menjadi 'X' (opsional)
        const icon = menuIcon.querySelector('i');
        if (navMenu.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // Tutup menu mobile saat link di-klik
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

/* =======================================================
   KODE KONFIGURASI PARTICLES.JS DITAMBAHKAN DI SINI
   ======================================================= */

particlesJS('particles-js',
  {
    "particles": {
      "number": {
        "value": 80, // Jumlah partikel
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#00BFFF" // Warna partikel (sesuai aksen biru Anda)
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150, // Jarak untuk menggambar garis
        "color": "#00BFFF", // Warna garis (sesuai aksen biru Anda)
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2, // Kecepatan gerak partikel
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true, // EFEK HOVER (PENTING)
          "mode": "grab" // Mode "grab" akan menarik garis ke kursor
        },
        "onclick": {
          "enable": true, // Efek saat di-klik
          "mode": "push" // Mendorong partikel baru
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 140,
          "line_opacity": 1
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  }
);