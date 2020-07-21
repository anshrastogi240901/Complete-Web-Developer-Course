<?php
//Connection snd checking for errors
 $link = mysqli_connect("shareddb-u.hosting.stackcp.net", "UserCredentials-3133339199", "thehacker007@", "UserCredentials-3133339199");
 if(mysqli_connect_error()){
     echo "There's a problem in connecting to database.";
 }else{
     echo "Database connection Successful";
 }
 //Retrieving data
 /*$query = "SELECT * from user";
 if($result = mysqli_query($link, $query)){
     echo "<br>Query was Successful<br>";
     $row = mysqli_fetch_array($result);
     //print_r($row);
     echo "Your Email is :".$row["email"]."<br>";
     echo "Your Password is :".$row["password"]."<br>";
 }*/
 //Inserting and updating data
 /*$query = "INSERT INTO `user`(`email`, `password`) VALUES('sanjeevrastogi22@gmail.com', 'sanjeev1967')";
 mysqli_query($link, $query);
 $query = "INSERT INTO `user`(`email`, `password`) VALUES('shuchirastogi71@gmail.com', 'shuchi1971')";
 mysqli_query($link, $query);
 $query = "UPDATE `user` SET email = 'admin@anshrastogi.com' WHERE id = 1 LIMIT 1";
 mysqli_query($link, $query);*/
 
 //Looping through the data
 /*$query = "SELECT * from user";
 if($result = mysqli_query($link, $query)){
    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }
 }
 $name = "Ansh O'Rastogi";
 $query = "SELECT `email` from user WHERE name = '".mysqli_real_escape_string($link, $name)."'";
 if($result = mysqli_query($link, $query)){
    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }
 }*/
 /*storing passwords securely
 //One-way encryption
 echo "<br>".md5("AnshRastogi");
 //Level III Encryption
$salt = "jhdadasjdojal0828jansj";
echo "<br>".md5($salt."AnshRastogi");
//Level IV Encryption
$row["id"] = 75;
echo "<br>".md5(md5($row["id"])."AnshRastogi");*/
//using password_hash()
 echo password_hash("AnshRastogi", PASSSWORD_DEFAULT);
 
 ?> 