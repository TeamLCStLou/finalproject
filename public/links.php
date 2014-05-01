<?php
    // connect to the database  
//    require ("../includes/datalogin.php");
    
//    require("../includes/MyLCfunctions.php");
        
    $result = query("SELECT * FROM  `siteLinks` ORDER BY `siteLinks`.`order` ASC");

    extract($result);
    
    require("../templates/links.php");



?>
