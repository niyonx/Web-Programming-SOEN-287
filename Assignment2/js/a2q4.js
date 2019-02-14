document.addEventListener("DOMContentLoaded", function(event){ 
  function a2q4(){
    var names = ["party", "flight", "cave", "whole", "bubble", "pollution"];
    var count = 0;
    
    for(var i = 0; i <= names.length; i++){
      if((String)(names[i]).search(/(?=(^((pa)|(po))\w*))(?=^[^u]*$)/gm) != -1){
        count++;
      }
    }
    return count;
  }
  var body = document.body;
  var p = body.getElementsByTagName("p");
  var text = document.createTextNode('The number of words starting with "pa" or "po" and not containing the letter "u" is: '+ a2q4());
  p[0].appendChild(text);
});