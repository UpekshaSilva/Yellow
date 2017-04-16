<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

// establishing the MySQLi connection


require_once 'connection.php';


// checking the user

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    $row=mysql_fetch_array($result);
    if (isset($_POST['login'])){
      if ($count==1){
        session_start();
        $session("username");
        $session("password") ;

        if ($row['type']=='admin'){
          header("location:index.php");
          //echo ("you logged in as admin");
        }
        elseif ($row['type']=='clerk') {
          header("location:Employee/emp.php");
          //echo ("you logged in as cashier");
        }
      }
      else {

        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo "<script>window.open('index.php#login','_self')</script>";
      }
    }
}
?>