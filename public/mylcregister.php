<?php

// TO DO:  config file?  require("../includes/config.php");

require("../includes/config.php");

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
        apologize("Your Username needs to be between 3 and 15 characters. Try again!")
    }
    else if($upasslength < 5 || $upasslength > 15)
    {
        apologize("Your Password needs to be between 5 and 15 characters. Try again!")
    }
    else if($_POST["password"] != $_POST["confirmation"])
    {
        apologize("Passwords do not match. Try again!")
    }
    
    
    $result = query("INSERT INTO users (username, hash) VALUES (?, ?)", $_POST["username"], crypt($_POST["password"])); 
        if($result === false)
        {
            apologize("Failed to register user. Desired username already exists!");
        }
        
        else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $row = $rows[0];
            $_SESSION["id"] = $row["id"];
            redirect("/");
        }
    }
    else
    {
        // else render form
        render("mylcregister_form.php", ["title" => "Register"]);
    }

?>
