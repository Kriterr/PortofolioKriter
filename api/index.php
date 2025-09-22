<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profile['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="main-container">
        <section id="profile" class="section profile-section">
            <img src="<?php echo $profile['profile_pic']; ?>" alt="Profile Picture of <?php echo $profile['name']; ?>" class="profile-pic">
            <h1><?php echo $profile['name']; ?></h1>
            <p class="job-title"><?php echo $profile['job_title']; ?></p>
        </section>

        <section id="about" class="section">
            <h2>About Me</h2>
            <p><?php echo $profile['bio']; ?></p>
        </section>

        <section id="contact" class="section">
            <h2>Contact</h2>
            <div class="contact-grid">
                <a href="mailto:<?php echo $contact['email']; ?>" class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><?php echo $contact['email']; ?></span>
                </a>
                <a href="https://<?php echo $contact['linkedin']; ?>" target="_blank" class="contact-item">
                    <i class="fab fa-linkedin"></i>
                    <span><?php echo $contact['linkedin']; ?></span>
                </a>
                <a href="https://<?php echo $contact['github']; ?>" target="_blank" class="contact-item">
                    <i class="fab fa-github"></i>
                    <span><?php echo $contact['github']; ?></span>
                </a>
                <a href="tel:<?php echo $contact['phone']; ?>" class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span><?php echo $contact['phone']; ?></span>
                </a>
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

        <footer class="footer">
            <p>&copy; <?php echo date("Y"); ?> Christopher Ivander Dicky Prayudhi. All Rights Reserved.</p>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>