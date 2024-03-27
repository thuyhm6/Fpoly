<?php 
    include "database.php";
    //1. Câu lệnh SQL
    $sql = "SELECT * FROM SAN_PHAM;";
    //2. Thực thi câu lệnh SQL
    $result = mysqli_query($conn, $sql);
    //3. Chuyển kết quả sau khi thực thi thành dạng mảng
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($products);

    // foreach ($products as $product) {
    //     echo $product['ma_san_pham']."<br/>";
    // }
?>

<?php foreach($products as $product):?>
    <p>Mã sản phẩm: <?= $product['ma_san_pham']?></p>
<?php endforeach;?>

<button><a href="?page=addProduct">Thêm sản phẩm</a></button>