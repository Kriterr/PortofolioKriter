<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $portfolio['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container header-flex">
            <div class="logo"><?= $portfolio['title']; ?></div>
            <nav>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1><?= $portfolio['name']; ?></h1>
            <p class="subtitle"><?= $portfolio['subtitle']; ?></p>
            <a href="#projects" class="cta-btn">View Portfolio</a>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <p><?= $portfolio['about']; ?></p>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="grid">
                <?php foreach ($portfolio['projects'] as $project): ?>
                    <div class="card">
                        <img src="<?= $project['image']; ?>" alt="<?= $project['title']; ?>">
                        <div class="card-content">
                            <h3><?= $project['title']; ?></h3>
                            <p><?= $project['description']; ?></p>
                            <?php if (!empty($project['link'])): ?>
                                <a href="<?= $project['link']; ?>" target="_blank" class="project-link">View Project</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact</h2>
            <form id="contactForm" action="mailto:<?= $portfolio['contact_email']; ?>" method="POST" enctype="text/plain">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; <?= date('Y'); ?> <?= $portfolio['name']; ?>. All rights reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>