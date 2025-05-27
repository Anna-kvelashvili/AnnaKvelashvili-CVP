<?php
$about = [
    'name' => 'Anna Kvelashvili',
    'age' => 26,
    'profession' => 'Front-End Developer',
    'location' => 'Tbilisi, Georgia',
    'bio' => [
        "Hi, I'm <strong>Anna Kvelashvili</strong>, a 26 years old Front-End Developer from Tbilisi, Georgia.",
        "I’m passionate about creating visually appealing, fast, and user-friendly websites. My main tools include HTML, CSS, PHP, and responsive design techniques. Currently, I’m focused on building dynamic portfolio websites using PHP as well.",
        "I have a background in social psychology and over 5 years of experience in management roles, including working at leading Georgian banks and insurance companies. These roles have developed my communication, leadership, and problem-solving skills — all of which I now apply in tech projects.",
        "I thrive in organized environments, enjoy collaborating with others, and always seek ways to grow and learn. My transition into web development comes from a genuine passion for design, technology, and creating something meaningful from scratch."
    ],
    'profile_image' => './assets/images/profilepic.jpg',
    'alt_text' => 'Anna Kvelashvili'
];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me - <?= htmlspecialchars($about['name']) ?></title>
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
      <section class="second-section">
        <div
          class="about-section"
        >
          <h2 style="margin: 0">About Me</h2>
          <img src="./assets/images/arrow-left.png" alt="" />
        </div>
        <div class="about-section-2">
          <div class="about-image-text">
            <img
              src="<?= htmlspecialchars($about['profile_image']) ?>"
              alt="<?= htmlspecialchars($about['alt_text']) ?>"
              class="profile-photo"
            />
            <div class="about-details">
              <p class="styled-text">
                <?php 
                  foreach ($about['bio'] as $paragraph) {
                    echo nl2br($paragraph) . "<br /><br />";
                  }
                ?>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include './components/footer.php'; ?>

    <script src="script.js"></script>
  </body>
</html>
