function toggleMenu() {
  var hamburgerMenu = document.querySelector(".header--hamburger");
  var navSp = document.querySelector(".nav-sp");

  hamburgerMenu.classList.toggle("isActive");
  navSp.classList.toggle("isOpen");
}

function showText() {
  var expandHeight = document.querySelector(".sect_3__text-content");
  var expandBtn = document.querySelector(".sect_3__btn");

  expandHeight.classList.toggle("isOpen");
  expandBtn.classList.toggle("isExpanded");
}
