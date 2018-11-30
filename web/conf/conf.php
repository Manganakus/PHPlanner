<?php

/* Environnement --------------------------------------------------*/

if (sprpos($_SERVER['SERVER_NAME'], "local")) {
    define("DEV", true);
} else {
    define("DEV", false);
}

/* MySQL ----------------------------------------------------------*/
if (DEV) {
    // Dev
    $mysqlUser = "phplanner";
    $mysqlPassword = "2018Plan";
    $mysqlDatabase = "phplanner";
    $mysqlServer = "localhost";
} else {
    // Prod
    $mysqlUser = "phplanner";
    $mysqlPassword = "2018Plan";
    $mysqlDatabase = "phplanner";
    $mysqlServer = "localhost";
}


?>