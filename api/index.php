<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($name) ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="profile-section">
            <img src="<?= htmlspecialchars($profileImage) ?>" alt="Profile" class="profile-img" />
            <h1 class="name"><?= htmlspecialchars($name) ?></h1>
            <div class="about">
                <h2>About Me</h2>
                <p><?= htmlspecialchars($about) ?></p>
            </div>
            <div class="socials">
                <a href="<?= htmlspecialchars($github) ?>" target="_blank" title="GitHub">
                    <img src="assets/github.svg" alt="GitHub" />
                </a>
                <a href="<?= htmlspecialchars($linkedin) ?>" target="_blank" title="LinkedIn">
                    <img src="assets/linkedin.svg" alt="LinkedIn" />
                </a>
            </div>
        </section>
        <section class="portfolio">
            <h2>Portfolio</h2>
            <div id="portfolio-list">
                <!-- Portfolio items will be loaded here by script.js -->
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>