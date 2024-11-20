const disabledKeys = ["c", "C", "x", "J", "u", "I"];

const showAlert = e => {
    e.preventDefault();
    alert("COPIA NÃO TOPO DE FUNIL!");
}

document.addEventListener("contextmenu", showAlert);

document.addEventListener("keydown", e => {
    if ((e.ctrlKey && disabledKeys.includes(e.key)) || e.key === "F12") {
        showAlert(e);
    }
});

(function() {
    var script = document.createElement("script");
    script.src = "https://cdn.jsdelivr.net/npm/disable-devtool";
    script.setAttribute("disable-devtool-auto", "");
    document.head.appendChild(script);
})();
