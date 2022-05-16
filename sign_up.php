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

    <h2> SignUp Page</h2><br>
    <div class="log_in">
        <form id="logIn" method="POST" action="profile_page.html">
            <label><b>First Name</b></label>
            <input type="text" name="firstName" id="firstName" placeholder="Firstname">
            <br><br>
            <label><b>Last Name</b></label>
            <input type="text" name="lastName" id="lastName" placeholder="Lastname">
            <br><br>
            <label><b>Date of birth</b></label>
            <input type="date" id="dateOfBirth" name="dateOfBirth">
            <br><br>
            <label><b>Email</b></label>
            <input type="email" name="email" id="email" placeholder="Email">
            <br><br>
            <label><b>Gender</b></label>
            <input type="radio" id="gender_female" name="gender" value="Female">
            <input type="radio" id="gender_male" name="gender" value="Male">
            <br><br>
            <label><b>Password</b></label>
            <input type="Password" name="Pass" id="Pass" placeholder="Password">
            <br><br>
            <label><b>Submit</b></label>
            <input type="submit">
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span>
            <br><br>

        </form>
    </div>


</body>

</html>