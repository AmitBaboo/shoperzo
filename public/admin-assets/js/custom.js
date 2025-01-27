window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled"); // Scroll hone par "scrolled" class add karein
    } else {
      navbar.classList.remove("scrolled"); // Top par wapas aane par "scrolled" class remove karein
    }
  });