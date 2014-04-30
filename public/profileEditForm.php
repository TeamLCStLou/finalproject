<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
    </head>
    <body>
    Welcome to your new profile! Please provide us a bit more information about yourself.
    <P>
    <h1>Edit Profile</h1>
    <p>
    <p>
		<div class="content">
		<form name="profileEditForm" id="ProfileEditForm" action="mylchomepage.php" method="post">
		 <h2>Contact info:</h2>
		 <p>
		 <h3>First name:</h3>
		 <p>
		 <input name="FName" type="text" placeholder="First Name"></input>
		 <p>
		 <h3>Last name:</h3>
		 <input name="LName" type="text" placeholder="Last Name"></input>
		 <p>
		 <h3>Phone Number:</h3>
		 <p>
		 
		 <input name="Phone" type="text" placeholder="(XXX)-XXX-XXXX"></input>
		 <p>
		 <h3>E-mail:</h3>
		 <p>
		 <input name="Email" type="text" placeholder="Name@name.com"></input>
		 <p>
		 
		 <h3>Choose your preferred location:</h3>
			<select name="City_Loc">
			<option value="Downtown">Downtown</option>
            <option value="Jefferson County">Jefferson County</option>
            <option value="Metro East">Metro East</option>
            <option value="Midtown">Midtown</option>
            <option value="North County">North County</option>
            <option value="South County">South County</option>
            <option value="St. Charles">St. Charles</option>
            <option value="West County">West County</option>
            </select> 
		 <p>
		 <h3>Choose your programming experience:</h3>
		 <select name="ProgExp">  
		 <option value="None">None</option>
		 <option value="Novice">Novice</option>
		 <option value="Intermediate">Intermediate</option>
		 <option value="Advanced">Advanced</option>
		 </select>
		 <p>
		 <h3>Choose your availability:</h3>
		 <input type="checkbox" name="Availabile[]" id="Availabile" value="Morning">Morning</input> 
		 <input type="checkbox" name="Availabile[]" id="Availabile" value="Afternoon">Afternoon</input> 
		 <input type="checkbox" name="Availabile[]" id="Availabile" value="Evening">Evening</input>
		 <input type="checkbox" name="Availabile[]" id="Availabile" value="Weekday">Weekday</input>
		 <input type="checkbox" name="Availabile[]" id="Availabile" value="Weekend">Weekend</input>
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

<?php

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
   
    
    //$AllAvailable = "";
    //$userid = ($_SESSION["id"]);
    
    
  
     if(count($rows) == 0)
     {
        query("INSERT INTO users (FName, LName, Email, Phone, Lecture_Loc, City_loc, ProgExp) VALUES (?, ?, ?, ?, ?, ?, ?)",
        $_POST["FName"], $_POST["LName"], $_POST["Email"], $_POST["Phone"], $_POST["Lecture_Loc"], $_POST["City_Loc"], 
        $_POST["ProgExp"]);
        // redirect("mylchomepage.php");
     }
         
    
    //foreach( $Availability as $value)
    //{
      //  $AllAvailable .= $value . ", ";
    //}
    
    //$AllAvailable = substr($AllAvailable, 0, -2);           
}
?>


		 
