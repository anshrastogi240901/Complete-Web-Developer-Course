<?php
    session_start();
    $diaryContent = "";
     if (array_key_exists("id", $_COOKIE)) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
        include("connection.php");
        $query = "SELECT `diary` FROM `user` WHERE id ='".$_SESSION['id']."' LIMIT 1";
        $row = mysqli_fetch_array(mysqli_query($link, $query));
        $diaryContent = $row['diary'];
        
    } else {
        
        header("Location: index.php");
    }
    include("head.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(0, 0, 0, 0.0);">
  <a class="navbar-brand navtitle" href="#"><strong>Dear Diary</strong></a>
  <div class="pull-xs-right">
    <a href='index.php?logout=1'><button class="btn btn-success my-2 my-sm-0" type="submit">Logout</button></a>
  </div>
</nav>
<div class="container-fluid " id="loggedincontainer">
    <textarea id="diary" class="form-control"><?php echo $diaryContent; ?></textarea>
    
</div>    
<?php    
    include("foot.php");
?>
