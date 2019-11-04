<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="../style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 col-xl-3 sidebar">
                <div class="logo">
                    <img src="https://dashkit.goodthemes.co/assets/img/logo.svg" alt="">
                </div>
                <ul style="list-style-type:none; margin-top:30px; padding-left:0px;" class="main-menu">
                    <li class="nav-item">
                        <a class="nav-link active" id="list" href="/thegioidieuhoa.com/admin">Sản phẩm</a>
                        <ul class="childMenu">
                            <li><a class="nav-link " id="create" href="/thegioidieuhoa.com/admin/create.php"> Thêm sản phẩm</a></li>
                        </ul>
                    </li>  
                    <li class="nav-item hang-sx">
                        <a class="nav-link" id="lostlist" href="/thegioidieuhoa.com/admin/vendor">Hãng sản xuất</a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-12 col-md-10 col-xl-9 main">
                 <?php include 'list.php' ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
