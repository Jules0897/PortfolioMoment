<!--bevat de code nodig voor de footer-->
<link href="../styles/style.css" rel="stylesheet">
<?php
    include "variabelen.php"
?>
<footer id="footer">
    <div>
        <p>
            <?php
            if(isset($_COOKIE["userUsernameCookie"]) == true)
            {
                $naam = $_COOKIE["userUsernameCookie"];
            }
            else
            {
                $naam = "Onbekende gebruiker";
            }

            if(isset($_COOKIE["userCountryCode"]) == true)
            {
                $countryCode = $_COOKIE["userCountryCode"];
                echo "<img src='../images/flags/$countryCode.png'>";
            }
            else
            {
                echo "<a href='../Hoofdstuk6/T3_REA_Oefening_6.1.php'>Geef een land op</a>";
            }
                echo "&copy" . $naam . " | " . $klas . " | " . $datum;
            ?>
        </p>
    </div>
</footer>