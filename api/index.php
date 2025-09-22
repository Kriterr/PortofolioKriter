<?php
// Memuat data dari file data.php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profile['name']; ?> - Portofolio SI</title>
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
                <h2>Tentang Saya</h2>
                <div class="profile-info">
                    <img src="<?php echo $profile['profile_pic']; ?>" alt="Foto <?php echo $profile['name']; ?>" class="profile-pic">
                    <div class="profile-text">
                        <p><?php echo $profile['bio']; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="container">
                <h2>Keahlian Teknis</h2>
                <div class="skills-grid">
                    <?php foreach ($skills as $skill) : ?>
                        <div class="skill-item"><?php echo $skill; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="container">
                <h2>Proyek & Studi Kasus</h2>
                <div class="projects-grid">
                    <?php foreach ($projects as $project) : ?>
                        <div class="project-card">
                            <div class="project-content">
                                <h3><?php echo $project['title']; ?></h3>
                                <p><?php echo $project['description']; ?></p>
                                <a href="<?php echo $project['link']; ?>" target="_blank" class="project-link">Lihat Proyek</a>
                            </div>
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