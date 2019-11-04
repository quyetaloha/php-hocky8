<?php
require_once ("databaseConnection.php");
$id=$_POST["id"];
$hoten=$_POST["hoten"];
$truong=$_POST["truong"];
$chuyennganh=$_POST["chuyennganh"];
$namtotnghiep=$_POST["namtotnghiep"];
$chungchi=$_POST["chungchi"];
$email=$_POST["email"];
$diem=$_POST["diem"];
$vitri=$_POST["vitri"];
//$sql="UPDATE sinhvien set hoten='".$hoten."',truong='".$truong."' where idsinhvien=10";
$sql="UPDATE sinhvien set hoten=N'".$hoten."',truong=N'".$truong."',chuyennganh=N'".$chuyennganh."',namtotnghiep=N'".$namtotnghiep."',chungchi=N'".$chungchi."',email=N'".$email."',diem=N'".$diem."',vitriungtuyen=N'".$vitri."' where idsinhvien=".$id;
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
//mysqli_query($conn,sql);
echo "thanhcong";
header( 'Location: ../nalika/index-admin-listSV.php' );