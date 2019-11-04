<?php
require_once ("databaseConnection.php");
$id=$_GET["id"];
$sql="delete from sinhvien where idsinhvien=".$id;

$conn->query($sql);
//mysqli_query($conn,sql);

header( 'Location: ../nalika/index-admin-listSV.php' );