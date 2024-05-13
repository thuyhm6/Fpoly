<?php 
    //mảng số
    $daySo = [1,3,4,5,7,8,9];
    echo "<pre>";
    print_r($daySo);
    //echo $daySo[1];
    for ($i = 0; $i < count($daySo); $i++) {
        echo $daySo[$i];
    }
    echo "<br/>";
    foreach ($daySo as $ds=>$val) {
        echo $ds. "->".$val."<br/>";
    }
    //Mảng liên kết
    $xe1 = [
        'ten_xe' => 'Exciter',
        'toc_do' => 150,
        'muc_dich' => 'Trộm chó'
    ];
    $xe2 = [
        'ten_xe' => 'Wave',
        'toc_do' => 90,
        'muc_dich' => 'Chạy Grab'
    ];
    $xe3 = [
        'ten_xe' => 'SH',
        'toc_do' => 190,
        'muc_dich' => 'Tán gái'
    ];


    $xeMay[] = $xe1;
    $xeMay[] = $xe2;
    $xeMay[] = $xe3;
    $xeMay[] = [
        'ten_xe' => 'Jupiter',
        'toc_do' => 120,
        'muc_dich' => 'chở hàng'
    ];

    function themXe(){
        global $xeMay;
        $xeMay[] = [
            'ten_xe' => 'Future',
            'toc_do' => 160,
            'muc_dich' => 'Đua xe'
        ];
        //print_r($xeMay);
    }
    function themXe2 ($tenXe, $tocDo, $mucDich) {
        global $xeMay;
        $xeMay[] = [
            'ten_xe' => $tenXe,
            'toc_do' => $tocDo,
            'muc_dich' => $mucDich
        ];
        return "Hàm thêm xe 2 được gọi";
    }

    function suaXe ($tenXe, $tocDo, $mucDich, $index) {
        global $xeMay;
        $xeMay[$index] = [
            'ten_xe' => $tenXe,
            'toc_do' => $tocDo,
            'muc_dich' => $mucDich
        ];
        
    }

    themXe();
    echo themXe2('Dream', 50, 'Đi chơi');
    //suaXe('Dream', 50, 'Đi chơi',1);
    
    //unset($xeMay[4]);

    print_r($xeMay);
    //echo $xe['ten_xe'];
    // foreach ($xe as $xeMay) {
    //     echo $xeMay ."<br/>";
    // }
    foreach ($xeMay as $xm=>$val) {
        //echo $val['ten_xe'] ."<br/>";
        if ($val['ten_xe'] == 'Jupiter') {
            //unset($xeMay[$xm]); //Xóa phần tử của mảng
            suaXe('Dream', 50, 'Đi chơi',$xm); //Sửa mảng
        }
    }

    print_r($xeMay);
?>