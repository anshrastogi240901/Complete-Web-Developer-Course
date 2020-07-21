<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Dear Diary</h1>
        <div id="error"><?php echo $error; ?></div>
        <form method="post">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="stayLoggedIn" value=1>
             <label class="form-check-label" for="defaultCheck1">
                Stay Logged in
            </label>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="signUp" value="1">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Sign Up!">
        </div>
        </form>

        <form method="post">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="stayLoggedIn" value=1>
             <label class="form-check-label" for="defaultCheck1">
                Stay Logged in
            </label>
        </div>
            
        <div class="form-group">
            <input type="hidden" class="form-control" name="signUp" value="0">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Log In!">
        </div>
        </form>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>