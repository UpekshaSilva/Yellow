<?php
require_once '../connection.php';

  $empNo=$_GET['id'];

  $sql="SELECT *  FROM employee WHERE emp_no='$empNo'";
  $result = mysqli_query($conn, $sql);

  if ($result1) {
    $sql2="DELETE FROM employee WHERE emp_no='$empNo'";
    header("location:emp.php");
  }else{
      echo "<script type='text/javascript'>alert('No such Employee!')</script>";
      header("location:emp.php");
    }

  
