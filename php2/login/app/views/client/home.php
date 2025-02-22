<h1>Chào mừng đến với MVC Project</h1>
<?php if(isset($_SESSION['user_id'])): ?>
    <h2>Xin chào <?= $_SESSION['user_name'] ?></h2>
    <a href="<?= BASE_URL."/logout" ?>" class="btn btn-danger">Đăng xuất</a>
    <p>Bạn có thể xem thông tin sản phẩm tại <a href="./admin/product/list">Product</a></p>
<?php else:?>
    <p>Bạn chưa đăng nhập. Vui lòng truy cập <a href="./login">Đăng nhập</a></p>
<?php endif;?>
