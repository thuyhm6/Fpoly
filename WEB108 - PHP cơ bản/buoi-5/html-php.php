<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hôm nay chúng ta học PHP</h1>
    

    <?php 
        $ten = 'Hà Minh Thủy';
        $arr = [5,6,7,8,9];
       
    ?>
    <?php echo "<form action=''>
                    <input type='text' placeholder='Mời bạn nhập tên'>
                    <button>Xác nhận</button>
                </form>";
    ?>

    <?php 
        echo "Tôi tên là $ten <br/>";
        // print_r($arr);
        for ($i = 0; $i < count($arr); $i++) {
            echo "<h".($i+1).">Đây là giá trị thứ $arr[$i]</h".($i+1).">";
        }

    ?>

    <?php for ($i = 0; $i < count($arr); $i++): 
        echo "<p>Hôm nay trời nồm</p>";
    endfor;?> 

    <?php for ($i = 0; $i < count($arr); $i++): ?>
        <p>Hôm nay trời nồm</p>
        <p>Mà lại còn mưa</p>
    <?php endfor;?>  
    

</body>
</html>