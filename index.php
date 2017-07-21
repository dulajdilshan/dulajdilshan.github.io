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

<<<<<<< HEAD
        <form action="index.php" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="User Name">
=======
        <form>
            <div class="form-input">
                <input type="text" name="username" placeholder="Username">
>>>>>>> 4e5a22bba9dcd6fadd5167062353a6396c56e0e7
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="password" name="password" placeholder="Password">
            </div>
<<<<<<< HEAD
            <input type="submit" name="submit" value="Sign Up" >
=======
            <input type="submit" name="submit" value="Sign Up">
>>>>>>> 4e5a22bba9dcd6fadd5167062353a6396c56e0e7
            <div class="haveAccount">
                <a href="">Have an account alredy?</a>
            </div>
        </form>

    </div>

<div class="about">
<<<<<<< HEAD

    <h3>Powered by,</h3>
=======
    <h3>Powered by</h3>
>>>>>>> 4e5a22bba9dcd6fadd5167062353a6396c56e0e7
    <img src="Resources\riucsita.png">

</div>

<?php
<<<<<<< HEAD
    // connect to the database
    $db = mysqli_connect('localhost','root',NULL,'login-test');

    //if the submit button is clicked
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($_POST['username']);
        $password = mysqli_real_escape_string($_POST['password']);
        $sql = "INSERT INTO login"
    }
=======
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
>>>>>>> 4e5a22bba9dcd6fadd5167062353a6396c56e0e7
?>

</body>

</html>
