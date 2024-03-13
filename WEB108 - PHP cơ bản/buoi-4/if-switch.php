<?php 
    $a = 1;

    //Rẽ nhánh với if else
    /*  if ( $a > 7) {
        echo '$a lớn hơn 7';
     } else if ( $a > 6) {
        echo '$a lớn hơn 6';
     } else {
        echo "Khác";
     } */

     if ( $a > 7):
        echo '$a lớn hơn 7';
      elseif ( $a > 6):
        echo '$a lớn hơn 6';
      else:
        echo "Khác";
     endif;
     

     //Rẽ nhánh với switch case

     /* switch ($a) {
        case 1:
            echo "a bằng 1";
            break;
        case 2:
            echo "a bằng 2";
            break;
        default:
            echo "a không bằng 1 hoặc 2";
     } */

     switch ($a):
        case '1':
            echo "a bằng 1";
            break;
        case 2:
            echo "a bằng 2";
            break;
        default:
            echo "a không bằng 1 hoặc 2";
        endswitch;

    //$b = ($a > 3) ? 4 : 2;
    if ($a > 3) {
        $b = 4;
    } else {
        $b  = 2;
    }

    //dùng match() sẽ giống với switch case.
    //Điểm khác: 1. Có trả về giá trị. 2. So sánh đến kiểu dữ liệu (===)
    $c = match ($a) {
        '1' => "a bằng 1",
        2 => "a bằng 2",
        default => " a không bằng 1 hoặc 2;"
    };

    echo "<br/>$c";

?>