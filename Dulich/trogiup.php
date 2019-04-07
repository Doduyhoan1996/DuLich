<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trợ giúp</title>
	<link rel="stylesheet" type="text/css" href="CSS/trogiup.css">
	<link rel="stylesheet" type="text/css" href="CSS/form.css">
	<link rel="stylesheet" type="text/css" href="CSS/bottom.css">
</head>
<body>
	<?php 
		include("form.php");
	 ?>

	<div id="wrapper">
			<div id="search">
                <form action="search.php?page=1" method="GET">
					<h3>Tìm Kiếm</h3>
					<input type="text" name="timkiem" size="50">
					<input type="submit" name="btsearch" value="Tìm Kiếm">		
				</form>
			</div>
		<div style="clear:left;"></div>
	</div>
</body>
</html>