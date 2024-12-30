<?php 
session_start();
   $sscart = $_POST['item_no'];
   $_SESSION['cart'] = $sscart;   
   $_SESSION['cart_count'] = $_SESSION['cart_count'] + 1;
   echo "$sscart";
?>