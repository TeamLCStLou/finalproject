<?php

    /**
     * 
     *
     * Configures our page. Currently copied from pset7 file.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    // require("constants.php");
    require("MyLCfunctions.php");

    // enable sessions
    session_start();

    // require authentication for most pages
    if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("mylclogin.php");
        }
    }

?>
