function calculateTotal() {
  var rosesNo = document.getElementById("rose").value;
  var lilyNo = document.getElementById("lily").value;
  var scallaNo = document.getElementById("scalla").value;
  var orchidNo = document.getElementById("orchid").value;
  var daisyNo = document.getElementById("daisy").value;
  // var delivery = (document.getElementById("delivery").checked;
  var total = (rosesNo*5.5)+(lilyNo*7.5)+(scallaNo*4)+(orchidNo*8)+(daisyNo*7)+delivery;

  var textNode = document.createTextNode("Red roses(units = " + rosesNo + "): $" + 5.5 * rosesNo + " <br>" +
    "Yellow lily (units = " + lilyNo + "): $" + lilyNo * 7.5 + " <br>" +
    "White Mini Calla (units = " + scallaNo + "): $" + scallaNo * 4 + " <br>" +
    "Pink Orchid (units = " + orchidNo + "): $" + orchidNo * 8 + " <br>" +
    "Orange daisy (units = " + daisyNo + "): $" + daisyNo * 7 + " <br>" +
    "Delivery: $"+delivery+"<br><br>"+
    "Final Total: $"+total);
  var para = document.createElement("p");
  para.appendChild(textNode);
  document.body.appendChild(para);
}