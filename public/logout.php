<?php

    // configuration
    require("../includes/MyLCconfig.php"); 

    // log out current user, if any
    session_start();
    session_destroy();

    // redirect user
    redirect("mylclogin_form.php");

?>
