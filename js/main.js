const burgerMenu = document.querySelector("div#burger-menu-container");
const burgerMenuItems = document.querySelector("div.burger-menu-items");

function myFunction(x) {
  x.classList.toggle("change");

  if (burgerMenu.className === "") {
    burgerMenuItems.style.display = "none";
  } else if (burgerMenu.className === "change") {
    burgerMenuItems.style.display = 'flex';
    burgerMenuItems.style.flexDirection = 'column';
    burgerMenuItems.style.width = '50vw';
    burgerMenuItems.style.height = '100vh';
    burgerMenuItems.style.marginTop = '20%';

  }
}
