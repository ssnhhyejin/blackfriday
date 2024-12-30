<?php
$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
$sql="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $mysearch = $_POST['search-product'];
  $sql = "select * from item where (pname LIKE '%$mysearch%')  or (designer LIKE '%$mysearch%')";
  }

else{
  $mysearch = $_GET['sp'];
  $big = $_GET['big'];
  $small = $_GET['small'];
  if(isset($big)){
  $sql = "select * from item where (designer='$big') and ($small is not null)";
  }
  elseif($mysearch =='Designer'||$mysearch =='Clothes'||$mysearch =='ACC'||$mysearch =='Bag'||$mysearch =='Shoes'){
         $sql = "select * from item where $mysearch is not null";
     }else{
   $sql = "select * from item where clothes='{$mysearch}' or acc='{$mysearch}' or bag='{$mysearch}' or shoes='{$mysearch}' or designer='{$mysearch}'";
   }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product</title>
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
   <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/product_img.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/categoryStyle.css">
   <link rel="stylesheet" type="text/css" href="css/product_img.css">
   <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

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
</head>
<body class="animsition">
   <?php include "header.php";?>
  
 
  <? if($mysearch =='Designer'||$mysearch =='mcq'||$mysearch =='gucci'||$mysearch =='ysl'||isset($big)){ ?>
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/product.jpg);">
      <h2 class="l-text2 t-center">Designer</h2>
      <p class="m-text13 t-center">New Arrivals Collection 2020</p>
   <? } elseif($mysearch =='Clothes'||$mysearch =='top'||$mysearch =='Bottom'||$mysearch =='Outer'){ ?>
      <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/product2.jpg);">
      <h2 class="l-text2 t-center">Clothes</h2>
      <p class="m-text13 t-center">New Arrivals Collection 2020</p>
   <? } elseif($mysearch =='ACC'||$mysearch =='necklace'||$mysearch =='cap'||$mysearch =='earring'){ ?>
      <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/product3.jpg);">
      <h2 class="l-text2 t-center">ACC</h2>
      <p class="m-text13 t-center">New Arrivals Collection 2020</p>
   <? } elseif($mysearch =='Shoes'||$mysearch =='loafers'|| $mysearch =='boots'|| $mysearch =='sneakers'){ ?>
      <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/product4.jpg);">
      <h2 class="l-text2 t-center">Shoes</h2>
      <p class="m-text13 t-center">New Arrivals Collection 2020</p>
   <? } else { ?> 
      <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/product5.jpg);">
      <h2 class="l-text2 t-center">Bags</h2>
      <p class="m-text13 t-center">New Arrivals Collection 2020</p>
   <? } ?>
   </section>

   <!-- Content page -->
   <section class="bgwhite p-t-55 p-b-65">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
