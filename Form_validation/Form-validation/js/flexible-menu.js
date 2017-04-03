$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".type-25").toggleClass("toggled");
    });
});