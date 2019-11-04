<?php 
include "../../../controller/dao/database.php";
$dao= new dao;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tim kiem hoa don theo iduser</title>
</head>
<body>
	<div class="wrapper">
		<div class="header"></div>
		<div class="menuleft"></div>
		<div class="content">
			<div>
				<form method="POST" action="danhsachhoadontheoiduser.php">
					<label>Tìm kiếm theo idUser:</label> <input type="text" name="key" placeholder="Nhập idUser can tim ">
					<input type="submit" name="submit" value="Tìm">
				</form>
			</div>
			<div>
				<form method="POST" action="danhsachhoadontheongay.php">
					<label>Ngày Lập   </label>
					<input type="text" name="timngay" placeholder="Nhập ngày cần tìm">
						
					
					<input type="submit" name="submit2" value="Tìm">
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer"></div>
	</div>
</body>
</html>
<option value=''></option>