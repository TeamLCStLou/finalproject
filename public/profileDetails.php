<?php
    // setup page details
    require("../includes/MyLCconfig.php");

    // connect to the database  
    require ("../includes/datalogin.php");

        
    $result = query("SELECT * FROM  `users` WHERE id=?", $_SESSION["id"]);

    extract($result[0]);
    
    require("../templates/profileDetails.php");



?>
