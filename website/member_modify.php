<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $address=$_POST["address"];
    $birthday=$_POST["birthday"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
    $sql = "update members set pass='$pass', name='$name' , email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
