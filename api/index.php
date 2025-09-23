<?php
// FILE: index.php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($data['personal']['name']); ?> | <?php echo e($data['personal']['tagline']); ?></title>
    <meta name="description" content="<?php echo e($data['about']['description']); ?>">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="container">
        <nav>
            <div class="logo"><?php echo e($data['personal']['name']); ?></div>
            <ul>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero container reveal-fade">
            <h1><?php echo e($data['personal']['tagline']); ?></h1>
            <p class="hero-subtext">Berbasis di Jakarta, Indonesia. Menciptakan karya yang luar biasa sederhana dan sangat fungsional.</p>
            <a href="mailto:<?php echo e($data['personal']['email']); ?>" class="cta-button">Hubungi Saya</a>
        </section>

        <section id="about" class="container reveal-fade">
            <div class="section-content about-content">
                <h2><?php echo e($data['about']['title']); ?></h2>
                <p><?php echo e($data['about']['description']); ?></p>
            </div>
        </section>

        <section id="portfolio" class="container reveal-fade">
            <h2>Karya Pilihan</h2>
            <div class="portfolio-grid">
                <?php foreach ($data['projects'] as $project): ?>
                    <a href="<?php echo e($project['link']); ?>" class="project-card reveal-fade" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo e($project['image_url']); ?>" alt="<?php echo e($project['title']); ?>">
                        <div class="card-content">
                            <h3><?php echo e($project['title']); ?></h3>
                            <p class="category"><?php echo e($project['category']); ?></p>
                            <p><?php echo e($project['description']); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <footer id="contact" class="container reveal-fade">
        <h2>Tertarik bekerja sama?</h2>
        <p>Ayo bicara.</p>
        <a href="mailto:<?php echo e($data['personal']['email']); ?>" class="contact-link"><?php echo e($data['personal']['email']); ?></a>
        <div class="social-links">
            <a href="<?php echo e($data['personal']['linkedin']); ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="<?php echo e($data['personal']['github']); ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo e($data['personal']['name']); ?>. Didesain dengan penuh ketelitian.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>