<?php

session_start();

if($_POST){
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$email = $_POST["email"];

$error = array();
if (strlen($nama) > 25){
	$error['nama'] = 'Jumlah Maksimal Karakter adalah 10!';
}if (strlen($nim) > 10){
	$error['nim'] = 'Jumlah Maksimal Karakter adalah 25!';
}if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/",$email)){
	$error['email'] = 'Email yang anda masukkan salah!';
}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST; 
}
}
header("Location: registrasi.php");
?>
