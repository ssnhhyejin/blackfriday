<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>message_view</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/message.css">
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
<style type="text/css">
	.mbtn{border:1px solid black;}
	.col2{border:1px solid #dddddd;}
	textarea{border:1px solid #dddddd;}
</style>
<script>
  function check_input() {
  	  if (!document.message_form.rv_id.value)
      {
          alert("Please enter receiving ID!");
          document.message_form.rv_id.focus();
          return;
      }
      if (!document.message_form.subject.value)
      {
          alert("Please enter a title!");
          document.message_form.subject.focus();
          return;
      }
      if (!document.message_form.content.value)
      {
          alert("Enter contents!");    
          document.message_form.content.focus();
          return;
      }
      document.message_form.submit();
   }
</script>
</head>
<header>
    <?php include "header.php";?>
</header>  


<section>
	
   	<div id="message_box">
	    <h3 id="write_title">
	    		Send Mail
		</h3>
		<ul class="top_buttons">
				<li><span><a href="message_box.php?mode=rv">Mailbox</a></span></li>
				<li><span><a href="message_box.php?mode=send">Sent Mailbox</a></span></li>
		</ul>
	    <form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
	    	<div id="write_msg">
	    	    <ul>
				<li>
					<span class="col1">From : </span>
					<span class="col2"><?=$userid?></span>
				</li>	
				<li>
					<span class="col1">To (ID) : </span>
					<span class="col2" class="inputbox"><input class="inputbox" name="rv_id" type="text"></span>
				</li>	
	    		<li>
	    			<span class="col1">Title : </span>
	    			<span class="col2" class="col2-input"><input class="inputbox" name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area" style="border-bottom: white">	
	    			<span class="col1">Content : </span>
	    			<span class="col2" style="border:white">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    	    </ul>
	    	    <button type="button" class="mbtn" onclick="check_input()">Send</button>
	    	</div>	    	
	    </form>
	</div> <!-- message_box -->
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
</body>
</html>
