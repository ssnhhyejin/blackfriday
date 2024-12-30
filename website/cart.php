<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cart</title>
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
<!--===============================================================================================-->
</head>
<body class="animsition">
   <?php include "header.php"?>

   <!-- Title Page -->
   <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
      <h2 class="l-text2 t-center">
         Cart
      </h2>
   </section>

   <!-- Cart -->
   <section class="cart bgwhite p-t-70 p-b-100">
      <div class="container">
         <!-- Cart item -->
         <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
               <table class="table-shopping-cart">
                  <tr class="table-head">
                     <th class="column-1"></th>
                     <th class="column-2">Product</th>
                     <th class="column-3">Price</th>
                     <th class="column-3">Stock</th>
                     <th class="column-3">Total</th>
                  </tr>
                  <?php
                  $total_price = 0;
                        for ($i=0; $i<$cart_count; $i++){
                              $hcon = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
                              $hsql = "select * from item where (num like '%$cart_explode[$i]%')";
                              $hresult = mysqli_query($hcon, $hsql);
                              $hproduct_match = mysqli_fetch_array($hresult);

                              $hnum = $hproduct_match['num'];
                              $hpname = $hproduct_match['pname'];
                              $hprice = $hproduct_match['price'];
                              $total_price += $hprice;
                        ?>
                  <tr class="table-row">
                     <td class="column-1">
                        <div class="cart-img-product b-rad-4 o-f-hidden">
                           <img src="images/<?=$hpname?>.jpg" alt="IMG-PRODUCT">
                        </div>
                     </td>
                     <td class="column-2"><?=$hpname?></td>
                     <td class="column-3">$ <?=$hprice?></td>
                     <td class="column-3">In Stock</td>
                     <td class="column-3">$ <?=$hprice?></td>
                  </tr>
               <?php } ?>
               </table>
            </div>
         </div>

         <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="flex-w flex-m w-full-sm">
               <div class="size11 bo4 m-r-10">
                  <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
               </div>

               <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                  <!-- Button -->
                  <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                     Apply coupon
                  </button>
               </div>
            </div>

            <div class="size10 trans-0-4 m-t-10 m-b-10">
               <!-- Button -->
               <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                  Update Cart
               </button>
            </div>
         </div>

         <!-- Total -->
         <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
               Cart Totals
            </h5>

            <!--  -->
            <div class="flex-w flex-sb-m p-b-12">
               <span class="s-text18 w-size19 w-full-sm">
                  Subtotal:
               </span>
               <span class="m-text21 w-size20 w-full-sm">
                  $ <?=$total_price?>
               </span>
               <span class="s-text18 w-size19 w-full-sm">
                  Shipping:
               </span>
               <span class="m-text21 w-size20 w-full-sm">
                  $ 15
               </span>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
               <span class="s-text18 w-size19 w-full-sm">
                  Address:
               </span>

               <div class="w-size20 w-full-sm">
                  <p class="s-text8 p-b-23">
                     <?=$_SESSION["useraddress"];?>
                  </p>
               </div>
            </div>

            <!--  -->
            <div class="flex-w flex-sb-m p-t-26 p-b-30">
               <span class="m-text22 w-size19 w-full-sm">
                  Total:
               </span>

               <span class="m-text21 w-size20 w-full-sm">
                  $ <?=$total_price += 15?>
               </span>
            </div>

            <div class="size15 trans-0-4">
               <!-- Button -->
               <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href='order_insert.php'">
                  Proceed to Checkout
               </button>
            </div>
         </div>
      </div>
   </section>


   <?php include "footer.php"?>


   <!-- Back to top -->
   <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
         <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
   </div>

   <!-- Container Selection1 -->
   <div id="dropDownSelect1"></div>



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
   </script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
   <script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
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
   </script>

<!--===============================================================================================-->
   <script src="js/main.js"></script>
</body>
</html>