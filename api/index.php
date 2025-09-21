<?php
require_once 'data.php';
$portfolio = getPortfolioData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($portfolio['personal']['name']) ?> - Portfolio</title>
    <meta name="description" content="<?= htmlspecialchars($portfolio['personal']['bio']) ?>">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="loading-spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo"><?= htmlspecialchars($portfolio['personal']['name']) ?></a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="mobile-toggle" id="mobileToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Hi, I'm <?= htmlspecialchars($portfolio['personal']['name']) ?></h1>
                <p class="hero-subtitle"><?= htmlspecialchars($portfolio['personal']['subtitle']) ?></p>
                <p class="hero-bio"><?= htmlspecialchars($portfolio['personal']['bio']) ?></p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                        View My Work
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i>
                        Get In Touch
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?= htmlspecialchars($portfolio['personal']['avatar']) ?>" alt="<?= htmlspecialchars($portfolio['personal']['name']) ?>" class="hero-avatar">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">Get to know me better</p>
            <div class="about-content">
                <div class="about-grid">
                    <div class="about-text">
                        <p><?= htmlspecialchars($portfolio['personal']['bio']) ?></p>
                        <p>I'm passionate about creating digital experiences that make a difference. With expertise in both frontend and backend development, I love turning complex problems into simple, beautiful solutions.</p>
                        <div class="about-stats">
                            <div class="stat">
                                <h3>5+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat">
                                <h3><?= count($portfolio['projects']) ?>+</h3>
                                <p>Projects Completed</p>
                            </div>
                            <div class="stat">
                                <h3>50+</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section" id="skills">
        <div class="container">
            <h2 class="section-title">Skills & Expertise</h2>
            <p class="section-subtitle">Technologies and tools I work with</p>
            <div class="skills-grid">
                <?php foreach ($portfolio['skills'] as $skill): ?>
                <div class="skill-card fade-in">
                    <div class="skill-header">
                        <h3 class="skill-name"><?= htmlspecialchars($skill['name']) ?></h3>
                        <span class="skill-percentage"><?= $skill['level'] ?>%</span>
                    </div>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" data-width="<?= $skill['level'] ?>%"></div>
                    </div>
                    <div class="skill-items">
                        <?php foreach ($skill['items'] as $item): ?>
                        <span class="skill-item"><?= htmlspecialchars($item) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">Some of my recent work</p>
            <div class="projects-grid">
                <?php foreach ($portfolio['projects'] as $project): ?>
                <div class="project-card scale-in">
                    <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="project-image">
                    <div class="project-content">
                        <h3 class="project-title"><?= htmlspecialchars($project['title']) ?></h3>
                        <p class="project-description"><?= htmlspecialchars($project['description']) ?></p>
                        <div class="project-tech">
                            <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="tech-tag"><?= htmlspecialchars($tech) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <?php if (!empty($project['github'])): ?>
                            <a href="<?= htmlspecialchars($project['github']) ?>" class="project-link" target="_blank" rel="noopener">
                                <i class="fab fa-github"></i>
                                Code
                            </a>
                            <?php endif; ?>
                            <?php if (!empty($project['live'])): ?>
                            <a href="<?= htmlspecialchars($project['live']) ?>" class="project-link" target="_blank" rel="noopener">
                                <i class="fas fa-external-link-alt"></i>
                                Live Demo
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="section" id="experience">
        <div class="container">
            <h2 class="section-title">Work Experience</h2>
            <p class="section-subtitle">My professional journey</p>
            <div class="timeline">
                <?php foreach ($portfolio['experience'] as $exp): ?>
                <div class="timeline-item fade-in">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-position"><?= htmlspecialchars($exp['position']) ?></h3>
                        <h4 class="timeline-company"><?= htmlspecialchars($exp['company']) ?></h4>
                        <p class="timeline-period"><?= htmlspecialchars($exp['period']) ?></p>
                        <p class="timeline-description"><?= htmlspecialchars($exp['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-title">Let's Work Together</h2>
            <p class="section-subtitle">Ready to bring your ideas to life</p>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item fade-in">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><?= htmlspecialchars($portfolio['personal']['email']) ?></p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p><?= htmlspecialchars($portfolio['personal']['phone']) ?></p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p><?= htmlspecialchars($portfolio['personal']['location']) ?></p>
                        </div>
                    </div>
                    <div class="social-links">
                        <?php foreach ($portfolio['social'] as $social): ?>
                        <a href="<?= htmlspecialchars($social['url']) ?>" class="social-link" target="_blank" rel="noopener">
                            <i class="<?= htmlspecialchars($social['icon']) ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <form class="contact-form scale-in" id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($portfolio['personal']['name']) ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        // DOM Elements
        const loading = document.getElementById('loading');
        const navbar = document.getElementById('navbar');
        const mobileToggle = document.getElementById('mobileToggle');
        const navLinks = document.getElementById('navLinks');
        const scrollTop = document.getElementById('scrollTop');
        const contactForm = document.getElementById('contactForm');

        // Loading screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                loading.classList.add('fade-out');
            }, 1000);
        });

        // Mobile navigation toggle
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
                scrollTop.classList.add('visible');
            } else {
                navbar.classList.remove('scrolled');
                scrollTop.classList.remove('visible');
            }
        });

        // Scroll to top
        scrollTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Active navigation link
        const sections = document.querySelectorAll('.section, .hero');
        const navLinksArray = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinksArray.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.fade-in, .scale-in, .timeline-item').forEach(el => {
            observer.observe(el);
        });

        // Animate skill progress bars
        const skillBars = document.querySelectorAll('.skill-progress-bar');
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target;
                    const width = progressBar.getAttribute('data-width');
                    setTimeout(() => {
                        progressBar.style.width = width;
                    }, 500);
                }
            });
        }, observerOptions);

        skillBars.forEach(bar => {
            skillObserver.observe(bar);
        });

        // Contact form handling
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Simple form validation
            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                alert('Thank you for your message! I\'ll get back to you soon.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            
            if (hero) {
                hero.style.transform = `translateY(${rate}px)`;
            }
        });

        // Add typing effect to hero title
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            
            type();
        }

        // Initialize typing effect after page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                const heroTitle = document.querySelector('.hero-title');
                const originalText = heroTitle.textContent;
                typeWriter(heroTitle, originalText, 50);
            }, 1500);
        });

        // Add particle animation
        function createParticle() {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: fixed;
                width: 4px;
                height: 4px;
                background: linear-gradient(45deg, #6366f1, #10b981);
                border-radius: 50%;
                pointer-events: none;
                z-index: -1;
                opacity: 0.7;
            `;
            
            particle.style.left = Math.random() * window.innerWidth + 'px';
            particle.style.top = window.innerHeight + 'px';
            
            document.body.appendChild(particle);
            
            const animation = particle.animate([
                {
                    transform: 'translateY(0px) rotate(0deg)',
                    opacity: 0.7
                },
                {
                    transform: `translateY(-${window.innerHeight + 100}px) rotate(360deg)`,
                    opacity: 0
                }
            ], {
                duration: Math.random() * 3000 + 2000,
                easing: 'linear'
            });
            
            animation.onfinish = () => particle.remove();
        }

        // Create particles periodically
        setInterval(createParticle, 2000);

        // Add mouse move effect for cards
        document.querySelectorAll('.skill-card, .project-card, .contact-item').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
            });
        });
    </script>
</body>
</html>