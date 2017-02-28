<?php
  include 'connection.php';
  session_start();

  $message="";

  if(count($_POST)>0) {
    //$conn = mysql_connect("localhost","root","");
    //mysql_select_db("yellow",$conn);
    $select = mysql_query("SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
    $result = mysqli_query($conn, $select);

    //$row  = mysql_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
      $_SESSION["username"] = $row[username];
      $_SESSION["password"] = $row[password];
      header("Location:index.php");
    } else {
      $message = "Invalid Username or Password!";
    }
  }

  //if(isset($_SESSION["username"])) {
  //header("Location:addEmp.php");
  //}
?>