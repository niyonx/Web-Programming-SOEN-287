<?php
include("header.php");

?>
    <body>
    <!--Array ( [noRooms] => 3 [smoking] => Yes [beds] => Array ( [0] => 1/1 [1] => 1/2 )
    [location] => Array ( [0] => on [1] => on ) [noParking] => 1 [special] => Array ( [0] => minibar [1] => pool ) )-->
    <!--room3:room4:smokingNo:beds1/1:beds1/2:locationdowntown:noParking2:specialpool=Myriad Hotel at Guy Concordia, 1190 Guy Street for 80$ per night-->
    <form action="result.php" method ="post" onchange="showExpert()">
        <fieldset class="fieldset1">
            <legend class="legend1">Reservation Information</legend>

            <label>Number of Rooms (max 5 people per room)</label><input type="number" name="noRooms" value="1"><br><br>
            <label>Smoker?</label>
            <input type="radio" name="smoking" value="Yes" checked><label>Yes</label>
            <input type="radio" name="smoking" value="No"><label>No</label><br><br>

            <label>Check-in: </label><input type="date" value="2019-01-01"> <br><br>
            <label>Check-out: </label><input type="date" value="2019-02-01">
        </fieldset>
        <br>
        <fieldset class="fieldset2">
            <legend class="legend2">Room Specifications</legend>
            <ul>
                <li><label>Number of single/double beds:</label>
                    <br>
                    <input name="beds[]" type="checkbox" value="0/2" checked>0/2
                    <input name="beds[]" type="checkbox" value="2/0">2/0
                    <input name="beds[]" type="checkbox" value="1/1">1/1
                    <input name="beds[]" type="checkbox" value="2/2">2/2
                    <input name="beds[]" type="checkbox" value="1/2">1/2
                </li>
            </ul>
            <ul>
                <li><label>Do you have preferred locations for the hotel?</label>
                    <br>
                    <input name="location[]" type="checkbox" id="downtown" value="downtown" checked>Downtown
                    <input name="location[]" type="checkbox" value="mtleast">Montreal East
                    <input name="location[]" type="checkbox" value="mtlwest">Montreal West
                    <input name="location[]" type="checkbox" value="mtlairport">Near the airport
                    <input name="location[]" type="checkbox" value="mtloldport">Oldport
                    <input name="location[]" type="checkbox" value="dontcare">Don't care
                </li>
            </ul>
            <ul>
                <li><label>Price Range/ per night: </label>
                    <br>
                    <select id="price" name="price">
                        <option value="1" selected="selected">$50 to $100</option>
                        <option  value="2">100$ to $200</option>
                        <option  value="3">200$ to $400</option>
                        <option  value="4">No price limit</option>
                    </select>
                </li>
            </ul>
            <ul>
                <li><label>Number of Private Parkings</label>
                    <br>
                    <input name="noParking" type="radio" value="0" checked>0 <br>
                    <input name="noParking" type="radio" value="1">1 <br>
                    <input name="noParking" type="radio" value="2">2 <br>
                    <input name="noParking" type="radio" value="3">3 <br>
                    <input name="noParking" type="radio" value="4">4 <br>
                </li>
            </ul>
            <ul>
                <li><label>Special Facilities </label>
                    <br>
                    <input name="special[]" type="checkbox" value="minibar" checked>Minibar
                    <input name="special[]" type="checkbox" value="balcony">Balcony
                    <input name="special[]" type="checkbox" value="pool">Pool
                    <input name="special[]" type="checkbox" value="waterfront">Water Front
                    <input name="special[]" type="checkbox" value="gardenfront">Garden Front
                    <input name="special[]" type="checkbox" value="gym">Gym
                </li>
            </ul>
        </fieldset>
        <fieldset id="expert" class="fieldset1" style="display:none;">
            <legend class="legend2">Expert Suggestion</legend>
            <p id="expertText">

            </p>
        </fieldset>
        <br>
        Let's see what we can find...
        <br><br>
        <input type="submit" value="Search">
        <input type="reset" value="Start over">
    </form>
    </body>
<?php
require("footer.php");
?>