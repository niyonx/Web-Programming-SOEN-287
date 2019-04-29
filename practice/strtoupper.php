<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Welcome to string formatter</h2>
  <form method="post">
    <label>Input a word: <input type="text" name="word"></label><br><br>
    <label>Input a sentence: <input type="text" name="sentence"></label><br><br>
    <input type="submit">
  </form>
  <p>
    <?php
      if(isset($_POST['word']) && !empty($_POST['word']) && isset($_POST['sentence']) && !empty($_POST['sentence'])){
        print "The word is: ".$_POST['word']."<br>";
        print "The sentence is: ".$_POST['sentence'];
        print "<br><br>";
        print "Uppercase: ".strtoupper($_POST['word'])."<br>";
        print "First character to uppercase: ".strtoupper(substr($_POST['word'],0,1)).substr($_POST['word'],1)."<br>";
        print "First character of all words uppercase: ";
        $array_sentence = explode(' ',$_POST['sentence']);
        // print_r($array_sentence);
        foreach($array_sentence as $value){
          print strtoupper(substr($value,0,1)).substr($value,1)." ";
        }
      }
    ?>
  </p>
</body>
</html>