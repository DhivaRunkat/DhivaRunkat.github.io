const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    const targetSection = document.getElementById(this.getAttribute('href').substring(1));
    if (targetSection) {
      event.preventDefault();
      targetSection.scrollIntoView({
        behavior: 'smooth', 
        block: 'start' 
      });
    }
  });
});
