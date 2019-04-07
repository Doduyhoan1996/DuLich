<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<link rel="stylesheet" type="text/css" href="CSS/trangchu.css">
	<link rel="stylesheet" type="text/css" href="CSS/form.css">
	<link rel="stylesheet" type="text/css" href="CSS/bottom.css">
</head>
<body>
		<?php
		include ("form.php");
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dulich";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// $tag=$_GET['tag'];
		?>
		<div id="wrapper">
		<div id="trai">
			<h3>ĐỊA ĐIỂM DU LỊCH</h3>
			<table id="tableleft">
			<?php
						$sql = "SELECT * FROM baiviet WHERE tag = 1 ORDER by ID DESC LIMIT 5 ";
						$text = mysqli_query($conn,$sql);
						while ($row = mysqli_fetch_array($text))
						{
			?>
				<tr>
					<td>
								<div id="title">
									<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['title'];?></a>
								</div>
								<div id="address">
									<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['address'];?></a>
								</div>
								<div id="content">
									<div id="left">
										<a href="view.php?id=<?php echo $row['ID'];?>"> <img src="<?php echo $row['pic']; ?>"></a>
									</div>
									<div id="right">
										<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['subcontent'];?></a>
									</div>		
								</div>		
					</td>
				</tr>	
			<?php 
				}
			 ?>
		</table>
		</div>
		<div id="phai">
		<h3>ĐẶC SẢN ĐỊA PHƯƠNG</h3>
			<table id="tableright">
			<?php
						$sql = "SELECT * FROM baiviet WHERE tag = 2 ORDER by ID DESC LIMIT 5 ";
						$text = mysqli_query($conn,$sql);
						while ($row = mysqli_fetch_array($text))
						{ 	
			?>
			<tr>
				<td>
					<div id="title">
						<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['title'];?></a>
					</div>
					<div id="address">
						<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['address'];?></a>
					</div>
					<div id="content">
						<div id="left">
							<a href="view.php?id=<?php echo $row['ID'];?>"> <img src="<?php echo $row['pic']; ?>"></a>
						</div>
						<div id="right">
							<a href="view.php?id=<?php echo $row['ID'];?>"><?php echo $row['subcontent'];?></a>
						</div>
					</div>				
				</td>
			</tr>	
			<?php 
				}
			 ?>
		</table>
		</div>	
		</div>
		<div style="clear:left;"></div>
	<?php 
		include ("bottom.php");
		mysqli_free_result($text);
		mysqli_close($conn);
	 ?>
</body>
</html>