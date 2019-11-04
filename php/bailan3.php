<?php
    //bai 1
    function maxArr($arr){
        $a = $arr[0];
        foreach($arr as $v){
            if($v > $a) $a = $v;
        }
            return $a;
    }

    function minArr($arr){
        $a = $arr[0];
        foreach($arr as $v){
            if($v < $a) $a = $v;
        }
            return $a;
    }

    //bai 2
    function tang($arr){
        for($i = 0; $i< count($arr); $i++){
            for($j = $i+1 ; $j < count($arr) ; $j++){
                if($arr[$i] > $arr[$j]){
                    $a = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $a;
                }
            }
        }
        return $arr;
    }

    function giam($arr){
        for($i = 0; $i< count($arr); $i++){
            for($j = $i+1 ; $j < count($arr) ; $j++){
                if($arr[$i] < $arr[$j]){
                    $a = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $a;
                }
            }
        }
        return $arr;
    }
    //bai 4
    function search($data, $arr){
        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] == $data){
                return $i;
            }
        }
    }

    // bai 5
    function update($x, $newX, $arr){
        for($i = 0; $i< count($arr); $i++){
            if($x == $arr[$i]){
                $arr[$i] = $newX;
                return $arr;
            }
        }
    }

    //bai 6
    //xoa
    
    
    function deleteArr2($arr, $x){
        $arr2 = array();
        $dem=0;
        for($i = 0; $i < count($arr) ;$i++){
            if($arr[$i] != $x){
                $arr2[$dem] = $arr[$i];
                $dem++;
            }
        }
        return $arr2;
    }

    //mang 2 chieu
    //xuat mang
    function xuat($arr, $n, $m){
        for($i = 0; $i < $n; $i ++){
            for($j = 0 ; $j < $m; $j ++){
                
            }
        }
    }

    $arr = array(1, 2, -5, 3, -5000, -5);
    echo "max: ". maxArr($arr)."<br>";
    echo "min: " . minArr($arr)."<br>";
    $arr1=tang($arr);
    echo "mang sau khi sap xep tang: <br/>";
   for($i=0;$i<count($arr1);$i++) {
    echo $arr1[$i]."  ";
   }
   $arr2=giam($arr);
    echo "<br/>mang sau khi sap xep giam: <br/>";
   for($i=0;$i<count($arr2);$i++) {
    echo $arr2[$i]."  ";
   }
    echo search(0, $arr);
    echo "<br>";

    $temp =  $arr;
    // var_dump(deleteArr($arr, 2));
    // echo "<br>";
    // // var_dump(update(-5, 1000, $arr));
    // var_dump(deleteArr2($temp, 2)); 
?>