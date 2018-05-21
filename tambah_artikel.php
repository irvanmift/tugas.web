<?php
	session_start();
	if (!isset($_SESSION['username'])) {
   	 	//diarahkan ke form login
    	header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Artikel</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topmenu">
		<table align="left" class="tabeltopmenu">
			<tr>
				<td id="logo1" align="left" title="IrvanmiftArt Modern Design | Desainer Dan Developer Modern " width="100px">
					<img src="Logo.png" width="30" height="30" scr="Logo.png"/>
				</td>
				<td width="600px">
					<a href="index.php" class="menu">Beranda</a>
				</td>
				<td width="200px">
					<p>
						<?php
							$akun = $_SESSION['nama'];
							echo "Akun : ". $akun;
						?> 
					</p>
				</td>
				<td width="200px">
					<a href="logout.php" class="menu">Logout</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="topjudul">
		<p class="labeljudul">Posting Artikel Terbaru Anda</p>
	</div>

	<div class="halaman">
		<p class="labelhalaman">Halaman >> Tambah Artikel</p>
	</div>

	<div class="container">
		<div class="isi">
			<br>
			<p class="labeljudul">Artikel</p>
			<form class="tambahartikel" method="post" action="aksi_tambah_artikel.php">
					<p>Judul</p>
					<input type="text" name="judul" required="true">
					<p>Isi Artikel</p>
					<textarea cols="60" rows="20" name="isi" required="true"></textarea>
					<br>
					<button type="submit" class="buttontrans2"><p class="buttondaftar2">Posting</p></button>
			</form>
		</div>
	</div>

</body>
</html>