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
            <div class="create-pro">
    <div class="header" style="margin-bottom: 30px;">
        <h6 class="header-pretitle">Thêm</h6>
        <h1 class="title">Sản phẩm</h1>
    </div>
    <div style="border-bottom:1px solid grey;">
        <p class="method" style="">General</p>
    </div>
    <div class="create">

        <form action="" method="post">

        <div class="row row-update">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" name="propertyId" id="" class="form-control" placeholder="">
                    
                    <label for="">Tên</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="">
                    
                    <label for="">Mô tả</label>
                    <input type="text" name="description" id="" class="form-control" placeholder="">
                    
                    <label for="">Hãng sản xuất</label> 
                    <select name="locationType" class="form-control" id="">
                        <option value="room">LG</option>
                        <option value="room">Daikin</option>
                    </select>
                    <br>
                    <label for="">Giá tiền</label>
                    <input type="number" name="location" id="" class="form-control" placeholder="">
                    
                </div>
           
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="locationType" class="form-control" id="">
                        <option value="room">LG</option>
                        <option value="room">Daikin</option>
                    </select>
                 
                    <!-- <label for="">Guest Id</label>
                    <input type="text" name="guestId" id="" class="form-control" placeholder="">
                    
                    <label for="">Guest Code</label>
                    <input type="text" name="guestCode" id="" class="form-control" placeholder="">
                    
                    <label for="">Reservation Ref</label>
                    <input type="text" name="reservationRef" id="" class="form-control" placeholder=""> -->
                </div>
            </div>
            <button type="submit" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#myModal" class="btn btn-primary"
                style="width:200px; margin-top:20px;margin-left: 17px;">Thêm</button> 
             
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="text-align:center;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="background: #f9fbfd">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-android-close"></span></button>
                            <div class="logo">
                                <img src="https://dashkit.goodthemes.co/assets/img/logo.svg" alt="">
                            </div>    
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <h5>Loading...</h5>
                        </div>
                    </div>
                    {{-- end --}}
                </div>
                <form>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
