<!--User: J. Verbruggen-->
<!--Date: 16/6/2021-->
<!--File: nav.php-->
<?php
//start de sessie
session_start();
    if(isset($_SESSION["userLoggedIn"]) == true)
    {
        echo '<body>
                <header>
                    <nav class="MainNav">
                        <a id="homeAfbeelding" href="../pages/index.php">
                            <img src="../images/LogoCAK.png" alt="LogoKW1C">
                        </a>
                        <ul class="navUL">
                            <li>
                                <a href="../pages/index.php" class="knop">Home</a>
                            </li>
                            <li>
                                <a href="https://www.kw1c.nl/" class="knop">KW1C</a>
                            </li>
                            <li>
                                <a href="../pages/login.php" class="knop">Uitloggen</a>
                            </li>
                        </ul>
                    </nav>
                </header>
            </body>';
    }
    else
    {
        echo '<body>
            <header>
                <nav class="MainNav">
                    <a id="homeAfbeelding" href="../pages/index.php">
                        <img src="../images/LogoCAK.png" alt="LogoKW1C">
                    </a>
                    <ul class="navUL">
                        <li>
                            <a href="../pages/index.php" class="knop">Home</a>
                        </li>
                        <li>
                            <a href="https://www.kw1c.nl/" class="knop">KW1C</a>
                        </li>
                        <li>
                            <a href="../pages/login.php" class="knop">Inloggen</a>
                        </li>
                    </ul>
                </nav>
            </header>
        </body>';
    }
?>