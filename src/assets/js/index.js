function toggleMenu() {
  var hamburgerMenu = document.querySelector(".header--hamburger");
  var navSp = document.querySelector(".nav-sp");

  hamburgerMenu.classList.toggle("isActive");
  navSp.classList.toggle("isOpen");
}

function showText() {
  var expandHeight = document.querySelector(".sect_3__text-content");

  expandHeight.classList.toggle("isOpen");
}
