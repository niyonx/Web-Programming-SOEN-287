function a2q4(names){
  var count = 0;
  for(var i = 0; i <= names.length; i++){
    if((String)(names[i]).search(/(?=(^((pa)|(po))\w*))(?=^[^u]*$)/gm) != -1){
      count++;
    }
  }
  document.write('The number of words starting with "pa" or "po" and not containing the letter "u" is: '+ count);
}