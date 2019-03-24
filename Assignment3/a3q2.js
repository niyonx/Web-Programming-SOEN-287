function validateVariable(){
  var textNode = document.createTextNode;
  var variable = document.getElementById("var");
  textNode = (String)(variable).search(/^[a-z]([a-z]|[A-Z]|_|[0-9])*$/gm);
  document.getElementById("debug").appendChild(textNode);
  if(variable == "" || (String)(variable).search(/^[a-z]([a-z]|[A-Z]|_|[0-9])*$/gm) != -1){
    variable.className = "";
  }else{
    variable.className = "error";
  }
}

function addVariable(){

}