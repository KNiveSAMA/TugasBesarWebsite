document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburgerBtn");
  const sideMenu = document.getElementById("sideMenu");

  hamburger.addEventListener("click", function (e) {
    e.stopPropagation();
    sideMenu.classList.toggle("active");
  });

  document.addEventListener("click", function () {
    sideMenu.classList.remove("active");
  });

  sideMenu.addEventListener("click", function (e) {
    e.stopPropagation();
  });
});
