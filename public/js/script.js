console.log("COBA");

var menuMobile = document.getElementById("menuMobile");

menuMobile.style.display = "none";

function togglemenu() {
    if (menuMobile.style.display == "none") {
        menuMobile.style.display = "flex";
    } else {
        menuMobile.style.display = "none";
    }
}
