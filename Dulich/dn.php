<?php 
	if(session_id()=="")
	{
		session_start();
	}
	
	if(!isset($_SESSION['name']))
	{
		
		$_SESSION['name']="Khách";
		$_SESSION['q']="user";
	}
	else
		{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dulich";
		$acc=$_SESSION['name'];
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql ="SELECT PQ  from account WHERE name ='" .$acc."'";
		$text = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($text);
		$_SESSION['q']= $row['PQ'];
		
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/d.css">
</head>
<body>

	<div id="dn">
		<li><a href="dangnhap.php">Xin chào, <?php echo $_SESSION['name']?></a>
				<ul class="submenu">
					<?php
						if($_SESSION['q']== "admin" || $_SESSION['q']=="mod")
						{
					?>
						<li><a href="qlbaiviet.php?page=1">Quản lý bài viết</a></li>
					<?php
						}
						if($_SESSION['q']=="admin")
						{
					?>
						<li><a href="qltaikhoan.php?page=1">Quản lý tài khoản</a></li>
					<?php
						}
					?>
					<?php
					if($_SESSION['name']=="Khách")
						{
					?>
						<li><a href="dangky.php">Đăng ký</a></li>
						<li><a href="dangnhap.php">Đăng nhập</a></li>
					<?php
						}
					else
					{
					?>
						<li><a href="hoso.php">Hồ sơ </a></li>
						<li><a href="dangxuat.php"> Đăng xuất</a></li>
					<?php
					}
					?>
					
				</ul>
			</li>
	</div>
</body>
</html>
