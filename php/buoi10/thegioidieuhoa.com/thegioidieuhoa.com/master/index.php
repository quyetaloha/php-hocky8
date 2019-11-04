<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style_dieuhoa.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>















    <div class="container-fluid">
        <div id="header">
            <?php
            include 'header.php';
            ?>
        </div>
        <div class="main-content">
            <div class="row main">
                <div class="col-md-3 col-lg-3">
                <div class="mainbar">
                    <?php include 'sidebar.php'?>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="banner">
                        <?php include 'slider.php' ?>
                    </div>
                    <div class="intro">
                        <p class="hotline">Hotline: 0945633233 – 0916499299</p>
                        <p class="km">Khuyến mại công lắp đặt máy 9000 – 12000BTU</p>
                        <p class="lich">Lịch làm việc tất cả các ngày trong tuần cả thứ 7 & CN </p> 
                    </div>
                    <div class="product">
                        <?php include 'product.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-main">
            <?php include 'bottom-foot.php' ?>
        </div>
        <div class="footer">
            <div class="textwidget"><p>© 2016 CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI &amp; XÂY DỰNG ĐẠI DƯƠNG<br>
            VPGD: 1267 Giải Phóng - Hoàng Mai - Hà Nội<br>
            Kho hàng 1: Kho Mỹ Đình - Nam Từ Liêm - Hà Nội<br>
            Kho hàng 2: Cảng Hà Nội - Vĩnh Tuy - HBT - Hà Nội<br>
            Điện thoại liên hệ:  024 3905 3888 - 09456 33233 - 09164 99299 - 0966 714 699<br>
            E-mail: dieuhoadaiduong@gmail.com</p>
            </div>
        </div>
        <div class="site-footer">
        <p id="credit-link"><a rel="nofollow" target="_blank" href="http://phanphoidieuhoa.com.vn/" title="phan phoi dieu hoa"><strong>Phân Phối Điều Hòa</strong></a></p>
        </div>
    </div>
</body>
</html>
