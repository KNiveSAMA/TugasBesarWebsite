document.addEventListener("DOMContentLoaded", () => {
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const sideMenu = document.getElementById("sideMenu");
  const overlay = document.getElementById("overlay");

  function toggleMenu() {
    sideMenu.classList.toggle("active");
    overlay.classList.toggle("active");
  }

  hamburgerBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    toggleMenu();
  });

  overlay.addEventListener("click", () => {
    toggleMenu();
  });
});
