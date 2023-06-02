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
    <link href="../styles/index.css" rel="stylesheet">
    <!--installeert de items voor de vraag balken-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="../scripts/index.js" defer></script>
</head>
    <body>
        <header>
            <h1>
                <?php
                    $locatie2 = 1;
                include '../includes/nav.php';
                ?>
            </h1>
        </header>>
        <main>
            <h1>Veel gestelde vragen:</h1>
            <div class="container">
                <div class="accordion">
                    <!--vraag 1-->
                    <div class="accordion-item" id="question1">
                        <a class="accordion-link" href="#question1">
                            Waar is jullie vesteging?
                            <!--voegt de icons van de css link toe-->
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="answer">
                            <p>
                                Vogelplein 2a, 5212 VK 's-Hertogenbosch
                            </p>
                        </div>
                    </div>
                </div>
                <!--vraag 2-->
                <div class="accordion-item" id="question2">
                    <a class="accordion-link" href="#question2">
                        Is het ook mogelijk outdoor te sporten bij jullie?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Ja, u kunt bij ons zowel indoor als outdoor sporten!
                        </p>
                    </div>
                </div>
                <!--vraag 3-->
                <div class="accordion-item" id="question3">
                    <a class="accordion-link" href="#question3">
                        Wat voor sporten vallen er bij jullie te volgen?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Wij hebben bij respect gym allerlei verschillende sporten. Bij ons kunt u komen voor fun en fit, boksen, kinderboksen, business boksen, lady's boksen, kickboksen, free fighting, kids, MMA en pencak sillat.
                        </p>
                    </div>
                </div>
                <!--vraag 4-->
                <div class="accordion-item" id="question4">
                    <a class="accordion-link" href="#question4">
                        Wat zijn jullie contact gegevens?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            U kunt ons bereiken op het e-mail adres <a href="mailto: stichtingrespectgym29@gmail.com? subject=subject text">stichtingrespectgym29@gmail.com</a> te mailen of door het telefoon nummer 068 – 395 4094 te bellen.
                        </p>
                    </div>
                </div>
                <!--vraag 5-->
                <div class="accordion-item" id="question5">
                    <a class="accordion-link" href="#question5">
                        Hebben jullie ook personal trainers?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Ja, bij ons hebt u keuze uit verschillende personal trainers! U kunt bij ons kiezen uit Hennie Mandemaker, Roy Menig en Paul van der Loo.
                        </p>
                    </div>
                </div>
                <!--vraag 6-->
                <div class="accordion-item" id="question6">
                    <a class="accordion-link" href="#question6">
                        Kan ik bij jullie ook een abonnement nemen?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Ja! De verschillende keuzes en prijzen van de abonnementen kunt u <a href="http://www.respectgym.nl/lid-worden/">hier</a> vinden.
                        </p>
                    </div>
                </div>
                <!--vraag 7-->
                <div class="accordion-item" id="question7">
                    <a class="accordion-link" href="#question7">
                        Wat is respectgym voor een school?
                        <!--voegt de icons van de css link toe-->
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Het is een school voor zowel outdoor als indoor sporten.
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <footer id="footer2">
            <div>
                <p>Respect GYM 's-Hertogenbosch &#169 2019 | Web support by Atlantis Media</p>
            </div>
        </footer>
    </body>
</html>