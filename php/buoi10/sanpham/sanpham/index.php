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
    <style type="text/css">
        th, tr, td{
            border:2px solid black;
        }
    </style>
</head>

<body>
    <?php
    include "connection.php";
    $result = $conn->query("select * from products");
    ?>

    <div class="container" id="template">

        <h3 class="text-xl-center mr-8 p-3">Danh sách sản phẩm</h3>
        <div class="row mb-2">
            <div class="col">
                <a type="button" href="add.php">Thêm sản phẩm</a>
            </div>
        </div>
        <div class="row">

            <div class="col-md">
                <table style="width: 80%; ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ma sp</th>
                            <th>hang sp</th>
                            <th>loai sp</th>
                            <th>ten sp</th>
                            <th style="width: 70px;">anh</th>
                            <th>thao tac</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($rs = $result->fetch_assoc()) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $rs['id'] ?></td>
                                    <td><?php echo $rs['hang'] ?></td>
                                    <td><?php echo $rs['loai'] ?></td>
                                    <td><?php echo $rs['ten'] ?></td>
                                    <td ><img style="width: 70px;" src="img/<?php echo $rs['anh'] ?>" alt=""></td>
                                    <td>
                                        <a  href="edit.php?id=<?php echo $rs['id'] ?>">sua</a>
                                        <a  href="delete.php?id=<?php echo $rs['id'] ?>">xoa</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>