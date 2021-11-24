let map = document.getElementById("map");
let continents = map.getElementsByClassName("continent");
let continent_pin_positions = [["-110%", "-40%"], ["0%", "-110%"], ["110%", "-40%"]];

const continent_handler = (e) => {

    let continent = e.target;
    while(!continent.classList.contains("continent")) {
        continent = continent.parentElement;

        if(continent == null) {
            return;
        }

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

for(let i=0; i<continents.length; i++) {
    continents[i].addEventListener('click', continent_handler)
}

function selectTier(element, tier) {

    let lastSelectTier = map.getElementsByClassName("selected");
    while(lastSelectTier.length > 0) {
        lastSelectTier[0].classList.remove("selected");
    }

    if(element != null) {
        element.classList.add("selected")
        let continent = element.parentElement;
        if (continent.classList.contains("continent")) {
            continent.classList.add("selected");
        }
        loadData("tiers/" + tier + ".php");
    } else {
        loadData('default');
    }

}
