<?php
    session_start();
    /*$_SESSION["username"] = "anshrastogi";
    echo $_SESSION["username"];*/
    if($_SESSION["email"]){
        echo "Welcome,".$_SESSION["email"]."!";
    }
    else{
        header("Location: anshrastogi-com.stackstaging.com/8-MySQL/signup.php");
    }
?>