   <!-- Header -->
   <?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["cart"])) $cart = $_SESSION["cart"];
    if (isset($_SESSION["cart_count"])) $cart_count = $_SESSION["cart_count"];
    else $cart_count = 0;
    $cart_explode = explode(",",$cart);
?>
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
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">


   <header class="header1">
      <!-- Header desktop -->
      <div class="container-menu-header">
         <div class="topbar">
            <div class="topbar-social">
               <a href="#" class="topbar-social-item fa fa-facebook"></a>
               <a href="#" class="topbar-social-item fa fa-instagram"></a>
               <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
               <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
               <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
               Happy new year!
            </span>

            <div class="topbar-child2">
               <span class="topbar-email">
                  blackfriday@gmail.com
               </span>

               <div class="topbar-language rs1-select2">
                  <select class="selection-1" name="time">
                     <option>USD</option>
                     <option>EUR</option>
                     <option>KRW</option>
                  </select>
               </div>
            </div>
         </div>

         <div class="wrap_header">
            <!-- Logo -->
            <a href="index.php" class="logo">
               <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
               <nav class="menu">
                  <ul class="main_menu">
                     <!--<li>
                        <a href="index.html">Home</a>
                        <ul class="sub_menu">
                           <li><a href="index.html">Homepage V1</a></li>
                           <li><a href="home-02.html">Homepage V2</a></li>
                           <li><a href="home-03.html">Homepage V3</a></li>
                        </ul>
                     </li>
                     -->
                     <li>
                        <a href="product.php?sp=Designer">Designer</a>
                           <ul class="sub_menu">
                           <li><a href="product.php?sp=mcq">Alexander Mcqueen</a>
                           </li>
                           <li><a href="product.php?sp=gucci">Gucci</a></li>
                           <li><a href="product.php?sp=ysl">Saint Laurent</a></li>
                           </form>
                           </ul>
                     </li>

                     <li>
                        <a href="product.php?sp=Clothes">Clothes</a>
                           <ul class="sub_menu">
                           <li><a href="product.php?sp=top">Top</a></li>
                           <li><a href="product.php?sp=Bottom">Bottom</a></li>
                           <li><a href="product.php?sp=Outer">Outer</a></li>
                           </ul>
                     </li>

                     <li>
                        <a href="product.php?sp=ACC">ACC</a>
                           <ul class="sub_menu">
                           <li><a href="product.php?sp=necklace">Necklace</a></li>
                           <li><a href="product.php?sp=cap">Cap</a></li>
                           <li><a href="product.php?sp=earring">Earring</a></li>
                           </ul>
                     </li>

                     <li>
                        <a href="product.php?sp=Shoes">Shoes</a>
                           <ul class="sub_menu">
                           <li><a href="product.php?sp=loafers">Loafers</a></li>
                           <li><a href="product.php?sp=boots">Boots</a></li>
                           <li><a href="product.php?sp=sneakers">Sneakers</a></li>
                           </ul>
                     </li>

                     <li>
                        <a href="product.php?sp=Bag">Bags</a>
                           <ul class="sub_menu">
                           <li><a href="product.php?sp=backpacks">Backpacks</a></li>
                           <li><a href="product.php?sp=clutch">Clutch Bags</a></li>
                           <li><a href="product.php?sp=shoulder">Shoulder Bags</a></li>
                           </ul>
                     </li>

                  <!--   <li>
                        <a href="cart.html">Features</a>
                     </li>

                     <li>
                        <a href="blog.html">Blog</a>
                     </li>

                     <li>
                        <a href="about.html">About</a>
                     </li>

                     <li>
                        <a href="contact.html">Contact</a>
                     </li>
                  -->
                  </ul>
               </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
               <div class="search-product pos-relative bo4 of-hidden">
                     <form class="search-form" action="product.php" method="post">
                     <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">
                     <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                        <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                     </button>
                     </form>
                  </div>
                  <span class="linedivide1"></span>
                  <?php
                  if(!$userid) {
                  ?>
                  <a href="login_form.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                  </a>
                  <?php
               } else {//logout part
                  if ($userlevel == "1") { ?>
                  <li><a href="managerpage.php"><i class="fa fa-server fa-1x" aria-hidden="true"></i></a></li>   
                  <span class="linedivide1"></span>
               <?php }else {?>
                  <a href="mypage.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                  </a>
               <?php } ?>
                   <li><a href="logout.php" class="header-wrapicon1 dis-block"><i class="fa fa-sign-out fa-1x" aria-hidden="true"></i></a></li>
               <?php } ?>

              <!-- <span class="linedivide1"></span>
               <a href="managerpage.php" class="header-wrapicon1 dis-block">
               <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>
               -->
               <span class="linedivide1"></span>

               <div class="header-wrapicon2">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                  <span class="header-icons-noti"><?=$cart_count?></span>

                  <!-- Header cart noti -->
                  <div class="header-cart header-dropdown">
                     <ul class="header-cart-wrapitem">
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
                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/<?=$hpname?>.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 <?=$hpname?>
                              </a>

                              <span class="header-cart-item-info">
                                 $ <?=$hprice?>
                              </span>
                           </div>
                        </li>
                        <?php
                     }
                     ?>
                     </ul>

                     <div class="header-cart-total">
                        Total: $<?=$total_price?>
                     </div>

                     <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                           </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Header Mobile -->
      <div class="wrap_header_mobile">
         <!-- Logo moblie -->
         <a href="index.html" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
         </a>

         <!-- Button show menu -->
         <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
               <a href="mypage.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>

               <span class="linedivide2"></span>

               <div class="header-wrapicon2">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                  <span class="header-icons-noti">0</span>

                  <!-- Header cart noti -->
                  <div class="header-cart header-dropdown">
                     <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-01.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 White Shirt With Pleat Detail Back
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $19.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-02.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Converse All Star Hi Black Canvas
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $39.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-03.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Nixon Porter Leather Watch In Tan
                              </a>

                              <span class="header-cart-item-info">
                                 1 x $17.00
                              </span>
                           </div>
                        </li>
                     </ul>

                     <div class="header-cart-total">
                        Total: $75.00
                     </div>

                     <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                           </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </div>
         </div>
      </div>

      <!-- Menu Mobile -->
      <div class="wrap-side-menu" >
         <nav class="side-menu">
            <ul class="main-menu">
               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <span class="topbar-child1">
                     Free shipping for standard order over $100
                  </span>
               </li>

               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <div class="topbar-child2-mobile">
                     <span class="topbar-email">
                        blackfriday@gmail.com
                     </span>

                     <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                           <option>USD</option>
                           <option>EUR</option>
                           <option>KRW</option>
                        </select>
                     </div>
                  </div>
               </li>

               <li class="item-topbar-mobile p-l-10">
                  <div class="topbar-social-mobile">
                     <a href="#" class="topbar-social-item fa fa-facebook"></a>
                     <a href="#" class="topbar-social-item fa fa-instagram"></a>
                     <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                     <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                     <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                  </div>
               </li>

               <!--
               <li class="item-menu-mobile">
                  <a href="index.html">Home</a>
                  <ul class="sub-menu">
                     <li><a href="index.html">Homepage V1</a></li>
                     <li><a href="home-02.html">Homepage V2</a></li>
                     <li><a href="home-03.html">Homepage V3</a></li>
                  </ul>
                  -->
                  <!--<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
               </li>
                  -->

               <li class="item-menu-mobile">
                  <a href="product.php">Sale</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">New In</a>

               </li>


               <li class="item-menu-mobile">
                  <a href="product.php">Designer</a>
                  <ul class="sub-menu">
                     <li><a href="product.php">Alexander Mcqueen</a></li>
                     <li><a href="product.php">Gucci</a></li>
                     <li><a href="product.php">Saint Laurent</a></li>
                  </ul>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Clothes</a>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                  <ul class="sub-menu">
                     <li><a href="product.php">Top</a></li>
                     <li><a href="product.php">Bottom</a></li>
                     <li><a href="product.php">Outer</a></li>
                  </ul>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Acc</a>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                  <ul class="sub-menu">
                     <li><a href="product.php">Necklace</a></li>
                     <li><a href="product.php">Bracelet</a></li>
                     <li><a href="product.php">Earring</a></li>
                  </ul>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Shoes</a>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                  <ul class="sub-menu">
                     <li><a href="product.php">Loafers</a></li>
                     <li><a href="product.php">Boots</a></li>
                     <li><a href="product.php">Sneakers</a></li>
                  </ul>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Bags</a>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                  <ul class="sub-menu">
                     <li><a href="product.php">Backpacks</a></li>
                     <li><a href="product.php">Clutch Bags</a></li>
                     <li><a href="product.php">Shoulder Bags</a></li>
                  </ul>
               </li>
            </ul>
         </nav>
      </div>
   </header>



   