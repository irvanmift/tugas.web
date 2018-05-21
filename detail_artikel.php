<?php
	session_start();
	if (!isset($_SESSION['username'])) {
   	 	//diarahkan ke form login
    	header('location:login.php');
	}
	if(!isset($_SESSION['judul']))
	{
		header('location:index.php');
	}
	$judul = $_SESSION['judul'];
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
		<p class="labeljudul">
			<?php echo $judul; ?>
		</p>
	</div>

	<div class="halaman">
		<p class="labelhalaman">Halaman >> Beranda >> Artikel >> <?php echo $judul; ?></p>
	</div>

	<div class="container">
		<div class="isi">
			<?php
				include 'koneksi.php';

				$query = "SELECT * FROM artikel WHERE judul='".$judul."'";
				$hasil = mysqli_query($koneksi,$query);

				$data = mysqli_fetch_assoc($hasil); 

				$query2 = "SELECT * FROM komentar";
				$hasil2 = mysqli_query($koneksi,$query2);

				$data2 = mysqli_fetch_assoc($hasil2);
			?>
			<p class="ukuran1">
				<?php echo $data['judul'] ?>
			</p>
			<p class="ukuran3 abu">
				Dipublikasikan : <?php echo $data['tanggal']; ?>
			</p>
			<hr>
			<p class="ukuran3 abu" align="justify">
				<?php echo $data['isi'] ?>
			</p>
			<hr>
			<p class="ukuran2" align="center">Komentar</p>
			<hr>
			<?php
				while ($data2 = mysqli_fetch_assoc($hasil2)) {
					?> 
					<div class="divartikel">
						<p class="ukuran3 abu">
							<?php echo $data2['nama']; ?>
							= 
							<?php echo $data2['komentar']; ?>
						</p>
					</div>
					<?php } ?>
			<hr>
			<form method="post" action="aksi_komentar.php?judul=<?php echo $data['judul']?>">
				<input type="text" name="nama" placeholder="Nama" required="true">
				<br><br>
				<textarea name="komentar" placeholder="Komentar..." cols="97px" rows="5px" required="true"></textarea>
				<button type="submit" class="buttontrans2"><p class="buttondaftar2">Kirim</p></button>
			</form>
			
		</div>
	</div>
	<div class="footer">

	</div>

</body>
</html>