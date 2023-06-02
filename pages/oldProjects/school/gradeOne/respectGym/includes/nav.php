<nav id="navigatieMenu">
    <div>
        <?php
        echo locatie5($locatie2);
        function locatie5($locatie)
        {
            if($locatie == 0)
            {
                return '<img id="logo" src="images/logo.png"  alt="logo">';
            }
            if($locatie == 1)
            {
                return '<img id="logo" src="../images/logo.png"  alt="logo">';
            }
        }
        ?>
        <div>
            <?php
            echo locatie4($locatie2);
            function locatie4($locatie)
            {
                if($locatie == 0)
                {
                    return '<img id="loupe" src="images/loupe.png" alt="loupe">';
                }
                if($locatie == 1)
                {
                    return '<img id="loupe" src="../images/loupe.png" alt="loupe">';
                }
            }
            ?>

        </div>
            <!--maakt een lijst aan-->
            <ul>
                <!--maakt id's aan die de informatie uit het javascript ophalen-->
                <p>
                    <?php
                    echo locatie($locatie2);
                    function locatie($locatie)
                    {
                        if($locatie == 0)
                        {
                            return '<a href="index.php"><li>Home</li></a>';
                        }
                        if($locatie == 1)
                        {
                            return '<a href="../index.php"><li>Home</li></a>';
                        }
                    }
                    ?>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/sport/"><li>Sport</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/les-rooster/"><li>Lesrooster</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/personal-trainer/"><li>Personal Trainer</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/over-ons/"><li>Over ons</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/lid-worden/"><li>Lid worden</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/zakelijk/"><li>Zakelijk</li></a>
                </p>
                <p>
                    <a href="http://www.respectgym.nl/contact/"><li>Contact</li></a>
                </p>
                <p>
                    <?php
                    echo locatie3($locatie2);
                    function locatie3($locatie)
                    {
                        if ($locatie == 0) {
                            return '<a href="pages/FAQ.php"><li>FAQ</li></a>';
                        }
                        if ($locatie == 1) {
                            return '<a href="FAQ.php"><li>FAQ</li></a>';
                        }
                    }
                    ?>
                </p>
            </ul>
    </div>
</nav>