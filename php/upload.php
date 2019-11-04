<!DOCTYPE html>
<html>
<head>
	<title>second world war</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		lấy file dữ liệu: <input type="file" name="upload"><br><br>
		<input type="submit" name="upload" value="upload dữ liệu">
	</form>
	<?php 
		if(isset($_POST['upload'])){
			if($_FILES['upload']['error']>0){
				echo("<br> có lỗi trong việc Upload lên Server");
			}
			else
				move_uploaded_file($_FILES['upload']['tmp_name'], 'Upload/'.$_FILES['upload']['name']);
				echo "<br>Upload dữ liệu lên Server thành công<br>";
				echo "<pre>";
				print_r($_FILES['upload']);
				echo "<pre>";

				$st="Upload/".$_FILES['upload']['name'];
				echo "<br><br> <a href='$st'>Down load ve may tinh</a>";

			

		}
	 ?>
</body>
</html>