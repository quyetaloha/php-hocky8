<?php
//Xử lý việc sửa thông tin vị trí trong csdl trên server
require_once ("databaseConnection.php");
$id=$_POST["id"];
$ten=$_POST["ten"];
$noilamviec=$_POST["noilamviec"];
$mota=$_POST["mota"];
$soluong=$_POST["soluong"];
//$sql="UPDATE sinhvien set hoten='".$hoten."',truong='".$truong."' where idsinhvien=10";
$sql="UPDATE vitri set ten=N'".$ten."',noilamviec=N'".$noilamviec."',mota=N'".$mota."',soluongchitieu=".$soluong." where idvitri=".$id;
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
//mysqli_query($conn,sql);
echo "thanhcong";
header( 'Location: ../nalika/list-vitri-tuyendung.php' );