<?php
$projects = [
  [
    'image' => 'assets/images/photography.PNG',
    'title' => 'My First Project',
    'link'  => 'https://github.com/Anna-kvelashvili/Photography',
    'button' => 'View on GitHub'
  ],
  [
    'image' => 'assets/images/first.PNG',
    'title' => 'My Second Project',
    'link'  => 'https://github.com/Anna-kvelashvili/Project-A',
    'button' => 'View on GitHub'
  ],
  [
    'image' => 'assets/images/Bon-hotels.PNG',
    'title' => 'My Third Project',
    'link'  => 'https://github.com/Anna-kvelashvili/Bon-Hotel',
    'button' => 'View on GitHub'
  ],
  [
    'image' => 'assets/images/LuxVentusBlog.PNG',
    'title' => 'My Fourth Project',
    'link'  => 'https://github.com/zuksto/LuxVentus',
    'button' => 'View on GitHub'
  ],
  [
    'image' => 'assets/images/mico-hospital.PNG',
    'title' => 'My Fifth Project',
    'link'  => 'https://github.com/Anna-kvelashvili/mico-html-1',
    'button' => 'View on GitHub'
  ],
  [
    'image' => 'assets/images/villaagency.PNG',
    'title' => 'My Last Project',
    'link'  => 'http://villa-agency.atwebpages.com/',
    'button' => 'View on WEBSITE'
  ]
];
?>

<section id="projects" class="projects-section">
  <h2>Projects</h2>
  <div class="projects-container">
    <?php foreach ($projects as $project): ?>
      <div class="project-card">
        <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" />
        <h3><?= htmlspecialchars($project['title']) ?></h3>
        <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="github-btn">
          <?= htmlspecialchars($project['button']) ?>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
