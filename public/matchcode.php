<?php


require("../includes/datalogin.php");
require("../includes/MyLCfunctions.php");

?>

<!DOCTYPE html>

<html>
    
    <head>
    
    <link href= "css/mylcstyles.css" rel= "stylesheet"/>
    
    <title>MatchCode.com</title>
    
    </head>
    </br>
    
    <fieldset class="bar">
    </fieldset>
    
    <body background="images/bckgnd.png">
    
    <fieldset class="form">
    </br>
    <div>

    <div id="top">
        <IMG class="imgcenter" alt="MyLaunchcode.com" src="images/MyLClogo.png"/></a>
    </div>

    
    <form method="post">
    <fieldset class="column">
    <?php $sql = "SELECT `Name` FROM Locations";


    $query_resource = query($sql);
    extract($query_resource);

    foreach($query_resource as $location):

    ?>
        <div class="form-group" id="column">
        <input type="checkbox" name="Locations[]" value="<?php echo $location['Name']; ?>"/>
        <span><?php echo $location['Name']; ?></span></br>
        <?php endforeach; ?>
    </div>
    </fieldset>
    <fieldset class="column">
    <div class="form-group" id="column">
        <input type="checkbox" name="time" name="Availability"/>Monday</br>
        </div>
        </fieldset>
        <fieldset class="column">
    <div class="form-group" id="column">
    <input type="checkbox" name="experience" name="Experience"/>Expert</br>
    </div>
    </fieldset>
    </br>
    <fieldset class="bar_2">
    <div class="form-group" id="middle">
        <button type="submit" action="matchcode_check.php" class="m-btn">Submit</button>
    </div>
       
    </form>

    <h3>or <a href="mylchomepage.php">Homepage</a></h3>
    </div>
    </br>
    </fieldset>
    </fieldset>
    </body>

    <fieldset class="bar">
    </fieldset>

<html>



