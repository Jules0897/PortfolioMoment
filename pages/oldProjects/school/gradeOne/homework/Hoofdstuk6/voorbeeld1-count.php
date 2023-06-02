<?php
    //Check of de cookie bestaat
if(isset($_COOKIE["userCountCookie"]) == true)
{
    //De teller verhogen met een
    $newAmount = $_COOKIE["userCountCookie"] + 1;
    setcookie("userCountCookie", $newAmount, time() + 3600 * 24 * 14, "/");
}
else
{
    //De cookie bestaat schijnbaar nog niet. Maak hem (opnieuw) aan.
    setcookie("userCountCookie", 0, time() + 3600 * 24 * 14, "/");
}
?>

<?php
    $visitAmount = $_COOKIE["userCountCookie"];
    echo "Je hebt de website al " . $visitAmount . " keer bekeken";
?>
