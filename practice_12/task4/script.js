const menuButton = document.getElementById("menu-btn");
const aside = document.querySelector("aside");
let menuOpened = false;

menuButton.addEventListener("click", () => {
    if (!menuOpened) {
        menuButton.classList.add("opened");
        aside.classList.add("opened");
        menuOpened = true;
    } else {
        menuButton.classList.remove("opened");
        aside.classList.remove("opened");
        menuOpened = false;
    }
});