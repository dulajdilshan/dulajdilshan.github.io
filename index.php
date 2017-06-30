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

        <form>
            <div class="form-input">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" name="submit" value="Sign Up">
            <div class="haveAccount">
                <a href="">Have an account alredy?</a>
            </div>
        </form>

    </div>

<div class="about">
    <h3>Powered by</h3>
    <img src="Resources\riucsita.png">
</div>

<?php
    $servername ='localhost';
    $username = 'root';
    $password = NULL;
    $dbname = "login-test";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
$sql = "INSERT INTO login(username,password)";
if($conn->query($sql)==TRUE){
    echo "New record added";
}else{
    echo "error: ".$sql ."<br>" .$conn->error;
}
$conn->close();
?>

</body>

</html>
