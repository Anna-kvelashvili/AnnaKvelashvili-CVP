// Theme-Mode
const toggleButton = document.getElementById("theme-toggle");
const body = document.body;

toggleButton.addEventListener("click", () => {
  body.classList.toggle("light");
  body.classList.toggle("dark");

  //icon
  if (body.classList.contains("light")) {
    toggleButton.textContent = "☀️";
  } else {
    toggleButton.textContent = "🌙";
  }
});

// Burger Menu
  const burger = document.getElementById('burger-menu');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

// Contact
const form = document.getElementById('contactForm');

form.addEventListener('submit', function(e) {
  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const message = form.message.value.trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (name.length < 3) {
    alert('Please enter a valid name (at least 3 characters).');
    e.preventDefault();
    return;
  }

  if (!emailPattern.test(email)) {
    alert('Please enter a valid email address.');
    e.preventDefault();
    return;
  }

  if (message.length < 3) {
    alert('Please enter a message (at least 3 characters).');
    e.preventDefault();
    return;
  }
});
  // contacpage-phone numb
  document.getElementById('show-phone-btn').addEventListener('click', () => {
    const phone = document.getElementById('phone-number');
    phone.style.display = 'inline';
 
    document.getElementById('show-phone-btn').style.display = 'none';
  });

