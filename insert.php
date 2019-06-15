<?php
$con=mysqli_connect("localhost","m26416122","pj2018","m26416122");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(strcmp($pass, $cpass) == 0) {
        $insert = "insert into mobweb values (null, '$fname', '$lname', '$uname', '$pass')";
        mysqli_query($con, $insert) or die(mysqli_error($con));
        header("Location:home.html");
    }else{
        echo "<script>alert('Password tidak sama');</script>";
    }


?>