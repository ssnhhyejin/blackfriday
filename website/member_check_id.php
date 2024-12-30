<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<link rel="stylesheet" type="text/css" href="./css/login_form.css">
<script type="text/javascript" src="./js/login.js"></script>

<style>
 h3 {
   text-align: left;
   padding-bottom: 10px;
/* border-left: solid 5px #edbf07; */
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>

<body>
   <div class="form member-form">
        <div class="member-check" >
            <h3>ID CHECK</h3>
            <p>
            <?php
               $id = $_GET["id"];

               if(!$id) 
               {
                  echo("<li>Please enter your ID!</li>");
               }
               else
               { 
                 $con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");

             
                  $sql = "select * from members where id='$id'";
                  $result = mysqli_query($con, $sql);

                  $num_record = mysqli_num_rows($result);

                  if ($num_record)
                  {
                     echo "<li>".$id." This ID has already used.</li>";
                     echo "<li>Please use a another ID!</li>";
                  }
                  else
                  {
                     echo "<li> You can use [ ".$id." ]</li>";
                  }
                
                  mysqli_close($con);
               }
            ?>
            </p>
                <div class="member-checkbut">
                  <button type="button"  onclick="javascript:self.close()">Close</button>
               </div>         
              </div>
            </div>          
 
</body>
</html>

