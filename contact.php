<?php
$contactEmail = 'annkvelashvili@gmail.com';
$phoneNumber = '+995 557 59 36 95';

$socialLinks = [
    ['href' => 'https://github.com/Anna-kvelashvili', 'icon' => 'fab fa-github', 'label' => 'GitHub'],
    ['href' => 'https://www.linkedin.com/in/anna-kvelashvili-584697340/', 'icon' => 'fab fa-linkedin', 'label' => 'LinkedIn'],
    ['href' => 'https://www.instagram.com/annkvelashvili/', 'icon' => 'fab fa-instagram', 'label' => 'Instagram'],
    ['href' => 'https://www.facebook.com/ani.kvelashvili.5/', 'icon' => 'fab fa-facebook-f', 'label' => 'Facebook'],
];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/responsive.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="dark">
     <?php include './components/header.php'; ?>
    <section id="contact" class="contact-section-1 contact-section">
      <h2>Contact Me</h2>
      <p>If you have any questions or want to collaborate, feel free to reach out!</p>

      <div class="contact-info">
        <p>
          Email:
          <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a>
        </p>
        <p>
          Phone:
          <span id="phone-number" style="display: none"><?= htmlspecialchars($phoneNumber) ?></span>
          <button id="show-phone-btn">Show phone number</button>
        </p>
        <p>
          Follow me on:
          <?php 
          foreach ($socialLinks as $index => $social): 
            if ($index > 0) echo " | ";
          ?>
            <a href="<?= htmlspecialchars($social['href']) ?>" target="_blank"><?= htmlspecialchars($social['label']) ?></a>
          <?php endforeach; ?>
        </p>
      </div>
      <form
        class="contact-form"
        id="contactForm"
        action="thankyou.php"
        method="post"
        novalidate
      >
        <label for="name">Name</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Your Name"
          required
        />

        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="your.email@example.com"
          required
        />

        <label for="phone">Phone Number</label>
        <input
          type="tel"
          id="phone"
          name="phone"
          placeholder="+995 5XX XX XX XX"
        />

        <label for="message">Message</label>
        <textarea
          id="message"
          name="message"
          rows="5"
          placeholder="Write your message here..."
          required
        ></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </body>
 <?php include './components/footer.php'; ?>
  <script src="script.js"></script>
</html>
