<!DOCTYPE html>

<html>
    
    <head>
    
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

        <body link= "orange">
        
        
        <form action = "mylclogin.php" method="post">
            
            <div>
            
            <div id="middle">
            
            <input name="username" placeholder="Who are you?" type="text">
            
            </div>
            
            <div>
            
            <div id="middle">
            
            <input name="password" placeholder="What's the secret code?" type="password">
            
            </div>
            
            </br>
            
            <div>
            
            <div id="middle">
            
            <button type="submit">Click to enter!</button>
            
            </div>
        
        </form>
        
        <h3>--or click <a href="mylcregister.php">here</a> to register--</h3>
        
        </br>
        </br>
        
        <div>
        <div id= "bottom">The hard is what makes it great. --Jimmy Dugan
        </div>
        </br>
    </fieldset>
    </body>
    
    <fieldset class="bar">
    </fieldset>
    

<html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
	
    if(empty($_POST["username"] || $_POST["password"]))
    {
        apologize("Username or password missing! Please enter all fields.");
    }

    
 
      // look for user
        $rows= query("SELECT * FROM users WHERE username = '$username' AND password='$password'");

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            {
                // store user's ID in session
                $_SESSION["id"] = $row["id"];
        
     
            
            redirect("mylchomepage.php");
            }
        }
        // else if wrong pass, apologize
    apologize("Incorrect username and/or password! Try again.");
 }
    

?>
