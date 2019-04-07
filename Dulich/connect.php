<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dulich";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$title=$_POST['txttieude'];
	$noidung=$_POST['content'];
	$subnoidung=$_POST['subcontent'];
	$address = $_POST['address'];
	$stag = $_POST['select'];

	if($title==""||$noidung=="")
		echo "Nhập tiêu đề và nội dung bài viết";
	else
	{

		$noidung = str_replace("\n", "<br />", $noidung);
		$subnoidung = str_replace("\n", "<br />", $subnoidung);
		if($_FILES['btanh']['type'] == "image/jpeg"
		|| $_FILES['btanh']['type'] == "image/jpg"
        || $_FILES['btanh']['type'] == "image/png"
        || $_FILES['btanh']['type'] == "image/gif")
        {
        // là file ảnh
        // Tiến hành code upload  
            if($_FILES['btanh']['size'] > 1048576)
            {
                echo "File không được lớn hơn 1mb";
            }
            else
            {
            	$sql="SELECT tagid as ID FROM tag WHERE tagname='".$stag."'";
            	$text = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($text);
				$tag = $row['ID'];

                // file hợp lệ, tiến hành upload
                $path = $_FILES['btanh']['name']; // Đường dẫn chưa file upload
                // Gọi hàm upload file
                move_uploaded_file($_FILES['btanh']['tmp_name'], $path);//up file lên csdl
                $stmt = $conn->prepare("INSERT INTO baiviet (title, pic, address, subcontent, content, tag) VALUES (?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("sssssi", $title,  $path, $address, $subnoidung, $noidung, $tag);
				$stmt->execute();

				$sql ="SELECT max(ID) as ID from baiviet";
				$text = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($text);
           }
        }
        else
        {
           // không phải file ảnh
           echo "Kiểu file không hợp lệ";
       }
		
	?>
<!DOCTYPE html>
<html>
<head>
	<title> Đang chuyển trang</title>
	<meta http-equiv="refresh" content="1;view.php?id=<?php echo $row['ID']; ?>">
	<link rel="stylesheet" type="text/css" href="CSS/dx.css">
</head>
<body>
	<div id="dx">
		<p>~~~~ĐĂNG BÀI THÀNH CÔNG~~~~</p>
	</div>
</body>
</html>
	<?php  
		$stmt->close();
		$conn->close();
	}
	
	?>
</html>