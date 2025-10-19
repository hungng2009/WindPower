document.addEventListener("DOMContentLoaded", function() {
  const mobileBtn = document.querySelector(".mobile-menu-btn");
  const navMenu = document.querySelector(".nav-menu");

  if (mobileBtn && navMenu) {
    mobileBtn.addEventListener("click", function() {
      navMenu.classList.toggle("active");
    });
  }
});