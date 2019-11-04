<?php
require_once("../../../phpSource/databaseConnection.php");
session_start();
$sql="update sinhvien set vitriungtuyen=N'".$_POST["vitri"]."'"."where idsinhvien=".$_SESSION["idsohuu"];
$conn->query($sql);
header( 'Location: ../index-thanhcong.php' );
?>
