<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Admin";
    $_SESSION["lastname"] = "Admin";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
    echo"<br>This code is executed by Dhruv Yadav 0221BCA095";
 
?>