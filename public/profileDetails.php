<?php
    // setup page details
    require("../includes/MyLCconfig.php");

    // connect to the database  
    require ("../includes/datalogin.php");

    $profile_result = query("SELECT * FROM  `users` WHERE id=?", $_SESSION["id"]);
    $avail_result = query("SELECT * FROM  `user_availability` WHERE user_id=?", $_SESSION["id"]);

    extract($profile_result[0]);
    extract($avail_result[0]);
        
    require("../templates/profileDetails.php");
?>
