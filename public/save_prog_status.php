<?php

    // log into database and get helper functions
    require("../includes/datalogin.php");
    require("../includes/MyLCconfig.php");
    
    // update value of program status for selected pset
    updateProgStatus($_GET["PSET"], $_GET["STATUS"], $_SESSION["id"]);
    
    // reload the homepage to show the new status
    redirect ("./mylchomepage.php");

?>
