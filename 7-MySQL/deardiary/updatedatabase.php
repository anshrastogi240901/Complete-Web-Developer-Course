<?php

    session_start();

    if (array_key_exists("content", $_POST)) {
        
        include("connection.php");
        
        $query = "UPDATE `user` SET `diary` = '".mysqli_real_escape_string($link, $_POST['content'])."' WHERE id = '".$_SESSION['id']."' LIMIT 1";
        
        mysqli_query($link, $query);
        
    }

?>




