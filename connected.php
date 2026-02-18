<?php
    $con = mysqli_connect("localhost", "root", "", "login2");
    if(!$con){
        die(mysqli_error("error") +$con);
    }
?>