<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>Login</title>
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
<script>
   function check_register_input()
   {
      if (!document.member_form.id.value) {
          alert("Please enter ID!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("Please enter password!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("Please check your password!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("Please enter Name!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("Please enter E-Mail!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("Please enter E-Mail!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("Password not correct.\nPlease enter Again!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
<style>
   h3 {
   text-align: left;
   padding-bottom: 20px;
</style>
</head>

<body> 
  <header>
      <?php include "header.php";?>
    </header>

  <section>
    <!-- <div id="main_img_bar">
            <img src="./img/main_img.png">
    </div>
 -->
   <div class="login-page">
 
        <!-- <div id="main_content"> -->

           <!-- <div id="login_box"> -->
             <div class="form">
              <h3>LOGIN</h3>
             <div class="login-form" ><!-- id="login_form" -->
              <form name="login_form" method="post" action="login.php"/>
                 <input type="text" name="id" placeholder="username"/>
                 <input type="password" id="pass" name="pass" placeholder="password"/>
                 <button type="button" onclick="check_login_input()">Login</button>   
                 <!-- <p class="message">Not registered? <a href="#">Create an account</a></p>  -->        
               </form>
              </div>
            </div>          

            <!-- <div id="join_box"> -->
              <div class="form-1">
              <h3>CREATE ACCOUNT</h3>
              <div class="register-form">
                  <form name="member_form" method="post" action="member_insert.php">
                    <div class="idinput" >
                      <input type="text" name="id" type="text" placeholder="ID"/>
                    </div>
                    <div class="checkbut">
                      <button type="button"  onclick="check_id()">Check</button>
                    </div>
                      <input type="password" name="pass" placeholder="Password"/>
                      <input type="password" name="pass_confirm" placeholder="Confirm password"/>
                      <input type="text" name="name" placeholder="Name"/>
                        <input class="email-size" type="text" placeholder="Email" name="email1">
                          <p>@</p>
                        <input class="email-size" type="text" name="email2">
                     <input type="text" name="address" placeholder="Address"/>
                    <div class="buttons">
                      <button type="button"  onclick="check_register_input()">Register</button>
                       <!--  <button type="button" onclick="reset_form()">Reset</button> -->
                      </div>
                    <!-- <p class="message">Already registered? <a href="#">Sign In</a></p> -->
                  </form>
                </div>
              </div>

            </div>
          <!-- </div> -->

               <!-- <div id="login_form">
              <form  name="login_form" method="post" action="login.php">            
                    <ul>
                    <li><input type="text" name="id" placeholder="ID" ></li>
                    <li><input type="password" id="pass" name="pass" placeholder="Password" ></li> pass
                    </ul>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="check_login_input()" id="login_btn">Login</button>
              </form>
            </div> login_form -->
      <!--   </div> login_box  -->
          
       <!--   <div class="bottom_line"> </div>
             <div class="buttons">
               <button type="button" class="btn btn-secondary btn-lg" onclick="check_register_input()">Register</button>
               <button type="button" class="btn btn-secondary btn-lg" onclick="reset_form()">Reset</button>
               </div>
           </form>
         </div> join_box
                </div> login_box
                </div> --> <!-- main_content -->

          

       <!--  <div id="join_box" style="width: 400px; margin-left: 100px;">
           <form  name="member_form" method="post" action="member_insert.php">
         <h2>Join</h2>
             <div class="form id">
               <div class="col1">ID</div>
               <div class="col2">
             <input type="text" name="id" style="width: 60%">
               </div>  
               <div class="col3">
                 <button type="button" class="btn btn-secondary btn-sm" onclick="check_id()">Check</button>
               </div>                 
             </div>
             <div class="clear"></div>
       
             <div class="form">
               <div class="col1">Password</div>
               <div class="col2">
             <input type="password" name="pass">
               </div>                 
             </div>
             <div class="clear"></div>
             <div class="form">
               <div class="col1">Confirm Password</div>
               <div class="col2">
             <input type="password" name="pass_confirm">
               </div>                 
             </div>
             <div class="clear"></div>
             <div class="form">
               <div class="col1">Name</div>
               <div class="col2">
             <input type="text" name="name">
               </div>                 
             </div>
             <div class="clear"></div>
             <div class="form email">
               <div class="col1">E-mail</div>
               <div class="col2">
             <input type="text" name="email1">@<input type="text" name="email2">
               </div>            
             </div>
             <div class="clear"></div>
             <div class="form address">
               <div class="col1">Address</div>
               <div class="col2">
             <input type="text" name="address">
               </div>            
             </div>
             <div class="clear"></div>
             <div class="bottom_line"> </div>
             <div class="buttons">
               <button type="button" class="btn btn-secondary btn-lg" onclick="check_register_input()">Register</button>
               <button type="button" class="btn btn-secondary btn-lg" onclick="reset_form()">Reset</button>
               </div>
           </form>
         </div> join_box
       </div> login_box
       </div> main_content -->
</section> 

  <footer>
      <?php include "footer.php";?>
    </footer>

</body>
</html>



