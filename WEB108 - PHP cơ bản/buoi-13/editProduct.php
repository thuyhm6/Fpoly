<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function getProductInfo($conn, $maSP) {
            $serult_return = [];
            $sql  = "SELECT * FROM SAN_PHAM WHERE MA_SAN_PHAM = ?";
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt == false) {
                echo mysqli_error($conn);
            } else {
                mysqli_stmt_bind_param($stmt, "s", $maSP);
                //Thực thi câu lệnh SQL 
                if (mysqli_stmt_execute($stmt)) {
                    $result_product = mysqli_stmt_get_result($stmt);
                    return mysqli_fetch_array($result_product);
                }
            }
            return $serult_return;
        }

        function invalidProduct ($tenSP, $soLuong, $gia) {
            $errorMess = [];
            if ($tenSP == '' || $tenSP == null) {
                $errorMess[] = 'Tên sản phẩm không được trống';
            }
            if ($gia == '' || $gia == null) {
                $errorMess[] = 'Giá sản phẩm không được trống';
            }
            if ($soLuong == '' || $soLuong == null) {
                $errorMess[] = 'Số lượng sản phẩm không được trống';
            }
            return $errorMess;
        }
    ?>
    <?php 
        include "database.php";
        if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $maSP = $_GET['id'];
            //Gọi hàm getProductInfo;
            $product = getProductInfo($conn, $maSP);
        }

        if (isset($_POST['confirm'])) {
            
            //Xử lý số liệu trước khi đưa vào câu lệnh sql
            $tenSP = mysqli_escape_string($conn, $_POST['tenSP']);
            $soLuong = mysqli_escape_string($conn, $_POST['soLuong']);
            $gia = mysqli_escape_string($conn, $_POST['gia']);
            $maSP = mysqli_escape_string($conn, $_POST['maSP']);
            //Check invalid dữ liệu rỗng hay không
            $errorMes = invalidProduct($tenSP, $soLuong, $gia);

            if ($errorMes == '' || $errorMes == null) {
                $sql = "UPDATE SAN_PHAM SET TEN_SAN_PHAM = ?, SO_LUONG = ?, GIA = ? WHERE MA_SAN_PHAM = ?";
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt == false) {
                echo mysqli_error($conn);
            } else {
                mysqli_stmt_bind_param($stmt, "siis", $tenSP, $soLuong, $gia, $maSP);
                //echo $tenSP. "Số lượng:" .$soLuong. "Giá:". $gia. "mã sản phẩm:". $maSP;
                if (mysqli_stmt_execute($stmt)) {
                    header("location: product.php");
                } else {
                    echo mysqli_error($conn);
                }
            }
            }
        }
        

    ?>
    <form action="" method="post">
        <?php foreach($errorMes as $errorMe):?>
            <p><?= $errorMe ?></p>
        <?php endforeach?>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="tenSP" value="<?= $product['ten_san_pham'] ?>" required>
            <input type="hidden" name="maSP" value="<?= $product['ma_san_pham'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" name="soLuong" value="<?= $product['so_luong'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input type="text" name="gia" value="<?= $product['gia'] ?>">
        </div>
       <button name="confirm">Xác nhận sửa</button>
    </form>
</body>
</html>
