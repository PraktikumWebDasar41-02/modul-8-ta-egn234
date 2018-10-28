<?php
	include('koneksi.php');

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$cek = true;

		$result = mysqli_query($db, "SELECT usernm, pass FROM akun WHERE usernm = '$username';");
		$row = mysqli_fetch_assoc($result);


		if (empty($row)) {
			echo "username salah<br>";
			$cek = false;
		}
			
		if ($row['pass'] != $password) {
			echo "Password Salah<br>";
			$cek = false;
		}

		if ($cek) {
			session_start();
			$_SESSION['usernm'] = $username;
			header('Location: dashboard.php');
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LOGIN</h1>
	<form action="index.php" method="POST">
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
		<button type="submit" name="login">LOG IN</button><br>
	</form>

	<br>New? <a href="register.php">click here</a> to create new account.
</body>
</html>