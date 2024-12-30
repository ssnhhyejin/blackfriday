<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["cart"])) $cart = $_SESSION["cart"];
    if (isset($_SESSION["cart_count"])) $cart_count = $_SESSION["cart_count"];
    else $cart_count = 0;
    $cart_explode = explode(",",$cart);

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('Please Login!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }
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
          $insert_name = $hpname . " + " . ($cart_count - 1) ." items";
    }

    mysqli_close($hcon);

    $total_price += 15;

	$order_date = date("Y-m-d");  // 현재의 '년-월-일-시-분'을 저장

	$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");

	$sql = "insert into order_list (id, name, price, content, order_date, order_status) ";
	$sql .= "values('$userid', '$insert_name', '$total_price', '$insert_name', '$order_date', 'order submitted')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	$_SESSION["cart"] = "";
	$_SESSION["cart_count"] = 0;

	echo "
	   <script>
	    location.href = 'mypage_orderlist.php';
	   </script>
	";
?>


