<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="gambar/logo3.png">
	<link rel="stylesheet" href="css/all.css">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		body {
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: flex-start;
			background: url(gambar/hotel.jpg);
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			padding-top: 2px;
		}

		.welcome-text {
			color: white;
			font-size: 2.5em;
			font-weight: bold;
			margin-bottom: 40px;
			text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
			text-align: center;
		}

		.login {
			background: rgba(0, 0, 0, 0.95);
			padding: 2rem;
			border-radius: 15px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
			width: 90%;
			max-width: 400px;
			text-align: center;
		}

		.avatar {
			width: 80px;
			height: 80px;
			background: #6ac1c5;
			border-radius: 50%;
			margin: 0 auto 1rem;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.avatar i {
			font-size: 40px;
			color: white;
		}

		h2 {
			color: #fff;
			margin-bottom: 2rem;
			font-size: 2em;
		}

		.box-login {
			position: relative;
			margin-bottom: 1.5rem;
		}

		.box-login i {
			position: absolute;
			left: 15px;
			top: 50%;
			transform: translateY(-50%);
			color: #6ac1c5;
			font-size: 1.2em;
		}

		.box-login input {
			width: 100%;
			padding: 12px 40px 12px 40px;
			border: 2px solid #e6e6e6;
			border-radius: 25px;
			font-size: 16px;
			outline: none;
			transition: border-color 0.3s ease;
		}

		.box-login input:focus {
			border-color: #6ac1c5;
		}

		/* Tambahan untuk ikon mata */
		.box-login .toggle-password {
			position: absolute;
			right: 50px;
			top: 50%;
			transform: translateY(-50%);
			cursor: pointer;
			color: #6ac1c5;
			font-size: 1.2em;
		}

		.btn-login {
			width: 100%;
			padding: 12px;
			background: #6ac1c5;
			border: none;
			border-radius: 25px;
			color: white;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background 0.3s ease;
		}

		.btn-login:hover {
			background: #5ba7ab;
		}

		.bottom {
			margin-top: 1.5rem;
		}

		.bottom a {
			color: #6ac1c5;
			text-decoration: none;
			font-weight: 600;
			transition: color 0.3s ease;
		}

		.bottom a:hover {
			color: #5ba7ab;
		}

		@media (max-width: 480px) {
			.welcome-text {
				font-size: 1.8em;
			}

			.login {
				padding: 1.5rem;
				width: 95%;
			}

			.avatar {
				width: 60px;
				height: 60px;
			}

			.avatar i {
				font-size: 30px;
			}

			h2 {
				font-size: 1.5em;
			}

			.box-login input {
				padding: 10px 35px;
				font-size: 14px;
			}
		}
	</style>
</head>
<body>
	<div class="welcome-text">Welcome to Dream Hotel</div>

	<div class="login">
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>
		<h2>Login</h2>
		<form action="loginproses.php" method="post">
			<div class="box-login">
				<i class="fas fa-envelope"></i>
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="box-login">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="password" id="password" required>
				<span class="toggle-password" onclick="togglePassword()">
					<i class="fas fa-eye" id="eye-icon"></i>
				</span>
			</div>
			<button type="submit" class="btn-login">Login</button>
			<div class="bottom">
				<a href="register.php">Register</a>
			</div>
		</form>
	</div>

	<!-- JavaScript untuk toggle password -->
	<script>
		function togglePassword() {
			const passwordInput = document.getElementById('password');
			const eyeIcon = document.getElementById('eye-icon');

			if (passwordInput.type === 'password') {
				passwordInput.type = 'text';
				eyeIcon.classList.remove('fa-eye');
				eyeIcon.classList.add('fa-eye-slash');
			} else {
				passwordInput.type = 'password';
				eyeIcon.classList.remove('fa-eye-slash');
				eyeIcon.classList.add('fa-eye');
			}
		}
	</script>
</body>
</html>
