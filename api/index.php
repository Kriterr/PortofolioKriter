<?php
// Memuat data dari file data.php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profile['name']; ?> - Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1><?php echo $profile['name']; ?></h1>
            <p><?php echo $profile['job_title']; ?></p>
        </div>
    </header>

    <main class="main-content">
        <section id="about" class="section">
            <div class="container">
                <div class="profile-pic-container">
                    <img src="<?php echo $profile['profile_pic']; ?>" alt="Foto <?php echo $profile['name']; ?>" class="profile-pic">
                </div>
                <h2>Tentang Saya</h2>
                <p><?php echo $profile['bio']; ?></p>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="container">
                <h2>Keahlian</h2>
                <ul class="skills-list">
                    <?php foreach ($skills as $skill) : ?>
                        <li><?php echo $skill; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="container">
                <h2>Proyek</h2>
                <div class="projects-grid">
                    <?php foreach ($projects as $project) : ?>
                        <div class="project-card">
                            <img src="<?php echo $project['image']; ?>" alt="Gambar <?php echo $project['title']; ?>" class="project-image">
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                            <a href="<?php echo $project['link']; ?>" target="_blank" class="project-link">Lihat Proyek</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>Terhubung dengan saya:</p>
            <div class="social-links">
                <?php foreach ($social_links as $platform => $link) : ?>
                    <a href="<?php echo $link; ?>" target="_blank"><?php echo ucfirst($platform); ?></a>
                <?php endforeach; ?>
            </div>
            <p>&copy; <?php echo date("Y"); ?> <?php echo $profile['name']; ?>. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>