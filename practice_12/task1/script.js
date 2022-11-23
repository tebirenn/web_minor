const percent = document.getElementById("percent");
const progress = document.getElementById("progress");
const progressBar = document.getElementById("progress-bar")

let percentage = 0;

const loading = () => {
    if (percentage <= 100) {
        percent.innerHTML = `${percentage}%`;
        progress.style.width = `${percentage}%`;
        percentage++;
    } else {
        percent.innerHTML = "Completed!";
    }
}

setInterval(loading, 100);
loading();