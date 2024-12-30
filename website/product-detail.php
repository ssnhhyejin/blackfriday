<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Detail</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/product_img.css">
<!--===============================================================================================-->
</head>

<script>
    function addcart(product_num, cart){
      if(cart == ''){
        cart_send=product_num;
      }
      else{
        cart_send = String(cart) + "," + String(product_num);
      }
      $.ajax({
        url: "cart_input.php",
        type: "post",
        data: {item_no: cart_send},
        success: function(data){
          location.href="product.php?sp=Designer";
        }
      });
    }
  </script>

<body class="animsition">
   <?php include "header.php";?>

   <?php
  $con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
  $mysearch = $_GET['pnum'];
  $sql = "select * from item where num = '$mysearch'";
  $result = mysqli_query($con, $sql);
// $total_record = mysqli_num_rows($result); // 전체 글 수

  $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
     $num =$row['num'];
      $pname =$row['pname'];
      $price =$row['price'];
      $size =$row['size'];
      $quantity =$row['quantity'];
      $designer =$row['designer'];
      $clothes =$row['clothes'];
      $state = $row['state'];
      $acc =$row['acc'];
      $bag =$row['bag'];
      $shoes =$row['shoes'];
 ?>

   <!-- Product Detail -->
   <div class="container bgwhite p-t-35 p-b-80">
      <div class="flex-w flex-sb">
         <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">


               <div class="slick3">


                  <div class="item-slick3" data-thumb="images/21.jpg">
                     <div class="wrap-pic-w">
                        <img src="images/<?=$pname?>.jpg" alt="IMG-PRODUCT">
                     </div>
                  </div>

                  <div class="item-slick3" data-thumb="images/21.jpg">
                     <div class="wrap-pic-w">
                        <img src="images/21.jpg" alt="IMG-PRODUCT">
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
               <?= $pname ?>
            </h4>

            <span class="m-text17">
               $<?= $price ?>
            </span>

            <!--  -->
            <div class="p-t-33 p-b-60">
               <div class="flex-m flex-w p-b-10">
                  <div class="s-text15 w-size15 t-center">
                     Size : <?= $size ?>
                  </div>


               </div>



               <div class="flex-r-m flex-w p-t-10">
                  <div class="w-size16 flex-m flex-w">
                     <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                        <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                           <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                        </button>

                        <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                        <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                           <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                        </button>
                     </div>

                     <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"  onclick="addcart(<?=$num ?>, '<?=$cart ?>')">
                           Add to Cart
                        </button>
                     </div>
                  </div>
               </div>
            </div>

            <div class="p-b-45">
               <span class="s-text8 m-r-35">product number: <?=$num?></span>
            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
               <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                  Description
                  <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                  <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
               </h5>

               <div class="dropdown-content dis-none p-t-15 p-b-23">
                  <p class="s-text8">
                     <?= $designer ?> > <?= $pname ?>
                  </p>
               </div>
            </div>



         </div>
      </div>
   </div>





   <?php include "footer.php";?>

   <!-- Back to top -->
   <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
         <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
   </div>

   <!-- Container Selection -->
   <div id="dropDownSelect1"></div>
   <div id="dropDownSelect2"></div>



<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
   <script type="text/javascript">
      $(".selection-1").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect1')
      });

      $(".selection-2").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect2')
      });
   </script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
   <script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
   <script type="text/javascript">
      $('.block2-btn-addcart').each(function(){
         var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
         });
      });

      $('.block2-btn-addwishlist').each(function(){
         var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
         });
      });

      $('.btn-addcart-product-detail').each(function(){
         var nameProduct = $('.product-detail-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
         });
      });
   </script>

<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>


<?php
   mysqli_close($con);
   ?>