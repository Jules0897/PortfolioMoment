<?php
/**
 * User: J. Verbruggen
 * Date: 31/3/2021
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<?php
include "../includes/header.php";
session_start();
?>
<body>
<?php
include "../includes/nav.php"
?>
<main id="opdracht">
        <div class="keuzeVak">
            <h1>Opdracht 6.3</h1>
            <?php
            if (isset($_SESSION['computerscore']))
            {
                echo "";
            }
            else
            {
                $key = 1;
                $_SESSION['computerscore'] = 0;
                $_SESSION['mensscore']   = 0;
            }
            if ($_SESSION['mensscore'] == 5 || $_SESSION['computerscore'] == 5)
            {
                $_SESSION['computerscore'] = 0;
                $_SESSION['mensscore']   = 0;;
            }
            ?>
            <p>Speel het spel steen - papier - schaar tegen de computer</p>
            <form id="gameFrm" method="get" action="T3_REA_Oefening_6.3.php">
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="../images/steen.png" alt="steen" class="RPCIMG">
                </div>
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="../images/papier.png" alt="papier" class="RPCIMG">
                </div>
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="../images/schaar.png" alt="schaar" class="RPCIMG">
                </div>
        </div>
        </form>
        <br>
        <div class="keuzeVak">
        <?php
            if (isset($key))
            {
                echo "Start het spel door schaar, papier of steen te kiezen. De computer kiest tegelijkertijd met jou.";
            }
            if (isset($_GET['keuze']))
            {
            echo "Jij koos: <img src='../images/{$_GET['keuze']}.png' class='RPCIMG'>";
                //Wat kiest de computer
                //Random wordt er een getal tussen 0 en 2 gekozen
                $opties = array("steen","papier","schaar");
                $computerkeuzegetal = rand(0,2);
                $computerkeuze = $opties[$computerkeuzegetal];
                echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.png' class='RPCIMG'><br>";

                $menskeuze = $_GET['keuze'];
                if ($computerkeuze == "steen" && $menskeuze == "papier" || $computerkeuze == "papier" && $menskeuze == "schaar" || $computerkeuze == "schaar" && $menskeuze == "steen")
                {
                    $_SESSION['mensscore']++;
                    echo "Jij scoort.<br>score: " . $_SESSION['mensscore'] . " tegen " . $_SESSION['computerscore'] . ".";
                }
                if ($computerkeuze == "steen" && $menskeuze == "steen" || $computerkeuze == "papier" && $menskeuze == "papier" || $computerkeuze == "schaar" && $menskeuze == "schaar")
                {
                    echo "Gelijk!<br>score: " . $_SESSION['mensscore'] . " tegen " . $_SESSION['computerscore'] . ".";
                }
                if ($computerkeuze == "steen" && $menskeuze == "schaar" || $computerkeuze == "papier" && $menskeuze == "steen" || $computerkeuze == "schaar" && $menskeuze == "papier")
                {
                    $_SESSION['computerscore']++;
                    echo "De computer scoort.<br>score: " . $_SESSION['mensscore'] . " tegen " . $_SESSION['computerscore'] . ".";
                }
            }
        if ($_SESSION['mensscore'] == 5 || $_SESSION['computerscore'] == 5)
        {
            if ($_SESSION['mensscore'] == 5)
            {
                echo "<br>Jij wint!";
            }
            else
            {
                echo "<br>De computer wint!";
            }
            echo "<br>Het spel start weer opnieuw als je een nieuwe keuze maakt.";
        }
        ?>
        <div>
    </div>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>