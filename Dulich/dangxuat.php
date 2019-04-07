<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Đăng xuất:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/dx.css">
</head>
<body>
	<?php
	session_destroy();
	session_start();
	$_SESSION['name']= "Khách";
	$_SESSION['p']= "user";
	include ("form.php");
	?>
	<meta http-equiv="refresh" content="2;trangchu.php">
	<div id="dx">
		<p>~~~~Tạm biệt, Hẹn gặp lại~~~~</p>
	</div>
	
</body>
</html>

