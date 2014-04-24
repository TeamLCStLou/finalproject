<?php 
// http://php.about.com/od/phpwithmysql/qt/mysql_connect.htm
 // Connects to Our Database 
 $mysqli = new mysqli("localhost", "jharvard", "crimson", "matchCode") or die(mysql_error()); 
 // mysql_select_db("matchCode") or die(mysql_error()); 
 ?> 
