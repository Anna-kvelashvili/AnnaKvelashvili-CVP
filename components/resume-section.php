<?php
$resume = [
  'title' => 'Download My Resume',
  'file' => 'https://drive.google.com/file/d/1_np6XXBCrQIhSGEzfx5iMRU2xEs1wsXl/view?usp=sharing',
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