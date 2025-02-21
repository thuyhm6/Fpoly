<?php 
    $error = $_SESSION['error'] ?? [];
    unset($_SESSION['error']);
    //var_dump($error);
?>
<div class="login-main">
<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form method="POST" action="signUp">
					<h1>Create Account</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your email for registration</span>
					<input class="form-control" type="text" name="user_name" placeholder="Name" />
                    <?php if (!empty($error['required'])):?>
                        <span class="error"><?= implode(",", $error['required']) ?></span>
                    <?php endif;?>
					<input class="form-control" type="email" name="email" placeholder="Email" />
					<input class="form-control" type="password" name="password" placeholder="Password" />
                    <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" />
                    <a href="#">Forgot your password?</a>
					<button class="login-btn">Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form method="POST" action="signIn">
					<h1>Sign in</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your account</span>
					<input class="form-control" type="email" placeholder="Email" />
					<input class="form-control" type="password" placeholder="Password" />
					<a href="#">Forgot your password?</a>
					<button class="login-btn">Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>
							To keep connected with us please login with your personal info
						</p>
						<button class="login-btn ghost"id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello, Friend!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="login-btn ghost"id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			const signUpButton = document.getElementById('signUp');
			const signInButton = document.getElementById('signIn');
			const container = document.getElementById('container');
            const error = document.querySelector('.error');
            //Xuử lý khi có lỗi lúc đăng ký
            if (error) {
                container.classList.add('right-panel-active');
            }
			signUpButton.addEventListener('click', () => {
				container.classList.add('right-panel-active');
			});

			signInButton.addEventListener('click', () => {
				container.classList.remove('right-panel-active');
			});
		</script>
</div>