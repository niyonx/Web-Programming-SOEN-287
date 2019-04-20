<?php
require("header.php");


function loginContains($string){
    $handle = fopen('login.txt', 'r');
    $valid = false; // init as false
    while (($buffer = fgets($handle)) !== false) {
        if (strpos($buffer, "$string") !== false) {
            $valid = TRUE;
            break; // Once you find the string, you should break out the loop.
        }
    }
    fclose($handle);
    return $valid;
}

function newAccount($string){
    $fp = fopen('login.txt', 'a');
    fwrite($fp, $string.PHP_EOL);
    fclose($fp);
}
?>
<br><br><br>
<form method="post" action="">
    <input type="text" name="username" pattern="[a-zA-Z0-9-]+" placeholder="Username" autofocus/><br><br>
    <input type="password" name="password" pattern="[a-zA-Z0-9-]+" minlength="6" maxlength="50"  placeholder="Password"/>
    <br><br><br>
    <fieldset class="fieldset1">
        <legend class="legend1">Login Criteria</legend>
        <ul>
            <li>Both username and password can only contain letters and digits.</li>
            <li>The password should be at least 6 characters long.</li>
            <li>The password should have at least one letter and one digit.</li>
        </ul>
        <p style="color: red">
            <?php
            if (isset($_POST['username']) && !empty($_POST['username'] &&
                    isset($_POST['password']) && !empty($_POST['password']))){
                if (!preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/",$_POST['password'])){
                    echo "The password does not have at least one letter and one digit.";
                }else{
                    if (loginContains($_POST['username'])){
                        if (loginContains($_POST['username'].":".$_POST['password'])){
                            $_SESSION['username'] = $_POST['username'];
                            echo "<meta http-equiv='refresh' content='0;url=success.php'>";
                        }else{
                            echo "Invalid login. Please try again.";
                        }
                    }else{
                        newAccount($_POST['username'].":".$_POST['password']);
                        echo "New account created";
                        $_SESSION['username'] = $_POST['username'];
                        echo "<meta http-equiv='refresh' content='0;url=success.php'>";
                    }
                }
            }
            ?>
        </p>
    </fieldset>
    <br><br>
    <button type="submit">Log me in</button>
</form>

<?php
require ("footer.php");
?>
