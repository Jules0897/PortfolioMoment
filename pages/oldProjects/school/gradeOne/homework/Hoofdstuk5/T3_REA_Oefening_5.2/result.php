<?php
/**
 * User: J. Verbruggen
 * Date: 14/3/2021
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<?php
include "../../includes/header.php";
?>
<?php
//checked of overal nee is ingevuld of niet en geeft hier een passende achtergrond mee
if($_GET["klachten"] == "nee" && $_GET["corona"] == "nee" && $_GET["andere"] == "nee" && $_GET["quarantaine"] == "nee")
{
    echo "<body id='groen'>";
}
else
{
    echo "<body id='rood'>";
}
?>
<?php
include "../../includes/nav.php"
?>
<main id="opdracht">
    <div>
        <?php
        //zet de default timezone naar Amsterdam
        date_default_timezone_set("Europe/Amsterdam");
        //checked of overal nee is ingevuld of niet en geeft hierbij een passend bericht mee
            if($_GET["klachten"] == "nee" && $_GET["corona"] == "nee" && $_GET["andere"] == "nee" && $_GET["quarantaine"] == "nee")
            {
                echo "<p>U verklaart hierbij dat u op " . date("d/m/Y H:i:s") . " geen klachten hebt. Laat deze pagina zien bij aankomst van het restaurant. Tot snel, geniet ervan en eet smakelijk!</p>";
            }
            else
            {
                echo "<p>Wij mogen u met deze klachten helaas niet toelaten. Wij hopen u snel weer te mogen ontvangen in ons restaurant.</p>";
            }
        ?>
    </div>
</main>
<?php
include "../../includes/footer.php";
?>
</body>
</html>