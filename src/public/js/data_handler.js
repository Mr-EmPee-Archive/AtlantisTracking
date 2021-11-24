let data_container = document.getElementById("data-container");

function loadData(url) {

    //TODO Fix clickable homepage (width: 100%)
    let back = '';
    if(url != "default") {
        back = '<div onclick="selectTier(null, \'default\')" class="back"><img src="assets/back.svg"><p>Back</p></div>';
    } else {
        url = 'general_data.php';
    }

    let xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onprogress = () => {
        data_container.innerHTML = '<span class="loader"><span class="loader-inner"></span></span>';
    };


    xhr.onload = () => {
        data_container.innerHTML =  back + xhr.response;
    };

    xhr.send();

}

loadData("default");