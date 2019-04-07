<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Sửa Bài</title>
	<link rel="stylesheet" type="text/css" href="CSS/sua.css">
	<link rel="stylesheet" type="text/css" href="CSS/bottom.css">
</head>
<body>
	<<?php 
		include ("form.php");
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dulich";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	 ?>

	<?php
		$idp = $_GET['id'];	
		$sql = "SELECT * FROM baiviet WHERE baiviet.ID = $idp";
		$retval = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($retval))
		{
            $title = $row['title'];
            $pic = $row["2"];
            $address = $row["address"];
            $subcontent = $row["4"];
            $content = $row["5"];
            $tag = $row["tag"];
		}

		?>
	<div id="wrapper">
	<form action="suadoi.php?id=<?php echo $idp; ?>" method="POST" enctype="multipart/form-data">
		<div id="newpost">
			<p>Bạn vui lòng chọn danh mục</p>
			<select name="select">
				<?php 
					switch($tag){
					case 1:
					?>
						<option selected="selected">Địa điểm</option>;
						<option>Đặc Sản</option>;
						<option>Khách Sạn</option>;
						<?php 
						break;
					case 2:	
					 ?>
						<option>Địa điểm</option>;
						<option selected="selected">Đặc Sản</option>;
						<option>Khách Sạn</option>;
						<?php 
						break;
					case 3:	
					 ?>
						<option>Địa điểm</option>;
						<option>Đặc Sản</option>;
						<option selected="selected">Khách Sạn</option>;
						<?php 
						break;
				}
				?>
			</select>
			<p class="txt">Tiêu đề:</p>
			<input type="text" name="txttieude" size="30px" value="<?= $title ?>">
			<p class="txt">Ảnh bài viết</p>
			<input type="file" name="btanh" value="Chọn tệp">
			<p class="txt">Nhập địa chỉ</p>
			<textarea placeholder="Nhập địa chỉ" name="address"	cols="100" rows="3" > <?= $address ?> </textarea>
			<p class="txt">Nội dung rút gọn</p>
			<textarea placeholder="Nội dung rút gọn" name="subcontent" cols="100" rows="5" > <?= $subcontent ?> </textarea>
			<p class="txt">Nội dung chi tiết</p>
			<textarea placeholder="Nội dung chi tiết" name="content" cols="100" rows="5" > <?= $content ?> </textarea>
			<br>
			<input type="submit" name="btsua" value="Sửa Đổi">

		</div>

		</form>

		<div style="clear:left;"></div>
	</div>
	<?php 
		include ("bottom.php");
	 ?>

</body>
</html>