<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $siteTitle; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <h1 class="logo"><?= $siteTitle; ?></h1>
      <ul class="nav-links">
        <li><a href="#about">Tentang</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </div>
  </nav>

  <header class="hero">
    <div class="container">
      <h2><?= $heroTitle; ?></h2>
      <p><?= $heroSubtitle; ?></p>
    </div>
  </header>

  <main class="container">
    <section id="about">
      <h2>Tentang Saya</h2>
      <p><?= $aboutMe; ?></p>
    </section>

    <section id="portfolio">
      <h2>Portfolio</h2>
      <div class="grid">
        <?php foreach ($projects as $project): ?>
          <div class="card">
            <img src="<?= $project['image']; ?>" alt="<?= $project['title']; ?>">
            <h3><?= $project['title']; ?></h3>
            <p><?= $project['description']; ?></p>
            <a href="<?= $project['link']; ?>" target="_blank">Lihat Proyek</a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact">
      <h2>Kontak</h2>
      <p>Email: <a href="mailto:<?= $contactEmail; ?>"><?= $contactEmail; ?></a></p>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?= date('Y'); ?> <?= $siteTitle; ?>. All rights reserved.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
