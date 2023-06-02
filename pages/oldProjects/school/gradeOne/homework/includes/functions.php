<?php
//Taak 2
    function checkTrafficLight($groenlicht, $ambulance)
    {
        if($ambulance == false)
        {
            //Taak3
            if($groenlicht == false)
            {
                return "Het stoplicht is niet groen. U mag niet doorrijden.";
            }
            else
            {
                return "U mag doorrijden.";
            }
        }
        else
        {
            return "Er komt een ambulane aan. U mag niet doorrijden.";
        }

    }

//Taak 3
    function showMenu($weekDag)
    {
        if($weekDag == 'Monday')
        {
            echo "Vandaag eten we hamburger.";
        }
        if($weekDag == 'Tuesday')
        {
            echo "Vandaag eten we aardappelen.";
        }
        if($weekDag == 'Wednesday')
        {
            echo "Vandaag eten we soep.";
        }
        if($weekDag == 'Thursday')
        {
            echo "Vandaag eten we stamppot.";
        }
        if($weekDag == 'Friday')
        {
            echo "Vandaag eten we worstenbrood.";
        }
        if($weekDag == 'Saturday')
        {
            echo "Vandaag eten we friet.";
        }
        if($weekDag == 'Sunday')
        {
            echo "Vandaag eten we pizza.";
        }
    }

    //Taak 4
    function entree($leeftijd, $geslacht)
    {
        if($geslacht == "man")
        {
            //Taak3
            if($leeftijd >= 70)
            {
                return "Leeftijd: " . $leeftijd . "<br>Geslacht: " . $geslacht . "<br>U heeft gratis entree!";
            }
            else
            {
                return "Leeftijd: " . $leeftijd . "<br>Geslacht: " . $geslacht . "<br>U heeft geen entree.";
            }
        }
        else
        {
                if($leeftijd >= 18)
                {
                    return "Leeftijd: " . $leeftijd . "<br>Geslacht: " . $geslacht . "<br>U heeft gratis entree!";
                }
                else
                {
                    return "Leeftijd: " . $leeftijd . "<br>Geslacht: " . $geslacht . "<br>U heeft geen entree.";
                }
        }
    }

    //Taak 3 4.3
    function calculateInterest($price, $savings)
    {
        echo "<p>Hier word berekent hoeveel maanden het duurt tot dat de auto afbetaald kan worden door middel van rente te sparen met een bestaand            bedrag. De auto kost €" . number_format($price,2,",",".") . " en het al opgespaarde geld bestaat            uit een bedrag van €" . number_format($savings,2,",",".") . ".</p>";

        $counter = 0;

        while($savings <= $price)
        {
            $counter++;
            $savings = $savings * 1.6;
            echo "<p>Op maand nr. " . $counter . " heb ik gespaard: €" . number_format($savings,2,",",".") .             "</p>";
        }
        echo "<p>Je hebt na " . $counter . " maanden genoeg gespaard voor de auto.</p>
              <p>Na het kopen van de auto houd je nog €" . number_format($savings-$price,2,",",".") .               " over.</p>";
    }

    //Taak 4 4.3
    function createPiramid($width)
    {
        for ($i = 1; $i <= $width; $i++)
        {
            for($j = 1; $j <= $i; $j++)
            {
                echo $j;
            }
            echo "<br>";
        }
        for ($i = $width - 1; $i >= 0; $i--)
        {
            for($j = 1; $j <= $i; $j++)
            {
                echo $j;
            }
            echo "<br>";
        }
    }
?>
