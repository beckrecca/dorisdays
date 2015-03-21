var text = document.getElementById("description");
 text.onkeyup = function(){  
    var textString = document.getElementById("description").value;
    var count = 0;
    for (var i = 0; i < textString.length; i++) {
        count++;
    }
    document.getElementById("charcount").innerHTML = 160 - count + " characters left.";
 }