<?php
	include('koneksi.php');
	session_start();
	$username = $_SESSION['usernm'];

	$result = mysqli_query($db, 'SELECT * FROM datauser');
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DASHBOARD</h1>
	<!-- <a href="input.php">INPUT MAHASISWA</a><br><br> -->
	<form method="POST" action="dashboard.php">
	<table border="1">
		<tr align="center">
			<td>username</td>
			<td>email</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>kelas</td>
			<td>hobi</td>
			<td colspan="2">Aksi</td>
		</tr>
		<?php
			foreach ($result as $key) {
				echo "<tr><td>".$key['usernm'].'</td>';
				echo "<td>".$key['email'].'</td>';
				echo "<td>".$key['first_name']." ".$key['last_name']."</td>";
				echo "<td>".$key['nim'].'</td>';
				echo "<td>".$key['kelas'].'</td>';
				echo "<td>".$key['hobi'].'</td>';
				echo "<td><a href='delete.php?nim=".$key['nim']."'>HAPUS</a></td>";
				echo "<td><a href='edit.php?nim2=".$key['nim']."'>EDIT</a></td><tr>";
			}
		?>
	</table>
	<br>
	<!-- <input type="text" name="cari2" placeholder="NIM"><button type="submit" name="cari">CARI NIM</button> -->
	</form>
</body>
</html>