<?php
// Load data from data.php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profile['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="main-container">
        <section id="profile" class="section">
            <div class="profile-header-content">
                <img src="<?php echo $profile['profile_pic']; ?>" alt="Profile Picture of <?php echo $profile['name']; ?>" class="profile-pic">
                <h1><?php echo $profile['name']; ?></h1>
                <p class="job-title"><?php echo $profile['job_title']; ?></p>
            </div>
        </section>

        <section id="about" class="section">
            <h2>About Me</h2>
            <p><?php echo $profile['bio']; ?></p>
        </section>

        <section id="contact" class="section">
            <h2>Contact</h2>
            <div class="contact-list-vertical">
                <?php foreach ($contact as $item) : ?>
                    <a href="<?php echo $item['link']; ?>" target="_blank" class="contact-item">
                        <div class="contact-icon"><i class="<?php echo $item['icon']; ?>"></i></div>
                        <span class="contact-text"><?php echo $item['text']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="skills" class="section">
            <h2>Skills</h2>
            <ul class="skills-list">
                <?php foreach ($skills as $skill) : ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section id="projects" class="section">
            <h2>Projects</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project) : ?>
                    <div class="project-card">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <a href="<?php echo $project['link']; ?>" target="_blank" class="project-link">View Project <i class="fas fa-external-link-alt"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="certificates" class="section">
            <h2>Certificates</h2>
            <div class="certificates-grid">
                <?php foreach ($certificates as $certificate) : ?>
                    <div class="certificate-item">
                        <h3><?php echo $certificate['title']; ?></h3>
                        <p class="issuer"><?php echo $certificate['issuer']; ?></p>
                        <p class="date"><?php echo $certificate['date']; ?></p>
                        <a href="<?php echo $certificate['link']; ?>" target="_blank" class="certificate-link">View Credential <i class="fas fa-external-link-alt"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> Christopher Ivander Dicky Prayudhi. All Rights Reserved.</p>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>