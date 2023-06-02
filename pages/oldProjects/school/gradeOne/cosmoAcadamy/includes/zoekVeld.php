<!---->
<!-- User: J. Verbruggen-->
<!-- Date: 16/6/2021-->
<!-- File: zoekVeld.php-->
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
?>
<div id="zoekVeld">
    <h2>Zoekopdrachten:</h2>
    <i>Tip: Laat een veld leeg, dan zal er niet op gezocht worden.</i>
    <br><br>
    <form action='zoekVeld.php' method='get'>
        <label for="txtName">Naam:</label>
        <input type="text" name="txtName">
        <br><br>
        <label for='txtLocation'>Locatie:</label>
        <input type="text" name="txtLocation">
        <input id="zoekKnop" type='submit' value='Versturen'>
    </form>
</div>
<?php
// Maak een variabele met de SQL query
$query = "SELECT * FROM [Activity]";
// Taak 4: Programmeer hieronder je code
if(empty($_GET['txtName']) == true && empty($_GET['txtLocation']) == true)
{
    $query = "SELECT * FROM [Activity]";
}
elseif(empty($_GET['txtLocation']) == true && isset($_GET['txtName']) == true)
{
    $query = "SELECT * FROM [Activity] WHERE Name LIKE '%". $_GET["txtName"] . "%'";
}
elseif(empty($_GET['txtName']) == true && isset($_GET['txtName']) == true)
{
    $query = "SELECT * FROM [Activity] WHERE Location LIKE '%" . $_GET["txtLocation"] . "%'";
}
elseif(isset($_GET['txtName']) == true && isset($_GET['txtLocation']) == true)
{
    $query="SELECT * FROM [Activity] WHERE Name LIKE '%".$_GET["txtName"]."%' AND Location = '".$_GET["txtLocation"]."'";
}
// Voer de geschreven SQL query uit op de database
// Vang daarna het resultaat in de variabele $result
$result = executeQuery($query);
echo "<p id='zoekOpdracht'>" . $query . "</p>";
echo "<table id='tabelEvenementenSearch' border='1'>";
echo "<tr>";
echo "<th>Naam:</th>";
echo "<th>Start:</th>";
echo "<th>Einde:</th>";
echo "<th>Locatie:</th>";
echo "<th>Activiteit ID:</th>";
echo "</tr>";
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>". $row["Name"] . "</td>";
    echo "<td>". $row["Start"] . "</td>";
    echo "<td>". $row["End"] . "</td>";
    echo "<td>". $row["Location"] . "</td>";
    echo "<td>". $row["ActivityID"] . "</td>";
    echo "</tr>";
}
echo "</tr>";
echo "</table>";
?>