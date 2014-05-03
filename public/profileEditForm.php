<?php

require("../includes/datalogin.php");
require("../includes/MyLCconfig.php");

if(!isset($_SESSION["id"]))
{
    die("You must be logged in to view this page");
    redirect("mylcregister.php");
}
else if(isset($_SESSION["id"]))
{
      $rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
        if(isset($_POST['Availabile']))
        {
            $AllAvailable = $_POST['Availabile'];
        }
        print_r($_POST['Availabile']);

        query("UPDATE users SET FName=?, LName=?, Email=?, Phone=?, Lecture_Loc=?, City_loc=?, ProgExp=? WHERE id=?",
        $_POST["FName"], $_POST["LName"], $_POST["Email"], $_POST["Phone"], $_POST["Lecture_Loc"], $_POST["City_Loc"], 
        $_POST["ProgExp"], $_SESSION["id"]);
        redirect("mylchomepage.php");
         

    
    foreach( $_POST['Availabile'] as $value)
    {
        query("INSERT INTO  `matchCode`.`user_availability` (`user_id` , `Availability`) VALUES (?, ?)", $_SESSION["id"], $value);
    }



        
    //$AllAvailable = substr($AllAvailable, 0, -2);           
}
?>


		 
<!DOCTYPE html>
<html>
	<head>
	    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro:200" rel="stylesheet" type="text/css"/>
		<link href= "css/mylcstyles.css" rel= "stylesheet"/>
    
    <title>MyLaunchCode.com</title>
    
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
    <body>
    <h3>Welcome to your new profile! Please provide us a bit more information about yourself.</h3>
    <p>
    <p>
		<div id="middle">
		<form name="profileEditForm" id="ProfileEditForm" method="post">
		 <h4>Contact info:</h4>
		 <p>
		 <h3>First name:</h3>
		 <p>
		 <input id="middle" name="FName" type="text" placeholder="First Name"></input>
		 <p>
		 <h3>Last name:</h3>
		 <input id="middle" name="LName" type="text" placeholder="Last Name"></input>
		 <p>
		 <h3>Phone Number:</h3>
		 <p>
		 
		 <input id="middle" name="Phone" type="text" placeholder="(XXX)-XXX-XXXX"></input>
		 <p>
		 <h3>E-mail:</h3>
		 <p>
		 <input id="middle" name="Email" type="text" placeholder="Name@name.com"></input>
		 <p>
		 
		 <h3>Choose your preferred location:</h3>
		 <select id="middle" name="City_Loc">
		 <?php $sql = "SELECT `Name` FROM Locations";
		       $queryresponse = query($sql);
		       extract($queryresponse);
		       foreach($queryresponse as $location):
		       ?>
		       
		       	
			<option id="middle" name="Locations[]" value="<?php echo $location['Name']; ?>"</option>
			<span><?php echo $location['Name']; ?></span></br>
			<?php endforeach; ?>
            </select> 
		 <p>
		 <h3>Choose your programming experience:</h3>
		 <select id="middle" name="ProgExp">  
		<?php $sql = "SELECT `ProgExp` FROM ProgExp";
		       $queryresponse = query($sql);
		       extract($queryresponse);
		       foreach($queryresponse as $location):
		       ?>
		       
		       	
			<option id="middle" name="ProgExp[]" value="<?php echo $location['ProgExp']; ?>"</option>
			<span><?php echo $location['ProgExp']; ?></span></br>
			<?php endforeach; ?>
		 </select>
		 <p>
		 <h3>Choose your availability:</h3>
		 <input type="checkbox" name="Availabile[]" value="Morning">Morning</input> 
		 <input type="checkbox" name="Availabile[]" value="Afternoon">Afternoon</input> 
		 <input type="checkbox" name="Availabile[]" value="Evening">Evening</input>
		 <input type="checkbox" name="Availabile[]" value="Weekday">Weekday</input>
		 <input type="checkbox" name="Availabile[]" value="Weekend">Weekend</input>
		 <p>
		 <h3>Choose your lecture location preference:</h3>
		 <input type="radio" name="Lecture_Loc" value="Soldier's Memorial">Soldier's Memorial<br></input>
		 <input type="radio" name="Lecture_Loc" value="Central Library">Central Library<br></input>
		 <p>
		 <p>
		 <button type="submit" class="m-btn">Save Changes</button>
		 <P>
		 <P>
		 Or <a href="logout.php">Log Out</a>
		 
		 </form>
		</div>
	</body>
</html>  
