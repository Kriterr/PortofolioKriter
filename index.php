<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($profile['name']); ?> - Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <div class="container nav-flex">
      <span class="logo"><?= htmlspecialchars($profile['name']); ?></span>
      <ul>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#projects">Proyek</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </div>
  </nav>
  <header>
    <div class="container header-flex">
      <div>
        <h1>Halo, saya <?= htmlspecialchars($profile['name']); ?></h1>
        <p><?= htmlspecialchars($profile['tagline']); ?></p>
        <a href="#projects" class="btn">Lihat Proyek</a>
      </div>
      <img class="profile-img" src="<?= htmlspecialchars($profile['photo']); ?>" alt="Foto Profil">
    </div>
  </header>
  <section id="about">
    <div class="container">
      <h2>Tentang Saya</h2>
      <p><?= nl2br(htmlspecialchars($profile['about'])); ?></p>
    </div>
  </section>
  <section id="projects">
    <div class="container">
      <h2>Proyek Portfolio</h2>
      <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
          <div class="project-card">
            <img src="<?= htmlspecialchars($project['image']); ?>" alt="<?= htmlspecialchars($project['title']); ?>">
            <div class="project-info">
              <h3><?= htmlspecialchars($project['title']); ?></h3>
              <p><?= htmlspecialchars($project['desc']); ?></p>
              <?php if(!empty($project['link'])): ?>
                <a href="<?= htmlspecialchars($project['link']); ?>" target="_blank" rel="noopener">Kunjungi</a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h2>Kontak</h2>
      <ul class="contact-list">
        <?php foreach ($profile['contacts'] as $label => $value): ?>
          <li><strong><?= ucfirst(htmlspecialchars($label)); ?>:</strong>
            <?php if(filter_var($value, FILTER_VALIDATE_EMAIL)): ?>
              <a href="mailto:<?= htmlspecialchars($value); ?>"><?= htmlspecialchars($value); ?></a>
            <?php elseif (strpos($value, 'http') === 0 || strpos($value, 'www') === 0): ?>
              <a href="<?= strpos($value, 'http') === 0 ? htmlspecialchars($value) : 'https://'.htmlspecialchars($value); ?>" target="_blank" rel="noopener"><?= htmlspecialchars($value); ?></a>
            <?php else: ?>
              <?= htmlspecialchars($value); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
  <footer>
    <div class="container">
      <p>&copy; <?= date('Y'); ?> <?= htmlspecialchars($profile['name']); ?>. Dibuat dengan PHP, CSS, & JS.</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>