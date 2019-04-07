<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Hồ sơ người dùng:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/hs.css">
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
			<p>Tổng số bài viết đã bình luận:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			<p>Tổng số bình luận:</p>
			<p class="cangiua"><?php echo $row['name']?></p>
			
		</div>
	</div>
	<div id="right">
		<form method="POST" action="#" enctype="multipart/form-data">
			<div class="bao">
				<div class="trong">
					<p>Thay đổi ảnh đại diện</p>
					<input type="file" name="anh" value="Chọn từ máy tính...">
					<input type="submit" name="sub1" value="Thay đổi">
				</div>
				<div class="trong">
					<p> Thay đổi mật khẩu </p>
					<input type="password" name="pass" placeholder ="Nhập mật khẩu cũ">
					<p>Nhập mật khẩu mới:</p>
					<input type="password" name="pass1" placeholder="Nhập mật khẩu mới">
					<p>Nhập lại mật khẩu</p>
					<input type="password" name="pass2" placeholder = "Nhập lại mật khẩu">
					<input type="submit" name="sub2" value="Thay đổi">
				</div>
			</div>
		</form>
	</div>

</body>
</html>
<?php
	if(isset($_POST['sub1']))
	{
		if($_FILES['anh']['name'] == "")
			{
				echo "Hay chon anh dai dien moi";
			}
			else
			{
				if($_FILES['anh']['type'] == "image/jpeg"
				|| $_FILES['anh']['type'] == "image/jpg"
		        || $_FILES['anh']['type'] == "image/png"
		        || $_FILES['anh']['type'] == "image/gif")
		        {
		        // là file ảnh
		        // Tiến hành code upload  
		            if($_FILES['anh']['size'] > 1048576)
		            {
		                echo "File không được lớn hơn 1mb";
		            }
		            else
		            {

		                // file hợp lệ, tiến hành upload
		                $path = 'img/'.$_FILES['anh']['name']; // Đường dẫn chưa file upload
		                // Gọi hàm upload file
		                move_uploaded_file($_FILES['anh']['tmp_name'], $path);//up file lên csdl
		                $stmt = $conn->prepare("UPDATE account set ava =? where name = '".$_SESSION['name']."'");
						$stmt->bind_param("s", $path);
						$stmt->execute();
						echo "Thay ảnh đại diện thành công";
						$stmt->close();
						$conn->close();
					}
				}
			}
	}
	if (isset($_POST['sub2']))
	{
		if($_POST['pass']=="" || $_POST['pass1'] =="" || $_POST['pass2']=="")
		{
			echo "Không được bỏ trống các trường mật khẩu cũ, mật khẩu mới và nhập lại mật khẩu mới";
		}
		else
		{
			if($_POST['pass1'] != $_POST['pass2'])
			{
				echo "Mật khẩu mới không trùng khớp";
			}
			else
			{ $pas=md5($_POST['pass1']);
				if ($pas == $row['pass'])
				{
					echo "Mật khẩu mới không được trùng với mật khẩu cũ";
				}
				else
				{
					$stmt = $conn->prepare("UPDATE account set pass =? where name = '".$_SESSION['name']."'");
					$stmt->bind_param("s", $pas);
					$stmt->execute();
					echo "Thay đổi mật khẩu thành công";
					$stmt->close();
					$conn->close();
				}
			}
		}
	}
?>