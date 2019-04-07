<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/cmt.css">
</head>
<body>
	<?php
		$username = "root";
		$password = "";
		$dbname = "dulich";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql ="SELECT *  from account WHERE name ='" .$_SESSION['name']. "'";
		$text = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($text);
		$idp = $_GET['id'];
		if($row['IDU']!= "")
		{
	?>

	<div id="nhapcmt">
		<p class="title"> HÃY ĐỂ LẠI BÌNH LUẬN</p>
		<div id= "anh" class="trong">
			<img src="<?php echo $row['ava'];?>">
		</div>
		<div id= "text">
			<div id= "tt">
				<span>~ - ~ <?php echo $row['name'];?> ~ - ~ </span>
				<span>
					<?php 
						if($row['PQ'] == "admin")
							echo "Admin";
						if($row['PQ'] == "mod")
							echo "Mod";
					?>
				</span>
			</div>
			<div>
				<form method="POST" action="view.php?id= <?php echo $idp; ?>#nhapcmt">
					<input id="comet" type="textarea" name="cmt" placeholder ="Nhập bình luận">
					<input type="submit" name="sub" value="Bình luận">
				</form>
			</div>
		</div>
	</div>
	<?php
		}
	?>
	<div style="clear:left;"></div>
	<table>
		<?php
			$sql = "SELECT * FROM comment WHERE ID= $idp ORDER by IDC DESC  ";
			$textc = mysqli_query($conn,$sql);
			$dem=1;
			while ($rowc = mysqli_fetch_array($textc))
			{ 
				$sql = "SELECT * FROM account WHERE IDU= ".$rowc['IDU']."";
				$texta = mysqli_query($conn,$sql);
				$rowa = mysqli_fetch_array($texta);
		?>
		<tr>
			<td>
				<p class="title"> BÌNH LUẬN: #<?php echo $dem;?></p>
				<div id="cmt">
					<div id= "anh" class="trong">
						<img src="<?php echo $rowa['ava'];?>">
					</div>
					<div id= "text">
						<div id= "tt">
							<span>~ - ~ <?php echo $rowa['name'];?> ~ - ~ </span>
							<span>
								<?php 
									if($rowa['PQ'] == "admin")
										echo "Admin";
									if($rowa['PQ'] == "mod")
										echo "Mod";
								?>
							</span>
							<span> <?php echo $rowc['TIMEC'];?></span>
							<?php 
							$sql = "SELECT * FROM account WHERE IDU= ".$rowc['IDU']."";
							$textd = mysqli_query($conn,$sql);
							$rowd = mysqli_fetch_array($textd);
								if($row['PQ'] == "admin" || $row['PQ'] == "mod" || $rowd['name'] == $row['name'])
								{
							?>
							<span>
								<form method="POST" action="view.php?id= <?php echo $idp; ?>&idc=<?php echo $rowc['IDC'];?>#nhapcmt">
									<input type="submit" name="sub1" value="X">
								</form>
							</span>
							<?php
								}
							?>
						</div>
						<div>
							<p><?php echo $rowc['noidung']?></p>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<?php
		$dem++;
			}
		?>
	</table>	
</body>
</html>

<?php
	
	if(isset($_POST['sub']))
	{
		if($_POST['cmt']=="")
			echo "Hãy nhập bình luận";
		else
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dulich";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			$stmt = $conn->prepare("INSERT INTO comment (IDU, ID, noidung) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $row['IDU'],$_GET['id'], $_POST['cmt']);
			$stmt->execute();
			echo "thành công";
		?>
		<meta http-equiv="refresh" content="1;view.php?id=<?php echo $_GET['id']; ?>">
		<?php
		}
	}
	if(isset($_POST['sub1']))
	{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dulich";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			$idp=$_GET['idc'];
			$sql="DELETE FROM comment WHERE IDC = $idp";
        	$text = mysqli_query($conn,$sql);
			$conn->close();
		?>
		<meta http-equiv="refresh" content="1;view.php?id=<?php echo $_GET['id']; ?>">
		<?php
		}
?>