<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

session_start();

if (isset($_POST['reset']) && $_POST['reset']=="yes"){
    session_unset();
    session_destroy();
}else if(isset($_POST['username']) && !empty($_POST['username'])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["visits"] = 0;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A4Q2</title>
</head>
<body>
    <h1>Assignment 4 Question 2 </h1>
    <form action="" method="post">
        <?php
            if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
                ?>
            <label>What is your name?<input type="text" name="username"><input type="submit" value="Send"></label>
                <?php
            }else {
                $_SESSION["visits"]++;
                ?>
                <h3>Hello <?php echo $_SESSION['username'] ?>!</h3>
                <p>
                    You have been there <?php echo $_SESSION["visits"];?> times.
                </p>

                <input type="submit" value="Reset">
                <input type="hidden" name ="reset" value="yes">

                <?php
            }
                ?>
    </form>
</body>
</html>

<?php
if (isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
}
?>