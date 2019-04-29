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
    <label>Input your email address: <input type="email" name="email"></label><br><br>
    <input type="submit">
  </form>
  <p>
    <?php
      if(isset($_POST['email']) && !empty($_POST['email'])){
        print "The email is: ".$_POST['email']."<br>";
        print "Your username is: ".substr($_POST['email'],0,strpos($_POST['email'],"@"));
      }
    ?>
  </p>
</body>
</html>