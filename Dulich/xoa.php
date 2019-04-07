<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dulich";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

		$idp = $_GET["id"];
		$tag=$_GET['tag'];
        $sql="DELETE FROM baiviet WHERE ID = $idp";
        $text = mysqli_query($conn,$sql);
		$conn->close();
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Xóa bài viết:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/dx.css">
	<meta http-equiv="refresh" content="2;diadiem.php?tag=<?php echo $tag;?>">
</head>
<body>
	<?php
	include ("form.php");
	?>
	<div id="dx">
		<p>~~~~Xóa bài thành công~~~~</p>
	</div>
	
</body>
</html>