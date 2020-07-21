<?php
    $link = mysqli_connect("yourhosturl","database name","database password","table name same as database name in my case");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
        }    

?>
