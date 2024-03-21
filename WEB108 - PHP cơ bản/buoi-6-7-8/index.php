<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    //inlude là chèn thêm file ngoài vào, nếu không tồn tại file đấy, thì báo lỗi nhưng chạy chương trình
    include "database.php";
    //include "headerr.php";
    //require là chèn thêm file ngoài vào, nếu không tồn tại file đấy, thì báo lỗi và ngắt chương trình
    //nếu thêm _once vào, thì sẽ chỉ xuất hiện 1 lần
    require_once "header.php";
    include "footer.php";
    //phương thức _GET sẽ lấy dữ liệu từ sau dấu ? của URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        include $page.'.php';
    }
    
?>
    <a href="index.php">Trang chủ</a>
    <!-- Khi click vào thì sẽ tải lại trang hiện tại, và truyền tham số 'page=connectdb' vào URL -->
    <a href="?page=connectdb">Danh sách sản phẩm</a>
<h1>Đây là trang chủ</h1>
    

</body>
</html>