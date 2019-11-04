<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
        table tr ,td ,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
    if(isset($_POST['upload'])){
        if($_FILES['upload']['error']>0){
            echo "Worng something";
        }
        else{
            move_uploaded_file($_FILES['upload']['tmp_name'], 'fileupload/'.$_FILES['upload']['name']);
            echo "upload success"."<br>";
            var_dump($_FILES['upload']);
        }
    }
    // $_FILES[$fileupload][$name];
?>
<!-- <a href="unsetsession.php">xoa session_abort</a> -->
<form action="" method="post" enctype = "multipart/form-data">
    Ma sp: <input type="text" name = "msp">
    Hang sx: <input type="text" name = "hang">
    Anh: <input type="file" name = "upload">
    <input type="submit" name = "upload" >
</form>
<a href="unsetsession.php">xoa session</a>
<table>
    <tr>
        <th>STT</th>
        <th>MaSP</th>
        <th>HangSX</th>
        <th>Image</th>
        <th>Path</th>
    </tr>

    <?php
        session_start();
        if(isset($_POST['upload'])){
            if($_FILES['upload']['error']>0){
                echo "Worng something";
            }
            else{
                move_uploaded_file($_FILES['upload']['tmp_name'], 'fileupload/'.$_FILES['upload']['name']);
                echo "upload success"."<br>";
                print_r($_FILES['upload']);
                if(isset($_SESSION["STT"])) $_SESSION['STT']++;
                else $_SESSION['STT']=1;
                $href = "fileupload/".$_FILES['upload']['name'];
                $html = "<tr><td>".$_SESSION['STT']."</td><td>".$_POST["msp"]."</td><td>".$_POST['hang']."</td><td> <img src='"
                    .$href."'</td><td>".$href."</td></tr>";
                if(isset($_SESSION['global'])){
                    $_SESSION["global"].=$html;
                }
                else{
                    $_SESSION['global']=$html;
                }
                echo $_SESSION['global'];
                // $st = "fileupload/".$_FILES['upload']["name"];
                //     echo "<br><a href = '$st'> DOWN load</a>";
            }
        }
    ?>
</table>
</body>
</html>