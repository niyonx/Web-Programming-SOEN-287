<?php
/**
 * Created by PhpStorm.
 * User: niyon
 * Date: 12/04/19
 * Time: 4:46 PM
 */

$name = $_GET["name"];
$tel = $_GET["tel"];

// tel ^\(\d\d\d\)-\d\d\d-\d\d\d$
// name ^[A-Z][a-z]+$
?>

<!doctype html>
<html lang="`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>
    Welcome to the contact information validator!
</h2>
<form action="validator.php">
    Last Name: <input type="text" name="name" id="name" size="30"><br><br>
    Telephone Number: <input type="text" name="tel" id="tel" placeholder="(ddd)-ddd-ddd"><br><br>
    <input type="submit" value="Validate">
</form>
</body>
</html>
