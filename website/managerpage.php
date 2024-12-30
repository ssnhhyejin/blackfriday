<!DOCTYPE html>
<html>
<head>
   <title>My page</title>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/managerpage.css">
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/mypage.css">
<!--===============================================================================================-->
    <style type="text/css">
   .bigbox{ padding-left: 5%;
            padding-right:0%;
        }
</style>
</head>

<body>
<header>
   <?php include "header.php";?>
</header>
<h1 style="text-align: center;">Manager page</h1>
<div class="bigbox">
  <div class="row1">
   <div class="box">
      <a href="manager_register.php"><img src="images/mgp.jpg"></a>
      <h3>Product Register</h3>
   </div>
   <div class="box">
      <a href="manager_productlist.php"><img src="images/mgp2.jpg"></a>
      <h3>Product List</h3>
   </div>
   <div class="box">
      <a href="manager_order_list.php"><img src="images/mgp3.jpg"></a>
      <h3>Order List</h3>
   </div>
   <div class="box">
      <a href="admin.php"><img src="images/mgp4.jpg"></a>
      <h3>Customers</h3>
   </div>
   <div class="box">
      <a href="message_box.php"><img src="images/mgp5.jpg"></a>
      <h3>E-Mail</h3>
   </div>
  </div>
</div>   

</section>
<footer>
   <?php include "footer.php";?>
</footer>
</body>
</html>