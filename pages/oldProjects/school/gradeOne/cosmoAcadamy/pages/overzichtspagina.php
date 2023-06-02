<?php
/**
 * User: J. Verbruggen
 * Date: 16/6/2021
 * File: overzichtspagina.php
 */
//Header
include '../includes/header.php';
//Nav
include '../includes/nav.php';
//Functions
include '../includes/functions.php';
if(isset($_SESSION["userLoggedIn"]) == true)
{
    //Titel boven tabel
    echo "<h1 id='evenementenTitel'>Evenementen:</h1>";

    //connect met de database
    startConnection();

    //maakt de query de tekst ijdb
    $query = "USE evenementen;";

    //execute een function met als parameter de query
    executeQuery($query);

    //veranderd de waarde van de query weer
    $query = "SELECT * FROM [Activity] ORDER BY [Start];";

    //maakt de waarde van result het resultaat van de function executeQuery met als parameter de waarde van query
    $result = executeQuery($query);

    //maakt de bovenste rij van de tabel aan
    echo "<table id='tabelEvenementen' border='1'>";
    echo "<tr>";
    echo "<th>Naam:</th>";
    echo "<th>Start:</th>";
    echo "<th>Einde:</th>";
    echo "<th>Locatie:</th>";
    echo "<tr>";

    //zet de count op 1
    $count = 0;

    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        //zorgt dat de inhoud van de database op de juiste rijen en orders worden ingeladen
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Start"] . "</td>";
        echo "<td>" . $row["End"] . "</td>";
        echo "<td>" . $row["Location"] . "</td>";
        echo "<tr>";
        $count++;
    }
    echo "</table>";

    if ($_SESSION["Role"] == "Editor")
    {
        echo "<a href='/Project4/pages/bewerkpagina.php'><div id='bewerkKnop'><p>Bewerken</p></div></a>";
    }
}
else
{
    echo "<h1 id='evenementenTitel'>U bent niet ingelogd. Log alstublieft <a href='login.php'>hier</a> in.</h1>";
}
//Footer
include '../includes/footer.php';
?>