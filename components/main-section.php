
<?php
$name = "Anna Kvelashvili";
$description = "I'm Front-End Developer and I work remotely from Georgia, Tbilisi";
$resume_link = "resume.php";
$line_image = "./assets/images/Line 1.png";
$cv_image = "./assets/images/CV BALL.png";
$glow_image = "./assets/images/BIG GLOW.svg";
?>

<main>
  <section class="main-section">
    <div class="left-wrapper">
      <div class="main-text"><h1><?= htmlspecialchars($name) ?></h1></div>
      <div class="text">
        <img src="<?= htmlspecialchars($line_image) ?>" alt="" />
        <p><?= htmlspecialchars($description) ?></p>
      </div>
    </div>
    <div class="right-wrapper">
      <a href="<?= htmlspecialchars($resume_link) ?>"><img src="<?= htmlspecialchars($cv_image) ?>" alt="Resume" /></a>
      <img src="<?= htmlspecialchars($glow_image) ?>" alt="Glow" />
      <div class="social-media"></div>
    </div>
  </section>
</main>
