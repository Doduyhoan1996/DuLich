<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Đăng Bài</title>
	<link rel="stylesheet" type="text/css" href="CSS/post.css">
	<link rel="stylesheet" type="text/css" href="CSS/bottom.css">
</head>
<body>
	<<?php 
		include ("form.php");
	 ?>
	<div id="wrapper">
	<form action="connect.php" method="POST" enctype="multipart/form-data">
		<div id="newpost">
			<p>Bạn vui lòng chọn danh mục</p>
			<select name="select">
				<option selected="selected">Địa điểm</option>
				<option>Đặc Sản</option>
				<option>Khách Sạn</option>
			</select>
			<p class="txt">Tiêu đề:</p>
			<input type="text" name="txttieude" size="30px">
			<p class="txt">Ảnh bài viết</p>
			<input type="file" name="btanh" value="Chọn tệp">
			<p class="txt">Nhập địa chỉ</p>
			<textarea placeholder="Nhập địa chỉ" name="address"	cols="100" rows="3" ></textarea>
			<p class="txt">Nội dung rút gọn</p>
			<textarea placeholder="Nội dung rút gọn" name="subcontent" cols="100" rows="5"></textarea>
			<p class="txt">Nội dung chi tiết</p>
			<textarea placeholder="Nội dung chi tiết" name="content" cols="100" rows="5"></textarea>
			<br>
			<input type="submit" name="btthem" value="Thêm">

		</div>		
	</form>

		<div style="clear:left;"></div>
	</div>
	<?php 
		include ("bottom.php");
	 ?>
</body>
</html>