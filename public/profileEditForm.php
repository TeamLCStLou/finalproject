<?php

require("../includes/MyLCconfig.php");
if(!isset($_SESSION["id"]))
{
    die("You must be logged in to view this page");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $PhoneNum = ($_POST["Phone number"]);
    $Email = ($_POST["E-mail address"]);
    $Location = ($_POST["Location"]);
    $Experience = ($_POST["Experience"]);
    $Availability = ($_POST["Availability[]"]);
    $Lecture = ($_POST["Lecture Location"]);
    
    $result = query("INSERT INTO users (Phone number, E-mail address, Location, Experience, Lecture location)
    VALUES (?, ?, ?, ?, ?, )", $_POST["Phone number"], $_POST["E-mail address"], $_POST["Location"], $_POST["Experience"],
    $_POST["Lecture location"]);
    foreach($_POST["Availability"] as $value)
    {
        $result = query("INSERT INTO users (Availability) VALUES ($value)");
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
    </head>
    <body>
    <h1>Edit Profile</h1>
    <p>
    <p>
		<div class="content">
		<form method="post">
		 <h3>Contact info:</h3>
		 <p>
		 <h3>Phone Number:</h3>
		 <p>
		 
		 <input name="Phone number" type="text" placeholder="(XXX)-XXX-XXXX"></input>
		 <p>
		 <h3>E-mail:</h3>
		 <p>
		 <input name="E-mail address" type="text" placeholder="Name@name.com"></input>
		 <p>
		 
		 <h3>Choose your preferred location:</h3>
			<select name="Location">
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
		 <select name="Experience">  
		 <option value="None">None</option>
		 <option value="Novice">Novice</option>
		 <option value="Intermediate">Intermediate</option>
		 <option value="Advanced">Advanced</option>
		 </select>
		 <p>
		 <h3>Choose your availability:</h3>
		 <input type="checkbox" name="Availability[]" id="Availability" value="Morning">Morning</input> 
		 <input type="checkbox" name="Availability[]" id="Availability" value="Afternoon">Afternoon</input> 
		 <input type="checkbox" name="Availability[]" id="Availability" value="Evening">Evening</input>
		 <input type="checkbox" name="Availability[]" id="Availability" value="Weekday">Weekday</input>
		 <input type="checkbox" name="Availability[]" id="Availability" value="Weekend">Weekend</input>
		 <p>
		 <h3>Choose your lecture location preference:</h3>
		 <input type="radio" name="Lecture Location" value="Soldier's Memorial">Soldier's Memorial<br></input>
		 <input type="radio" name="Lecture location" value="Central Library">Central Library<br></input>
		 <p>
		 <p>
		 <button type="submit" class="m-btn">Save Changes</button>
		 
		 </form>
		</div>
	</body>
</html>  
		 
