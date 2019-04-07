<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Đăng ký:.</title>
	<link rel="stylesheet" type="text/css" href="CSS/dangnhap.css">
</head>
<body>
	<?php
		include("form.php");
	?>
	<div class="backg">
		<div class="contt">
			<form method="POST" action="#" enctype="multipart/form-data">
				<p class="tit">Tên đăng nhâp:</p>
				<input class="ip" type="text" name="name" placeholder="Tên đăng nhập" >
				<p class="tit">Mật khẩu:</p>
				<input class="ip" type="password" name="pass" placeholder="Mật khẩu">
				<p class="tit">Nhập lại mật khẩu:</p>
				<input class="ip" type="password" name="pass2" placeholder="Nhập lại mật khẩu">
				<p class="tit">Chọn ảnh đại diện:</p>
				<input class="ip" type="file" name="avar" value="Chọn ảnh đại diện">
				<p class="tit"></p>
				<input class="but" type="submit" name="sub" value="Đăng ký">
			</form>
		</div>
	</div>
	
	
</body>
</html>
<?php
	if(isset($_POST['sub']))
	{
		if($_POST['name']=="" ||$_POST['pass']=="" || $_POST['pass2'] == "")
		{
			echo "Không được để trống tên đăng nhập và mật khẩu";
		}
		else
		{
			if ($_POST['pass']!= $_POST['pass2'])
			{
				echo "Mat khau khong trung khop";
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

				$sql ="SELECT *  from account WHERE name ='" .$acc. "'";
				$text = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($text);

				if($row['IDU']!= "")
				{
					echo "Trùng tên tài khoản";
				}
				else
				{
					if($_FILES['avar']['name'] == "")
					{
						$path="img/avar.jpg";
						$p="user";
						$stmt = $conn->prepare("INSERT INTO account (name, pass, ava, PQ) VALUES (?, ?, ?, ?)");
						$stmt->bind_param("ssss", $acc,  $pass, $path, $p);
						$stmt->execute();
						echo "dang ky thanh cong";
						$stmt->close();
						$conn->close();
						$_SESSION['name']=$acc;
						?>
						<head>
						<title>Đang Chuyển Trang...</title>
						<meta http-equiv="refresh" content="3;trangchu.php">
						</head>
						<?php
					}
					else
					{
						if($_FILES['avar']['type'] == "image/jpeg"
						|| $_FILES['avar']['type'] == "image/jpg"
				        || $_FILES['avar']['type'] == "image/png"
				        || $_FILES['avar']['type'] == "image/gif")
				        {
				        // là file ảnh
				        // Tiến hành code upload  
				            if($_FILES['avar']['size'] > 1048576)
				            {
				                echo "File không được lớn hơn 1mb";
				            }
				            else
				            {
				            	$p="user";

				                // file hợp lệ, tiến hành upload
				                $path = 'img/'.$_FILES['avar']['name']; // Đường dẫn chưa file upload
				                // Gọi hàm upload file
				                move_uploaded_file($_FILES['avar']['tmp_name'], $path);//up file lên csdl
				                $stmt = $conn->prepare("INSERT INTO account (name, pass, ava, PQ) VALUES (?, ?, ?, ?)");
								$stmt->bind_param("ssss", $acc,  $pass, $path, $p);
								$stmt->execute();
								echo "Đăng ký thành công";
								$_SESSION['name']=$acc;
								$stmt->close();
								$conn->close();
								?>
								<head>
								<title>Đang Chuyển Trang...</title>
								<meta http-equiv="refresh" content="3;trangchu.php">
								</head>
								<?php

	           				}
	       				}
				        else
				        {
				           echo "Kiểu file không hợp lệ";
				    	}
					}
				}
			}
		}
	}
?>

