<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<h1 align="center">Hallo bro and Sist...this is page of <span style="color:red"><?php echo $nama;?></span></h1>
<center><a href="./../logout.php">Logout</a></center>