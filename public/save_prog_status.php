<?php

    require("../includes/datalogin.php");
    require("../includes/MyLCconfig.php");
    
    // update value of program status for selected pset
    updateProgStatus($_GET["PSET"], $_GET["STATUS"]);
    
    // reload the homepage to show the new status
    redirect ("./mylchomepage.php");

?>
