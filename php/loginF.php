<?php

require_once 'connection.php';

session_start();

$message="";

if(count($_POST)>0) {

  $select = "SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'";

  $result = mysqli_query($conn, $select);


  $row  = mysqli_fetch_assoc($result);

  if(is_array($row)) {

    $_SESSION["userID"] = $row['userID'];
    $_SESSION["username"] = $row['username'];
  } else {
    $message = "Invalid Username or Password!";
  }
}
  if(isset($_SESSION["userID"])) {

    if($row['type']=='Admin'){

      header("Location:Stock/items.php");

    }else if($row['type']=='Clerk'){

      header("Location:Stock/itemDetails.php"); 
         
    }
  
}
?>