<?php
    // connect to the database  
       
    $result = query("SELECT * FROM  `siteLinks` ORDER BY `siteLinks`.`order` ASC");

    extract($result);
    
    require("../templates/links.php");



?>
