<?php session_start(); 
	$_SESSION['MaSp1']="001";
	$_SESSION['TenSp1']="MG";
	$_SESSION['HangSX1']="Sonny";
	$_SESSION['path1']="http://localhost/php/Upload/Capture.PNG";

	$_SESSION['MaSp2']="002";
	$_SESSION['TenSp2']="TL";
	$_SESSION['HangSX2']="SamSung";
	$_SESSION['path2']="http://localhost/php/Upload/quyet.jpg";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px">
		<tr>DANH SÁCH SẢN PHẨM <?php echo $_POST['user']; ?></tr>
		<tr>
			<td>STT</td>
			<td>MaSP</td>
			<td>TenSP</td>
			<td>HangSX</td>
			<td>Ảnh</td>
			<td>Path</td>
		</tr>
		<tr>
			<td>1</td>
			<td><a href="http://localhost/php/SP1.php"><?php echo $_SESSION['MaSp1'] ?></a></td>
			<td><?php echo $_SESSION['TenSp1'] ?></td>
			<td><?php echo $_SESSION['HangSX1'] ?></td>
			<td><img src="http://localhost/php/Upload/Capture2.PNG"></td>
			<td><a href="http://localhost/php/Upload/Capture2.PNG">Capture2.PNG</a>Capture2.PNG</td>
		</tr>
		<tr>
			<td>2</td>
			<td><a href=""><?php echo $_SESSION['MaSp2'] ?></a></td>
			<td><?php echo $_SESSION['TenSp2'] ?></td>
			<td><?php echo $_SESSION['HangSX2'] ?></td>
			<td><img src="http://localhost/php/Upload/use-case-diagram-relationships-include.png"></td>
			<td><a href="http://localhost/php/Upload/use-case-diagram-relationships-include.png">quyet.jpg</a></td>
		</tr>
	</table>
</body>
</html>