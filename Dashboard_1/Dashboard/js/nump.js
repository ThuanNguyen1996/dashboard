function Function() {
    var x, text;
    for(var i = 0; i < 3; i++){
      if ($('.name')[i].value == "") {
        text = "This value is required.";
        $('.name')[i].style.borderColor = "red";
        $('.name')[i].style.background = "#FAEDEC";
    } else {
        text = "";
        $('.name')[i].style.borderColor = "back";
    }
    $('.err')[i].innerHTML = text;  
    }
}



