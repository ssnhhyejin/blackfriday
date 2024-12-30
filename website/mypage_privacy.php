<!DOCTYPE html>
<html>
<?php
    session_start();
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    ?>
<head>
   <title>Mypage Privacy</title>
   <meta charset="utf-8">
   <html lang="en">
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
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/mypage.css">
   <link rel="stylesheet" type="text/css" href="./css/login.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<link rel="stylesheet" type="text/css" href="./css/login_form.css">
<script type="text/javascript" src="./js/login.js"></script>
<!--===============================================================================================-->
   <style type="text/css">
   .center{width: 500px;
            margin: 0 auto;
            border: 1px solid white;}
   .col1 {display: inline; text-align: left;}
   .col2 {display: inline;}
    input { border: 1px solid gray; }
   </style>
</head>
<body>
   <header>
       <?php include "header.php" ?>  
   </header>

<section>
<!-- <div class="center"> -->
   <!-- <h1 style="text-align: center;">Privacy Setting</h1> -->
   
   <div class="login-page">
    <div class="form-1">
     <h3>Privacy Setting</h3> 
       <div class="register-form">
         
   <form name="mypage_privacy" method="post" class="register-form" action="member_modify.php">
  <div class="nameid-box">
         <div class="myaling"><p>NAME</p></div><div class="nameid"><?= $username;?></div></div>
<br>
         <div class="nameid-box">
         <div class="myaling"><p>ID</p></div><div class="nameid"><?=$userid;?></div></div>

<div class="input-box">
        <div class="idinput" >
            <input type="password" name="pass" placeholder="Password"/>
            <input type="password" name="pass_confirm" placeholder="Confirm password"/>
            <input type="text" name="address" placeholder="Address"/>
            <input type="date" name="birthday" placeholder="DATE OF BIRTH(MM/DD/YY)"/>
            </div>
     </div>
     
         <div class="privacy-butt">
            <button type="button"  onclick="check_input()">Submit</button>
          </div>
          <div class="privacy-butt">
            <button type="button" id="reset_button" onclick="reset_form()">Reset</button>
          </div>
      </div>
   
   </form>
       </div>
     </div>
   </div>

  
</div>
</div>
</div>
</div>
</section>
<footer>  
 <?php include "footer.php" ?>
</footer>


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