<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Đăng nhập:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/dangnhap.css">
</head>
<body>
	<?php
	include ("form.php");
	?>
	<div class="backg">
		<div class="cont">
			<form method="POST" action="#">
				<p class="tit"> Tên tài khoản:</p>
				<input class="ip" type="text" name="name" placeholder="Tên tài khoản">
				<p class="tit"> Mật khẩu:</p>
				<input class="ip" type="password" name="pass" placeholder="Mật khẩu">
				<p class="tit"> </p>
				<input class="but" type="submit" name="sub" value="Đăng nhập">
			</form>
		</div>
		
	</div>

</body>
</html>
<?php
	if (isset($_POST['sub']))
	{
		if($_POST['name']=="" || $_POST['pass']=="")
		{
	
			echo "Mật khẩu và pass không được để trống";
		}
		else
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dulich";
			$acc = $_POST['name'];
			$pass = md5($_POST['pass']);

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			$sql ="SELECT IDU,PQ  from account WHERE name ='" .$acc. "' AND pass = '".$pass."'";
			$text = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($text);

			if($row['IDU'] == "")
			{
				echo "Mật khẩu hoặc tài khoản sai";
				
			}
			else
			{
				$_SESSION['name'] = $acc ;
				$_SESSION['q'] = $row['PQ'];
?>
			<meta http-equiv="refresh" content="0;trangchu.php">
<?php
			}

			$conn->close();
		}
	}
?>