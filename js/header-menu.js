const hamburger = document.querySelector(".hamburger");
const navItems = document.querySelector(".nav__items");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navItems.classList.toggle("active");
}