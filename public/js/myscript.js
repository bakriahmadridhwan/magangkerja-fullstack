// const menuToggle = document.querySelector(".menu-toggle input");
// const nav = document.querySelector(".links");

// menuToggle.addEventListener("click", function () {
//     nav.classList.toggle("slide");
// });

// /* When the user clicks on the button,
// toggle between hiding and showing the dropdown content */
// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// // Close the dropdown menu if the user clicks outside of it
// window.onclick = function (event) {
//     if (!event.target.matches(".dropbtn")) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains("show")) {
//                 openDropdown.classList.remove("show");
//             }
//         }
//     }
// };

// navbar
const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector(".links");

menuToggle.addEventListener("click", function () {
    nav.classList.toggle("slide");
});

/* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};

// coba ajax live search

$(document).ready(function () {
    $("#eventsearch").on("keyup", function () {
        var query = $(this).val();
        $.ajax({
            url: "/action",
            type: "GET",
            dataType: "json",
            data: { eventsearch: query },
            success: function (data) {
                $("#rowevent").html(data);
            },
        });
    });
});
