<?php if(!isset($_SESSION['admin'])): ?>
<div class="col xl-3 lg-0 md-0">
                <!-- Đăng ký / Đăng nhập -->
    <div class="acount">
        <h6 class="title">Tài khoản</h6>
        <?php if(isset($_SESSION['user_name']) ): ?>
            <div class="account-info">
                <img src="<?= $_SESSION['image'] ?>" alt="" class="account-img">
                <span class="account-name"><?= $_SESSION['user_name'] ?></span>
            </div>
        <?php endif; ?>
        <div class="account-form">
            <?php if(empty($_SESSION['user_name']) ): ?>
            
                <a class="forgot-pass" href="<?= BASE_URL.'/login' ?>">Đăng nhập</a>
                <a href="" class="forgot-pass">Đăng ký thành viên</a>
            <?php else: ?>
                <a href="<?= BASE_URL.'/changeLogin' ?>" class="forgot-pass">Đổi mật khẩu</a>
                <a href="<?= BASE_URL.'/updateAccount' ?>" class="forgot-pass">Cập nhật tài khoản</a>
                <?php if($_SESSION['role'] == 'admin'): ?>
                    <a href="<?= BASE_URL.'/admin' ?>" class="forgot-pass">Quản trị website</a>
                <?php endif; ?>
                <a href="<?= BASE_URL.'/logout' ?>" class="forgot-pass">Đăng xuất</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Danh mục -->
        <div class="category">
        <h6 class="title">DANH MỤC</h6>
        <ul class="base-list">
            <li class="base-item"><a href="" class="base-link">Đồng hồ đeo tay</a></li>
            <li class="base-item"><a href="" class="base-link">Máy tính xách tay</a></li>
            <li class="base-item"><a href="" class="base-link">Máy ảnh</a></li>
            <li class="base-item"><a href="" class="base-link">Điện thoại</a></li>
            <li class="base-item"><a href="" class="base-link">Nước hoa</a></li>
            <li class="base-item"><a href="" class="base-link">Nữ trang</a></li>
        </ul>
        <div class="search-key form-group">
            <input type="text" class="search-key-input form-control" placeholder="Từ khóa tìm kiếm">
        </div>
        </div>

        <!-- Top 10 yêu thích -->
        <div class="top-ten">
        <h6 class="title">TOP 10 YÊU THÍCH</h6>
        <ul class="base-list">
            <li class="base-item"><a href="" class="base-link"><img src="" alt="">iPhone 15</a></li>
            <li class="base-item"><a href="" class="base-link"><img src="" alt="">iPhone 14</a></li>
            <li class="base-item"><a href="" class="base-link"><img src="" alt="">iPhone 13</a></li>
        </ul>
        </div>
</div>
<?php endif; ?>