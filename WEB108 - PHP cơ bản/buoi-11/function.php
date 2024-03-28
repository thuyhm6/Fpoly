<?php 
    $x = 5;
    function ham($a, $b){

        echo "Tổng 2 số là". $a+$b+$GLOBALS['x'] ."<br/>";
    };

    ham(3, 4);

    //Hàm có giá trị trả về
    function hamTraVe($a, $b) {
        return $a-$b;
    };

    echo hamTrave(b:5, a:3) ."<br/>";

    //Gọi hàm với nhiều đối số
    function HamNhieuDoiSo() {
        //print_r(func_get_args());
        foreach (func_get_args() as $arg) {
            echo "$arg, ";
        };
        echo func_get_arg(0). "<br/>";
        
        for ($i = 0; $i < func_num_args(); $i++) {
            echo func_get_arg($i) .", ";
        }

    };

    HamNhieuDoiSo(8,9,7,6,8,5);
    echo "<br/>";

    //Hàm với tham số bất định ...args
    function thamSoBatDinh($x, ...$args){
        foreach ($args as $a) {
            echo $a.", ";
        }
    }

    thamSoBatDinh(5,9,8,65544,5,66);
    
    //Hàm ẩn danh
    $anDanh = function ($mess)  use ($x){
        echo $mess . $x;
    };
    $anDanh('Hàm ẩn danh');

    //Arrow function
    $arrFunction = fn($a, $b) =>$a+$b;

    echo $arrFunction(5,6);


    
?>