<div class="header">
    <span>siêu thị trực tuyến</span>
</div>
<?php if(!isset($_SESSION['admin'])): ?>
    <nav class="main-menu">
        <ul class="menu-list">
            <li class="menu-item"><a href="<?= BASE_URL.'/' ?>" class="item-link">Trang chủ</a></li>
            <li class="menu-item"><a href="" class="item-link">Giới thiệu</a></li>
            <li class="menu-item"><a href="" class="item-link">Liên hệ</a></li>
            <li class="menu-item"><a href="" class="item-link">Góp ý</a></li>
            <li class="menu-item"><a href="" class="item-link">Hỏi đáp</a></li>
        </ul>
    </nav>
<?php else: ?>
    <nav class="main-menu">
        <ul class="menu-list">
            <li class="menu-item"><a href="" class="item-link">Trang chủ</a></li>
            <li class="menu-item"><a href="<?= BASE_URL.'/admin/category' ?>" class="item-link">Loại hàng</a></li>
            <li class="menu-item"><a href="" class="item-link">Sản phẩm</a></li>
            <li class="menu-item"><a href="" class="item-link">Khách hàng</a></li>
            <li class="menu-item"><a href="" class="item-link">Bình luận</a></li>
            <li class="menu-item"><a href="" class="item-link">Thống kê</a></li>
        </ul>
    </nav>
<?php endif; ?>