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
  <header class="hero">
    <img src="<?php echo $profile['photo']; ?>" alt="<?php echo $profile['name']; ?>">
    <h1><?php echo $profile['name']; ?></h1>
    <h2><?php echo $profile['title']; ?></h2>
  </header>

  <!-- About -->
  <section id="about" class="section">
    <h2>About Me</h2>
    <p><?php echo $profile['about']; ?></p>
    <div class="contacts">
      <?php foreach($profile['contacts'] as $key => $link): ?>
        <a href="<?php echo $link; ?>" target="_blank"><?php echo $key; ?></a>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <h2>Projects</h2>
    <div class="grid">
      <?php foreach($profile['projects'] as $project): ?>
        <div class="card">
          <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>">
          <h3><?php echo $project['title']; ?></h3>
          <p><?php echo $project['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section">
    <h2>Experience</h2>
    <?php foreach($profile['experience'] as $exp): ?>
      <div class="exp">
        <h3><?php echo $exp['role']; ?> - <span><?php echo $exp['company']; ?></span></h3>
        <small><?php echo $exp['years']; ?></small>
        <p><?php echo $exp['desc']; ?></p>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $profile['name']; ?>. All rights reserved.</p>
  </footer>

</body>
</html>
