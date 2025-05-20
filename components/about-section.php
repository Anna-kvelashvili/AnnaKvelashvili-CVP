
<?php
$about_title = "About Me";
$arrow_image = "./assets/images/arrow-left.png";
$profile_image = "./assets/images/Ellipse 13.png";
$about_text = "Meet Anna, a skilled web developer with a passion for designing
elegant and efficient digital solutions. Proficient in HTML, CSS,
JavaScript, and other modern technologies, she combines a sharp eye
for detail with a dedication to staying current with industry trends.
This ensures that every project she works on is not only visually
appealing but also optimized for exceptional performance and user
experience. With a strong foundation in problem-solving and a
collaborative mindset, Anna thrives in dynamic team environments and
enjoys transforming complex challenges into user-friendly
applications. She is always eager to learn new skills and take on
innovative projects that push the boundaries of web development.";
?>

<section class="second-section">
  <div class="about-section">
    <h2><?= htmlspecialchars($about_title) ?></h2>
    <img src="<?= htmlspecialchars($arrow_image) ?>" alt="Arrow" />
  </div>
  <div class="about-section-2">
    <img src="<?= htmlspecialchars($profile_image) ?>" alt="Anna Photo" />
    <p class="styled-text"><?= nl2br(htmlspecialchars($about_text)) ?></p>
  </div>
</section>
