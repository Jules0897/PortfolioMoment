<?php
/**
 * User: J. Verbruggen
 * Date: 16/6/2021
 * File: login.php
 */
//Header
include '../includes/header.php';

//Nav
include '../includes/nav.php';

//Functions
include '../includes/functions.php';

$doorsturen = $_SERVER['DOCUMENT_ROOT'] . "/Project4/pages/login.php";

//start de connectie
startConnection();

//destroyed de sessie als endSession een ding is
if(isset($_GET['endSession']))
{
    session_destroy();
    header("Location: /Project4/pages/login.php");
}

//checked of de gebruiker al ingelogd is
if(isset($_SESSION["User"]))
{
    if($_SESSION["Role"] == "Editor")
    {
        echo "<a href='bewerkpagina.php'><div id='linkOverzicht'><h1>berwerkpagina</h1></div></a>
              <a href='/Project4/pages/login.php?endSession=true'><div id='uitlogKnop'><h1>Uitloggen</h1></div></a>";
    }
    else
    {
        echo "<a href='overzichtspagina.php'><div id='linkOverzicht'><h1>Overzichtspagina</h1></div></a>
              <a href='/Project4/pages/login.php?endSession=true'><div id='uitlogKnop'><h1>Uitloggen</h1></div></a>";
    }
}
//wanneer de gebruiker al ingelogd is word de onderstaande code uitgevoerd
else
{
    //reset de variabelen
    $result = null;
    {
        //checked of de gebruikersnaam ingevuld is of niet
        if (isset($_POST["username"]))
        {
            //Controleerd of de inloggegevens correct zijn
            $query = "SELECT UserName, Password, [Role] FROM [User] WHERE UserName = '" . $_POST["username"] . "' ";

            //execute de query
            $result = executeQuery($query);
            //pakt de rij waar in de opgegeven username overeenkomt met de username in de database
            $rij = $result->fetch(PDO::FETCH_ASSOC);
            //checked of de gevonden rij overeen komt met de opgegeven gebruikersnaam
            if ($rij == false)
            {
                include '../includes/loginForum.php';
                echo "<p class='error'>Onbekende gebruikersnaam.</p>";
            }
            //als de gebruikersnaam gevonden word voert het de onderstaande code uit
            else
            {
                //checked of de gebruikersnaam overeenkomt met het wachtwoord dat er bij hoort
                if ($_POST["username"] == $rij["UserName"] && $_POST["password"] == $rij["Password"])
                {
                    //zorgt dat de gebruiker ingelogd is
                    $_SESSION["userLoggedIn"] = true;
                    $_SESSION["Role"] = $rij["Role"];
                    $_SESSION["User"] = $rij["UserName"];
                    header("Location: /Project4/pages/login.php");
                }
                else
                {
                    include '../includes/loginForum.php';
                    echo "<p class='error'>Onjuist wachtwoord.</p>";
                }
            }
        }
        else
        {
            include '../includes/loginForum.php';
        }
    }
}
?>
<?php
//Footer
include '../includes/footer.php';
?>
