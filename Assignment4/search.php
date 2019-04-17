<?php
include("header.php");
?>
<body>
<form>
    <fieldset class="fieldset1">
        <legend class="legend1">Reservation Information</legend>

        <label>Number of Rooms (max 5 people per room)</label><input type="number"><br><br>
        <label>Smoker?</label>
        <input type="radio" value="Yes"><label>Yes</label>
        <input type="radio" value="No"><label>No</label><br><br>

        <label>Check-in: </label><input type="date" value="2019-01-01"> <br><br>
        <label>Check-out: </label><input type="date" value="2019-02-01">
    </fieldset>
    <br>
    <fieldset class="fieldset2">
        <legend class="legend2">Room Specifications</legend>
        <ul>
            <li><label>Number of single/double beds:</label>
                <br>
                <input type="checkbox">0/2
                <input type="checkbox">2/0
                <input type="checkbox">1/1
                <input type="checkbox">2/2
                <input type="checkbox">1/2
            </li>
        </ul>
        <ul>
            <li><label>Do you have preferred locations for the hotel?</label>
                <br>
                <input type="checkbox" id="downtown">Downtown
                <input type="checkbox">Montreal East
                <input type="checkbox">Montreal West
                <input type="checkbox">Near the airport
                <input type="checkbox">Oldport
                <input type="checkbox">Don't care
            </li>
        </ul>
        <ul>
            <li><label>Price Range/ per night: </label>
                <br>
                <select id="price">
                    <option value="1">$50 to $100</option>
                    <option value="2">100$ to $200</option>
                    <option value="3">200$ to $400</option>
                    <option value="4">No price limit</option>
                </select>
            </li>
        </ul>
        <ul>
            <li><label>Number of Private Parkings</label>
                <br>
                <input type="radio">0 <br>
                <input type="radio">1 <br>
                <input type="radio">2 <br>
                <input type="radio">3 <br>
                <input type="radio">4 <br>
            </li>
        </ul>
        <ul>
            <li><label>Special Facilities </label>
                <br>
                <input type="checkbox">Minibar
                <input type="checkbox">Balcony
                <input type="checkbox">Pool
                <input type="checkbox">Water Front
                <input type="checkbox">Garden Front
                <input type="checkbox">Gym
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
    <input type="button" onclick="showExpert()" value="Search">
    <input type="reset" value="Start over">
</form>
</body>
<?php
require("footer.php");
?>