let data_container = document.getElementById("data-container");

function loadData(url) {

    let xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onprogress = () => {
        data_container.innerHTML = '<span class="loader"><span class="loader-inner"></span></span>';
    };

    xhr.onload = () => {
        data_container.innerHTML = xhr.response;
    };

    xhr.send();

}

loadData("general_data.php");