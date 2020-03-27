<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_tokobuku";


mysql_connect($hostname, $username, $password);
mysql_select_db($database) or die("Koneksi Error:".mysql_error());

?>