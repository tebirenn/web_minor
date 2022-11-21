let indicator = 0;

const increment = () => {
    document.getElementById("indicator").innerHTML = indicator;
    indicator++;
}

setInterval(increment, 1000);
increment();