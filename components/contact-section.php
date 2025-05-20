<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $phone = htmlspecialchars(trim($_POST["phone"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  header("Location: thankyou.php");
  exit();
}
?>

<section id="contact" class="contact-section">
  <h2>Contact Me</h2>

  <form class="contact-form" id="contactForm" action="thankyou.php" method="post" novalidate>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required />

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="your.email@example.com" required />

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="+995 5XX XX XX XX" />

    <label for="message">Message</label>
    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

    <button type="submit">Send Message</button>
  </form>
</section>

<script src="script.js"></script>
