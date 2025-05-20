<?php
$resume = [
  'title' => 'Download My Resume',
  'file' => 'assets/files/Annakvelashvili-portfolio.zip',
  'button' => 'Download Resume'
];
?>

<section id="download-resume" class="full-screen-section">
  <div class="content">
    <h2><?= $resume['title'] ?></h2>
    <a href="<?= $resume['file'] ?>" download class="download-btn">
      <?= $resume['button'] ?>
    </a>
  </div>
</section>