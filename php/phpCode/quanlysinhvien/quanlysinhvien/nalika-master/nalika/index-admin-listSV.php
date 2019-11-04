
<?php
    require_once ("../phpSource/databaseConnection.php");
    header("Content-type: text/html; charset=utf-8");
    mysqli_set_charset($conn, 'UTF8');
    session_start();
    if(!isset($_SESSION["checklogin"]))
        header('Location:login.html');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="html/js/vendor/modernizr-2.8.3.min.js"></script>


    <style>

        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 300;
            line-height: 1.42em;
            color:#A7A1AE;
            background-color:#1F2739;
        }

        h1 {
            font-size:3em;
            font-weight: 300;
            line-height:1em;
            text-align: center;
            color: #4DC3FA;
        }

        h2 {
            font-size:1em;
            font-weight: 300;
            text-align: center;
            display: block;
            line-height:1em;
            padding-bottom: 2em;
            color: #FB667A;
        }

        h2 a {
            font-weight: 700;
            text-transform: uppercase;
            color: #FB667A;
            text-decoration: none;
        }

        .blue { color: #185875; }
        .yellow { color: #FFF842; }

        .containerr th h1 {
            font-weight: bold;
            font-size: 1em;
            text-align: left;
            color: #185875;
        }

        .containerr td {
            font-weight: normal;
            font-size: 1em;
            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
            -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
        }

        .containerr {
            text-align: left;
            overflow: hidden;
            width: 80%;
            margin: 0 auto;
            display: table;
            padding: 0 0 8em 0;
        }

        .containerr td, .containerr th {
            padding-bottom: 2%;
            padding-top: 2%;
            padding-left:2%;
        }

        /* Background-color of the odd rows */
        .containerr tr:nth-child(odd) {
            background-color: #323C50;
        }

        /* Background-color of the even rows */
        .containerr tr:nth-child(even) {
            background-color: #2C3446;
        }

        .containerr th {
            background-color: #1F2739;
        }

        .containerr td:first-child { color: #FB667A; }

        .containerr tr:hover {
            background-color: #464A52;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
        }

        .containerr td:hover {
            background-color: #FFF842;
            color: #403E10;
            font-weight: bold;

            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);

            transition-delay: 0s;
            transition-duration: 0.4s;
            transition-property: all;
            transition-timing-function: line;
        }

        @media (max-width: 800px) {
            .containerr td:nth-child(4),
            .containerr th:nth-child(4) { display: none; }
        }



    </style>


</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                 
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="vietnam.png" alt="" /></a>
                    <h2><?php echo $_SESSION["username"];?></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Quản lý sinh viên ứng tuyển</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index-admin-listSV.php"><span class="mini-sub-pro">Danh sách sinh viên</span></a></li>
                                <li><a title="Dashboard v.2" href="themSinhVien.php"><span class="mini-sub-pro">Thêm sinh viên</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="html/mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Tìm kiếm sinh viên</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="timkiem.php"><span class="mini-sub-pro">Tìm theo mã</span></a></li>
                                <li><a title="View Mail" href="timkiem-theoten.php"><span class="mini-sub-pro">Tìm theo tên</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="html/mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Quản lý tuyển dụng</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="list-vitri-tuyendung.php"><span class="mini-sub-pro">Các vị trí tuyển dụng</span></a></li>
                                <li><a title="Data Maps" href="index-admin-list-trungtuyen.php"><span class="mini-sub-pro">Xem danh sách trúng tuyển</span></a></li>
                                <li><a title="Pdf Viewer" href="them-vitri.php"><span class="mini-sub-pro">Thêm vị trí tuyển dụng</span></a></li>


                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="html/mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Mail</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="mail.php"><span class="mini-sub-pro">Soạn mail</span></a></li>


                            </ul>
                        </li>




                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i></a>

                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i></a>

                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user"></i>
                                                        <span class="admin-name"><?php echo $_SESSION["username"];?> </span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="index-admin-xeminfor.php"><span class="icon nalika-home author-log-ic"></span> xem thông tin</a>
                                                        </li>
                                                        <li><a href="index-admin-editInfor.php"><span class="icon nalika-user author-log-ic"></span> Sửa thông tin</a>
                                                        </li>
                                                        <li><a href="logOutControl-admin.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="html/index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="html/product-list.html">Product List</a></li>
                                                <li><a href="html/product-edit.html">Product Edit</a></li>
                                                <li><a href="html/product-detail.html">Product Detail</a></li>
                                                <li><a href="html/product-cart.html">Product Cart</a></li>
                                                <li><a href="html/product-payment.html">Product Payment</a></li>
                                                <li><a href="html/analytics.html">Analytics</a></li>
                                                <li><a href="html/widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="html/mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="html/mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="html/mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="html/file-manager.html">File Manager</a></li>
                                                <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="html/blog.html">Blog</a></li>
                                                <li><a href="html/blog-details.html">Blog Details</a></li>
                                                <li><a href="html/404.html">404 Page</a></li>
                                                <li><a href="html/500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="html/google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="html/data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="html/pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="html/x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="html/code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="html/tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="html/preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="html/images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="html/bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="html/line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="html/area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="html/rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="html/c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="html/sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="html/peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="html/static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="html/data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="html/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="html/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="html/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="html/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="html/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="html/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="html/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="html/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="html/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="html/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="html/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="html/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="html/register.html">Register</a>
                                                </li>
                                                <li><a href="html/lock.html">Lock</a>
                                                </li>
                                                <li><a href="html/password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
            </div>
        </div>
        <div class="section-admin container-fluid" style="margin-top: 100px">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <h1 style="color:blue;font-weight: bold">công nghệ vũ trụ NASA</h1>
                    </div>
                </div>
            </div>
        </div>



        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row" style="margin-left: 20px;width: 1200px">
                    <?php
                        require_once ("../bang/danhSachSinhVien.php");
                    ?>
                </div>
            </div>
        </div>
        <div class="traffic-analysis-area">
                </div>
        <div class="product-new-list-area">
        </div>
        <div class="product-sales-area mg-tb-30">

        </div>
        <div class="author-area-pro">

        </div>
        <div class="calender-area mg-tb-30">

        </div>
        <div class="footer-copyright-area">
        </div>
        <div><h4 style="margin-left: 330px;margin-top: 20px;">Bản quyền thuộc về công ty công nghệ vũ trụ NASA</h4></div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="html/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="html/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="html/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="html/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="html/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="html/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="html/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="html/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="html/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="html/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="html/js/metisMenu/metisMenu.min.js"></script>
    <script src="html/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="html/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="html/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="html/js/calendar/moment.min.js"></script>
    <script src="html/js/calendar/fullcalendar.min.js"></script>
    <script src="html/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="html/js/flot/jquery.flot.js"></script>
    <script src="html/js/flot/jquery.flot.resize.js"></script>
    <script src="html/js/flot/curvedLines.js"></script>
    <script src="html/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="html/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="html/js/main.js"></script>
</body>

</html>
