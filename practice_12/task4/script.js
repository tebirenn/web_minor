const menuButton = document.getElementById("menu-btn");
let menuOpened = false;

menuButton.addEventListener("click", () => {
    if (!menuOpened) {
        menuButton.classList.add("opened");
        menuOpened = true;
    } else {
        menuButton.classList.remove("opened");
        menuOpened = false;
    }
});