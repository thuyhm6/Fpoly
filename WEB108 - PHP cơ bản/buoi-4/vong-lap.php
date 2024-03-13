<?php 
     $a = 1;
     //In ra bảng cửu chương với vòng lặp while
    /*  while ($a < 10) {
         echo " 2 x $a = ".($a*2)." <br/>";
         $a++;
     } */
     //Vong lặp do while
     /* do {
        echo "biến a là $a <br/>";
        $a++;
     } while ($a < 10); */

     //Vòng lặp for
     /* for ($i = 0; $i < 10; $i++) {
        echo "Biến $i <br/>";
     };
*/
     /* for ($e = 1; $e <= 10; $e++):
        
         if ($e === 5) {
            echo "Đây là $e<br/>";
            continue;
         }
         echo "4 x $e = ".(4*$e)." <br/>";
     endfor;  */

     //Vòng lặp foreach

     /* $arr = array(1,2,3,4,5);
     print_r($arr);
     echo "$arr[3]";
     for ($i = 0; $i < count($arr); $i++):
        echo "$arr[$i] <br/>";
     endfor;

     $assArr = [
        'ten' => 'Thủy',
        'tuoi' => 17,
        'dia_chi' => 'Thanh Hóa'
     ]; */
     //Cách lấy ra value bằng foreach
     /* foreach ($assArr as $val) {
        echo "$val <br/>";
     } */

     //Cách lấy ra cả key và value bằng foreach
     /* foreach ($assArr as $k => $val):
        echo "$k = $val <br/>";
     endforeach; */
     lap:
     if ($a < 10) {
        echo " 2 x $a = ".($a*2)." <br/>";
        $a++;
        goto lap;
     }
?>