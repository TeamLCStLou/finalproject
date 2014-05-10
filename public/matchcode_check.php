<?php

// have user enter parameters for search

require("../includes/MyLCfunctions.php");
require("../includes/datalogin.php");


foreach ($_POST["Locations"] as $loc):


$user = query("SELECT * FROM `users` WHERE City_Loc = '$loc'");
extract ($user);
foreach ($user as $ID):
print $ID['username'];
endforeach;

endforeach;




foreach ($_POST["ProgExp"] as $exp):
print $exp;
endforeach;

foreach ($_POST["Availability"] as $avail):
print $avail;
endforeach;

?>

<!DOCTYPE html>

<html>

<h1>HELLO!</h1>

// submit and check against sql database

// return values of "match": username, location, time available, experience

// for each value, offer option to "send 

