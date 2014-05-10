<!DOCTYPE html>

<html>
    
    <head>
    
    <link href= "css/mylcstyles.css" rel= "stylesheet"/>
    
    <title>RENDER TEST</title>
    
    </head>
    <body>
    
    <?php
     
        require("../includes/datalogin.php");
        require("../includes/MyLCconfig.php");        
        
        require($_GET["name"] . ".php"); 
    
    ?>
    
    </body>
<html>
