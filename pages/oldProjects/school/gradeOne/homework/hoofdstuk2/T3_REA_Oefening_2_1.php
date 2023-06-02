<?php
/**
 * User: J. Verbruggen
 * Date: 5/3/2021
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
        <p>
            <!--Het echo command displayed de output van iets. Dit kan tekst zijn maar ook een variabel-->
            <?php
            echo 'PHP is een serverside scripttaal die wanneer een client de website opvraagt de code uitvoert op de webserver en hiermee een output genereerd die het dan terug stuurt naar de client. Omdat je met PHP dus paginas dynamisch genereerd kun je zo ook databases maken en deze gebruiken.'
            ?>
        </p>
    </div>
</main>
    <?php
    include "../includes/footer.php"
    ?>
</body>
</html>
