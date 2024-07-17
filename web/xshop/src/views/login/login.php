<div class="col xl-9">
        <h6 class="login-title">Đăng nhập</h6>

        <form class="login-form" action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên đăng nhập" name="user_id">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
            </div>
            
            <?php 
                if (isset($loginFailMess)) {
                    echo "<p>$loginFailMess</p>";
                }
            ?>
            <div class="remember-me">
                <input type="checkbox" class="remember-id" id="remember-chek">
                <label for="remember-chek">Ghi nhớ tài khoản?</label>
            </div>
            <a href="" class="forgot-pass">Quên mật khẩu</a>
            <button class="btn-login">Đăng nhập</button>
            
        </form>
    </div>