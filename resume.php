<?php
$socialLinks = [
    ['href' => 'https://github.com/Anna-kvelashvili', 'icon' => 'fab fa-github', 'label' => 'GitHub'],
    ['href' => 'https://www.linkedin.com/in/anna-kvelashvili-584697340/', 'icon' => 'fab fa-linkedin', 'label' => 'LinkedIn'],
    ['href' => 'https://www.instagram.com/annkvelashvili/', 'icon' => 'fab fa-instagram', 'label' => 'Instagram'],
    ['href' => 'https://www.facebook.com/ani.kvelashvili.5/', 'icon' => 'fab fa-facebook-f', 'label' => 'Facebook'],
];

$resumeFile = 'assets/files/Annakvelashvili-portfolio.zip';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="assets/responsive.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="dark">
   <?php include './components/header.php'; ?>
  <section id="download-resume" class="full-screen-section">
    <div class="content">
      <h2>Download My Resume</h2>
      <a href="<?= htmlspecialchars($resumeFile) ?>" download class="download-btn">Download Resume</a>
    </div>
  </section>
 <?php include './components/footer.php'; ?>
  <script src="script.js"></script>
</body>
</html>
