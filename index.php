<!DOCTYPE html>
<html>

<head>
    <title>Login Now</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="stylesheet" type="text/css" href="font.css">
</head>

<body>

    <div class="container">
        <img src="Resources\userlogin.png">

        <form action="index.php" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="User Name">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" name="submit" value="Sign Up" >
            <div class="haveAccount">
                <a href="">Have an account alredy?</a>
            </div>
        </form>

    </div>

<div class="about">

    <h3>Powered by,</h3>
    <img src="Resources\riucsita.png">

</div>

<?php
    // connect to the database
    $db = mysqli_connect('localhost','root',NULL,'login-test');

    //if the submit button is clicked
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($_POST['username']);
        $password = mysqli_real_escape_string($_POST['password']);
        $sql = "INSERT INTO login"
    }
?>

</body>

</html>
