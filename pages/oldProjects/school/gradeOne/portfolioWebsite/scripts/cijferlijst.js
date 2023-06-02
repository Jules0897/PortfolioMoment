//maakt een variable vakken aan en zet alle namen van elk vak er in
var vakken = ["Plannen en ontwerpen", "Realiseren", "Testen en verbeteren", "Computervaardigheden", "Beroepshouding", "Loopbaan Burgerschap", "Nederlands", "Engels", "Rekenen"];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var plannenEnOntwerpen = [6.6, 7.1, 7.1, 6.0];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var realiseren = [6.5, 6.7, 6.7, 6.3];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var testenEnVerbeteren = [7.8, 10, 6.7];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var computervaardigheden = [8.4, 8.6, 10, 7.5];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var beroepshouding = ["V", "V"];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var loopbaanBurgerschap = [8, 8];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var nederlands = [7.2, 7.2, 7.2];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var engels = [8.8, 8.6, 9.0];
//maakt een variable cijfers aan en zet de resultaten van het benoemde vak er in
var rekenen = [6.6, 6.6, 6.6];

//berekent het gemiddelde van plannenEnOntwerpen
var gemPlannenEnOntwerpen = (plannenEnOntwerpen[0] + plannenEnOntwerpen[1] + plannenEnOntwerpen[2] + plannenEnOntwerpen[3]*2) / (plannenEnOntwerpen.length+1);
//berekent het gemiddelde van realiseren
var gemRealiseren = (realiseren[0] + realiseren[1] + realiseren[2] + realiseren[3]) / realiseren.length;
//berekent het gemiddelde van testenEnVerbeteren
var gemTestenEnVerbeteren = (testenEnVerbeteren[0] + testenEnVerbeteren[1] + testenEnVerbeteren[2]*2) / (testenEnVerbeteren.length+1);
//berekent het gemiddelde van computervaardigheden
var gemComputervaardigheden = (computervaardigheden[0] + computervaardigheden[1] + computervaardigheden[2] + computervaardigheden[3]*2) / (computervaardigheden.length+1);
//berekent het gemiddelde van loopbaanBurgerschap
var gemLoopbaanBurgerschap = (loopbaanBurgerschap[0] + loopbaanBurgerschap[1]) / loopbaanBurgerschap.length;
//berekent het gemiddelde van nederlands
var gemNederlands = (nederlands[0] + nederlands[1] + nederlands[2]) / nederlands.length;
//berekent het gemiddelde van engels
var gemEngels = (engels[0] + engels[1] + engels[2]) / engels.length;
//berekent het gemiddelde van rekenen
var gemRekenen = (rekenen[0] + rekenen[1] + rekenen[2]) / rekenen.length;

