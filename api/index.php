<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'data.php'; ?>

    <header class="header">
        <h1 class="logo"><?php echo $name; ?></h1>
        <nav class="navbar">
            <a href="#about">Tentang</a>
            <a href="#projects">Proyek</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>

    <main class="main-content">
        <section id="about" class="section">
            <div class="about-container">
                <img src="<?php echo $photo; ?>" alt="Foto <?php echo $name; ?>" class="profile-photo">
                <div class="about-text">
                    <h2>Tentang Saya</h2>
                    <p class="description"><?php echo $about; ?></p>
                </div>
            </div>
        </section>

        <section id="projects" class="section projects-section">
            <h2>Proyek Terbaru</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <a href="<?php echo $project['link']; ?>" target="_blank" class="project-link">Lihat Proyek &rarr;</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="section">
            <h2>Hubungi Saya</h2>
            <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <p>LinkedIn: <a href="<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin; ?></a></p>
            <p>GitHub: <a href="<?php echo $github; ?>" target="_blank"><?php echo $github; ?></a></p>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. Semua Hak Cipta Dilindungi.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
