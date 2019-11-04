<?php
include "connection.php";

$id = 0;


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $conn->query("select * from products where id = " . $id);

    $rs = $result->fetch_assoc();
}

if (isset($_POST['ma']) && !empty($_POST['ma'])) {
    $id = $_POST['ma'];

    $anh = '';
    $hang = $_POST['hang'];
    $loai = $_POST['loai'];
    $ten = $_POST['ten'];

    if ($_FILES['anh']['size']) {
        $anh = $_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'], 'img/' . $_FILES['anh']['name']);

        $sql = "update products set hang = '$hang', loai = '$loai', ten = '$ten', anh = '$anh'  where id = " . $id;
    } else {

        $sql = "update products set hang = '$hang', loai = '$loai', ten = '$ten'  where id = " . $id;
    }
    if (mysqli_query($conn, $sql)) {
        echo ('<script>alert("Cập nhật sản phẩm thành công"); location.href="index.php"</script>');
    }

} else if (isset($_POST['ma']) && empty($_POST['ma'])){

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
        echo ("location.href='index.php'</script>");
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
            <div class="">
                <label for="my-input">ma sp</label>
                <input id="my-input" class="" type="text" name="ma" value="<?php echo isset($_GET['id']) ? $rs['id'] : '' ?>">
            </div>

            <div class="">
                <label for="my-input">hang sp</label>
                <input id="my-input" class="" type="text" name="hang" value="<?php echo isset($_GET['id']) ? $rs['hang'] : '' ?>">
            </div>

            <div class="">
                <label for="my-input">loai sp</label>
                <input id="my-input" class="" type="text" name="loai" value="<?php echo isset($_GET['id']) ? $rs['loai'] : '' ?>">
            </div>

            <div class="">
                <label for="my-input">ten sp</label>
                <input id="my-input" class="" type="text" name="ten" value="<?php echo isset($_GET['id']) ? $rs['ten'] : '' ?>">
            </div>

            <div class="">
                <label for="my-input">anh</label>
                <img src="img/<?php echo isset($_GET['id']) ? $rs['anh'] : '' ?>" style="width: 100px; " alt="">
                <br><br>
                <input id="my-input" class="" type="file" name="anh">
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Cập nhật" />
                <input type="submit" class="btn btn-success" value="Thêm mới" />
            </div>
        </form>

    </div>

</body>

</html>