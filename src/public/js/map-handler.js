let continent = document.getElementById("asia");
let continent_pin_positions = [["-120%", "0%"], ["-50%", "-90%"], ["55%", "-90%"], ["120%", "0%"]];

const continent_handler = (e) => {

    let continent = e.target;
    if(e.target.parentElement.classList.contains("continent")) { //If user click img and not the div
        continent = e.target.parentElement;
    }

    let i = 0;
    continent.childNodes.forEach( (child) => {

        if(child.nodeName === "DIV") {
            if(child.style.transform !== "translate(0px)") {
                child.style.transform = "translate(0px)";
            } else {
                child.style.transform = "translate(" + continent_pin_positions[i][0] + "," + continent_pin_positions[i][1] + ")";
            }
            i++;
        }
    });

}

continent.addEventListener('click', continent_handler);

