let menus = document.getElementsByClassName("menu");

for(let i=0; i<menus.length; i++) {

    let menu = menus[i];
    menu.addEventListener('click', handle_menu)

}

function handle_menu(event) {

    let menu = event.target;

    while (!menu.classList.contains("menu")) {
        menu = menu.parentElement;
        if(menu == null) {
            return;
        }
    }

    if(menu.classList.contains("opened")) {
        close_menu(menu);
    } else if(menu.classList.contains("menu")) {
        open_menu(menu);
    }

}

function open_menu(menu) {

    menu.classList.add("opened");

    let content = menu.getElementsByClassName("content")[0];
    content.style.display = "flex";

    document.body.style.overflow = "hidden";
}

function close_menu(menu) {

    let content = menu.getElementsByClassName("content")[0];
    content.style.display = "none";

    menu.classList.remove("opened");

    document.body.style.overflow = "unset";

}