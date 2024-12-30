<!DOCTYPE html>
<html>
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $username = "";
    ?>
<head>
	<title>Product List</title>
	<meta charset="utf-8">
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
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/board.css">

<link href="htpps://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="./css/manage_box.css">
<script src="htpps://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- <script src="htpps://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/product_list.css">

<!--===============================================================================================-->
<style type="text/css">
#ProductList{width: 500px;
        margin: 0 auto;
        border: 1px solid white;
        text-align: center;
   }
</style>
</head>
<body>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script>
		$(function () {

		function check_input () {
		if (!document.search_product.pname.value) {
			alert("please enter the product name!");
			document.search_product.pname.focus();
			return;
		}
		if (!document.search_product.category.value) {
			alert("please select the category!");
			document.search_product.category.focus();
			return;
		}
		if (!document.search_product.designer.value) {
			alert("please select the category!");
			document.search_product.designer.focus();
			return;
			}	
		
			$("form[name=search_product]").submit();	
		}
		//동적바인딩, 나중에 동적으로 버튼이 생성되어도 다 읽어드릴수 있다.
		$(document).on("click","button",check_input);
			});
		</script>

<header>
	<?php include "header.php";?>
</header>

<section>
	<h2 id="title">
		Search for product list
	</h2>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><form class="form-register" name="search_product" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
	<table border="1" class="table table-bordered search_form">
		<tbody>
		<tr id='addr0' data-id="0" class="hidden">
			<th class="text-center">Product Name</th>
			<td><input type="text" name="pname" placeholder="Enter the product name"></td>
		</tr>

		<tr id='addr0' data-id="0" class="hidden">
			<th  class="text-center">Category</th>
			<td>
				<select class="catagory form-control form-control-size" name="category">
					<option value="" selected>-----</option>
					<option value="clothes">clothes</option>
					<option value="bag">bag</option>
					<option value="shoes">shoes</option>
					<option value="acc">acc</option>
				</select>
			</td>
		</tr>
		<tr id='addr0' data-id="0" class="hidden">
			<th class="text-center">Designer</th>
			 <td>
			 <!-- <form name=designer>
               <input type="radio" name="designer" value="gucci">
               <label class="custom-control-label" for="customRadio1">GUCCI</label>
                &nbsp;
               <input type="radio" name="designer" value="ysl">
               <label class="custom-control-label" for="customRadio2">ysl</label>
  				&nbsp;
               <input type="radio" name="designer" value="mcq">
               <label class="custom-control-label" for="customRadio3">Alexander Mcqueen</label>
               &nbsp;
           	   </form> -->
           	   <select class="catagory form-control" name="designer">
					<option value="" selected>-----</option>
					<option value="gucci">GUCCI</option>
					<option value="ysl">ysl</option>
					<option value="mcq">Alexander Mcqueen</option>
				</select>
       		  </td>
		</tr>
	</table>
	<div class="search-size">
		<button type="button" class="search_btn flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4 mybtn btn-block">Search</button>
	</div>
	<br><br>
	</tbody>
	</form>
	</div>
	<div class="col-md-4"></div>
	</div>
		<br>
