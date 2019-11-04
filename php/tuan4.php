<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get-POSt</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>maSV:</td>
				<td><input type="text" name="maSV"><br/></td>
			</tr>
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" name="hoTen"><br/></td>
			</tr>
			<tr>
				<td>Ngay sinh:</td>
				<td><input type="text" name="ngaySinh"><br/></td>
			</tr>
			<tr>
				<td>Gioi tinh:</td>
				<td><input type="text" name="gioiTinh"><br/></td>
			</tr>
			<tr>
				<td>Que Quan:</td>
				<td><input type="text" name="queQuan"><br/></td>
			</tr>
		</table>
		<input type="submit" name="gui" value="Gui">
	</form>
	
		<table border="1px" cellspacing="0" name="bang">
				<tr>
					<td >STT</td>
					<td>Mã Sinh viên</td>
					<td> Họ tên</td>
					<td> Ngay sinh</td>
					<td> Gioi tinh</td>
					<td> Que quan</td>
				</tr>
		
	<?php 
		if(isset($_POST['gui'])) {
			if(isset($_SESSION['stt'])){
				$_SESSION['stt']+=1;
			}else{
				$_SESSION['stt']=1;
			}
			$sv="<tr>
			<td>".$_SESSION['stt']."</td>".
			"<td>".$_POST['maSV']."</td>".
			"<td>".$_POST['hoTen']."</td>".
			"<td>".$_POST['ngaySinh']."</td>".
			"<td>".$_POST['gioiTinh']."</td>".
			"<td>".$_POST['queQuan']."</td></tr>";
			if(isset($_SESSION['global'])){
					$_SESSION['global'].=$sv;
			}else{
				$_SESSION['global']=$sv;
			}
			echo $_SESSION['global'];
		}
			?>
			</table>
	<a href="deletesession.php">huy session	|</a>
	
</body>
</html>