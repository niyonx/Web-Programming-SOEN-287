<?php

ini_set("display_errors",1);
error_reporting(E_ALL);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to my Hotel!</title>
    <style>
        body {
            background-color: #e6faff;
        }

        .fieldset1 {
            border-color: #00cc00;
            background-color: #e6ffe6;
        }

        .legend1 {
            color: #00cc00;
            font-size: 1.2em;
        }

        .fieldset2 {
            border-color: #ff6600;
            background-color: #fff5e6;
        }

        .legend2 {
            color: #ff6600;
            font-size: 1.2em;
        }

        label {
            font-weight: bold;
        }

        .fieldset1>label {
            color: #22dd22;
        }

        .fieldset2>ul>li>label {
            color: #ffaa22;
        }

        .footer {
            width: 100%;
            background-color: darkslategray ;
            color: white;
            text-align: center;
            position: absolute;
            bottom: 1% ;
            height: auto ;
            margin: 0px;
        }
    </style>
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
            <td>
                <?php
                echo date("F j, Y, g:i a");
                ?>
            </td>
            <td style="position: absolute; right: 5%;">
                <p>
                    <?php
                        if (isset($_SESSION['username']) && !empty($_SESSION['username']))
                            echo "Welcome, ".$_SESSION['username']."!";
                    ?>
                </p>
                <input type="button" value="Login" onclick="window.location='/SOEN-287/Assignment4/login.php';" style=" background-color: orange;">
            </td>
        </tr>
    </table>
</header>