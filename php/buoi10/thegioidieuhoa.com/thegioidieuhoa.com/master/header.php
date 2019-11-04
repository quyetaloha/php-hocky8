<?php 
    $servername="localhost";
    $database="bandieuhoa";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn) {
        die("Connection fail!" . mysqli_connect_error());
    }
    mysqli_set_charset($conn,"utf8");
    echo "Connection succesfully";
    $result=$conn->query("select * from menumain");
?>





<div class="top-bar">
    <a href="">
        <img src="https://thegioidieuhoa.com/wp-content/uploads/2018/03/banner1.jpg" alt="">
    </a>
</div>
<div class="navbar">
    <ul class="main-menu">
        <li><i class="fas fa-home"></i><a href="">Trang chủ</a></li>
        <li><a href="">Điều hòa dân dụng</a>
            <ul class="childMenu">



                <?php 
                   if ($result->num_rows > 0) 
                        {
                            // Sử dụng vòng lặp while để lặp kết quả
                            while($row = $result->fetch_assoc()) {
                                echo "<li><a href='".$row['Url']."'>". $row['Ten_menu']."</a></li>";
                            }
                        } 
                        ?>






                





            </ul>
        </li>
        <li><a href="">Điều hòa tủ đứng</a>
            <ul class="childMenu">
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG DAIKIN</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG LG</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG FUNIKI</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG NAGAKAWA</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG MIDEA</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG PANASONIC</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG SUMIKURA</a></li>
                <li><a href="">ĐIỀU HÒA TỦ ĐỨNG GREE</a></li>
                
            </ul>
        </li>
        <li><a href="">Điều hòa âm trần</a>
        <ul class="childMenu">
                <li><a href="">ĐIỀU HÒA ÂM TRẦN DAIKIN</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN LG</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN NAGAKAWA</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN PANASONIC</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN SUMIKURA</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN MIDEA</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN CASPER</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN MITSUBISHI HEAVY</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN GENERAL</a></li>
                <li><a href="">ĐIỀU HÒA ÂM TRẦN FUJITSU</a></li>
                
            </ul>
        </li>
        <li><a href="">Điều hòa nối ống gió</a>
            <ul class="childMenu">
                <li><a href="">ĐIỀU HÒA NỐI ỐNG GIÓ DAIKIN</a></li>
                <li><a href="">ĐIỀU HÒA NỐI ỐNG GIÓ FUJITSU</a></li>
                <li><a href="">ĐIỀU HÒA NỐI ỐNG GIÓ GENERAL</a></li>
                
            </ul>
        </li>
        <li><a href="">Điều hòa multi</a>
        <ul class="childMenu">
                <li><a href="">ĐIỀU HÒA MULTI DAIKIN</a></li>
                <li><a href="">ĐIỀU HÒA MULTI LG</a></li>
                <li><a href="">ĐIỀU HÒA MULTI FUJITSU</a></li>
                <li><a href="">ĐIỀU HÒA MULTI MITSUBISHI HEAVY</a></li>

                
            </ul>
        </li>
    </ul>
</div>
