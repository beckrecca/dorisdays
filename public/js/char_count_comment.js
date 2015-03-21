var text = document.getElementById("text");
 text.onkeyup = function(){  
    var textString = document.getElementById("text").value;
    var count = 0;
    for (var i = 0; i < textString.length; i++) {
        count++;
    }
    document.getElementById("charcount").innerHTML = 160 - count + " characters left.";
 }