<?php
/**
 * User: J. Verbruggen
 * Date: 17/3/2021
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Respect Gym
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/index.css" rel="stylesheet">
    <script src="scripts/index.js" defer></script>
</head>
    <body>
        <header>
            <h1>
                <?php
                $locatie2 = 0;
                    include 'includes/nav.php';
                ?>
            </h1>
        </header>
    <main id="mainHome">
        <div>
            <img class="banner" src="images/banner1.PNG">
            <a href="http://www.respectgym.nl/over-ons/indoor-sporten/"><img src="images/indoor.png" alt="indoor" id="indoorImg"></a>
            <a href="http://www.respectgym.nl/over-ons/outdoor-sporten/"><img src="images/outdoor.png" alt="outdoor" id="outdoorImg"></a>
            <h2 id="indoor">INDOOR SPORTEN</h2>
            <h2 id="outdoor">OUTDOOR SPORTEN</h2>
            <hr>
            <div id="info">
                <h1>3000 VIERKANTE METER AAN SPORTPLEZIER!</h1><br>
                <p>Welkom bij Respect Gym, de grootste sportschool in Den Bosch en omgeving! Respect Gym is perfect voor een echte sportliefhebber. Met maar liefst 3.000 m2 sportplezier is Respect Gym de grootste sportschool in Den Bosch en omstreken. Hier is plezier met hard werken goed te combineren. Door middel van zowel indoor als outdoor sportgelegenheden hebben we bij Respect Gym een zeer brede keuze aan sport.</p><br>
                <p>Bij Respect Gym hebben wij een mooi pand in een oldschool stijl waar je heerlijk kan sporten. Je kunt hier gevarieerd en voor een goede prijs sporten. Bij deze sportschool word je makkelijk fit en het is een zeer leuke manier om “in shape” te blijven.</p><br>
                <p>Je kunt bij Respect Gym ook verschillende lessen in sport nemen. Er worden boks lessen gegeven door ervaring boksers en u kunt diversen sporten beoefenen in groep lessen. Er is een zeer breed assortiment in lessen verkrijgbaar.</p><br>
                <p>Met ons unieke aanbod aan vele sporten kun je bij Respect Gym helemaal zelf u pakket samenstellen. Kies zelf wat je wilt doen en wanneer je dat wilt gaan doen. Je bent dus helemaal vrij in je keuze, ideaal!</p><br>
                <p>RespectGym is een sociale Sportonderneming die is ontstaan uit de overtuiging om iets goeds te doen voor de samenleving uit Den Bosch. Dit initiatief van een aantal sportondernemers die vinden dat iedereen uit de samenleving de gelegenheid moet krijgen om prettig, veilig en goed te kunnen sporten. Een fijne plek waar mensen met verschillende achtergronden en een andere fase in hun leven samen kunnen bewegen, elkaar een handje helpen, steunen en elkaar Respecteren. Hiervoor hebben we een aantal pijlers opgezet die uniek zijn en die je van ons kan verwachten.</p><br>
                <li>Alle oudere boven de 60 jaar maar vooral oudere die dreigen buiten deze samenleving te vallen omdat het niet altijd op te brengen is trainen bij ons geheel gratis van maandag tot en met vrijdag.</li>
                <li>Jeugd onder de 14 jaar willen wij stimuleren om te gaan sporten daarom kunnen ze bij ons gratis terecht.</li>
                <li>Wij verzorgen sublieme weerbaarheidstrainingen zodat iedereen met meer zelfverzekerdheid en veiligheid overal en op elk moment over straat kan.</li>
                <li>Jongeren die een tweede kans verdienen krijgen bij ons een opleiding en een stageplaats om zo op deze manier een nieuwe start te maken.</li>
            </div>
            <a href="http://www.respectgym.nl/gratis-proefles/"><img src="images/Gratis-les-2.png" alt="gratisLes" id="gratisLes"></a>
            <img src="images/gewichten.jpg" id="gewichten" alt="gewichten">
            <hr>
            <h1 id="lidmaatschap">LIDMAATSCHAP</h1>
            <hr>
            <p>Kom je er niet helemaal uit welke abonnement je wilt nemen? Wij zijn bereid om jouw te adviseren, neem contact met ons.</p>
            <h1 id="groeplessen">GROEPLESSEN</h1>
            <hr>
            <div>
                <a href="http://www.respectgym.nl/sport/boksen/"><img src="images/boksen.png" alt="boksen"></a>
                <a href="http://www.respectgym.nl/sport/kickboksen/"><img src="images/kickboksen.png" alt="kickboksen"></a>
                <a href="http://www.respectgym.nl/sport/free-fighting/"><img src="images/freeFighting.png" alt="freeFighting"></a>
                <a href="http://www.respectgym.nl/sport/pencak-silat/"><img src="images/pencakSilat.png" alt="pencakSilat"></a>
                <a href="http://www.respectgym.nl/sport/mma-2/"><img src="images/mma.png" alt="mma""></a>
                <a href="http://www.respectgym.nl/sport/fitness/"><img src="images/fun&fit.png" alt="fun&fit"></a>
            </div>
            <a href="http://www.respectgym.nl/over-ons/impressie/">
                <img id="videoBanner" src="images/videoBanner.PNG" alt="videoBanner">
            </a>
            <div id="locatie">
                <div class="mapouter">
                    <iframe width="600" height="500" id="mapIframe" src="https://maps.google.com/maps?q=Orthen%2092,%205231%20XS%20's-Hertogenbosch&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div id="locatieTekst">
                    <h1>
                        Respect GYM
                    </h1><br>
                    <p>
                        Vanaf 1 februari: Orthen 92
                    </p><br>
                    <p>
                        5231 XS 's-Hertogenbosch
                    </p><br>
                    <p>
                        068 – 395 4094
                    </p><br>
                    <p>
                        Vechtsport locatie (Boksen en kicboksen):<br>
                        Vogelplein 2a,<br>
                        5212 VK 's-Hertogenbosch
                    </p><br>
                    <p>
                        <a href="mailto: stichtingrespectgym29@gmail.com? subject=subject text">stichtingrespectgym29@gmail.com</a>
                    </p>
                    <h3 id="socialMedia">Volgen ons</h3>
                    <a href="https://www.facebook.com/RespectGymDenBosch/" target="_blank">
                        <img src="images/facebook.PNG" alt="facebook">
                    </a>
                    <a href="https://www.instagram.com/respectgym_original/" target="_blank">
                        <img src="images/instagram.PNG" alt="instagram">
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer">
            <p>Respect GYM 's-Hertogenbosch &#169 2019 | Web support by Atlantis Media</p>
        </div>
    </footer>
    </body>
</html>