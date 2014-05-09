<?php
    // connect to the database  
       
    $prog_stat_result = query("SELECT user_prog_status.pset, prog_status.status, prog_status.img_link
                               FROM user_prog_status
                               INNER JOIN prog_status
                               ON user_prog_status.status_code=prog_status.status_code
                               WHERE user_prog_status.user_id = ?
                               ORDER BY user_prog_status.pset;", $_SESSION["id"]);
    
    extract($prog_stat_result);
    
    require("../templates/course_progress.php");
?>
