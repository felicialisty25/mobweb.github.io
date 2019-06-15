<?php
	$con=mysqli_connect("opensource.petra.ac.id","m26416122","pj2018","m26416122");

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

//SELECT * FROM `mobweb` WHERE id=1 and username LIKE '%vania'
    $query=mysqli_query($con, "select * from mobweb where pass='$pass' and username LIKE '%".$uname."'") or die(mysqli_error($con));
    $i=0;
    if(mysqli_num_rows($query)>0) {
        $i++;
    }
    if($i > 0){
        echo 'A';
    }
    else{
        echo "<script>alert('Username / Password salah');</script>";
    }
?>