<!----------------------------- 옆 카테고리 ------------------------->
                  <div id="leftbar">
                      <ul class="menu">
                     <?php if ($mysearch =='Designer'||$mysearch =='Clothes'||$mysearch =='ACC'||$mysearch =='Bag'||$mysearch =='Shoes'||
                         $mysearch =='top'|| $mysearch =='Bottom'|| $mysearch =='Outer'||
                         $mysearch =='necklace'|| $mysearch =='cap'|| $mysearch =='earring'||
                         $mysearch =='loafers'|| $mysearch =='boots'|| $mysearch =='sneakers'||
                         $mysearch =='backpacks'|| $mysearch =='clutch'|| $mysearch =='shoulder'
                         ){?>

                     <li class="m-text14 p-b-7"><a class="bigcategory" href="#">Designer</a>
                      <ul class="p-b-54">
                       <li class="p-t-4">
                       <a href="product.php?sp=mcq" class="s-text13 active1" class="smallcategory">Alexander Mcqueen</a>
                             </li>
                       <li class="p-t-4"><a href="product.php?sp=gucci" class="s-text13 active1" class="smallcategory">Gucci</a></li>
                       <li class="p-t-4"><a href="product.php?sp=ysl" class="s-text13 active1" class="smallcategory">Saint Laurent</a></li>
                     </ul>
                     </li>
                  <? } else{?>
                     <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>
                         <ul class="p-b-54">
                            <!-----------------맥퀸에 상세고리 ---------------->
                              <? if($mysearch=='mcq' || $big=='mcq'){ ?>
                       <li class="p-t-4"><a href="product.php?big=mcq&small=clothes" class="s-text13 active1" class="smallcategory">Clothes</a></li>
                              <li class="p-t-4"><a href="product.php?big=mcq&small=ACC" class="s-text13 active1" class="smallcategory">ACC</a></li>
                              <li class="p-t-4"><a href="product.php?big=mcq&small=shoes" class="s-text13 active1" class="smallcategory">Shoes</a></li>
                              <li class="p-t-4"><a href="product.php?big=mcq&small=bag" class="s-text13 active1" class="smallcategory">Bags</a></li>
                            </ul>
                        <? }elseif($mysearch=='gucci' || $big=='gucci'){ ?>
                              <li class="p-t-4"><a href="product.php?big=gucci&small=clothes" class="s-text13 active1" class="smallcategory">Clothes</a></li>
                              <li class="p-t-4"><a href="product.php?big=gucci&small=ACC" class="s-text13 active1" class="smallcategory">ACC</a></li>
                              <li class="p-t-4"><a href="product.php?big=gucci&small=shoes" class="s-text13 active1" class="smallcategory">Shoes</a></li>
                              <li class="p-t-4"><a href="product.php?big=gucci&small=bag" class="s-text13 active1" class="smallcategory">Bags</a></li>
                            </ul>
                        <? }elseif($mysearch=='ysl' || $big=='ysl'){ ?>
                           <li class="p-t-4"><a href="product.php?big=ysl&small=clothes" class="s-text13 active1" class="smallcategory">Clothes</a></li>
                              <li class="p-t-4"><a href="product.php?big=ysl&small=ACC" class="s-text13 active1" class="smallcategory">ACC</a></li>
                              <li class="p-t-4"><a href="product.php?big=ysl&small=shoes" class="s-text13 active1" class="smallcategory">Shoes</a></li>
                              <li class="p-t-4"><a href="product.php?big=ysl&small=bag" class="s-text13 active1" class="smallcategory">Bags</a></li>
                            </ul>
                        <? } }?>
                          <?php if($mysearch =='Designer') {?>
                   <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>
                         <ul class="p-b-54">
                       <li class="p-t-4"><a href="product.php?sp=Clothes" class="s-text13 active1" class="smallcategory">Clothes</a></li>
                              <li class="p-t-4"><a href="product.php?sp=ACC" class="s-text13 active1" class="smallcategory">ACC</a></li>
                              <li class="p-t-4"><a href="product.php?sp=Shoes" class="s-text13 active1" class="smallcategory">Shoes</a></li>
                              <li class="p-t-4"><a href="product.php?sp=Bag" class="s-text13 active1" class="smallcategory">Bags</a></li>
                            </ul>
                              <?php } elseif($mysearch =='Clothes'){ ?>
                            <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>
                            <ul class="p-b-54">
                       <li class="p-t-4"><a href="product.php?sp=top" class="s-text13 active1" class="smallcategory">Top</a></li>
                              <li class="p-t-4"><a href="product.php?sp=bottom" class="s-text13 active1" class="smallcategory">Bottom</a></li>
                              <li class="p-t-4"><a href="product.php?sp=Outer" class="s-text13 active1" class="smallcategory">Outer</a></li>
                              <? }elseif($mysearch=='ACC'){ ?>
                            <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>
                            <ul class="p-b-54">
                       <li class="p-t-4"><a href="product.php?sp=necklace" class="s-text13 active1" class="smallcategory">Necklace</a></li>
                              <li class="p-t-4"><a href="product.php?sp=cap" class="s-text13 active1" class="smallcategory">Cap</a></li>
                              <li class="p-t-4"><a href="product.php?sp=earring" class="s-text13 active1" class="smallcategory">Earring</a></li>
                              <? } elseif($mysearch=='Shoes'){ ?>
                             <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>
                             <ul class="p-b-54">
                       <li class="p-t-4"><a href="product.php?sp=loafers" class="s-text13 active1" class="smallcategory">Loafers</a></li>
                              <li class="p-t-4"><a href="product.php?sp=boots" class="s-text13 active1" class="smallcategory">Boots</a></li>
                              <li class="p-t-4"><a href="product.php?sp=sneakers" class="s-text13 active1" class="smallcategory">Sneakers</a></li>
                              <? } elseif($mysearch =='Bag'){ ?>
                                 <li class="m-text14 p-b-7" ><a class="bigcategory" href ="#">Categories</a>    <ul class="p-b-54">
                       <li class="p-t-4"><a href="product.php?sp=backpacks" class="s-text13 active1" class="smallcategory">Backpacks</a></li>
                              <li class="p-t-4"><a href="product.php?sp=clutch" class="s-text13 active1" class="smallcategory">Clutch Bags</a></li>
                              <li class="p-t-4"><a href="product.php?sp=shoulder" class="s-text13 active1" class="smallcategory">Shoulder Bags</a></li>
                             <? } ?>
                     </ul>
                   </li>
                        </ul>
                  </div>
                  <!------------------------------------------------->
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
      <!------- 검색결과 문구-------->
                    <div id="search-content" style="margin: 10px;">

                    <?php if(isset($big)){ ?>
                    <p class="m-text14 p-b-7" > Search results for '<?= $big ?>' > '<?= $small ?>' </p>
                    <? } else {?>
                    <p class="m-text14 p-b-7" > Search results for '<?= $mysearch ?>' </p>
                    </div>
                <? } ?>
       <!-- Product -->
               <div class="row">
