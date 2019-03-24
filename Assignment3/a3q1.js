function search(){
  var form = document.getElementById("myForm");
  var count = 0;
  var searchText = form.searchText.value;
  var split = form.split.value;
  var regex = form.regex.value;
  var mod = form.elements[mod];
  var theRegEx = new RegExp(regex,mod);
  var paraText = document.getElementById("paragraph");
  if(searchText!=""){
    if (split != ""){
      var searchArr = searchText.split(split);
    }else{
      var searchArr  = searchText;
    }
    for(var i = 0; i < searchArr.length; i++){
      if(theRegEx.test(searchArr[i]) == true)
      count++; 
    }
  }
  paraText.innerHTML="There is a total of "+searchArr.length+" non-empty words in the text, including "+count+" words matching the regex"
}