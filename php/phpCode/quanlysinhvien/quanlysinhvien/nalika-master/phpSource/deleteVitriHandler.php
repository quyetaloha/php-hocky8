<?php
require_once ("databaseConnection.php");
$id=$_GET["id"];
$sql="delete from vitri where idvitri=".$id;

$conn->query($sql);
//mysqli_query($conn,sql);

header( 'Location: ../nalika/list-vitri-tuyendung.php' );