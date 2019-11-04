<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form enctype="multipart/form-data">
		<table>
		<tr>
			<td>MaSP</td>
			<td><input type="text" name="MaSp1" value="<?php echo $_SESSION['MaSp1'] ?>"></td>
		</tr>
		<tr>
			<td>TenSP</td>
			<td><input type="text" name="TenSp1" value="<?php echo $_SESSION['TenSp1'] ?>"></td>
		</tr>
		<tr>
			<td>HangSX</td>
			<td><input type="text" name="HangSX1" value="<?php echo $_SESSION['HangSX1'] ?>"></td>
		</tr>
		<tr>
			<td>Anh</td>
			<td><input type="file" name="upload"><br><br></td>
		</tr>
		<br>
		
	</table>
	<button type="submit" name="dangnhap">Update</button>
	</form>
	<?php 
		if(isset($_POST['dangnhap'])){
		$_SESSION['MaSp1']=$_POST['MaSp1'];
		$_SESSION['TenSp1']=$_POST['TenSp1'];
		$_SESSION['HangSX1']=$_POST['HangSX1'];
		$_SESSION['path1']=$_FILES['upload']['name'];
		header("location:DsSanPham.php");
		}
	 ?>
</body>
</html>