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
    </br>
    </br>

    
    <form method="post">
    
    <fieldset class="column">
    <h2>Please select the region of St. Louis that you would prefer to study in:</h2>
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
    <h2>Please select the experience level of the group that you would prefer:</h2>
    <?php $sql = "SELECT `ProgExp` FROM ProgExp";


    $query_resource = query($sql);
    extract($query_resource);

    foreach($query_resource as $exp):
    ?>
    
    <div class="form-group" id="column">
    <input type="checkbox" name="ProgExp[]" value="<?php echo $exp['ProgExp']; ?>"/>
    <span><?php echo $exp['ProgExp']; ?></span></br>
    <?php endforeach; ?>
    
    </div>
    </fieldset>
    
    <fieldset class="column">
    <h2>Please select your preferred study time:</h2>
    <?php $sql = "SELECT `Time` FROM Availability";


    $query_resource = query($sql);
    extract($query_resource);

    foreach($query_resource as $time):
    ?>
    
    <div class="form-group" id="column">
    <input type="checkbox" name="Availability[]" value="<?php echo $time['Time']; ?>"/>
    <span><?php echo $time['Time']; ?></span></br>
    <?php endforeach; ?>
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



