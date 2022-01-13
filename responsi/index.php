<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="cek_login.php" method="POST" class="login-email" >
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">lOGIN</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<img src='captcha.php'/></td> : <td><input name='captcha_code' placeholder="Masukkan Captcha" type='text' required style="font-size: 1rem; border-radius: 30px; padding: 15px 20px; border: 2px solid #e7e7e7;"></td></tr>
			<br>
			<br>
			<div class="input-group">
				<button name="submit" class="button">Login</button>
			</div>
		</form>
	</div>
</body>
</html>