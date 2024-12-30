<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>Customers</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/admin.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="admin_box">
	    <h3 id="member_title">
	    	Customers
		</h3>
	    <ul id="member_list">
				<li>
					<span class="col1">Num</span>
					<span class="col2">ID</span>
					<span class="col3">Name</span>
					<span class="col4">Manager</span>
					<span class="col6">Register Date</span>
					<span class="col7">Edit</span>
					<span class="col8">Delete</span>
				</li>
<?php
	$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수

	$number = $total_record;

   while ($row = mysqli_fetch_array($result))
   {
      $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $level       = $row["level"];
      $regist_day  = $row["regist_day"];
?>

		<li>
		<form method="post" action="admin_member_update.php?num=<?=$num?>">
			<span class="col1"><?=$number?></span>
			<span class="col2"><?=$id?></a></span>
			<span class="col3"><?=$name?></span> 
			<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
			<span class="col6"><?=$regist_day?></span>
			<span class="col7"><button type="submit">Edit</button></span>
			<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">Delete</button></span>
		</form>
		</li>	
			
<?php
   	   $number--;
   }
?>
	    </ul>
	</div> <!-- admin_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
