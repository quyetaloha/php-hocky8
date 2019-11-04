<?php
include "connection.php";

$id = 0;


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "delete from products  where id = " . $id;

    if (mysqli_query($conn, $sql)) {
        echo ('<script>alert("Xoa sản phẩm thành công"); location.href="index.php"</script>');
    }
}

?>