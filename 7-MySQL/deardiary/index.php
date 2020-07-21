<?php

    session_start();

    $error = "";    

    if (array_key_exists("logout", $_GET)) {
        
        session_destroy();
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";  
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        
        header("Location: loggedinpage.php");
        
    }

    if (array_key_exists("submit", $_POST)) {
        include("connection.php");
        
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
            if ($_POST['signUp'] == '1') {
            
                $query = "SELECT `id` FROM `user` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {

                    $error = "That email address is taken.";

                } else {

                    $query = "INSERT INTO `user` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                    if (!mysqli_query($link, $query)) {

                        $error = "<p>Could not sign you up - please try again later.</p>";

                    } else {

                        $query = "UPDATE `user` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                        mysqli_query($link, $query);

                        $_SESSION['id'] = mysqli_insert_id($link);

                        if ($_POST['stayLoggedIn'] == '1') {

                            setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);

                        } 

                        header("Location: loggedinpage.php");

                    }

                } 
                
            } else {
                    
                    $query = "SELECT * FROM `user` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' ";
                
                    $result = mysqli_query($link, $query);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                        $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        
                        if ($hashedPassword == $row['password']) {
                            
                            $_SESSION['id'] = $row['id'];
                            
                            if ($_POST['stayLoggedIn'] == '1') {

                                setcookie("id", $row['id'], time() + 60*60*24*365);

                            } 

                            header("Location: loggedinpage.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
                    
                }
            
        }
        
        
    }


?>

    <?php include("head.php"); ?>
    <div class="container" id="homepagecontainer">
        <h1 class="head"><strong>Dear Diary</strong></h1>
        <h4 class="head">Getting new ideas, Everyday? Why not store it in your First digital Diary</h4>
        <h6 class="head">Permanent and Secure</h6>
        <div id="error"><?php echo $error; ?></div>
        <form method="post" id="signupform">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="stayLoggedIn" value=1>
             <label class="form-check-label" for="defaultCheck1" style="color:#cce3d2;">
                Stay Logged in
            </label>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="signUp" value="1">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Signup</button>
        <p><a class="toggleForms" style="color:white;">Login</a></p>
        </form>
        <form method="post" id="loginform">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="stayLoggedIn" value=1>
             <label class="form-check-label" for="defaultCheck1" style="color:#cce3d2;">
                Stay Logged in
            </label>
        </div>
            
        <div class="form-group">
            <input type="hidden" class="form-control" name="signUp" value="0">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Login</button>
        <p><a class="toggleForms" style="color:white;">Signup</a></p>
        </form>
    </div>
    <?php include("foot.php"); ?>
