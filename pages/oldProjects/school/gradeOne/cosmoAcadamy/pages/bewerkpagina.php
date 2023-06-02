<?php
/**
 * User: J. Verbruggen
 * Date: 16/6/2021
 * File: bewerkpagina.php
 */
//Header
include '../includes/header.php';
//Nav
include '../includes/nav.php';
//Functions
include '../includes/functions.php';
if(isset($_SESSION["userLoggedIn"]) == true)
{
    //connect met de database
    startConnection();

    //maakt de query de tekst ijdb
    $query = "USE evenementen;";

    //execute een function met als parameter de query
    executeQuery($query);
    ?>
    <!--GENEREREN TABEL-->
    <!--maakt de bovenste rij van de tabel aan-->
    <iframe id="tabelIframe" src="../includes/tabelGenerator.php" title="tabelGenerator" frameborder="0"></iframe>
    <!--ZOEKFUNCTIE-->
    <iframe id="zoekVeldIframe" src="../includes/zoekVeld.php" title="Zoekveld" frameborder="0"></iframe>
    <?php
    //TOEVOEGEN
    //als de knop toevoegen word aangeklikt word de onderstaande code uitgevoerd
    if(isset($_GET["add"]) || isset($_GET["addAvailable"]))
    {
        if(isset($_GET["addAvailable"]))
        {
            // Format de dtCreateDate naar een Amerikaans formaat (yyyy-mm-dd)
            $formattedDateStart = date("Y-m-d h:i", strtotime($_GET["startTxt"]));
            $formattedDateEnd = date("Y-m-d h:i", strtotime($_GET["endTxt"]));
            $query = "SET IDENTITY_INSERT [Activity] ON; INSERT INTO [Activity] ([Name], [Start], [End], [Location], [ActivityID]) VALUES ('" . $_GET["nameTxt"] . "', '" .
                $formattedDateStart . "', '" . $formattedDateEnd . "', '" . $_GET["locationTxt"] . "', '" . $_GET["idTxt"] . "'); SET IDENTITY_INSERT [Activity] OFF;";
            $rowsAffected = executeInsertQuery($query);
            if ($rowsAffected > 0)
            {
                echo "<div id='bewerk'><p>Het evenement is opgeslagen in de database</p><br><br>" . $query;
                echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';
            }
            else
            {
                echo "<div id='bewerk'><p>Er is iets fout gegaan. Probeer het opnieuw.</p><br><br>" . $query . "</div>";
                echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';

            }
        }
        else
        {
            $query = "SELECT DISTINCT(ActivityID) FROM [Activity]";

            // Voer de geschreven SQL query uit op de database
            // Vang daarna het resultaat in de variabele $result
            $result = executeQuery($query);

            // Door de results heen loopen via een while
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                //Maak een 2e variabele aan die +1 gaat elke keer dat het looped. zodra deze niet meer overeenkomt met activityID dan stopt de loop waardoor activity ID in het ontstaande gat gemaakt word.
                $activityID = $row["ActivityID"]+1;
            }

            echo '<div id="bewerk">
                    <h1>
                        Insert into database
                    </h1>
                    <form action="/Project4/pages/bewerkpagina.php?edit=add" method="get">
                        <label for="nameTxt">Vul hier de naam van het evenement in:</label>
                        <input id="nameTxt" required type="text" name="nameTxt">
                        <br><br>
                        <label for="startTxt">Vul hier de start datum en tijd van het evenement in:</label>
                        <input id="startTxt" required type="datetime-local" name="startTxt">
                        <br><br>
                        <label for="endTxt">Vul hier de eind datum en tijd van het evenement in:</label>
                        <input id="endTxt" required type="datetime-local" name="endTxt">
                        <br><br>
                        <label for="locationTxt">Vul hier de locatie van het evenement in:</label>
                        <input id="locationTxt" required type="text" name="locationTxt">
                        <br><br>
                        <input type="hidden" id="idTxt" name="idTxt" value="'. $activityID . '">
                        <input type="hidden" name="addAvailable" value="addAvailable">
                        <br>
                        <input id="opslaanKnop" type="submit" value="Opslaan">
                    </form>
                    <a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>
                </div>';
        }
    }
    //UPDATE
    elseif(isset($_GET["update"]) || isset($_GET["updateKeuze"]) || isset($_GET["updateAvailable"]))
    {
        if(isset($_GET["txtActivityID"]))
        {
            echo '<div id="bewerk"">
            <h1>
                Hoe moet de geupdate tabel er uit komen te zien?
            </h1>
            <form action="/Project4/pages/bewerkpagina.php?edit=add" method="get">
                        <label for="nameTxt">Vul hier de naam van het evenement in:</label>
                        <input id="nameTxt" required type="text" name="nameTxt">
                        <br><br>
                        <label for="startTxt">Vul hier de start datum en tijd van het evenement in:</label>
                        <input id="startTxt" required type="datetime-local" name="startTxt">
                        <br><br>
                        <label for="endTxt">Vul hier de eind datum en tijd van het evenement in:</label>
                        <input id="endTxt" required type="datetime-local" name="endTxt">
                        <br><br>
                        <label for="locationTxt">Vul hier de locatie van het evenement in:</label>
                        <input id="locationTxt" required type="text" name="locationTxt">
                        <br>
                        <input type="hidden" name="updateAvailable" value="updateAvailable">
                        <input type="hidden" name="idTxt" value="' . $_GET["txtActivityID"] .'">
                        <input id="opslaanKnop" type="submit" value="Opslaan">
                    </form>
                    <a id="terugKnop" href="/Project4/pages/bewerkpagina.php?update=true"><div><p>< Terug</p></div></a>      
            </div>';
        }
        //Als er een ID ingevuld is word de onderstaande code uitgevoerd
        elseif(isset($_GET["updateAvailable"]))
        {
            echo "<div id='bewerk'>";
            // Format de dtCreateDate naar een Amerikaans formaat (yyyy-mm-dd)
            $formattedDateStart = date("Y-m-d h:i", strtotime($_GET["startTxt"]));
            $formattedDateEnd = date("Y-m-d h:i", strtotime($_GET["endTxt"]));
            $query = "SET IDENTITY_INSERT [Activity] ON; 
            UPDATE [Activity]
            SET [Name] = '" . $_GET["nameTxt"] . "', [Start] = '" . $formattedDateStart . "', [End] = '" . $formattedDateEnd . "', [Location] = '" . $_GET["locationTxt"] .
            "' WHERE [ActivityID] = " . $_GET["idTxt"] . "; 
            SET IDENTITY_INSERT [Activity] OFF;";
            $rowsAffected = executeInsertQuery($query);
            if ($rowsAffected > 0)
            {
                echo "<p>Het evenement is geupdate</p><br><br>" . $query . "<a href='/Project4/pages/bewerkpagina.php'>";
                echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';
            }
            else
            {
                echo "<div id='bewerk'><p>Er is iets fout gegaan. Probeer het opnieuw.</p><br><br>" . $query . "</div>";
                echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';

            }
            echo "</div>";
        }
        //Laat je kiezen welke rij je wilt bewerken
        else
        {
            echo "<div id='bewerk'>
                        <h1>
                            Update database
                        </h1><br>
                        <form action='bewerkpagina.php?edit=update' method='get'>
                        <label for='txtActivityID'>ActivityID:</label>
                        <select name='txtActivityID'>";

                        $query = "SELECT DISTINCT(ActivityID) FROM [Activity]";

                        // Voer de geschreven SQL query uit op de database
                        // Vang daarna het resultaat in de variabele $result
                        $result = executeQuery($query);

                        // Door de results heen loopen via een while
                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
                        {
                            echo "<option value='" . $row["ActivityID"] . "'>" . $row["ActivityID"] . "</option>";
                        }
                        echo "<input type='hidden' name='updateKeuze' value='updateKeuze'>";
                        echo "<br><input id='verstuurKnop' type='submit' value='Versturen'>
                        <a id='terugKnop' href='/Project4/pages/bewerkpagina.php'><div><p>< Terug</p></div></a>
                    </div>";
        }
    }
    //DELETE
    elseif(isset($_GET["delete"]) || isset($_GET["deleteKeuze"]))
    {
        echo '<div id="bewerk">';
            if(isset($_GET["deleteKeuze"]))
            {
                $query = "SET IDENTITY_INSERT [Activity] ON; 
                DELETE FROM [Activity]
                WHERE [ActivityID] = " . $_GET['txtActivityID'] . "; 
                SET IDENTITY_INSERT [Activity] OFF;";
                $rowsAffected = executeInsertQuery($query);
                if ($rowsAffected > 0)
                {
                    echo "<p>Het evenement is opgeslagen in de database</p><br><br>" . $query;
                    echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';
//                  GEFAALT EXPIRIMENT WAT IK ALS UITDAGING WILDE PROBEREN:
//                    $query = "SELECT DISTINCT(ActivityID) FROM [Activity]";
//
//                    // Voer de geschreven SQL query uit op de database
//                    // Vang daarna het resultaat in de variabele $result
//                    $result = executeQuery($query);
//
//                    $counter = 0;
//                    // Door de results heen loopen via een while
//                    while ($row = $result->fetch(PDO::FETCH_ASSOC))
//                    {
//                        $counter ++;
//                    }
//                    echo "count is " . $counter . ", ";
//                    //zet de teller op 0
//                    $teller = 1;
//
//                    while ($teller <= $counter)
//                    {
//                        $query = "SELECT DISTINCT(ActivityID) FROM [Activity]";
//
//                        // Voer de geschreven SQL query uit op de database
//                        // Vang daarna het resultaat in de variabele $result
//                        $result = executeQuery($query);
//
//                        $updateNodig = false;
//                        // Door de results heen loopen via een while
//                        while ($row = $result->fetch(PDO::FETCH_ASSOC))
//                        {
//                            if($row["ActivityID"] != $teller)
//                            {
//                                echo "teller is " . $teller . " in if, ";
//                                $query = "SET IDENTITY_INSERT [Activity] ON;
//                                      UPDATE [Activity]
//                                      Set [ActivityID] = '" . $teller . "'
//                                      WHERE [ActivityID] = '" . $row["ActivityID"] . "';
//                                      SET IDENTITY_INSERT [Activity] OFF;";
//                                $updateNodig = true;
//                                $teller ++;
//                            }
//                            else
//                            {
//                                echo "teller is " . $teller . " in else, ";
//                                $teller ++;
//                            }
//                        }
//                        if($updateNodig == true)
//                        {
//                            $rowsAffected = executeInsertQuery($query);
//                        }
//                    }
                }
                else
                {
                    echo "<p>Er is iets fout gegaan. Probeer het opnieuw.</p><br><br>" . $query;
                    echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>';
                }
            }
            //Laat je kiezen welke rij je wilt deleten
            else
            {
                       echo "<h1>
                                Selecteer het activiteits ID van de activiteit de je wilt verwijderen
                            </h1><br>
                            <form action='bewerkpagina.php?edit=delete' method='get'>
                            <label for='txtActivityID'>ActivityID:</label>
                            <select name='txtActivityID'>";

                            $query = "SELECT DISTINCT(ActivityID) FROM [Activity]";

                            // Voer de geschreven SQL query uit op de database
                            // Vang daarna het resultaat in de variabele $result
                            $result = executeQuery($query);

                            // Door de results heen loopen via een while
                            while ($row = $result->fetch(PDO::FETCH_ASSOC))
                            {
                                echo "<option value='" . $row["ActivityID"] . "'>" . $row["ActivityID"] . "</option>";
                            }
                            echo "<input type='hidden' name='deleteKeuze' value='deleteKeuze'>";
                            echo "<br><input id='deleteKnop' type='submit' value='Delete'>
                            <a id='terugKnop' href='/Project4/pages/bewerkpagina.php'><div><p>< Terug</p></div></a>";
                }
                echo '<a id="terugKnop" href="/Project4/pages/bewerkpagina.php"><div><p>< Terug</p></div></a>
                </div>';
    }
    else
    {
        echo "<nav id='editVak'>
              <h1>Bewerken:</h1>
              <a href='/Project4/pages/bewerkpagina.php?add=true'><div class='bewerkKnoppen'><h1>Toevoegen</h1></div></a>
              <a href='/Project4/pages/bewerkpagina.php?update=true'><div class='bewerkKnoppen'><h1>Update</h1></div></a>
              <a href='/Project4/pages/bewerkpagina.php?delete=true'><div class='bewerkKnoppen'><h1>Delete</h1></div></a>
              </nav>";
    }
}
else
{
    echo "<h1 id='evenementenTitel'>U bent niet ingelogd. Log alstublieft <a href='login.php'>hier</a> in.</h1>";
}
//Footer
include '../includes/footer.php';
?>