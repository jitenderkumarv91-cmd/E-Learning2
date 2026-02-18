<?php
session_start();
if (isset($_POST['submit'])){ 
    include "connected.php";
    $n  = $_POST['uname'];

    $p = $_POST["password"];
    $sel = "SELECT * FROM `registration` where email = '$n' and password = '$p' ";
    $query = mysqli_query($con, $sel);
    if($row = mysqli_fetch_assoc($query)){
        $_SESSION['name'] = $n;
        header("location:Home.php");

    }
}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="div1">
        <h1>Login</h1>
        <form method="post" id="loginForm">
            <h4>Username&nbsp;&nbsp;</h4>
            <input id="username" type="text" name="uname" placeholder="Enter Username"><br><br>
            <h4>Enter Password&nbsp;&nbsp;</h4>
            <input id="password" type="password" name="password" placeholder="Enter Your Password"><br><br>
            <input type="submit" value="Submit" id="submit_" name="submit"><br/><br/>
            <a href="forgate.html" id="forget_00">forgate password</a>
        </form>        
    </div>
    
</body>
</html>