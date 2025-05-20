<header>
  <nav class="centered-nav">
    <div class="logo"><a href="/index.php">Anna Kvelashvili</a></div>
    <button id="burger-menu" aria-label="Toggle menu">☰</button>
    <ul class="nav-links">
      <?php
        $navItems = [
          'Home' => 'index.php',
          'About' => 'about.php',
          'Projects' => 'projects.php',
          'Contact' => 'contact.php',
          'Resume' => 'resume.php'
        ];

        foreach ($navItems as $name => $link) {
          echo "<li><a href=\"$link\">$name</a></li>";
        }
      ?>
    </ul>
    <button id="theme-toggle">🌙</button>
  </nav>
</header>
