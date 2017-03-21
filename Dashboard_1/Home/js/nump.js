function Function() {
    var x, text;
    if ($('.name')[0].value == "") {
        text = "This value is required.";
    } else {
        text = "";
    }
    $('.err')[0].innerHTML = text;
    
    if ($('.name')[1].value == "") {
        text = "This value is required.";
    } else {
        text = "";
    }
    $('.err')[1].innerHTML = text;
    if ($('.name')[2].value == "") {
        text = "This value is required.";
    } else {
        text = "";
    }
    $('.err')[2].innerHTML = text;
}



