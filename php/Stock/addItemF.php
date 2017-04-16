<?php
require_once '../connection.php';

  $itemNo=$_POST['itemNo'];
  $name = $_POST['name'];
  $supname = $_POST['supname'];
  $quantity = $_POST['quantity'];
  $unitprice = $_POST['unitprice'];
  $netprice = (int)$quantity * (int)$unitprice;
  $sql="INSERT INTO items VALUES ('$itemNo','$name','$supname','$quantity','$unitprice','$netprice')";
  $result = mysqli_query($conn, $sql);

  if ($result){
        echo "<script type='text/javascript'>alert('successfully Added!')</script>";
        header("location:items.php");
    }else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
        header("location:../Employee/emp.php");
    }
?>

