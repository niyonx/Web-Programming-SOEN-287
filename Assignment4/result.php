<?php
require ("header.php");

function hotelContains($string){
    $handle = fopen('hotelrooms.txt', 'r');
    $hotelInfo=""; // init as false
    while (($buffer = fgets($handle)) !== false) {
        if (strpos($buffer, "$string") !== false) {
            $hotelInfo = substr($buffer,strpos($buffer,"="));
            break; // Once you find the string, you should break out the loop.
        }
    }
    fclose($handle);
    return $hotelInfo;
}

function addHotel($string){
    $fp = fopen('hotelrooms.txt', 'a');
    fwrite($fp, $string.PHP_EOL);
    fclose($fp);
}

function getHotels($string){
    $handle = fopen('hotelrooms.txt', 'r');
    $string = substr($string,5,-1);
    $hotelInfo="";
    $hotelArray = array();
    while (($buffer = fgets($handle)) !== false) {
        if (strpos($buffer, "$string") !== false) {
            $hotelInfo = $buffer;
            array_push($hotelArray, unserialize($hotelInfo));
        }
    }
    fclose($handle);
    return $hotelArray;
}

?>
    <body>
    <fieldset id="expert" class="fieldset1">
        <legend class="legend2">Search Results</legend>
        <p>
        <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>
        <?php
        // Create new entries for hotels.

        //        if (isset($_POST) && !(empty($_POST))){
        //            $hotelData = $_POST;
        //            $hotelData["Hotel"]["name"] = "Panama Hotel";
        //            $hotelData["Hotel"]["area"] = "Salipera Village";
        //            $hotelData["Hotel"]["street"] = "1190 Boul de Maisonneuve";
        //            $hotelData["Hotel"]["price"] = "375$";
        //            addHotel(serialize($hotelData));
        //        }

        ?>
        <ol>

            <?php
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])){

                $hotels = getHotels(serialize($_POST));
                $noResults=0;
                $list="";
                foreach ($hotels as $item){
                    $noResults++;
                    $list.= "<li style=\"margin: 10px 0;\">".$item['Hotel']['name']." in ".$item['Hotel']['area'].", ".$item['Hotel']['street']." at ".$item['Hotel']['price']." per night.</li>";
                }
                echo "<h4>".$noResults." result(s) found matching your criterias. </h4>";
                echo $list;

            }else{
                $hotels = getHotels(serialize($_POST));
                $noResults=0;
                $list="";
                foreach ($hotels as $item){
                    $noResults++;
                    $list.= "<li style=\"margin: 10px 0;\">".$item['Hotel']['area']."&nbsp&nbsp<input type=\"button\" onclick=\"location.href='/SOEN-287/Assignment4/login.php';\" value=\"Login to show the address\" style=\" background-color: orange;\"/></li>";
                }
                echo "<h4>".$noResults." result(s) found matching your criterias. </h4>";
                echo $list;
            }
            ?>
        </ol>
        </p>
    </fieldset>
    </body>
<?php
require ("footer.php");
?>