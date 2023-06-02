<?php
    // Wanneer moet de cookie verlopen? Over 14 dagen!
    $expires = time() + 3600 * 24 * 14;

    //Plaats de cookie
    setcookie("userCountCookie", 0, $expires, "/");
?>