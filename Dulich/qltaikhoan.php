<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Quản lý tài khoản:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/qltk.css">
</head>
<body>
	<?php
		include ("form.php");
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dulich";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql ="SELECT *  from account WHERE name ='" .$_SESSION['name']. "'";
		$text = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($text);
	?>
	<div id="left">
		<div id="avarta" class="trong">
			<div class="tieude">
				<p class="title">Ảnh đại diện</p>
			</div>
			<div class="anhdaidien">
				<img src="<?php echo $row['ava']; ?>">
			</div>
			
		</div>
		<div id="infor" class="trong">
			<p>Tên tài khoản:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			<p>Chức danh:</p>
			<p class="cangiua"><?php
				if($row['PQ']=="user")
					echo "Người dùng thông thường";
				if($row['PQ']=="mod")
					echo "Mod";
				if($row['PQ']=="admin")
					echo "Admin";
			?></p>
			<p>Tổng số bài viết:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			<p>Tổng số bài viết đã bình luận:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			<p>Tổng số bình luận:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			
		</div>
	</div>
	<div id="right">
		<p class="tieude">DANH SÁCH NGƯỜI DÙNG</p>
		<table class="bao">
			<tr>
				<th class="cangiua">THÔNG TIN</th>
				<th class="cangiua">THAO TÁC</th>
			</tr>
			<?php

				$sql ="SELECT COUNT(*) AS sum  from account";
				$textb = mysqli_query($conn,$sql);
				$rowb = mysqli_fetch_array($textb);
				$sum = $rowb['sum'];
				$each = 2;
				if($_GET['page']==1)
				{
					$begin = $_GET['page']-1;
				}
				else
				{
					$begin = ($_GET['page']*$each)-$each;
				}
				$end = $begin + $each;
				$spage = ceil($sum / $each);
				$sql ="SELECT *  from account LIMIT $begin, $each";
				$texta = mysqli_query($conn,$sql);
				while ($rowa = mysqli_fetch_array($texta))
					{
			?>
			<tr>
				<td class="col1">
					<div class="infor">
						<div class="anh">
							<img src="<?php echo $rowa['ava']?>">
						</div>
						<div class="thongtin">
							<p>Tên tài khoản:<?php echo $rowa['name'];?></p>
							<p>Chức danh:
								<?php if($rowa['PQ']=="user")
									echo "Người dùng thông thường";
								if($rowa['PQ']=="mod")
									echo "Mod";
								if($rowa['PQ']=="admin")
									echo "Admin";?>	
							</p>
							<p>Tổng số bình luận:</p>
						</div>
					</div>
				</td>
				<td class="col2">
					<a href="actiontk.php?id=<?php echo $rowa['IDU'];?>&ac=1">Sửa</a>
					<a href="actiontk.php?id=<?php echo $rowa['IDU'];?>&ac=2">Xóa</a>
				</td>
			</tr>
			<?php 
				}
			?>
		</table>
		
		<div id="phantrang">
			<?php 
			if ($spage >1)
				{
			?>
					 <a href="qltaikhoan.php?page=1"><<</a>
			<?php
				if ($_GET['page']==1)
					{
			?>
					 	<a href="qltaikhoan.php?page=1"><</a>
			<?php
					}
				else
					{
			?>
						<a href="qltaikhoan.php?page= <?php echo $_GET['page']-1;?>"><</a>
			<?php
					}
				 for ($i=1;$i<=$spage;$i++)
			 		{
			 ?> 
			 			<span> | <a href="qltaikhoan.php?page=<?php echo $i;?>"><?php echo $i;?></a> | </span>
			 <?php
					} 
			 ?>
						 <a href="qltaikhoan.php?page= <?php echo $_GET['page']+1;?>">></a>
						 <a href="qltaikhoan.php?page=<?php echo $spage;?>">>></a>
			<?php
				}
			else
				{
			?>
					<a href="qltaikhoan.php?$page=1">1</a>
			<?php
			 	}
			?>
		</div>

		
	</div>


</body>
</html>