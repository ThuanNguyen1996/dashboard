function myFunction() {
    var x, text;
     
    for (var i = 0; i < 9; i++)
    {
        if ($('.numb')[i].value == "") {
            text = "please put something here";
            $('.numb')[i].style.borderColor = "red";
        } else {
            text = "";
            $('.numb')[i].style.borderColor = "black";
        }
        
        
        $('.error')[i].innerHTML = text;
        $('.error')[i].style.padding = "5px 10px";
        
        
    }
}



