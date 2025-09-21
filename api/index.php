<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $profile['name']; ?> | Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header class="hero" id="home">
    <div class="container">
      <h1><?php echo $profile['name']; ?></h1>
      <h2><?php echo $profile['title']; ?></h2>
      <p class="tagline"><?php echo $profile['tagline']; ?></p>

      <!-- Pictures gallery -->
      <div class="pictures">
        <?php foreach($profile['pictures'] as $pic): ?>
          <img src="<?php echo $pic; ?>" alt="portfolio picture">
        <?php endforeach; ?>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="section">
    <div class="container">
      <h2>About</h2>
      <?php foreach($profile['bio'] as $paragraph): ?>
        <p><?php echo $paragraph; ?></p>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section">
    <div class="container">
      <h2>Experience</h2>
      <p>Detail pengalaman kerja kamu bisa ditulis di sini.</p>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <div class="container">
      <h2>Projects</h2>
      <p>List proyek atau portofolio bisa kamu tampilkan di sini.</p>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section">
    <div class="container">
      <h2>Contact</h2>
      <form>
        <input type="text" placeholder="Nama" required>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Pesan" required></textarea>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> <?php echo $profile['name']; ?> | Built with ❤️</p>
      <div class="socials">
        <?php foreach($profile['socials'] as $key => $link): ?>
          <a href="<?php echo $link; ?>" target="_blank"><?php echo $key; ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </footer>
</body>
</html>
