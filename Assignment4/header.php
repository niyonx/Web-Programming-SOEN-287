<?php

ini_set("display_errors",1);
error_reporting(E_ALL);
session_start();

if (isset($_POST['Logout']) && !empty($_POST['Logout'])){
    session_destroy();
    session_unset();
    echo '<meta http-equiv="refresh" content="0">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to my Hotel!</title>
    <link rel="stylesheet" type="text/css" href="hotel.css">
    <script type="text/javascript">
        function display_ct() {
            var x = new Date();
            x= x.toUTCString();// changing the display to UTC string
            document.getElementById('ct').innerHTML = x;
            var tt=display_c();
        }

        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh);
        }
    </script>
</head>
<header>
    <table>
        <tr>
            <td>
                <a href="/SOEN-287/Assignment4/search.php"><img src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2716892/580/386/m1/fpnw/wm0/hotel-letter-h-logo-01-.jpg?1495237683&s=cb7978976e00241af78cc3e593bae174"
                                                                alt="Hotel Logo" width="100" height="100"></a></td>
            <td>
                <h1>Hotel Reservation Form</h1>
            </td>
            <td style="position: center; text-align: center; vertical-align: middle;" onload="display_ct()">
                <body onload=display_ct();>
                <span id='ct'></span>
                </body>
<!--                --><?php
//                echo date("F j, Y, g:i a");
//                ?>
            </td>
            <td style="position: absolute; right: 5%;">
                <p>
                    <?php
                    if (isset($_SESSION['username']) && !empty($_SESSION['username']))
                        echo "Welcome, ".$_SESSION['username']."!";
                    ?>
                </p>

                <input type="button" value="Login" onclick="window.location='/SOEN-287/Assignment4/login.php';" style=" background-color: orange;">
                <form action="" style="display: inline-block;" method="post">
                    <input type="submit" name="Logout" value="Logout"style=" background-color: orange;">
                </form>
            </td>
        </tr>
    </table>
</header>