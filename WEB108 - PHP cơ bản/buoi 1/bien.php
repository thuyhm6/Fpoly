<?php 
    //Khai báo biến
    //Đối với chuỗi ký tự, thì dấu nháy đơn' và dấu nháy kép" khác nhau ở chỗ: trong dấu nháy kép thì có thể thêm các ký tự đặc biệt bên trong, hoặc thêm biến vào bên trong
    $message = "I'm ok";
    $message2 = 'Thủy cũng là tôi';
    $tuoi = 03216463531;
    $ds = false;

    //hiển thị kêt quả dùng từ khóa echo.
    echo $message;
    //nếu là true thì in ra màn hình là 1, còn false thì không in ra.
    echo $ds;
    //thêm thẻ br để xuống dòng. DÙng dấu chấm (.) để nối chuỗi
    //echo $tuoi;
    echo '<br/>';
    //Dùng dấu . để ghép các biến
    echo $message .', tôi có tuổi là '. $tuoi;
    echo "giới thiệu: $message" .'<br/>';

    echo strlen($message) - 1;

    $message[strlen($message)] = 'i';

    echo strlen($message);

    
    
    $a = 8;
    $b = 3;
    $c = $a % $b;
    //Toán tử gán kết hợp
    $a = $a + 1; // $a += 1;
    //Toán tử lũy thừa - số mũ
    $a **= 2; // $a = $a * $a ($a mũ 2)
    echo 'kết quả: '.(int)( $a / $b) .'<br/>'; //Ép kiểu về int
    //Toán tử logic 
    // && - và, || - hoặc, ! - khác
    echo (!true);

    $x = 'product';

    $product = 'iPhone';
    echo $$x;
?>