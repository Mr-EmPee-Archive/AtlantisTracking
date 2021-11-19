window.onload = () => {
    setTimeout(disableLoading, 1000);
}

function disableLoading() {
    document.body.removeChild(document.getElementById("loader-wrapper"))
    document.getElementById("main-container").style.display = "flex";
}