<?php 
include 'koneksi.php';
session_start();


$username = $_POST['username'];  
$password = md5($_POST['password']);

$cek = mysqli_query($konek,"SELECT * FROM db_login WHERE username='$username' AND password='$password'");
$cek_log = mysqli_num_rows($cek);
$row = mysqli_fetch_array($cek);


if($cek_log > 0){	
	//redirect
	$_SESSION['id'] = $row['id_login'];
	header("Location:admin/layout.php");
}else{
	//baliki ke login
	header("Location:login.php?pesan=gagal");
}

?>