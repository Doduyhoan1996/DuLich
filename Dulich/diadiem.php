<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Địa điểm</title>
	<link rel="stylesheet" type="text/css" href="CSS/diadiem.css">
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
		$tag=$_GET['tag'];
		$acc=$_SESSION['name'];

		$sql ="SELECT PQ  from account WHERE name ='" .$acc."'";
		$text = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($text);
		$_SESSION['q']= $row['PQ'];
		if($_SESSION['q']== "admin" || $_SESSION['q']=="mod")
		{
	?>
	<div id="add">
		<a href="post.php"> <img src="img/i_folder_new_big.gif"></a>
	</div>
	<?php
		}
	?>
	<div id="wrapper">
		<table id="bang">
			<?php

				$sql ="SELECT COUNT(*) AS sum  from baiviet where tag = $tag";
				$textb = mysqli_query($conn,$sql);
				$rowb = mysqli_fetch_array($textb);
				$sum = $rowb['sum'];
				$each = 4;
				if($_GET['page']==1)
				{
					$begin = $_GET['page']-1;
				}
				else
				{
					$begin = ($_GET['page']*$each)-$each;
				}
				$spage = ceil($sum / $each);
				$text = mysqli_query($conn, "SELECT * FROM baiviet WHERE tag = $tag LIMIT $begin, $each");
				while ($row = mysqli_fetch_array($text))
				{
					$idp = $row[0];
					?>
							<tr>
								<td>
									
									<div id="title">
										<a href="view.php?id=<?php echo $idp;?>"><?php echo $row['title'];?></a>
									</div>
									<div id="address">
										<a href="view.php?id=<?php echo $idp;?>"><?php echo $row['address'];?></a>
									</div>
									<div id="content">
										<div id="left">
											<a href="view.php?id=<?php echo $idp;?>"> <img src="<?php echo $row['pic']; ?>"></a>
										</div>
										<div id="right">
											<a href="view.php?id=<?php echo $idp;?>"><?php echo $row['subcontent'];?></a>
										</div>
									</div>				
								</td>
							</tr>	
							<?php 
						}
			 ?>
		</table>
		<div style="clear:left;"></div>
		<div id="phantrang">
			<?php 
			if ($spage >1)
				{
			?>
					 <a href="diadiem.php?tag=<?php echo $tag?>&page=1"><<</a>
			<?php
				if ($_GET['page']==1)
					{
			?>
					 	<a href="diadiem.php?tag=<?php echo $tag?>&page=1"><</a>
			<?php
					}
				else
					{
			?>
						<a href="diadiem.php?tag=<?php echo $tag?>&page= <?php echo $_GET['page']-1;?>"><</a>
			<?php
					}
				 for ($i=1;$i<=$spage;$i++)
			 		{
			 ?> 
			 			<span> | <a href="diadiem.php?tag=<?php echo $tag?>&page=<?php echo $i;?>"><?php echo $i;?></a> | </span>
			 <?php
					} 
			 ?>
						 <a href="diadiem.php?tag=<?php echo $tag?>&page= <?php echo $_GET['page']+1;?>">></a>
						 <a href="diadiem.php?tag=<?php echo $tag?>&page=<?php echo $spage;?>">>></a>
			<?php
				}
			else
				{
			?>
					<a href="diadiem.php?tag=<?php echo $tag?>&page=1">1</a>
			<?php
			 	}
			?>
		</div>

	</div>
	<?php 
		include ("bottom.php");
		mysqli_free_result($text);
		mysqli_close($conn);
	 ?>
	</body>
</html>