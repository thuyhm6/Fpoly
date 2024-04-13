<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        //$_SESSION['cart'] = 0;
        if (isset($_POST['addCart'])){
            $_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] + 1 : 1;
        }
        if (isset($_POST['logout'])) {
            setcookie("userName","", time() -10);
            session_destroy();
            header("location: login.php");
        }

        //Lấy toàn bộ thông tin sản phẩm
        include "database.php";
        $sql_products = "SELECT * FROM SAN_PHAM";
        $result_products = mysqli_query($conn, $sql_products);
        if ($result_products == false) {
            echo mysqli_error($conn);
        } else {
            $products = mysqli_fetch_all($result_products, MYSQLI_ASSOC);
        }

        //Tìm kiếm sản phẩm
        $searchSP = "";
        if (isset($_POST['search'])) {
            //Thêm % là để phục vụ cho từ khóa like(tìm kiếm tương đối), tìm kiếm tuyệt đối thì dùng dấu =
            $searchSP = "%".$_POST['searchSP']."%";
            $sql_search = "SELECT * FROM SAN_PHAM WHERE MA_SAN_PHAM like ? OR TEN_SAN_PHAM like ?";
            $stmt = mysqli_prepare($conn, $sql_search);
            if ($stmt == false) {
                echo mysqli_error($conn);
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $searchSP,$searchSP);
                if (mysqli_stmt_execute($stmt)) {
                    $result_products = mysqli_stmt_get_result($stmt);
                    $products = mysqli_fetch_all($result_products, MYSQLI_ASSOC);
                }
            }
        }

    ?>
    <?php 
        if (isset($_COOKIE['userName'])): 
            echo "Xin chào: ".$_COOKIE['userName'];         
    ?>
    <form action="" method="post">
        <button name="logout">Đăng xuất</button>
    </form>
    <?php else: ?>
        <a href="login.php">Đăng nhập</a>
        
    <?php endif;?>
    <form action="" method="post">
        <button name="addCart">Thêm giỏ hàng</button>
    </form>
    <p>Giỏ hang: <?php if (isset($_SESSION['cart'])) {echo $_SESSION['cart'];} else echo 0 ?></p>
    <form action="" method="post">
        <input type="text" name="searchSP" placeholder="Nhập tên hoặc mã sản phẩm" value="<?= str_replace("%","",$searchSP) ?>">
        <button name="search">Tìm kiếm</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['ma_san_pham'] ?></td>
                    <td><?= $product['ten_san_pham'] ?></td>
                    <td><?= $product['gia'] ?></td>
                    <td><?= $product['so_luong'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
