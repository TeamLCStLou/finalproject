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

<form method="post">
        <div class="form-group" id="middle">
            <input autofocus class="form-control" name="username" placeholder="Username"  type="text" align="center"/>
        </div>
        <div class="form-group" id="middle">
            <input class="form-control" name="password" placeholder="Password" type="password" align="center"/>
        <div class="form-group" id="middle">
        <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password" align="center"/>
        </div>
        </div>
        <div class="form-group" id="middle">
            <button type="submit" class="m-btn">Register</button>
        </div>
       
    </form>

<h3>or <a href="mylclogin_form.php">log in</a></h3>
</div>
</br>
</fieldset>
</body>

<fieldset class="bar">
</fieldset>

<html>




<?php

// TO DO:  config file?  require("../includes/config.php");

require("../includes/MyLCconfig.php");

// if user submits the form


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname = ($_POST["username"]);
    $upassword = ($_POST["password"]);
    $ulength = strlen($uname);
    $upasslength = strlen($upassword);
    
    if(empty($_POST["username"] || $_POST["password"]))
    {
        apologize("Username or password missing! Please enter all fields.");
    }
    else if($ulength < 3 || $ulength > 15)
    {
        apologize("Your Username needs to be between 3 and 15 characters. Try again!");
    }
    else if($upasslength < 5 || $upasslength > 15)
    {
        apologize("Your Password needs to be between 5 and 15 characters. Try again!");
    }
    else if($_POST["password"] != $_POST["confirmation"])
    {
        apologize("Passwords do not match. Try again!");
    }
    
    
    $result = query("INSERT INTO users (username, password) VALUES (?, ?)", $_POST["username"], crypt($_POST["password"])); 
        if($result === false)
        {
            apologize("Failed to register user. Desired username already exists!");
        }
        
        else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $row = $rows[0];
            $_SESSION["id"] = $id;
            
            redirect("profileEditForm.php");
        }
    }
  

?>
