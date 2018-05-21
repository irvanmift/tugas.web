<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topmenu">
		<table class="tabeltopmenu">
			<tr>
				<td id="logo1" align="left" title="IrvanmiftArt Modern Design | Desainer Dan Developer Modern "><img src="Logo.png" width="30" height="30" scr="Logo.png"/></td>
			</tr>
		</table>
	</div>
	<div class="topjudullogin">
		<table class="labellogin">
			<tr>
				<td width="700px" height="100px">
					<form method="post" action="aksi_login.php">
						<table>
							<tr>
								<td colspan="2"><h2>Login</h2></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>Password</td>
							</tr>
							<tr>
								<td><input type="text" name="username" autofocus="true" required="true"></td>
								<td><input type="Password" name="password" required="true"></td>
							</tr>
							<tr>
								<td colspan="2" align="center" height="50px"><button type="submit" class="buttontrans"><p class="buttonmasuk">Masuk</p></button></td>
							</tr>
						</table>
					</form>
				</td>
				<td rowspan="2" width="300px">
					<form method="post" action="aksi_register.php">
						<table>
							<td colspan="2"><h2>Daftar Akun Baru</h2></td>
							<tr>
								<td>Username</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="username_baru" required="true">
								</td>
							</tr>
							<tr>
								<td>Nama Lengkap</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="nama_baru" required="true">
								</td>
							</tr>
							<tr>
								<td>Password</td>
							</tr>
							<tr>
								<td>
									<input type="Password" name="password_baru" required="true">
								</td>
							</tr>
							<tr>
								<td>Ulangi Password</td>
							</tr>
							<tr>
								<td>
									<input type="Password" name="ulangi_password_baru" required="true">
								</td>
							</tr>
							<tr>
								<td height="50px" align="center"><button type="submit" class="buttontrans"><p class="buttondaftar">Daftar</p></button></td>
							</tr>

						</table>
					</form>
				</td>
			</tr>
			<tr><td></td></tr>
		</table>
	</div>
</body>
</html>