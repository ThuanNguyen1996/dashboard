function Function1() {
    var text;
    for (var i = 0; i < 5; i++) {
        if ($('.fullname')[i].value == "") {
            text = "This value is required.";
            $('.fullname')[i].style.borderColor = "red";
            $('.fullname')[i].style.background = "#FAEDEC";
        } else {
            text = "";
            $('.fullname')[i].style.borderColor = "back";
        }
        $('.value')[i].innerHTML = text;

    }

}