<!----search 구현---------------------------------------------------------------------------------------------------------------------------------------------->
	
	<!--페이징 시작-->
	<?php
		if(isset($_GET['page'])) {
		$page = $_GET['page'];
		} else {
		$page = 1;
		}
	?>

	<!---검색 전 전체 리스트를 출력-->
	<?php
	if (!isset($_POST["pname"])) { 
	?>
		<div id="Product List">
	    <h2 id="product_list">
	    	Product List
		</h2>
		<br>
	    <ul class="board_list">
				<li>
					<span class="col1">Designer</span>
					<span class="col2">File</span>
					<span class="col3">Product Name</span>
					<span class="col4">Price</span>
					<span class="col5">Size</span>
					<span class="col6">Stock</span>
				</li>	

	<?php
	$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
	$sql = "select * from item";
	$result=mysqli_query($con, $sql);

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

	   for ($i=0; $i<$total_record; $i++)
	   {
	      mysqli_data_seek($result, $i);
	      // 가져올 레코드로 위치(포인터) 이동
	      $row = mysqli_fetch_array($result);
	      // 하나의 레코드 가져오기
	      $num         =$row['num'];
	      $category    = $row["category"];
		  $designer    = $row["designer"];
		  $pname       = $row["pname"];
		  $price       = $row["price"];
		  $size        =$row["size"];
	      $quantity    =$row["quantity"];
		  
	      if (strlen($row["file_name"])>0)
	      	$file_image = "<i class='fa fa-file-image-o' style='font-size:24px'></i>";
	      else
	      	$file_image = " ";
			?>
				<li>
					<span class="col1"><?=$designer?></span>
					<span class="col2"><?=$file_image?></span>
					<span class="col3"><?=$pname?></span>
					<span class="col4"><?=$price?></span>
					<span class="col5"><?=$size?></span>
					<span class="col6"><?=$quantity?></span>
				</li>	
			
   			<?php 
   			}
   			 mysqli_close($con);
   			 ?>
   			</ul>   			
			</div>

		<?php 
		 }else{ 
		?>
<div id="ProductList">
	    <h2 id="product_list">
	    	Product List
		</h2>
		<br>
	    <ul class="board_list">
				<li>
					<span class="col1">Designer</span>
					<span class="col2">File</span>
					<span class="col3">Product Name</span>
					<span class="col4">Price</span>
					<span class="col5">Size</span>
					<span class="col6">Stock</span>
				</li>	

		<?php

		$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");

		$pname=$_POST["pname"];
		$category=$_POST["category"];
		$designer=$_POST["designer"];
		$file_image=$_POST['upfile'];

		// $sql = "select * from item where pname like '%".$pname."%' and (category='".$category."' or designer='".$designer."')";
		$sql="select * from item where pname like '%{$pname}%' and designer='{$designer}'";
		 //sql 에 저장된 명령 실행
		$result = mysqli_query($con, $sql);

		$total_record = mysqli_num_rows($result); // 전체 글 수
		echo "Total Record : ".$total_record;
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
		  $pname       = $row["pname"];
		  $price       = $row["price"];
		  $size        =$row["size"];
	      $quantity    =$row["quantity"];
		  $category    = $row["category"];
		  $designer    = $row["designer"];
  
	      if ($row["file_name"])
	      	$file_image = "<i class='fa fa-file-image-o' style='font-size:24px'></i>";
	      else
	      	$file_image = " ";


	       
		   $category=$_POST["category"];
		   $designer=$_POST["designer"];
		   $clothes=$_POST["clothes"];
		   $bag=$_POST["bag"];
		   $shoes=$_POST["shoes"];
		   $acc=$_POST["acc"];
		   $gucci=$_POST["gucci"];
		   $ysl=$_POST["ysl"];
		   $mcq=$_mcq["mcq"];
  	
		  	$category= htmlspecialchars($category, ENT_QUOTES);
		  	$designer = htmlspecialchars($designer, ENT_QUOTES);
			$clothes = htmlspecialchars($clothes, ENT_QUOTES);
			$bag = htmlspecialchars($bag, ENT_QUOTES);
			$shoes = htmlspecialchars($shoes, ENT_QUOTES);
			$acc = htmlspecialchars($acc, ENT_QUOTES);
			$gucci = htmlspecialchars($gucci, ENT_QUOTES);
			$ysl = htmlspecialchars($ysl, ENT_QUOTES);
			$mcq = htmlspecialchars($mcq, ENT_QUOTES);

			?>
				<li>
					<span class="col1"><?=$designer?></span>
					<span class="col2"><?=$file_image?></span>
					<span class="col3"><?=$pname?></span>
					<span class="col4"><?=$price?>$</span>
					<span class="col5"><?=$size?></span>
					<span class="col6"><?=$quantity?></span>
				</li>	
		<?php
          }	
          mysqli_close($con);
     	 }
        ?>
		</ul>
</div>

<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href=manager_productlist.php?page=$new_page'>◀ pre</a> </li>";
	}		
	 else 
		echo "<li>&nbsp;</li>";

   	//게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
			echo "<li><a href='manager_productlist.php?page=$i'> $i </a><li>";
		
   	}

   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo "<li> <a href='manager_productlist.php?page=$new_page'>next ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
	</ul>  <!--page -->	    	

	<ul class="buttons">
	<li><button onclick="location.href='manager_productlist.php'">List</button></li>
	<li>
<?php 
    if($userid) {
?>
	<button onclick="location.href='manager_register.php'">Register</button>
<?php
	} else { ?>
		<a href="javascript:alert('Please Back to Login!')"><button>Register</button></a>
<?php
	}
?>
	</li>
	</ul> 
</div> <!-- board_box -->
</section> 

<footer>
	<?php include "footer.php";?>
</footer>

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
