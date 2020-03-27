<?php
include('koneksi.php');

$password = md5($_POST['pass1']);
$nama_lengkap = $_POST['namadepan'];

$selects = mysql_query("SELECT * FROM login where username = '$_POST[username]'");
$datas = mysql_fetch_array($selects);



if($_POST['username'] == $datas['username']){
	echo "<script>alert('User sudah terdaftar, silahkan login dengan username lain.');window.location='daftaruser.php';</script>";
}
else{
	
$action = mysql_query("INSERT INTO LOGIN(nama_lengkap, alamat, telepon, level, username, password) VALUES 
('$nama_lengkap', '$_POST[alamat]', '$_POST[telepon]', '$_POST[level]', '$_POST[username]', '$password')");	

if($action){
	echo "<script>alert('Pendaftaran Berhasil!');window.location='loginuser1.html';</script>";
}	
}

?>