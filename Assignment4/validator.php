<?php
error_reporting(E_ALL);
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Welcome</title>
</head>
<body>


<?php

if (isset($_POST['name']) && isset($_POST['tel']) && !empty($_POST['name']) && !empty($_POST['tel'])){
    $name = $_POST["name"];
    $tel = $_POST["tel"];
}


// tel ^\(\d\d\d\)-\d\d\d-\d\d\d\d$
// name ^[A-Z][a-z]+$

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
        echo "<p>Valid telephone number.</p>";
    }else{
        echo "<p>Invalid telephone number.</p>";
    }
}
?>
</body>
</html>
