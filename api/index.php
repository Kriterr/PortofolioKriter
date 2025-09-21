<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site['title']) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="container nav-container">
            <div class="logo"><?= htmlspecialchars($site['title']) ?></div>
            <div>
                <a href="#about">About</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>
    <header>
        <div class="container hero">
            <img src="<?= htmlspecialchars($site['avatar']) ?>" alt="Profile" class="avatar">
            <h1><?= htmlspecialchars($site['author']) ?></h1>
            <p><?= htmlspecialchars($site['tagline']) ?></p>
        </div>
    </header>
    <section id="about" class="container">
        <h2>About Me</h2>
        <p><?= nl2br(htmlspecialchars($site['about'])) ?></p>
    </section>
    <section id="portfolio" class="container">
        <h2>Portfolio</h2>
        <div class="portfolio-list">
            <?php foreach ($portfolio as $item): ?>
                <div class="portfolio-card">
                    <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['description']) ?></p>
                    <?php if (!empty($item['link'])): ?>
                        <a href="<?= htmlspecialchars($item['link']) ?>" target="_blank">View Project</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="contact" class="container">
        <h2>Contact</h2>
        <p>Email: <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></p>
        <div class="socials">
            <?php foreach ($site['socials'] as $soc): ?>
                <a href="<?= htmlspecialchars($soc['url']) ?>" target="_blank"><?= htmlspecialchars($soc['platform']) ?></a>
            <?php endforeach; ?>
        </div>
    </section>
    <footer>
        <div class="container">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($site['author']) ?>. All rights reserved.
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>