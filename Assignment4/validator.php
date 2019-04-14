<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Welcome</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: niyon
 * Date: 13/04/19
 * Time: 10:10 PM
 */


$name = $_POST["name"];
$tel = $_POST["tel"];

// tel ^\(\d\d\d\)-\d\d\d-\d\d\d\d$
// name ^[A-Z][a-z]+$

//if (!isset($tel) or empty($tel)  $tel != null && preg_match('^\(\d\d\d\)-\d\d\d-\d\d\d$',$tel)){
//    echo "Valid telephone number. ";
//}else{
//    echo "Invalid telephone number. ";
//}
//
//if (isset($name) && $name != null && preg_match('^[A-Z][a-z]+$',$name)){
//    echo "Valid last name.";
//}else{
//    echo "Invalid last name.";
//}


if (!isset($_POST["name"]) or empty($_POST["name"]) or
!isset($_POST["tel"]) or empty($_POST["tel"])) {
    echo "<p>Missing Last name and/or telephone number</p>";
} else{
    if (preg_match("/^[A-Z][a-z]+$/", $name)) {
        echo "<p>Valid last name.</p>";
    } else {
        echo "<p>Invalid last name.</p>";
    }
    if (preg_match("/^\(\d\d\d\)-\d\d\d-\d\d\d\d$/", $tel)){
        echo "<p>Valid telephone number</p>";
    }else{
        echo "<p>Invalid telephone number</p>";
    }
}


//$line = "aassDhsh";
// perform a case-Insensitive search for the word "Vi"
//
//if (preg_match("/\b^[A-Z][a-z]+$\b/i", $line)) :
//    print "Match found!";
//endif;
?>
</body>
</html>
