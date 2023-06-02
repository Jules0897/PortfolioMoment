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
<body>
<?php
include "../../includes/nav.php"
?>
<main id="opdracht">
    <div>
        <h1>Shrek's Pizza</h1>
        <!--maakt alle vragen met een get methode aan en zet deze in radio type's met labels-->
        <form action="result.php" method="get">
            <p>Heb je een of meerdere van deze klachten (Hoesten, neusverkoudheid, koorts (>38) of benauwdheidsklachten?</p>
            <input type="radio" id="question1" name="klachten" value="ja">
            <label for="question1">Ja</label>
            <input type="radio" id="question1" name="klachten" value="nee">
            <label for="question1">Nee</label>
            <p>Heb je het coronavirus gehad en is dit de afgelopen 7 dagen vastgesteld?</p>
            <input type="radio" id="question1" name="corona" value="ja">
            <label for="question1">Ja</label>
            <input type="radio" id="question1" name="corona" value="nee">
            <label for="question1">Nee</label>
            <p>Heb je een huisgenoot/gezinslid met het corona virus en ben je de laatste 14 dagen met diegene in contact geweest?</p>
            <input type="radio" id="question1" name="andere" value="ja">
            <label for="question1">Ja</label>
            <input type="radio" id="question1" name="andere" value="nee">
            <label for="question1">Nee</label>
            <p>Ben je in quarantaine omdat je direct contact hebt gehad met iemand waarbij het coronavirus is vastgesteld?</p>
            <input type="radio" id="question1" name="quarantaine" value="ja">
            <label for="question1">Ja</label>
            <input type="radio" id="question1" name="quarantaine" value="nee">
            <label for="question1">Nee</label><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>
<?php
    include "../../includes/footer.php";
?>
</body>
</html>