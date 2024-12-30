<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $username = "";

    if ( !$userid=="manager" )
    {
        echo("
                    <script>
                    alert('You do not have access' );
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $size=$_POST["size"];
    $quantity=$_POST["quantity"];
    $summary=$_POST["summary"];
    $detail=$_POST["detail"];
 	$designer=$_POST["designer"];
 	$clothes=$_POST["clothes"];
 	$acc=$_POST["acc"];
 	$shoes=$_POST["shoes"];
  	$bag=$_POST["bag"];
  	$state=$_POST["state"];
  	//$upfile=$_POST['upfile'];

	$pname = htmlspecialchars($pname, ENT_QUOTES);
	$price = htmlspecialchars($price, ENT_QUOTES);
	$size = htmlspecialchars($size, ENT_QUOTES);
	$quantity = htmlspecialchars($quantity, ENT_QUOTES);
	$summary = htmlspecialchars($summary, ENT_QUOTES);
	$detail = htmlspecialchars($detail, ENT_QUOTES);
	$designer = htmlspecialchars($designer, ENT_QUOTES);
	$clothes=htmlspecialchars($clothes, ENT_QUOTES);
	$acc=htmlspecialchars($acc, ENT_QUOTES);
	$shoes=htmlspecialchars($shoes, ENT_QUOTES);
	$bag=htmlspecialchars($bag, ENT_QUOTES);
	$state=htmlspecialchars($state, ENT_QUOTES);
	//$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	$upload_dir = './images/';

	$upfile_name	 = $_FILES["upfile"]["name"];
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
	$upfile_type     = $_FILES["upfile"]["type"];
	$upfile_size     = $_FILES["upfile"]["size"];
	$upfile_error    = $_FILES["upfile"]["error"];

	if ($upfile_name && !$upfile_error)
	{
		$file = explode(".", $upfile_name);
		$file_name = $file[0];
		$file_ext  = $file[1];

		$new_file_name = date("Y_m_d_H_i_s");
		$new_file_name = $new_file_name;
		$copied_file_name = $pname.".".$file_ext;
		$uploaded_file = $upload_dir.$copied_file_name;

		if( $upfile_size  > 1000000 ) {
				echo("
				<script>
				alert('Upload file size exceeds specified size (3MB)! Please check the file size! ');
				history.go(-1)
				</script>
				");
				exit;
		}

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
				echo("
					<script>
					alert('Failed to copy file to the specified directory.');
					history.go(-1)
					</script>
				");
				exit;
		}
	}
	else
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}

	$con = mysqli_connect("localhost", "shinshopping", "sangwoo159!", "shinshopping");
	$sql = "insert into item (pname, price, size, quantity, state, clothes, acc, bag, shoes, designer, file_name, file_type, file_copied)";
	$sql .= "values('{$pname}', '{$price}', '{$size}', '{$quantity}', '{$state}', '{$clothes}', '{$acc}', '{$bag}', '{$shoes}', '{$designer}', '{$upfile_name}', '{$upfile_type}', '{$copied_file_name}')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	/*// 포인트 부여하기
  	$point_up = 100;

	$sql = "select point from members where id='$userid'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$new_point = $row["point"] + $point_up;

	$sql = "update members set point=$new_point where id='$userid'";
	mysqli_query($con, $sql);
	*/

	mysqli_close($con);                // DB 연결 끊기


	echo "
	   <script>
	    location.href = 'manager_productlist.php';
	   </script>
	";




?>


