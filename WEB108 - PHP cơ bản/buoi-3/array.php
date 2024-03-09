<?php 
    //Khai báo mảng
    $array = array(1,2,3);
    $array2 = [4,5,6];
    print_r($array);
    echo "<br/>";
    var_dump($array2);
    echo "<br/>";

    //Hiển thị 1 phần tử trong mảng
    echo $array[0];
    echo "<br/>";

    //Thêm phần tử vào mảng
    //Thêm vào cuối mảng
    $array[] = 9;
    array_push($array, 12);
    //Thêm vào đầu mảng
    array_unshift($array, 10);
    //Thêm vào vị trí chỉ định
    array_splice($array, 1, 0, 11);
    print_r($array);
    echo "<br/>";

    //Xóa phần tử của mảng
    //Xóa ở đầu mảng
    //array_shift($array2);
    //Xóa ở cuối mảng
    //array_pop($array2);
    //Xóa ở vị trí chỉ định
    array_splice($array2, 1, 21645);
    print_r($array2);
    echo "<br/>";

    //Mảng liên kết - associative array
    $assArray = [
        'ten' => 'Quyền',
        'tuoi' => 18,
        'dia chi' => 'Thanh Hóa'
    ];

    echo strlen('thủy') ;
    echo strlen('thuy'). "<br/>";

    print_r($assArray);
    echo $assArray['tuoi']. "<br/>";

    //Mảng kết hợp
    $assArray2  = array (
        1,
        'ten' => 'iPhone',
        2,
        4 => 5
    );
    print_r($assArray2);
    echo "<br/>";

    //Mảng nhiều chiều
    $mulArray = array (
        [1,2,3],
        [
            4,
            'nam' => 5,
            'sau' => 6,
            'bay' => 7
        ],
        [8,9,10]
        );

    print_r($mulArray);
    echo '<br/>';
    echo $mulArray[2][0].'<br/>';

    //Hằng số
    //Khai báo hằng, có 2 cách. 1 là dùng const, 2 là dùng define
    $a = 25;
    //const pi = 3.14;
    define("pi",3.14);

    

    //pi = 3.15;

    echo pi ."<br/>";
    echo !defined(pi);;
?>