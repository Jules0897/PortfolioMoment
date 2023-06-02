<!--
    Author:     Rob Wessels
    Date:       feb 2021

    Subject:    Result oefening 4.1  top: include
                Startende tags, head, header, ul (menulist)
-->
<html lang="en-us">
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>

    <body>

        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
            <h3>
                <?php
                    date_default_timezone_set("Europe/Amsterdam");
                    $h = date("H");

                    if ($h <= 23)
                    {
                        $begroeting = "Goedeavond";
                    }
                    if ($h <= 17)
                    {
                        $begroeting = "Goedemiddag";
                    }
                    if ($h <= 11)
                    {
                        $begroeting = "Goedemorgen";
                    }
                    if ($h <= 5)
                    {
                        $begroeting = "Goedenacht";
                    }

                    echo $begroeting . ", welkom op deze site";


                // verander bovenstaande PHP:
                // - Bepaal de tijdzone ("Europe/Amsterdam")
                // - Maak een variabele die het uur van de huidige tijd ophaalt
                // - Maak een functie waar je die variabele als parameter in gebruikt
                // - Zorg dat de functie middels een if/elseif/.... etc het woord Goedendag telkens
                //      aanpast aan het deel van de dag, dus: Goedenacht, Goedemorgen, Goedmiddag en Goedenavond.
                // - Test het door de tijd van je computer te wijzigen en de website te verversen.

                ?>
            </h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>
