<?php 
	session_start();
	$id = $_GET['id'];
	$action = $_GET['ac'];
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
		<?php
			$sql ="SELECT *  from account WHERE IDU ='" .$id. "'";
			$texta = mysqli_query($conn,$sql);
			$rowa = mysqli_fetch_array($texta);
			if ($action == 1)
				{
		?>
					<p class="tieude">CHỈNH SỬA THÔNG TIN CỦA TÀI KHOẢN: <?php echo $rowa['name']?></p>
					<form method="POST" action="actiontk.php?id=<?php echo $id;?>&ac=<?php echo $action;?>" enctype="multipart/form-data">
						<div class="bao">
							<div class="trong">
								<p>Thay đổi chức danh:</p>
								<select name="select">
									<?php 
										switch($rowa['PQ']){
										case 'admin':
										?>
											<option selected="selected">Admin</option>;
											<option>Mod</option>;
											<option>Người dùng thông thường</option>;
											<?php 
											break;
										case 'mod':	
										 ?>
											<option>Admin</option>;
											<option selected="selected">Mod</option>;
											<option>Người dùng thông thường</option>;
											<?php 
											break;
										case 'user':	
										 ?>
											<option>Admin</option>;
											<option>Mod</option>;
											<option selected="selected">Người dùng thông thường</option>;
											<?php 
											break;
									}
									?>
								</select>
								<input type="submit" name="sub1" value="Thay đổi">
							</div>
							<div class="trong">
								<p>Nhập mật khẩu mới:</p>
								<input type="password" name="pass1" placeholder="Nhập mật khẩu mới">
								<p>Nhập lại mật khẩu</p>
								<input type="password" name="pass2" placeholder = "Nhập lại mật khẩu">
								<input type="submit" name="sub2" value="Thay đổi">
							</div>
						</div>
					</form>

		<?php
				}
	if(isset($_POST['sub1']))
	{
		if($_POST['select']=="Admin")
		{
			$q="admin";
		}
		if($_POST['select']=="Mod")
		{
			$q="mod";
		}
		if($_POST['select']=="Người dùng thông thường")
		{
			$q="user";
		}
		$stmt = $conn->prepare("UPDATE account set PQ=? where IDU = $id ");
		$stmt->bind_param("s",$q);
		$stmt->execute();
		echo "Thay đổi chức danh thành công";
?>
	<meta http-equiv="refresh" content="3;qltaikhoan.php?page=1">
<?php
	}
	if (isset($_POST['sub2']))
	{
		if( $_POST['pass1'] =="" || $_POST['pass2']=="")
		{
			echo "Không được bỏ trống các trường mật khẩu mới và nhập lại mật khẩu mới";
		}
		else
		{
			if($_POST['pass1'] != $_POST['pass2'])
			{
				echo "Mật khẩu mới không trùng khớp";
			}
			else
			{
				$pass=md5($_POST['pass1']);
				$stmt = $conn->prepare("UPDATE account set pass =? where IDU = '".$id."'");
				$stmt->bind_param("s", $pass);
				$stmt->execute();
				echo "Thay đổi mật khẩu thành công";
?>
				<meta http-equiv="refresh" content="3;qltaikhoan.php?page=1">
<?php
			}
			$stmt->close();
			$conn->close();

		}
	}
?>
</div>


</body>
</html>