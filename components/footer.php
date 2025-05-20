<?php
$social_links = [
  ['href' => 'https://github.com/Anna-kvelashvili', 'icon' => 'fab fa-github', 'label' => 'GitHub'],
  ['href' => 'https://www.linkedin.com/in/anna-kvelashvili-584697340/', 'icon' => 'fab fa-linkedin', 'label' => 'LinkedIn'],
  ['href' => 'https://www.instagram.com/annkvelashvili/', 'icon' => 'fab fa-instagram', 'label' => 'Instagram'],
  ['href' => 'https://www.facebook.com/ani.kvelashvili.5', 'icon' => 'fab fa-facebook-f', 'label' => 'Facebook']
];
?>

<footer>
  <p>© 2025 Anna Kvelashvili. All rights reserved.</p>
  <p>Thank you for visiting my portfolio!</p>
  <div class="social-icons">
    <?php foreach ($social_links as $link): ?>
      <a href="<?= htmlspecialchars($link['href']) ?>" target="_blank" aria-label="<?= htmlspecialchars($link['label']) ?>">
        <i class="<?= htmlspecialchars($link['icon']) ?>"></i>
      </a>
    <?php endforeach; ?>
  </div>
</footer>
