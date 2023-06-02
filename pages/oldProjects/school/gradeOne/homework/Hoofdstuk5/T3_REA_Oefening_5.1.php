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
        <h1>Uitschrijf formulier KW1C</h1>
        <hr>
        <form action="Oefening5.1-resultaat.php" method="get">
            <label for="question1">Voor en achternaam</label>
            <input class="vragen51" type=”text” id="question1" name="naam"><br><br>
            <label for="question2">Studentennummer</label>
            <input class="vragen51" type=”text” id="question2" name="nummer"><br><br>
            <label for="question3">Datum van uitschrijving</label>
            <input class="vragen51" type=”text” id="question3" name="datum"><br><br>
            <label for="question4">Reden van uitschrijving</label>
            <select class="vragen51" id="question4" name="reden">
                <option value="Verkeerde keuze">Verkeerde keuze</option>
                <option value="Andere school">Andere school</option>
                <option value="Vriend(in) gaat naar een andere school">Vriend(in) gaat naar een andere school</option>
                <option value="Blijven zitten">Blijven zitten</option>
            </select><br>
            <p>Leerjaar</p>
            <input class="vragen511" type="radio" id="question6" name="leerjaar" value="1e leerjaar">
            <label class="vragen512" for="question6">1e leerjaar</label><br><br>
            <input class="vragen511" type="radio" id="question7" name="leerjaar" value="2e leerjaar">
            <label class="vragen512" for="question7">2e leerjaar</label><br><br>
            <input class="vragen511" type="radio" id="question8" name="leerjaar" value="3e leerjaar">
            <label class="vragen512" for="question8">3e leerjaar</label><br><br>
            <input type="checkbox" name="succesklas" id="question9">
            <label for="question9">Ik wil me aanmelden bij de succesklas</label><br>
            <input type="checkbox" name="gegevens" id="question10">
            <label for="question10">Verwijder mijn gegevens uit het systeem</label><br><br>
            <label for="question10">Geef hieronder de reden van je uitschrijving op</label><br><br>
            <input class="vragen513" type=”text” id="question10" name="reden2"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>