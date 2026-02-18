<?php
    include "connected.php";
    if(isset($_POST['submit'])){
        
        $n=$_POST['fname'];
        $p=$_POST['password'];
        $em=$_POST['email'];
        $sql="INSERT INTO `registration`(`fname`,`password`,`email`) VALUES('$n','$p','$em')";
        
        $res = mysqli_query($con,$sql);
        if($res){
            header("location:login2.php");
        }
        else{
            die(mysqli_error($con));
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
    <style>
        #div2{
            border-radius: 10px;
            height: 600px;
            width: 400px;
            margin-left: 900px;
            margin-top: 5%;
        
            background-color: rgb(15, 15, 39);
        }
    </style>
</head>
<body>
    
    <div id="div2">
        <h1>Sign in</h1>
        <form id="loginForm" method="post">
            <h4>Fullname&nbsp;&nbsp;</h4>
            <input id="fullname" type="text" name="fname" placeholder="Enter fullname" ><br>
            <h4>Enter Password&nbsp;&nbsp;</h4>
            <input id="password" type="password" name="password" placeholder="Enter Your Password"><br>
            <h4>Conform Password&nbsp;&nbsp;</h4>
            <input type="password" name="cpass" placeholder="Conform Password"><br/>
            <h4>Email&nbsp;&nbsp;</h4>
            <input type="text" name="email" placeholder="Enter Youe Email"><br/><br/>
            <input type="submit" value="sign in" name="submit" id="submit_"><br/><br/>
        </form>        
    </div>
    
</body>
</html>