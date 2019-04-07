<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dulich";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

		$idp = $_GET["id"];
		$title =$_POST["txttieude"];
		$address =$_POST["address"];
		$subnoidung=$_POST["subcontent"];
		$noidung = $_POST["content"];
		// $query ="UPDATE baiviet SET title='" . $_POST["txttieude"] . "',
  //                   address = '". $_POST["address"]."',
  //                   subcontent = '". $_POST["subcontent"]."',
  //                   content = '". $_POST["content"] ."'
  //                   WHERE id=$idp";
                    
  //                   $result = mysql_query($query); //Thuc thi cau lenh
    if($_FILES['btanh']['type'] == "image/jpeg"
		|| $_FILES['btanh']['type'] == "image/jpg"
        || $_FILES['btanh']['type'] == "image/png"
        || $_FILES['btanh']['type'] == "image/gif"
        || $_FILES['btanh']['type'] == "")
        {                
		$noidung = str_replace("\<br />", "", $noidung);
		$subnoidung = str_replace("<br />", "", $subnoidung);
		$noidung = str_replace("\n\n", "<br />", $noidung);
		$subnoidung = str_replace("\n\n", "<br />", $subnoidung);
		

		$sqla = "SELECT pic FROM baiviet WHERE ID=$idp";
		$texta = mysqli_query($conn,$sqla);
		$rowa = mysqli_fetch_array($texta);

		$anh = $rowa['pic'];
		if($_FILES['btanh']['name']!=$anh && $_FILES['btanh']['name']!='' )
			$anh=$_FILES['btanh']['name'];
		move_uploaded_file($_FILES['btanh']['tmp_name'], $_FILES['btanh']['name']);
		$stmt = $conn->prepare("UPDATE baiviet set title=?, address=?, pic=?, subcontent=?,content=? WHERE ID=$idp");
		$stmt->bind_param("sssss",$title,$address,$anh, $subnoidung, $noidung );
		$stmt->execute();//thực thi câu lệnh

		$sql ="SELECT max(ID) as ID from baiviet";
		$text = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($text);
	}
	else
		echo " File khong hop le";
	?>
	<head>
	<title>Đang Chuyển Trang...</title>
	<meta http-equiv="refresh" content="3;view.php?id=<?php echo $row['ID']; ?>">
	</head>

	<?php
		$stmt->close();
		$conn->close();
		echo "SỬA BÀI THÀNH CÔNG";
	
	?>