//maakt een tabel opmaak en berekent het gemiddelde voor het vak plannenEnOntwerpen
document.getElementById("lijstPO").innerHTML = "<tr><th colspan='2'>" + vakken[0] + "</th><tr><td rowspan='" + plannenEnOntwerpen.length + "'>cijfers</td><td>" + plannenEnOntwerpen[0] + "</td><tr><td>" + plannenEnOntwerpen[1] + "</td><tr><td>" + plannenEnOntwerpen[2] + "</td><tr><td>" + plannenEnOntwerpen[3] + "</td><tr><td>Gemiddelde</td><td>" + gemPlannenEnOntwerpen.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak realiseren
document.getElementById("lijstREA").innerHTML = "<tr><th colspan='2'>" + vakken[1] + "</th><tr><td rowspan='" + realiseren.length + "'>cijfers</td><td>" + realiseren[0] + "</td><tr><td>" + realiseren[1] + "</td><tr><td>" + realiseren[2] + "</td><tr><td>" + realiseren[3] + "</td><tr><td>Gemiddelde</td><td>" + gemRealiseren.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak testenEnVerbeteren
document.getElementById("lijstTV").innerHTML = "<tr><th colspan='2'>" + vakken[2] + "</th><tr><td rowspan='" + testenEnVerbeteren.length + "'>cijfers</td><td>" + testenEnVerbeteren[0] + "</td><tr><td>" + testenEnVerbeteren[1] + "</td><tr><td>" + testenEnVerbeteren[2] + "</td><tr><td>Gemiddelde</td><td>" + gemTestenEnVerbeteren.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak computervaardigheden
document.getElementById("lijstCOM").innerHTML = "<tr><th colspan='2'>" + vakken[3] + "</th><tr><td rowspan='" + computervaardigheden.length + "'>cijfers</td><td>" + computervaardigheden[0] + "</td><tr><td>" + computervaardigheden[1] + "</td><tr><td>" + computervaardigheden[2] + "</td><tr><td>" + computervaardigheden[3] + "</td><tr><td>Gemiddelde</td><td>" + gemComputervaardigheden.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak beroepshouding
document.getElementById("lijstBER").innerHTML = "<tr><th colspan='2'>" + vakken[4] + "</th><tr><td rowspan='" + beroepshouding.length + "'>cijfers</td><td>" + beroepshouding[0] + "</td><tr><td>" + beroepshouding[1] + "</td><tr><td>Gemiddelde</td><td>V</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak loopbaanBurgerschap
document.getElementById("lijstBUR").innerHTML = "<tr><th colspan='2'>" + vakken[5] + "</th><tr><td rowspan='" + loopbaanBurgerschap.length + "'>cijfers</td><td>" + loopbaanBurgerschap[0] + "</td><tr><td>" + loopbaanBurgerschap[1] + "</td><tr><td>Gemiddelde</td><td>" + gemLoopbaanBurgerschap.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak nederlands
document.getElementById("lijstNL").innerHTML = "<tr><th colspan='2'>" + vakken[6] + "</th><tr><td rowspan='" + nederlands.length + "'>cijfers</td><td>" + nederlands[0] + "</td><tr><td>" + nederlands[1] + "</td><tr><td>" + nederlands[2] + "</td><tr><td>Gemiddelde</td><td>" + gemNederlands.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak engels
document.getElementById("lijstEN").innerHTML = "<tr><th colspan='2'>" + vakken[7] + "</th><tr><td rowspan='" + engels.length + "'>cijfers</td><td>" + engels[0] + "</td><tr><td>" + engels[1] + "</td><tr><td>" + engels[2] + "</td></td><tr><td>Gemiddelde</td><td>" + gemEngels.toFixed(1) + "</td>";
//maakt een tabel opmaak en berekent het gemiddelde voor het vak rekenen
document.getElementById("lijstRE").innerHTML = "<tr><th colspan='2'>" + vakken[8] + "</th><tr><td rowspan='" + rekenen.length + "'>cijfers</td><td>" + rekenen[0] + "</td><tr><td>" + rekenen[1] + "</td><tr><td>" + rekenen[2] + "</td></td><tr><td>Gemiddelde</td><td>" + gemRekenen.toFixed(1) + "</td>";

//ontvangt een signaal uit de html en maakt her een functie mee
function msg(placeholder = 0)
{
    //maakt een var met alle gemiddeldes
    var gemVakken = [gemPlannenEnOntwerpen, gemRealiseren, gemTestenEnVerbeteren, gemComputervaardigheden, gemLoopbaanBurgerschap, gemNederlands, gemEngels, gemRekenen];
    //maakt een var aan die de waarde van placeholder krijgt
    var gemAlles = placeholder;
    //herhaalt de inhoudende code totdat i zich evenvaak herhaalt heeft als gemvakken lang is
    for (var i = placeholder; i < gemVakken.length; i++)
    {
        //gemalles is zichzelf plus de waarde van de huidige gemvakken die word uitgekozen door de waarde van i
        var gemAlles = gemAlles + gemVakken[i];
    }
    //zodra de waarde van i gelijk is aan de lengte van gemVakken gaat de onderstaande code in werking
    if(i == gemVakken.length)
    {
        //gemalles word vervangen voor zichzelf gedeeld door de lengte van gemvakken
        var gemAlles = gemAlles / gemVakken.length;
        //var results word aangemaakt en is gemalles afgerond op 1 cijfer achter de comma
        var results = gemAlles.toFixed(1);
    }
    //stuurt het resultaat terug naar de html in de vorm van een id en voegt er een tekst bij toe
    document.getElementById("gemiddelde").innerHTML = "<h1>Het gemiddelde van alle cijfers samen is " + results + "</h1>";
}