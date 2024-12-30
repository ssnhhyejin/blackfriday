<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<link rel="stylesheet" type="text/css" href="./css/orderlist.css">
</head>
<body>
<header>
    <?php include "header.php";?>
</header>
<section>
   	<div id="board_box">
	    <h3>
	    	Order List
		</h3>
	    <ul id="board_list">
				<li>
					<span class="ordercol1">Order No.</span>
					<span class="ordercol2">ID</span>
					<span class="ordercol3">Name</span>
					<span class="ordercol4">Price</span>
					<span class="ordercol5">Content</span>
					<span class="ordercol6">Date</span>
					<span class="ordercol7">Status</span>
				</li>
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
	$sql = "select * from order_list  where id='$userid' order by order_num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산
	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	// 표시할 페이지($page)에 따라 $start 계산
	$start = ($page - 1) * $scale;

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["order_num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $price       = $row["price"];
	  $content     = $row["content"];
      $date  = $row["order_date"];
      $status      = $row["order_status"];
      if ($row["file_name"])
      	$file_image = "<img src='./img/file.gif'>";
      else
      	$file_image = " ";
?>
				<li>
					<span class="ordercol1"><?=$number?></span>
					<span class="ordercol2"><?=$id?></a></span>
					<span class="ordercol3"><?=$name?></span>
					<span class="ordercol4"><?=$price?></span>
					<span class="ordercol5"><?=$content?></span>
					<span class="ordercol6"><?=$date?></span>
					<span class="ordercol7"><?=$status?></span>
				</li>
<?php
   	   $number--;
   }
   mysqli_close($con);

?>
	    	</ul>
			<ul id="page_num">
<?php
	if ($total_page>=2 && $page >= 2)
	{
		$new_page = $page-1;
		echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
	}
	else
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)
   	{
		$new_page = $page+1;
		echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else
		echo "<li>&nbsp;</li>";
?>
			</ul> <!-- page -->
	</div> <!-- board_box -->
</section>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
