<!---->
<!-- User: J. Verbruggen-->
<!-- Date: 16/6/2021-->
<!-- File: tabelGenerator.php-->
<!---->
<?php
//Header
include '../includes/header.php';
//Functions
include '../includes/functions.php';
//start de sessie
session_start();

//connect met de database
startConnection();

//veranderd de waarde van de query weer
$query = "SELECT * FROM [Activity] ORDER BY [Start];";

//maakt de waarde van result het resultaat van de function executeQuery met als parameter de waarde van query
$result = executeQuery($query);

//maakt de tabel
echo "<table id='tabelEvenementenEdit' border='1'>";
    echo "<tr>";
        echo "<th>Naam:</th>";
        echo "<th>Start:</th>";
        echo "<th>Einde:</th>";
        echo "<th>Locatie:</th>";
        echo "<th>Activiteit ID:</th>";
        echo "<tr>";

        //zet de count op 1
        $count = 0;

        // Door de results heen loopen via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
        //zorgt dat de inhoud van de database op de juiste rijen en orders worden ingeladen
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Start"] ."</td>";
        echo "<td>" . $row["End"] ."</td>";
        echo "<td>" . $row["Location"] ."</td>";
        echo "<td>" . $row["ActivityID"] ."</td>";
        echo "<tr>";
        $count ++;
        }
        echo "</table>";
?>
