//zet de spellen in de variable
var spellen =["Minecraft", "Super smash bros ultimate", "Hyrule warriors age of calamity", "Pikmin 3 deluxe"];

//zet de prijzen in de variable
var prijzen =["€20", "€60", "€60", "€60"];

//vraagt hoeveel games je wilt zien
var aantalGames = prompt("Hoeveel games wil je zien?");

//vraagt in welke volgorde je de games wilt bekijken
var volgorde = prompt("In welke volgorde wilt u de games zien? Typ 'hoog-laag' of 'laag-hoog'");

//vraagt welke game je wilt opzoeken
var zoeken = prompt("Welke game wilt u opzoeken?");

//zet de waarde van het aantal games dat je wilt zien in de html met de bijgevoegde tekst
document.getElementById("aantal").innerHTML += "<p>" + aantalGames + " van de 4 games" + "</p>";

//draait de volgorde van de spellen en prijzen om als er bij volgorde hoog-laag is ingevuld.
if (volgorde == "hoog-laag")
{
    spellen.reverse();
    prijzen.reverse();
}

//zet de inhoud van het variable spellen om in een lijst in de html gebaseerd op de waarde van wat is ingevoerd in het variable aantalGames
document.getElementById("spellen").innerHTML = "<li>" + spellen[0] + " - " + prijzen[0] + "</li>"

if (aantalGames > 1)
{
    document.getElementById("spellen").innerHTML += "<li>" + spellen[1] + " - " + prijzen[1] + "</li>";
}

if (aantalGames > 2)
{
    document.getElementById("spellen").innerHTML += "<li>" + spellen[2] + " - " + prijzen[2] + "</li>";
}

if (aantalGames > 3)
{
        document.getElementById("spellen").innerHTML += "<li>" + spellen[3] + " - " + prijzen[3] + "</li>";
}

//controleert op welk nummer het opgezochte woord zit
if (spellen[0] == zoeken)
{
    var locatie = 1
}

if (spellen[1] == zoeken)
{
    var locatie = 2
}

if (spellen[2] == zoeken)
{
    var locatie = 3
}

if (spellen[3] == zoeken)
{
    var locatie = 4
}

//zet de resultaten van het zoeken in de html met bijgevoegde tekst
if(spellen.indexOf(zoeken) == -1)
    {
        document.getElementById("zoeken").innerHTML = "Geen resultaten gevonden voor \"" + zoeken + "\"";
    }
else
    {
        document.getElementById("zoeken").innerHTML = "Resultaat gevonden op " + locatie + " voor \"" + zoeken + "\"";
    }