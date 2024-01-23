function toggleMenu() {
  var hamburgerMenu = document.querySelector(".header--hamburger");
  var navSp = document.querySelector(".nav-sp");

  hamburgerMenu.classList.toggle("isActive");
  navSp.classList.toggle("isOpen");
}
