<?php
	include('koneksi.php');

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password1 = $_POST['password1'];
		$email = $_POST['email'];
		$cek = true;
		$result = mysqli_query($db, "SELECT usernm FROM akun WHERE usernm = '$username'");
		$row = mysqli_fetch_array($result);

		if (count($row) > 0) {
			echo "Username sudah ada";
			$cek = false;
		}

		if (empty($username)) {
			echo "Username tidak boleh kosong <br>";
			$cek = false;
		}

		if (is_numeric($username)) {
			echo "Username tidak boleh berisikan angka<br>";
			$cek = false;
		}

		if (strlen($username) > 20) {
			echo "Username tidak boleh lebih dari 20 karakter<br>";
			$cek = false;
		}

		if (md5($password) != md5($password1)) {
			echo "Password tidak cocok<br>";
			$cek = false;
		}

		if (strlen($password) < 6) {
			echo "Password harus lebih dari 6 angka<br>";
			$cek = false;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "email tidak valid<br>";
			$cek = false;
		}

		if ($cek == true) {
			$cekpass = md5($password);
			$inputan = mysqli_query($db, "INSERT INTO akun(usernm, pass, email) VALUES('$username', '$cekpass', '$email');");

			if (!$inputan) {
				echo "register gagal";
			}else{
				header('Location: index.php');
			}

		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>REGISTER</h1>
	<form method="POST" action="register.php">
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
		Re-type Password : <input type="password" name="password1"><br>
		E-mail : <input type="text" name="email"><br>
		<button type="submit" name="register">SIGN IN</button>
	</form>
</body>
</html>