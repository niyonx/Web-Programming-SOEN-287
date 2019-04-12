function calculateTotal() {
  var rosesNo = document.getElementById("rose").value;
  var lilyNo = document.getElementById("lily").value;
  var scallaNo = document.getElementById("scalla").value;
  var orchidNo = document.getElementById("orchid").value;
  var daisyNo = document.getElementById("daisy").value;
  if ((rosesNo == "") || (lilyNo == "") || (scallaNo == "") || (orchidNo == "") || (daisyNo == ""))
    alert("Please fill in all fields");
  else {

    if (document.getElementById("s").checked == true) {
      var delivery = 2;
    } else if (document.getElementById("p").checked == false) {
      var delivery = 6;
    }

    var total = (rosesNo * 5.5) + (lilyNo * 7.5) + (scallaNo * 4) + (orchidNo * 8) + (daisyNo * 7) + delivery;

    var textNode = document.createTextNode("Red roses(units = " + rosesNo + "): $" + 5.5 * rosesNo + " \n" +
      "Yellow lily (units = " + lilyNo + "): $" + lilyNo * 7.5 + " \n" +
      "White Mini Calla (units = " + scallaNo + "): $" + scallaNo * 4 + " \n" +
      "Pink Orchid (units = " + orchidNo + "): $" + orchidNo * 8 + " \n" +
      "Orange daisy (units = " + daisyNo + "): $" + daisyNo * 7 + " \n" +
      "Delivery: $" + delivery + "\n\n" +
      "Final Total: $" + total);
    var para = document.createElement("p");
    para.appendChild(textNode);
    document.body.appendChild(para);
  }
}