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

    
    <form method="POST" action="matchcode_check.php">
    
    <div id="middle">
    <h2>Select preferences for your study group below</h2>
    <h4>Location:</h4>
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
    </div>
    
    <div id="middle">
    <h4>Group Experience Level:</h4>
    <?php $sql = "SELECT `ProgExp` FROM ProgExp";


    $query_resource = query($sql);
    extract($query_resource);

    foreach($query_resource as $exp):
    ?>
    
    <div class="form-group" id="middle">
    <input type="checkbox" name="ProgExp[]" value="<?php echo $exp['ProgExp']; ?>"/>
    <span><?php echo $exp['ProgExp']; ?></span></br>
    <?php endforeach; ?>
    
    </div>
    </div>
    
    <div id="middle">
    <h4>Time Available:</h4>
    <?php $sql = "SELECT `Time` FROM Availability";


    $query_resource = query($sql);
    extract($query_resource);

    foreach($query_resource as $time):
    ?>
    
    <div class="form-group" id="middle">
    <input type="checkbox" name="Availability[]" value="<?php echo $time['Time']; ?>"/>
    <span><?php echo $time['Time']; ?></span></br>
    <?php endforeach; ?>
    </div>
    </div>
    
    </br>
    <div id="middle">
    <div class="form-group" id="middle">
        <button type="submit" class="m-btn">Submit</button>
    </div>
       
    </form>

    <h3>or <a href="mylchomepage.php">Return to Homepage</a></h3>
    </div>
    </br>
    </fieldset>
    </fieldset>
    </body>

    <fieldset class="bar">
    </fieldset>

<html>



