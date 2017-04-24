<?php
require_once '../connection.php';

  $empNo=$_POST['empNo'];
  $name = $_POST['name'];
  $tele_no = $_POST['nic'];
  $address = $_POST['address'];
  $NIC = $_POST['nic'];
  $sql="UPDATE employee SET name='$name',tele_no='$tele_no',Address='$address',NIC='$NIC' WHERE emp_no='$empNo';";
  $result = mysqli_query($conn, $sql);

  if ($result){
        echo "<script type='text/javascript'>alert('successfully Updated!')</script>";
        header("location:empDetails.php");
    }else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
?>

