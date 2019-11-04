<?php
// $arrs=array('first'=>1,'second'=>2,'third'=>3);
// echo $arrs('first');
// $a=array("lan","bao","duong");
// // $a[]="tuan";
// // var_dump($a);
// foreach ($a as $name) {
// 	echo $name;
// }

// $mang=array("msv"=>"b15dccn446","ho ten"=>"hoang xuan quyet");
// foreach($mang as $key=>$value)
//  echo $key.' '. $value;
// $mang['que quan']='ha nam';
// foreach ($mang as $key => $value) {
// 	echo $key.$value;
// }

$arr=array(133,175,223,427,345,945,2342,134,546,134,756,12432,7657,243,464,2342,567,341,876);
function xuat($arr){
	foreach ($arr as $value) {
		echo $value.' ';
	}
}

function thaythe($x, $newX, $arr){
        for($i = 0; $i< count($arr); $i++){
            if($x == $arr[$i]){
                $arr[$i] = $newX;
                
            }
        }
        return $arr;
    }

function xoa($x, $arr){
        foreach ($arr as $key => $value) {
         	if($value==$x) unset($arr[$key]);
         } 
        return $arr;
 }

function tang($arr){
	sort($arr);
	return $arr;
}
function giam($arr){
	rsort($arr);
	return $arr;
}
echo 'thong tin mang:';xuat($arr);
echo '</br>so lon nhat: '.max($arr);
echo '</br>so nho nhat: '.min($arr);
echo '</br>sap xep tang dan   ';xuat(tang($arr));
echo '</br>sap xep giam dan   ';xuat(giam($arr));
echo '</br>cap nhat gia tri cho phan tu x=175 thay bang 176';;

echo '<br/>mang sau khi thay the:  ';xuat(thaythe(175,176,$arr));

echo '</br>xoa phan tu x=175';

echo '<br/>mang sau khi xoa: ';xuat(xoa(175,$arr));
?>