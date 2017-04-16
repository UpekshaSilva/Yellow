<?php
require_once '../connection.php';

  $itemNo=$_POST['itemNo'];
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
 
  $sql="SELECT unit_price,total_stock FROM items WHERE item_no='$itemNo'; ";
  $result = mysqli_query($conn, $sql);
  //echo mysqli_num_rows($result);
  if (mysqli_num_rows($result) > 0) {
  // output data of each row
        $row = mysqli_fetch_assoc($result);
        $unit_price = $row["unit_price"];
        $total_stock = $row["total_stock"];
        
        $new_total_stock = (int)$total_stock + (int)$quantity;
        $net_price = (int)$new_total_stock * (int)$unit_price;

        $sql="UPDATE items SET  total_stock = '$quantity1', net_price = '$netprice'  WHERE item_id='$itemNo';";
        $result2 = mysqli_query($conn, $sql);

        if ($result){
        echo "<script type='text/javascript'>alert('successfully Added!')</script>";
        header("location:itemDetails.php");
    }else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
       
    }


  }else{
    echo "<script type='text/javascript'>alert('No such item!')</script>";

  }

  

  
?>

