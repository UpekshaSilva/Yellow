<?php
require_once '../connection.php';

  $uid=$_POST['uid'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $type= $_POST['type'];
 

  $sql="INSERT INTO users VALUES ('$uid','$username','$password','$type');";
  $result = mysqli_query($conn, $sql);

    if ($result){
        echo "<script type='text/javascript'>alert('successfully Added!')</script>";
        header("location:userDetails.php");
    }else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
        header("location:userDetails.php");
    }
?>

