<?php

function updateProgStatus($pset, $status_code)
{
    $user_id = $_SESSION["id"];

    $row_count = query("select count(`user_prog_status`.`user_id`) AS COUNT FROM user_prog_status WHERE `user_prog_status`.`user_id` = `?` AND `user_prog_status`.`pset` = `?`;",  $user_id, $status_code);
    
    if ($row_count == 1)
    {
        query("UPDATE  `matchCode`.`user_prog_status` SET  `status_code` =  '?'
                        WHERE  `user_prog_status`.`user_id` =? AND  
                               `user_prog_status`.`pset` =?", $status_code, $user_id, $pset);
    } else if ($row_count == 1)
    {
        query("INSERT INTO  `matchCode`.`user_prog_status` (
                                        `user_id` ,
                                        `pset` ,
                                        `status_code` ,
                                        `created_on`
                                                           )
             VALUES ('?',  '?',  '?', CURRENT_TIMESTAMP);", $user_id, $pset, $status_code);                
    }
    else
    {
        die("There was a database error. Please try again.");
    }
}
?>
