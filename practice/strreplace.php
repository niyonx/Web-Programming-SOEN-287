<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Welcome to strreplace</h2>
  <ul>
    <li>Replace all the instances of 'the' with 'that'</li>
    <li>Replace the words starting & ending with a number with
the word “STRANGE WORD”</li>
    <li>Replace 514-333-4444 with the word “PHONE NUMBER”</li>
  </ul>
  <p>
    Example: the quick 1brownfox2 jumps over the 0lazy0 dog. 514-333-4444 <br>
    <?php
      $string = "the quick 1brownfox2 jumps over the 0lazy0 dog. 514-333-4444";
      $strArr = explode(" ",$string);
      for($i=0 ;$i<sizeof($strArr) ; $i++){
        if (strtoupper($strArr[$i]) == "THE"){
          $strArr[$i] = "that";
        }else if(preg_match("/^\d\d\d-\d\d\d-\d\d\d\d$/", $strArr[$i])){
          $strArr[$i] = "PHONE NUMBER";
        }
        else if(is_numeric(substr($strArr[$i],0,1)) && is_numeric(substr($strArr[$i],-1))){
          $strArr[$i] = "STRANGE WORD";
        }
      }
      print implode(" ",$strArr);
    ?>
  </p>
  
  <form method="post">
    <label>Input: <input type="text" name="sentence"></label><br><br>
    <input type="submit">
  </form>
  <p>
    <?php
      if(isset($_POST['sentence']) && !empty($_POST['sentence'])){
        $string = $_POST['sentence'];
        $strArr = explode(" ",$string);
      for($i=0 ;$i<sizeof($strArr) ; $i++){
        if (strtoupper($strArr[$i]) == "THE"){
          $strArr[$i] = "that";
        }else if(preg_match("/^\d\d\d-\d\d\d-\d\d\d\d$/", $strArr[$i])){
          $strArr[$i] = "PHONE NUMBER";
        }
        else if(is_numeric(substr($strArr[$i],0,1)) && is_numeric(substr($strArr[$i],-1))){
          $strArr[$i] = "STRANGE WORD";
        }
      }
      print implode(" ",$strArr);
      }
    ?>
  </p>
</body>
</html>