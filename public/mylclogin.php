<?php

//MySQL Database Connect
 include 'datalogin.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["username"]))
        {
            echo "You must enter a valid username.";
            header('Refresh: 2, mylclogin_form.php/');
        }
        
        if (empty($_POST["password"]))
        {
            echo "You must enter a valid password.";
            header('Refresh: 2, mylclogin_form.php/');
        }
        
        
        
        $user = mysqli_query("localhose
        
        ("SELECT * FROM user WHERE username = ?", $_POST["username"]);
        
        if (count($user) == 1)
        {
            echo "WOOT!";
        }
    }
    
    else
    {
        header('Location: http://pset7/mylclogin_form.php/');
    }
?> 
