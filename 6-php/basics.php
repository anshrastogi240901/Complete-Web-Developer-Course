<?php

/* Variables
echo"Hola, Como estas?";
echo "<p>Hi there!<p>";
$name = "Ansh";
echo "<p>My name is $name<p>";
$s1 = "<p>I'm a web developer";
$s2 = "and currently pursuing Bachelors in Computer Science from University of Delhi</p>.";
echo $s1.$s2;
$no = 45;
$calc = $no * 2;
echo $calc;
$var = "name";
echo $$var;*/

/*Array
$arr = array("Ansh", "Kunal", "Himanshu", "Tarun");
echo $arr[0];
$arr["design"] = "photoshop";
$arr [] = "yolo";
unset($arr["design"]);
echo sizeof($arr);
print_r($arr);*/

/*If-else statement
$user = "Ansh";
if($user == "Ansh"){
    echo"Hello Ansh";
}
else{
    echo"I dont know you";
}
echo "<br>";
$age = 19;
if($age >= 18){
    echo"You're an adult now";
}
else{
    echo"You are very young for this";
}*/

/*for and foreach Loops
for($i = 0; $i < 10; $i++){
    echo $i."<br>";
}
$family = array("Sanjeev Rastogi", "Shuchi Rastogi", "Smriti Rastogi", "Ansh Rastogi");
for($i = 0; $i < sizeof($family); $i++){
    echo $family[$i]."<br>";
}
foreach($family as $key => $value){
    echo $key." ".$value."<br>";
}*/

/*While loops
$i = 0;
while($i < 10){
    echo $i."<br>";
    $i++;
}*/

/*Get Variable
print_r($_GET);
echo "Hello ".$_GET["name"]." !";
//Prime no 
for($i = 2; $i < $_GET["no"]; $i++){
if($_GET["no"] % $i != 0){
    $f1 = 1;
}
else{
    $f1 = 0;
  }
}
if($f1 == 1){
 echo"This is a prime number.";   
}
else{
    echo"This is not a prime no.";
}*/

/*Post Variable
print_r($_POST);
echo "Hello ".$_POST["name"]." !";
//Mini challenge
$username = array("Ansh", "Himanshu","Kunal", "Tarun");
for($i = 0; $i < sizeof($username); $i++){
    if($_POST["name"] == $username[$i]){
        echo "Hi ".$_POST["name"]." !";
    }
    else{
        echo "Sorry, I dont recognise you";
    }
}*/

/*Sending email using php
$emailTo = "coolansh134@gmail.com";
$subject = "It's been a long time, I heard from you";
$body = "How's it going on?";
$headers = "From: Admin <admin@anshrastogi.com>\r\n";
if(mail($emailTo, $subject, $body, $headers)){
    echo "Email sent successfully.";
}
else{
    echo "Can't send this Email .";
}*/
?>

<!--Some html for get
<form>
    <p>What's your name:</p>
    <input name="name" type="text" >
    <input type="submit" value="Let's go!">
</form>
//Prime
<form>
    <p>Enter the no. to be checked:</p>
    <input name="no" type="number" >
    <input type="submit" value="Let's go!">
</form>-->
<!--Some html for post
<form method="post">
    <p>What's your name:</p>
    <input name="name" type="text" >
    <input type="submit" value="Let's go!">
</form>-->
