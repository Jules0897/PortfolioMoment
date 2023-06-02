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
    <body>
        <?php
        include "../includes/nav.php"
        ?>
        <main id="opdracht">
            <?php
                include "../includes/functions.php";
            ?>
            <div>
                <h1>
                    Uitwerking oefening 4.2
                </h1>
                <h2>
                    Taak 2 - Stoplichten
                </h2>
                <p>
                    <?php
                        echo checkTrafficLight (true, false);
                    ?>
                </p>
                <hr>
                <h2>
                    Taak 3 - Weekmenu
                </h2>
                <p>
                    <?php
                        echo showMenu (date("l"));
                    ?>
                </p>
                <hr>
                <h2>
                    Taak 4 (advanced) - Ladies Night
                </h2>
                <p>
                    <?php
                        echo entree (72, "vrouw");
                    ?>
                </p>
            </div>
        </main>
        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>