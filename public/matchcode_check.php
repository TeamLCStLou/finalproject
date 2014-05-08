<?php

// have user enter parameters for search

require("../includes/MyLCfunctions.php");
require("../includes/datalogin.php");

foreach ($_POST["Locations"] as $value):
print $value;
endforeach;


print_r ($_POST["ProgExp"]);
print_r ($_POST["Availability"]);

?>

<!DOCTYPE html>

<html>

<h1>HELLO!</h1>

// submit and check against sql database

// return values of "match": username, location, time available, experience

// for each value, offer option to "send 

