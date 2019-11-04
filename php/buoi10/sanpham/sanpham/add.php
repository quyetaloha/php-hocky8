<?php
include "connection.php";

$id = 0;

if (isset($_POST['ten'])) {
    $anh = '';

    if ($_FILES['anh']['size']) {
        $anh = $_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'], 'img/' . $_FILES['anh']['name']);
    }

    $hang = $_POST['hang'];
    $loai = $_POST['loai'];
    $ten = $_POST['ten'];

    $sql = "INSERT INTO products(hang,loai,ten,anh) VALUES ('$hang','$loai','$ten','$anh')";
    if (mysqli_query($conn, $sql)) {
        echo ("<script language='javascript'>alert('Thêm sản phẩm thành công');location.href='index.php'</script>");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5">

        <form method="post" action="" enctype="multipart/form-data">

            <div class="form-group">
                <label for="my-input">Hãng</label>
                <input id="my-input" class="form-control" type="text" name="hang">
            </div>

            <div class="form-group">
                <label for="my-input">Loại</label>
                <input id="my-input" class="form-control" type="text" name="loai">
            </div>

            <div class="form-group">
                <label for="my-input">Tên</label>
                <input id="my-input" class="form-control" type="text" name="ten">
            </div>

            <div class="form-group">
                <label for="my-input">Ảnh</label>
                <input id="my-input" class="form-control" type="file" name="anh">
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit" />
            </div>


        </form>

    </div>

</body>

</html>