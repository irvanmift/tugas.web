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
	<title>Selamat Datang di IrvanmiftArt</title>

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
					<a href="tambah_artikel.php" class="menu">Tambah Artikel</a>
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
		<p class="labeljudul">Selamat Datang di IrvanmiftArt.Web</p>
	</div>

	<div class="halaman">
		<p class="labelhalaman">Halaman >> Beranda >> Artikel</p>
	</div>

	<div class="container">
		<div class="isi">
			<br>
			<hr><a class="labeljudul">Artikel</a><hr>
			<?php
				include 'koneksi.php';

				$query = "SELECT * FROM artikel";
				$hasil = mysqli_query($koneksi,$query);
			?>
			<?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
				<a href="aksi_klik_judul.php?judul=<?php echo $data['judul']?>" class="klikartikel">
					<div class="divartikel">
						<p class="judulartikel padding">
							<?php echo $data['judul'] ?>
						</p>
						<p class="padding" align="justify">
							<?php echo $data['isi'] ?>
						</p>
					</div>
				</a>
				<hr>
			<?php } ?>
		</div>
	</div>
	<div class="footer">

	</div>

</body>
</html>