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
  <div class="layout">
    <!-- Left Sidebar -->
    <aside class="sidebar">
      <h1><?php echo $profile['name']; ?></h1>
      <h2><?php echo $profile['title']; ?></h2>
      <p class="tagline"><?php echo $profile['tagline']; ?></p>

      <nav>
        <ul>
          <?php foreach($profile['menu'] as $menu): ?>
            <li><a href="#<?php echo strtolower($menu); ?>"><?php echo $menu; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div class="socials">
        <?php foreach($profile['socials'] as $key => $link): ?>
          <a href="<?php echo $link; ?>" target="_blank"><?php echo ucfirst($key); ?></a>
        <?php endforeach; ?>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="content">
      <?php foreach($profile['bio'] as $paragraph): ?>
        <p><?php echo $paragraph; ?></p>
      <?php endforeach; ?>
    </main>
  </div>
</body>
</html>
