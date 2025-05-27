<?php
$projects = [
  [
    'img' => 'assets/images/photography.PNG',
    'alt' => 'My First Project',
    'title' => 'My First Project',
    'link' => 'https://github.com/Anna-kvelashvili/Photography',
    'linkText' => 'View on GitHub',
  ],
  [
    'img' => 'assets/images/first.PNG',
    'alt' => 'My Second Project',
    'title' => 'My Second Project',
    'link' => 'https://github.com/Anna-kvelashvili/Project-A',
    'linkText' => 'View on GitHub',
  ],
  [
    'img' => 'assets/images/Bon-hotels.PNG',
    'alt' => 'My Third Project',
    'title' => 'My Third Project',
    'link' => 'https://github.com/Anna-kvelashvili/Bon-Hotel',
    'linkText' => 'View on GitHub',
  ],
  [
    'img' => 'assets/images/LuxVentusBlog.PNG',
    'alt' => 'My Fourth Project',
    'title' => 'My Fourth Project',
    'link' => 'https://github.com/zuksto/LuxVentus',
    'linkText' => 'View on GitHub',
  ],
  [
    'img' => 'assets/images/mico-hospital.PNG',
    'alt' => 'My Fifth Project',
    'title' => 'My Fifth Project',
    'link' => 'https://github.com/Anna-kvelashvili/mico-html-1',
    'linkText' => 'View on GitHub',
  ],
  [
    'img' => 'assets/images/villaagency.PNG',
    'alt' => 'My Last Project',
    'title' => 'My Last Project',
    'link' => 'http://villa-agency.atwebpages.com/',
    'linkText' => 'View on WEBSITE',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Projects - Anna Kvelashvili</title>
   <link rel="icon" type="image/png" href="./assets/images/profilepic.jpg" />
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="assets/responsive.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
</head>
<body class="dark">

  <?php include './components/header.php'; ?>

  <main>
    <section id="projects" class="projects-section">
      <h2>Projects</h2>
      <p class="projects-description">
        Here you can find a selection of my projects built using HTML, CSS,
        PHP, JavaScript, and Bootstrap. Each project reflects my dedication to
        crafting visually appealing and highly functional web applications.
      </p>

      <div class="projects-container">
        <?php foreach ($projects as $project): ?>
          <div class="project-card">
            <img src="<?= htmlspecialchars($project['img']) ?>" alt="<?= htmlspecialchars($project['alt']) ?>" />
            <h3><?= htmlspecialchars($project['title']) ?></h3>
            <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="github-btn">
              <?= htmlspecialchars($project['linkText']) ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php include './components/footer.php'; ?>
  <script src="script.js"></script>
</body>
</html>