<?php
$result = mysqli_query($con, $sql);
// $total_record = mysqli_num_rows($result); // 전체 글 수

      while($row = mysqli_fetch_assoc($result)){
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
                  <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                     <!-- Block2 -->

                     <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                           <img class="product_img"src="images/<?= $pname ?>.jpg" alt="IMG-PRODUCT">

                           <div class="block2-overlay trans-0-4">
                              <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                 <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                 <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                              </a>

                              <div class="block2-btn-addcart w-size1 trans-0-4">
                                 <!-- Button -->
                                 <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="addcart(<?=$num ?>, '<?=$cart ?>')">
                                    Add to Cart
                                 </button>
                              </div>
                           </div>
                        </div>

                        <div class="block2-txt p-t-20">
                           <a href="product-detail.php?pnum=<?=$num?>" class="block2-name dis-block s-text3 p-b-5">
                              <?= $pname ?>
                           </a>

                           <span class="block2-price m-text6 p-r-5">
                              $<?= $price ?>
                           </span>
                        </div>
                     </div>
                  </div>
   <?php }
   mysqli_close($con);
   ?>
               </div>

            </div>
         </div>
      </div>
   </section>

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
   <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
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
   </script>

<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
   <script type="text/javascript">
      /*[ No ui ]
       ===========================================================*/
       var filterBar = document.getElementById('filter-bar');

       noUiSlider.create(filterBar, {
           start: [ 50, 200 ],
           connect: true,
           range: {
               'min': 50,
               'max': 200
           }
       });

       var skipValues = [
       document.getElementById('value-lower'),
       document.getElementById('value-upper')
       ];

       filterBar.noUiSlider.on('update', function( values, handle ) {
           skipValues[handle].innerHTML = Math.round(values[handle]) ;
       });
   </script>
<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>