<?php
    // connect to the database  
       
    $announcement_result = query("SELECT * FROM site_announcements
                               WHERE site_announcements.display = TRUE
                               ORDER BY site_announcements.order");
    
    extract($announcement_result);
//    print_r($announcement_result);
   
    require("../templates/announcements.php");
?>
