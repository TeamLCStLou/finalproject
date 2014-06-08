<?php

    require("../includes/datalogin.php");
    require("../includes/MyLCconfig.php");
    
//    print $_GET["PSET"]. " - " . $_GET["STATUS"];
    updateProgStatus($_GET["PSET"], $_GET["STATUS"]);
    redirect ("./mylchomepage.php");

?>
