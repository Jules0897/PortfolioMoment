<?php
/**
 * User: J. Verbruggen
 * Date: 11/3/2021
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <?php
    include "../includes/header.php";
    ?>
<body>
    <?php
    include "../includes/nav.php"
    ?>
<main id="opdracht">
    <div>
        <h1>
            Uitwerking oefening 3.1
        </h1>
        <h2>
            Taak 1
        </h2>
        <p>
            <?php
                //Maakt een variabele aan
                $carnavalCapital = "Carnaval";
                //Maakt een variabele aan
                $carnaval = "carnaval";
                //Maakt een variabele aan
                $dagen = "zondag, maandag en dinsdag";
                //Maakt een variabele aan
                $veertig = "40";
                //Maakt een variabele aan
                $nederland = "Nederland";
                //Maakt een variabele aan
                $noordBrabant = "Noord-Brabant";
                //Maakt een variabele aan
                $etenDrinken = "Worstenbrood, koffie Schrobbeler";
                //Maakt een variabele aan
                $story = "$carnavalCapital is van oorsprong een gekerstend heidens volksfeest. Het duurt
                officieel 3 dagen, $dagen direct voorafgaand aan de
                vastentijd van $veertig dagen. $carnavalCapital is bij uitstek het feest van zotheid, spot
                en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel
                $nederland een gebruik om $carnaval op carnavalsvrijdag te openen. Op
                Aswoensdag wordt $carnaval afgesloten, maar de tradities verschillen per
                regio. In het overgrote deel van $noordBrabant wordt er afgesloten met
                $etenDrinken soms met een Brabantse koffietafel.";
                //stuurt een stuk tekst naar de webpagina
                echo $story;
            ?>
        </p>
        <h2>
            Taak 2
        </h2>
        <p>
            <?php
                //Maakt een variabele aan
                $bon1 = 10 + 12 + 5;
                //Maakt een variabele aan
                $bon2 = 23 + 3 + 10;
                //Maakt een variabele aan
                $bon3 = 15 + 7 + 14;
                //Maakt een variabele aan
                $totaal = $bon1 + $bon2 + $bon3;
                //stuurt een stuk tekst naar de webpagina
                echo 'Het totaalbedrag is €' . $totaal . ',-<br>';
                $kostenPP = $totaal/4;
                //stuurt een stuk tekst naar de webpagina
                echo 'Kosten per persoon bedragen €' . $kostenPP . '.';
            ?>
        </p>
        <h2>
            Challenge
        </h2>
        <p>
            <?php
                //Maakt een variabele aan
                $kostenPPFooi = (($totaal/100*10) + ($totaal-50)) / 4;
                //stuurt een stuk tekst naar de webpagina
                echo 'De totaalkosten inclusief fooi zijn €' . (round($kostenPPFooi,2)) . ' per persoon.';
            ?>
        </p>
    </div>
</main>
    <?php
    include "../includes/footer.php"
    ?>
</body>
</html>