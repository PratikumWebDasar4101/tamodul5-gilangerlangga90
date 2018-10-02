<?php
session_start();
if(isset($_SESSION['error'])){
	$error = $_SESSION['error'];
	$_POST = $_SESSION['post'];
	unset($_SESSION['error']);  
	unset($_SESSION['post']);  
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM PENDAFTARAN</title>
</head>
<body>
	
	<h1 align="center"> FORM PENDAFTARAN MAHASISWA </h1>
	<h2 align="center"> Silahkan isi data-data dibawah ini dengan benar!</h2>
	<table align="center">
		<form method="POST" action="prosesregis.php" enctype="multipart/form-data">
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama"> <br> </td>
			</tr>

			<tr>
				<td> </td>
				<td> </td>
				<td> <p style="color: red";><?php echo isset($error['nama']) ? $error['nama'] : '';?> </td>
			</tr>


			<tr>
				<td> NIM </td>
				<td> : </td>
				<td> <input type="text" name="nim"> </td>
			</tr>

			<tr>
				<td> </td>
				<td> </td>
				<td> <p style="color: red";><?php echo isset($error['nim']) ? $error['nim'] : '';?> </td>
			</tr>

			<tr>
				<td> Email </td>
				<td> : </td>
				<td> <input type="text" name="email"> </td>
			</tr>

			<tr>
				<td> </td>
				<td> </td>
				<td> <p style="color: red";><?php echo isset($error['email']) ? $error['email'] : '';?> </td>
			</tr>

			<tr>
				<td> Jenis Kelamin </td>
				<td> : </td>
				<td> 
					<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br>
					<input type="radio" name="jk" value="Perempuan"> Perempuan
				</td>
			</tr>

			<tr>
				<td> Program Studi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
				<td> : </td>
				<td> 
					<select name="prodi" required>
						<option value="D3 Manajemen Informatika"> D3 Manajemenn Informatika </option>
						<option value="S1 Akuntansi"> S1 Akuntansi </option>
						<option value="S1 Desain Interior"> S1 Desain Interior </option>
					</select>
				</td>
			</tr>

			<tr>
				<td> Fakultas </td>
				<td> : </td>
				<td>
					<select name="fakultas" required>
						<option value="Fakultas Ilmu Terapan"> Fakultas Ilmu Terapan </option>
						<option value="Fakultas Ekonomi Bisnis"> Fakultas Ekonomi Bisnis </option>
						<option value="Fakultas Industri Kreatif"> Fakultas Industri Kreatif </option>
					</select>
				</td>
			</tr>

			<tr>
				<td> Hobi </td>
				<td> : </td>
				<td>
					<input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
					<input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda <br>
					<input type="checkbox" name="hobi[]" value="Memancing"> Memancing
				</td>
			</tr>

			<tr>
				<td> Foto </td>
				<td> : </td>
				<td> <input type="file" name="foto"> </td>
			</tr>

			<tr>
				<td> </td>
				<td> </td>
				<td> <input type="submit" name="proses" value="Proses"></td>
			</tr>
		</form>
	</table>

</body>
</html>

