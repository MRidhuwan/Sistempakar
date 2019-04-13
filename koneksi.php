<?php

$host		= "localhost";
$user		= "root";
$password	= "";
$database	= "oop_tic";

$connect	=  mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>