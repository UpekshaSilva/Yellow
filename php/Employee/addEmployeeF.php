<?php
require_once '../connection.php';

$boolean = TRUE;
 $nameErr = $emailErr = $contactErr =  "";

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["name"])){$name = test_input($_POST["name"]);}
if(isset($_POST["phone"])){$phone = test_input($_POST["phone"]);}
 
  $empNo=$_POST['empNo'];
  $address = $_POST['address'];
  $NIC = $_POST['nic'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $boolean = FALSE;
  }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space are allowed";
    $boolean = FALSE;
  }else{
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["phone"])) {
    $contactErr = "subject is required";
    $boolean = FALSE;
  }elseif(!preg_match("/^[0-9]*$/",$phone)) {
    $contactErr = "Only letters and white spaces are allowed";
    $boolean = FALSE;
  } else {
    $phone = test_input($_POST["phone"]);
  }
  
}


  $sql="INSERT INTO employee VALUES ('$empNo','$name','$NIC','$phone','$address')";
  $result = mysqli_query($conn, $sql);

  if ($result){
        echo "<script type='text/javascript'>alert('successfully Added!')</script>";
        header("location:emp.php");
    }else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
        header("location:emp.php");
    }
?>
