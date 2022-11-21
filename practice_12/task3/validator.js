
const validation = () => {
    const login = document.getElementById("login-input").value;
    const password = document.getElementById("password-input").value;

    if (login !== "admin") {
        document.getElementById("error-message").innerHTML = "No such login";
        document.getElementById("error-message").style.opacity = 1;
    } else if (password !== "admin") {
        document.getElementById("error-message").innerHTML = "Wrong password";
        document.getElementById("error-message").style.opacity = 1;
    } else {
        document.querySelector("body").innerHTML = "<h1>WELCOME</h1>";
    }
}