<?php

    // configuration
    require("../includes/MyLCconfig.php"); 
    
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Define $username and $password 
    $username=$_POST['username']; 
    $password=($_POST['password']);
    
    $username = stripslashes($username);
    $password = stripslashes($password);

     
     // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // look for user
        
        $result = query("SELECT * FROM `users` WHERE username = '$username'");
        $row = $result[0];
        
        print crypt($password);
        print $row["password"];
        
        if (crypt($_POST["password"], $row["password"]) == $row["password"])
            {
                // store user's ID in session
                $_SESSION["id"] = $row["id"];
                redirect("mylchomepage.php");
            }
            else
            {
                apologize("Wrong username or password! Please try again.");
              
            }
}
        
?>

