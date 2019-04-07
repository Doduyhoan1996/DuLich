<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>.:Bài viết:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/view.css">
	<link rel="stylesheet" type="text/css" href="CSS/form.css">
	<link rel="stylesheet" type="text/css" href="CSS/bottom.css">
</head>
<body>
	
	<?php
		include("form.php");
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dulich";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

		$idp = $_GET['id'];
		$sql = "SELECT * FROM baiviet WHERE baiviet.ID = $idp";
		$retval = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($retval);
		$t=$row['tag'];
		
	?>
	<div id="wrapper">
		<div id="title">
		<p> <?php echo $row['title'];?></p>

		</div>
		<div id="subcont">
			<p><?php echo $row['address'];?></p>
		</div>
		<div id="subcont">
			<p><?php echo $row['subcontent'];?></p>
		</div>
		<div id="anh">
			<img src="<?php echo $row['pic'];?> ">
		</div>
		<div id="content">
			<p><?php echo $row['content'];?></p>
		</div>
			<?php
			$acc=$_SESSION['name'];

			$sql ="SELECT PQ  from account WHERE name ='" .$acc."'";
			$text = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($text);
			$_SESSION['q']= $row['PQ'];
			if($_SESSION['q']== "admin" || $_SESSION['q']=="mod")
			{
		?>
		<div id="suaxoa">
			<a href="sua.php?id=<?php echo $idp;?>"><img src="img/i_folder_new_big.gif"></a>
			<a href="xoa.php?id=<?php echo $idp;?>&tag=<?php echo $t;?>"><img src="img/i_folder_locked_big.gif"></a>
		</div>
		<?php
			}

		?>
	</div>

	<div style="clear:left;"></div>
	<?php 
		include ("cmt.php");
		include("bottom.php");
	 ?>
</body>
</html>