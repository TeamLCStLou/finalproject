<?php

// have user enter parameters for search

require("../includes/MyLCfunctions.php");
require("../includes/datalogin.php");

if (empty($_POST["Locations"]))
{
    $ID_loc = NULL;
}

else
{
    foreach ($_POST["Locations"] as $loc):

    $user_loc = query("SELECT * FROM `users` WHERE City_Loc = '$loc'");
    extract ($user_loc);
        
        foreach ($user_loc as $ID_loc):
        print $ID_loc['username'];
        endforeach;

    endforeach;
}

if (empty($_POST["ProgExp"]))
{
    $ID_exp = NULL;
}

else
{
    foreach ($_POST["ProgExp"] as $exp):
    $user_exp = query("SELECT * FROM `users` WHERE ProgExp = '$exp'");
    extract ($user_exp);
        
        foreach ($user_exp as $ID_exp):
        print $ID_exp['username'];
        endforeach;

    endforeach;
}

if (empty($_POST["Availability"]))
{
    $ID_avail4 = NULL;
}

else
{
    foreach ($_POST["Availability"] as $avail):
    $user_avail = query("SELECT * FROM `user_availability` WHERE Availability = '$avail'");
    extract ($user_avail);
        
        foreach ($user_avail as $ID_avail):
        $ID_avail2 = $ID_avail['user_id'];
        $ID_avail3 = query("SELECT * FROM `users` WHERE id = '$ID_avail2'");
        extract ($ID_avail3);
            
            foreach ($ID_avail3 as $ID_avail4):
            print $ID_avail4['username'];
            endforeach;
    
        endforeach;
    
    endforeach;
}


if ($ID_loc == $ID_exp && $ID_loc == $ID_avail4)
{
    print $ID_loc['username'];
}
?>

<!DOCTYPE html>

<html>

<h1>HELLO!</h1>

// submit and check against sql database

// return values of "match": username, location, time available, experience

// for each value, offer option to "send 

