<!DOCTYPE html>
<html>
<head>
	<title>	Form Login </title>
</head>
<body>
	<h1 align="center"> FORM LOGIN </h1>
	<h2 align="center"> Silahkan masukkan username dan password anda dengan benar! </h2>
		<table align="center">
			<form action="proseslogin.php" method="POST">
				<tr>
					<td> Username </td>
					<td> : </td>
					<td> <input type="text" name="username"></td>
				</tr>

				<tr>
					<td> Password </td>
					<td> : </td>
					<td> <input type="password" name="password"></td>
				</tr>

				<tr>
					<td> </td>
					<td> </td>
					<td> <input type="submit" name="masuk" value="Masuk"> </td>
				</tr>
			</form>
		</table>
		<h3 align="center"> <b> *Untuk mahasiswa, Pastikan username = mahasiswa | password = 1234 </b> </h3>
	
</body>
</html>
