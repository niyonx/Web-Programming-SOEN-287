var dom = document;

function getElementAmpersandPipe(){
  var text = dom.getElementById("field");

  addEventListener("blur", convertAmpersandPipe(),false);
}

function convertAmpersandPipe(){
  var text = dom.getElementById("field").value;
  text = text.replace(/\&/g,"and");
  text = text.replace(/\|/g,"or");
  dom.getElementById("output").value = text;
}

window.addEventListener("load", getElementAmpersandPipe(), false );

// function convertAmpersandPipe(){
 
// }