<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../sign_upANDlog_in/assets/css/log_in.css">
    <title>Log In Page</title>
</head>
<body>
<?php 
       include "db.php" 
       ?>

    <h2> Login Page</h2><br>
    <div class = "log_in">
        <form id = "logIn" method = "POST" action = "success.php">
            <label><b>User Name</b></label>
            <input type="text" name = "userName" id="userName" placeholder="Username">
            <br><br>
            <label><b>Password</b></label>
            <input type = "Password" name = "Pass" id="Pass" placeholder="Password">
            <br><br>
            <input type="button" name = "log" id= "log" value = "Log In">
            <br><br>
            <input type = "checkbox" id = "check">
            <span>Remember me</span>
            <br><br>
            Forgot <a href="#">Password</a>
        </form>
    </div>

    
</body>
</html>