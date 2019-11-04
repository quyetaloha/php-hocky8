<?php
//Xử lý việc sửa thông tin vị trí trong csdl trên server
require_once ("databaseConnection.php");
$ten=$_POST["ten"];
$noilamviec=$_POST["noilamviec"];
$mota=$_POST["mota"];
$soluong=$_POST["soluong"];
//$sql="UPDATE sinhvien set hoten='".$hoten."',truong='".$truong."' where idsinhvien=10";
$sql="insert vitri (ten,noilamviec,mota,soluongchitieu) values(N'".
    $ten."',N'".$noilamviec."',N'".$mota."',N'".$soluong."')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm vị trí thành công";
} else {
    echo "Thêm vị trí thất bại: " . $conn->error;
}
//mysqli_query($conn,sql);
header( 'Location: ../nalika/list-vitri-tuyendung.php' );