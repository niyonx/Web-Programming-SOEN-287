<footer>
    <div class="footer">
        <p><a onclick="privacyMsg();">Privacy disclaimer</a></p>
    </div>
</footer>
<script>
    function showExpert() {
        var price = document.getElementById("price").value;
        var downtown = document.getElementById("downtown").checked;

        if (price == 1 && downtown == true) {
            document.getElementById("expertText").innerHTML = "It is very difficult to find a hotel room in this price range at Downtown"
            document.getElementById("expert").style.display = "block";
        }else{
            document.getElementById("expert").style.display = "none";
        }
    }

    function privacyMsg(){
        alert("Privacy statement: We promise that your information will not be sold or misused and protects the website builder from any incorrect information.");
    }
</script>
</html>