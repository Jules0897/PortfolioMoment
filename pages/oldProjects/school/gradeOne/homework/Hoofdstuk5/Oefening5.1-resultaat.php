<?php
/**
 * User: J. Verbruggen
 * Date: 31/3/2021
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
        <h1>Uitschrijfformulier KW1C</h1>
        <hr>
        <p>Voor en achternaam</p>
        <p>Studentennummer</p>
        <p>Datum van uitschrijving</p>
        <p>Reden van uitschrijving</p>
        <p>Leerjaar</p>
        <p>Aanmeldden bij de succesklas:</p>
        <p>Verwijderen gegevens:</p>
        <p>Reden van uitschrijving:</p>
        <?php
            echo $_GET["reden2"]
        ?>
        <div id="resultaten">
            <?php
            $succesklas="Er is niet aangemeld voor de succesklas";

            $gegevens="Gegevens hoeven niet te worden verwijderd";

            if(isset($_GET["succesklas"]))
            {
                $succesklas="JA";
            }
            if(isset($_GET["gegevens"]))
            {
                $gegevens="JA";
            }

                echo "<p>" . $_GET["naam"] . "</p>";
                echo "<p>" . $_GET["nummer"] . "</p>";
                echo "<p>" . $_GET["datum"] . "</p>";
                echo "<p>" . $_GET["reden"] . "</p>";
                echo "<p>" . $_GET["leerjaar"] . "</p>";
                echo "<p>" . $succesklas . "</p>";
                echo "<p>" . $gegevens . "</p>";
            ?>
        </div>
    </div>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>