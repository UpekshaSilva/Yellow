<?php
 include '../connection.php';

  $itemNo=$_POST['itemname'];
  $quantity = $_POST['quantity'];

  $current_Qun="SELECT total_stock FROM items WHERE item_id='$itemNo';";
  $unit_price="SELECT unit_price FROM items WHERE item_id='$itemNo';";

  $total_stock=$current_Qun- $quantity;
  $net_price= $net_price -($quantity* $unit_price) ;

  $sql="UPDATE items SET total_stock='$total_stock',net_price='$net_price' WHERE item_id='$itemNo';";
  $result = mysqli_query($conn, $sql);

  if ($result){
    header("Location:addStock.php");
  }else{
    echo "Error ".mysqli_error($conn);
  }  

?>