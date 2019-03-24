function validateVariable(){
  var variable = document.getElementById("var").value;
  if(variable == "" || (String)(variable).search(/^[a-z]([a-z]|[A-Z]|_|[0-9])*$/gm) != -1){
    document.getElementById("var").className = "";
  }else{
    document.getElementById("var").className = "error";
  }
}

function addVariable(){
  var variable = document.getElementById("var").value;
  var liNode = document.createElement("li");
  var textNode = document.createTextNode(variable);
  if(!document.getElementById("var").classList.contains("error") && !document.getElementById("varList").innerHTML.includes(variable)){
    liNode.appendChild(textNode);
    document.getElementById("varList").appendChild(liNode);
  }
}