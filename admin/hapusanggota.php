<?php
include"koneksi.php";

$sql = mysql_query("DELETE FROM login Where id_user='$_GET[id_user]'");

if($sql){
	header('location:anggota.php');
}

else {
	echo "Delete Gagal";
}