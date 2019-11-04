
<?php 
	$servername="localhost";
	$database="dienmay";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername,$username,$password,$database);
	$conn->set_charset("utf8");
	if(!$conn) {
        die("Connection fail!" . mysqli_connect_error());
    }
	echo "Connection succesfully";
	$result=$conn->query("select * from sanpham");$html="";
	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()){
			$html.="<tr><td>".$row["MaSP"]."</td><td>".$row["LoaiSP"]."</td><td>".$row["HangSX"]."</td><td>".$row["TenSP"]."</td><td>".$row["TinSP"]."</td><td>".

			"<img style='width:100px;height:50px' src='"
			.$row["Anh"]."'/>"."</td><td>"." <a href='https://google.com'>Sửa</a> <a href=''>Xóa </a> "."<td></tr>";
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 </head>

 <body>
 	<table border="2px">
 		<?php echo $html; ?>
 	</table>
 </body>
 </html>