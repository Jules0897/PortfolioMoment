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
include "../includes/header.php";
?>
<?php
include "../includes/functions.php"
?>
    <body>
        <?php
        include "../includes/nav.php"
        ?>
        <main id="opdracht">
            <div>
                <?php
                    date_default_timezone_set("Europe/Amsterdam");
                    echo "Het is nu " . (strtotime("now")) . " seconden na 1 januari 1970 middenacht";

                    echo calculateInterest(1399.99,622,2321);

                    echo createPiramid(10);
                ?>
            </div>
        </main>
        <?php
        include "../includes/footer.php"
        ?>
    </body>
</html>